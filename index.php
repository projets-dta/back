
<?php

require "header.php";
// session_start();
// if (isset($_SESSION['userId'])) {
// 	echo "<p>
// 	You are logged in!
// 	</p>";
// }
// else {
// 	echo "<p>
// 	You are logged out!
// 	</p>";
// }

?>
<style>
	
	#meteo{
		background-color: blue;
	}
</style>

<div id="meteo">
<div class="container">
  <div class="row">
    <div class="col-sm-5">
    	<!-- carte meteo -->
    	<div id="carte_9a4b1b57b2fb16fb348323f42073bf48">
    		<a href="http://www.mymeteo.info/r/france_An" title="climat France">climat France</a>
    		<script type="text/javascript">
    			(function() {
    				var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
    				my.src = "https://services.my-meteo.com/cartes/js?pays=france&periode=24&x=450&y=430&d=0&id=9a4b1b57b2fb16fb348323f42073bf48";
    				var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
    			})();
    		</script>
    	</div>
    	<!-- carte meteo -->

    </div>

	<div class="col-sm-5">
		<!-- carte meteo -->
		<div id="carte_51912a86e8326ece13e6cbd084dfad89">
			<a href="http://www.mymeteo.info/r/france_An" title="www.my-meteo.com France"><img src="https://services.my-meteo.com/assets_webmaster/cartes/c.gif" alt="www.my-meteo.com France" height="1" width="1" /></a>
			<script type="text/javascript">
				(function() {
					var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
					my.src = "https://services.my-meteo.com/cartes/js?pays=france&periode=48&x=450&y=430&d=0&id=51912a86e8326ece13e6cbd084dfad89";
					var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
				})();
			</script>
		</div>
		<!-- carte meteo -->
    </div>

    <div class="col-sm-2">
    	<!-- widget meteo -->
    	<div id="widget_47817a0286fee49e010708cdefd0ac98">
    		<span id="l_47817a0286fee49e010708cdefd0ac98"><a href="http://www.mymeteo.info/r/saint-etienne_y">France Saint-&Eacute;tienne climat</a></span>
    		<script type="text/javascript">
    			(function() {
    				var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
    				my.src = "https://services.my-meteo.com/widget/js_design?ville=602&format=vertical&nb_jours=3&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=160&y=442&d=0&id=47817a0286fee49e010708cdefd0ac98";
    				var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
    			})();
    		</script>
    	</div>
    	<!-- widget meteo -->
    </div>
    
  </div>
</div>
</div>
	<!--- Image Slider -->
	<!-- <div id="slides" class="carousel slide col-12" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/w2.jpg">
				<div class="carousel-caption">
					<h1 class="display-2">Actu-Météo</h1>
					<h3>This needs to be replaced</h3>
					<button type="button" class="btn btn-outline-light btn-lg"><a href="login.php">Login</a></button>
					<button type="button" class="btn btn-primary btn-lg" ><a href="signup.php">Signup</a></button>
				</div>
			</div>
			<div class="carousel-item">
				<img src="img/w8.jpg">
			</div>
			<div class="carousel-item">
				<img src="img/w13.jpg">
			</div>
		</div>
	</div> -->


<!------Jumbotron------>

	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4">Built with Ease</h1>
			</div>
			<hr>
			<div class="col-12">
				<p class="lead">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
	</div>

	<!--- Three Column Section -->

	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-code"></i>
				<h3>html5</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the
					master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fas fa-bold"></i>
				<h3>html5</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the
					master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fab fa-css3"></i>
				<h3>html5</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the
					master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure,</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>if you build it...</h2>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				<br>
				<a href="#" class="btn btn-primary">Learn More</a>
			</div>
			<div class="col-lg-6">
				<img src="img/w13.jpg" class="img-fluid">
			</div>
		</div>
	</div>

	<hr class="my-4">
	<!--- Fixed background -->

	<figure>
		<div class="fixed-wrap">
			<div id="fixed">

			</div>

		</div>
	</figure>
	<hr class="my-4">
	<!--- Connect -->

	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-12">
				<h2>Connect</h2>
			</div>
			<div class="col-12 social padding">
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>
			</div>
		</div>

	</div>

	<?php

	require "footer.php";

	 ?>
