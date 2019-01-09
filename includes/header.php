<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actu-Météo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="styles/style.css" rel="stylesheet" type="text/css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="http://localhost/todo"><i class="far fa-list-alt"></i> Listar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#illustration">Todolist <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">contact</a>
      </li>
      <li>
          <a id="connect" href="#connect">&nbsp;<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#connexion" data-whatever="@getbootstrap">Connexion<!-- Open modal for @getbootstrap --></button>&nbsp;</a>

          
          <a id="inscript" href="#Inscript"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inscription" data-whatever="@getbootstrap">Inscription<!-- Open modal for @getbootstrap --></button></a>
      </li>
      <li>
          
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>


	<!-- Navigation -->
	<header>
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="img/logo3.png" class="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="#">Services</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="login.php">Connect</a>
						</li>

					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>
	</header>

	<!-- modal de connexion -->

<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="container">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-color: #5F382C">
        <h5 class="modal-title" id="exampleModalLabel"><strong></strong>Connectez-vous à votre compte Listar</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <div class="modal-body"><br>
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
        <!-- <form>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">             
                </div>
            </div>

            <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div><br>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary"><a id="connected" href="todolist">Connexion</a></button>
                </div>
            </div></a>
        </form> -->
    </div>
        <div class="container">
            <div class="row ml-auto">
                <div class="col-1"></div>
                <div class="col-10 modal-footer ">
                <p>Vous n'avez pas de compte ? <a href="#inscript">S’inscrire &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
                <div class="col-1"></div>
            </div>
        </div>
              
          </div>
      </div>
      
    </div>
  </div>
</div>
<!-- fin de modal de connexion -->

<!-- début de modal d'inscription -->
<div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-color: #5F382C">
        <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous et ouvrez un compte Listar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- Formulaire d'inscription -->


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
     



     
        <!-- <form>
        	<div class="form-row">
        		<div class="form-group col-md-6">
        			<label for="inputEmail4">Adresse Mail</label>
        			<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        		</div>
        		<div class="form-group col-md-6">
        			<label for="inputPassword4">Mot de passe</label>
        			<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        		</div>
        	</div>
        	<div class="form-group">
        		<label for="inputAddress">Addresse</label>
        		<input type="text" class="form-control" id="inputAddress" placeholder="7 rue de la marne">
        	</div>
        	<div class="form-group">
        		<label for="inputAddress2">Addresse 2</label>
        		<input type="text" class="form-control" id="inputAddress2" placeholder="Apartement, studio...">
        	</div>
        	<div class="form-row">
        		<div class="form-group col-md-6">
        			<label for="inputCity">Ville</label>
        			<input type="text" class="form-control" id="inputCity">
        		</div>
        		<div class="form-group col-md-4">
        			<label for="inputState">Pays</label>
        			<select id="inputState" class="form-control">
        				<option selected>France</option>
        				<option>Belgique</option>
        				<option>Suisse</option>
        				<option>Espagne</option>
        				<option>Portugal</option>
        				<option>Angleterre</option>
        				<option>...</option>
        			</select>
        		</div>
        <div class="form-group col-md-2">
        			<label for="inputZip">zip</label>
        			<input type="text" class="form-control" id="inputZip">
        </div>
	</div>
	<button type="submit" class="btn btn-primary">Inscription</button>
</form> -->

      </div>

<!-- Fin du Formulaire d'inscription -->

      <!-- <div class="col modal-footer text-center">
        <p></p><br>
        <p>Vous avez déjà un compte ? <a href="">Se connecter</a></p>
      </div> -->
        <div class="container">
            <div class="row ml-auto">
                <div class="col-md-1"></div>
                <div class="col-md10 modal-footer">
                <p>Vous avez déjà un compte ? <a href="#connexion">Connexion &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
                </div>
                <div class="col-md-1"></div>
            </div>
              
        </div>
    </div>
  </div>
</div>
<!-- fin de modal d'inscription -->