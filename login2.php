
    <?php
session_start();
    require "header.php"

     ?>
     <br>
     <div class="wrapper">
       <?php
       if (isset($_SESSION['userId'])) {
       	echo "<p>
       	You are logged in!
       	</p>";
       }
       else {
       	echo "<p>
       	You are logged out!
       	</p>";
       }

        ?>
     <form action="includes/login.inc.php" method="post">
     <input type="text" name="mailuid" placeholder="Username/E-mail....">
     <br>
     <input type="password" name="pwd" placeholder="password....">
     <br>
     <button type="submit" name="log-submit">Login</button>
     <button type="submit" name="logout-submit">Logout</button>
     <br>
     </form>
     <a href="signup.php">Signup</a>
     <br>
     <form action="includes/logout.inc.php" method="post">
       <br>

     </form>
     </div>



     <?php

     require "footer.php";
      ?>
