
    <?php

    require "header.php"

     ?>
     <br>
     <div class="wrapper">
      <section class="section-defautl">
        <h1>Signup</h1>

      <form  action="includes/signup.inc.php" method="post">
       <input type="text" name="first" placeholder="Firstname">
       <br>
       <input type="text" name="last" placeholder="Lastname">
       <br>
       <input type="text" name="mail" placeholder="E-mail">
       <br>
       <input type="text" name="uid" placeholder="Username">
       <br>
       <input type="password" name="pwd" placeholder="Password">
       <br>
       <input type="password" name="pwd-repeat" placeholder="Repeat Password">
       <br>
       <button type="submit" name="signup-submit">Signup</button>

      </form>
      </section>


     </div>



     <?php

     require "footer.php";
      ?>
