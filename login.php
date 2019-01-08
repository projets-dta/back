
    <?php
session_start();
    require "header.php"

     ?>
     <br>
     <div class="wrapper">
       <?php
       
       if (isset($_SESSION['userId'])) {
       	echo '<form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
           </form>';
       }
       else {
       	echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail">
        <input type="password" name="pwd" placeholder="password">
        <button type="submit" name="log-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
       }

        ?>

     <br>
     </div>



     <?php

     require "footer.php";
      ?>
