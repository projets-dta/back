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
	<link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>
	<!-- Navigation -->
	<header>


<?php
session_start();

     ?>
     <br>
     <div class="wrapper">
       <?php

       if (isset($_SESSION['userId'])) {
       	echo '<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="http://localhost/back"><i class="far fa-list-alt"></i> Meteor</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#accueil">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#meteo">Meteo <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">contact</a>
					</li>

					<li>
						<form action="includes/logout.inc.php" method="post">
							<a id="connect" href="index.php">&nbsp;<button class="btn btn-primary" type="submit" name="logout-submit">Déconnexion</button>&nbsp;</a>
						</form>

					</li>
					<li>
						<p>&nbsp;&nbsp;&nbsp;&nbsp;</p>
					</li>
					<li>

						<a href="http://localhost/todo/profile"><i class="fas fa-user-circle fa-2x"></i>&nbsp;&nbsp;&nbsp;</a>

					</li>
					<li>

					</li>
				</ul>
			</div>
		</nav>';
       }




       else {
       	echo '<!-- --------------------------------------------------------------------- Navbar de connexion ------------------------------------------------------------------------------ -->

		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<a class="navbar-brand" href="http://localhost/back"><i class="far fa-list-alt"></i> Actu-Météo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#accueil">Accueil <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#meteo">Meteo <span class="sr-only">(current)</span></a>
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
			</div>
		</nav>

<!-- modal de connexion -->

		<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="container">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header text-white" style="background-color: #563d7c">
							<h5 class="modal-title" id="exampleModalLabel"><strong></strong>Connectez-vous à votre compte Meteor</strong></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

						<div class="modal-body"><br>
							<form action="includes/login.inc.php" method="post">
								<input type="text" name="mailuid" placeholder="Username/E-mail">
								<input type="password" name="pwd" placeholder="password">
								<button type="submit" name="log-submit">Login</button>
							</form>
							<a href="signup.php">Se connecter</a>

						</div>
						<div class="container">
							<div class="row ml-auto">
								<div class="col-1"></div>
								<div class="col-10 modal-footer ">
									<p>Vous n\'avez pas de compte ? <a href="#inscript">S’inscrire &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></p>
									<div class="col-1"></div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>


<!-- modal d\'inscription -->

<div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header text-white" style="background-color: #563d7c">
				<h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous et ouvrez un compte Meteor</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<!-- Formulaire d\'inscription -->


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
					<a href="index.php"><button type="submit" name="signup-submit">Signup</button></a>

				</form>


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
</div>';
       }

        ?>

     <br>
     </div>



     <?php


      ?>

<a href="index.php"></a>



<br><br><br>
		<!-- <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
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
		</nav> -->




	</header>
