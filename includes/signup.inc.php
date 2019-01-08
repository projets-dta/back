<?php
/* to confirm that the user clicked the signup page*/
if (isset($_POST['signup-submit'])) {



require "dbh.inc.php";

$firstname=$_POST['first'];
$lastname=$_POST['last'];
$email=$_POST['mail'];
$username=$_POST['uid'];
$password=$_POST['pwd'];
$passwordRepeat=$_POST['pwd-repeat'];


/* error handlers*/

/* If form is empty*/
if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
exit(); /* stop script from running*/
  }

   /* incase user didnt write email or properpassword*/
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
    header("Location: ../signup.php?error=invalidmailuid");
    exit();
  }

  /* email verification*/
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: ../signup.php?error=invalidmail&uid=".$username);
  exit();
}

/* Allowed characters*/
elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
  header("Location: ../signup.php?error=invaliduid&mail=".$email);
  exit();
}
/* confirm that the passwords match*/
elseif ($password !== $passwordRepeat) {
  header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
  exit();
}

/*is username is already taken and ? placeholder*/

/*for security we  will use user prepared statements*/

else {
  $sql = "SELECT user_uid FROM users WHERE user_uid =?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header("Location: ../signup.php?error=sqlerror");
    exit();
  }

    /*indicate what type of data that we are parsing "s"=string, i=integer, b=blob-boolean, d=double*/

    else {
      mysqli_stmt_bind_param($stmt, "s",$username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if ($resultCheck > 0) {
        header("Location: ../signup.php?error=usertaken&mail=".$email);
        exit();
      }

        /*placeholders for security reasons*/
      else {
        $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES (?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
          header("Location: ../signup.php?error=sqlerror2");
          exit();


      }
      /* for security reasons we are going to hash the password in bcrypt*/
      else {

        $hashedPwd= password_hash($password,PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,"sssss",$firstname,$lastname,$email,$username,$hashedPwd);
        mysqli_stmt_execute($stmt);
        header("Location: ../signup.php?signup=success");
        exit();
      }
    }
  }
}
  /*close connection to save resources*/
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

  /* sends the used back if the dont signup*/
  else {
    header("Location: ../signup.php?error=sqlerror");
    exit();
  }
 ?>
