
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
	.map {
		text-align: center;
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
  <br>
  <hr>
  <br>
  <div class="row justify-content-sm-center">

	<div class="col-sm-auto">

  		<iframe src="https://www.meteoblue.com/en/weather/widget/three/paris_france_2988507?geoloc=fixed&nocurrent=0&noforecast=0&days=7&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image"  frameborder="0" scrolling="NO" allowtransparency="true" sandbox="allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox" style="width: 805px;height: 624px"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href="https://www.meteoblue.com/en/weather/forecast/week/paris_france_2988507?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget" target="_blank"></a></div>
  	</div>


  </div>
</div>
</div>
<!------Jumbotron------>

	<!--- Welcome Section -->
	<div class="container-fluid padding">
		<div class="row welcome text-center">
			<div class="col-12">
				<h1 class="display-4"></h1>
			</div>
			<hr>

		</div>
	</div>

	<!--start of caro -->





	<!-- <div id="slides" class="carousel slide col-12" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
			<li data-target="#slides" data-slide-to="1"></li>
			<li data-target="#slides" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner" data-interval="10000">
			<div class="carousel-item active">
				<img src="img/w10.jpg">
			</div>
			<div class="carousel-item" data-interval="2000">
				<img src="img/w12.jpg">
			</div>
			<div class="carousel-item">
				<img src="img/w13.jpg">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	 <span class="sr-only">Previous</span>
 </a>
 <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	 <span class="carousel-control-next-icon" aria-hidden="true"></span>
	 <span class="sr-only">Next</span>
 </a>
	</div> -->
	<!--end of caro -->

	<!--- Three Column Section -->

	<div class="container-fluid padding">
		<div class="row text-center padding">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/pr1.png">
				<h3>Plus que jamais</h3>
				<p>"Plus que jamais, vous avez besoin de bonne fortune en hiver. Que vous ayez une journée ensoleillée, une vue dégagée, une bataille de neige amusante, que vous ayez une bonne soupe quand vous avez froid ou que vous soyez là quand il neige, c’est si facile de se sentir chanceux en hiver."</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/rp2.png">
				<h3>Chance</h3>
				<p>"Que vous conduisiez sur des autoroutes ou non, conduire une motoneige sur des champs de neige est réalisable et facile à apprendre. Vous sentirez le vent de l’aventure lorsque vous regarderez devant vous et que vous attraperez dans votre rétroviseur une image en mouvement de la neige que vous n’oublierez pas de si tôt."</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4">
				<img src="img/rp3.jpg">
				<h3>L'occasion de câliner</h3>
				<p>"Il n'y a pas de meilleure saison pour s'embrasser. Même si vous voyagez seul, la chaleur du chocolat, du café et d'une couverture crée une concurrence féroce pour l'été."</p>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--- Two Column Section -->
	<div class="container-fluid padding">
		<div class="row padding">
			<div class="col-md-12 col-lg-6">
				<h2>La neige arrive par l'Est</h2>
				<p>Les plaisirs de la neige enfin retrouvés. 20 cm de neige sont tombés en une nuit à Morbier (Jura). Dans la station de ski, c'est le soulagement. Ces deux enfants participent à leur premier cours de ski. Pour ces fondeurs, pas de répit. C'est la reprise de l'entraînement : 15 km de course sur une neige idéale.</p>
				<p>Les mêmes espoirs sont en tête à la station de Saint-Pierre-de-Chartreuse (Isère), dans les Alpes. Sur les 28 pistes, seulement sept sont ouvertes. Alors, Robert et Gérald profitent de ce cadeau tombé du ciel. Une aubaine pour la station, qui avait dû compenser ce manque de flocons par des tarifs adaptés. La station d'Orbey (Haut-Rhin), dans les Vosges, a elle aussi ouvert tardivement. Malgré les 60 cm de poudreuse à certains endroits, il faut encore l'aide des canons à neige pour faire tenir les pistes. Avec des chutes de neige prévues jusqu'à la fin de la semaine, la station a prévu d'ouvrir rapidement toutes ses pistes.</p>
				<br>
				<a href="#" class="btn btn-primary">En Savoir +</a>
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
