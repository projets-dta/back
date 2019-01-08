<?php

/*confirm that the user clicked the login button*/

//if (isset($_POST['login-submit'])) {
require 'dbh.inc.php';
//}

/*to give them option of using email or username:*/

$mailuid = $_POST['mailuid'];
$password = $_POST['pwd'];

if(empty($mailuid) || empty($password)) {
  header('Location: ../index.php?error=emptyfields');
  exit();
}
else {
  /* allows user to connect with email or username and compare the information provided by the use matches what's ont he server*/
  $sql = "SELECT * FROM users WHERE user_uid=? OR user_email=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt,$sql)) {
    header('Location: ../index.php?error=sqlerror');
    exit();
  }

  else {
     mysqli_stmt_bind_param($stmt,"ss", $mailuid, $mailuid);
     mysqli_stmt_execute($stmt);
     $result = mysqli_stmt_get_result($stmt);
     if ($row = mysqli_fetch_assoc($result)) {
      $pwdCheck = password_verify($password, $row['user_pwd']);
       /*If else to confirm correct password*/
    if($pwdCheck == false) {
      header('Location: ../index.php?error=wrongpwd');
      exit();
     }
     /*log user into website*/
      else if ($pwdCheck == true) {
    session_start();
    $_SESSION['userId'] = $row['user_id'];
    $_SESSION['userUid'] = $row['user_uid'];
    header('Location: ../index.php?login=success');
    exit();

      }

else {
  header('Location: ../index.php?error=wrongpwd');
  exit();
}
  }

 else{
   header('Location: ../index.php?error=nouser');
   exit();
 }
}
}
 ?>
