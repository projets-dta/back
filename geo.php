<!DOCTYPE html>
<html>
<head>
  <title></title>

  <!-- entre la balise <head> et </head> --> 
<link type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet" /> 

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


</head>
<body>

		<form action="autocomplete.php" method="post"> 
			<span>VOTRE COMMUNE :</span>
			<p id="box"><input type="text" id="ville_nom" name="ville_nom" /></p> 
			<p><input type="submit" /></p> 
		</form>

		<!-- en bas de la page HTML, juste avant </body> --> 
		<script type="application/javascript" src="jquery-ui/js/jquery-1.9.1.js"></script> 
		<script type="application/javascript" src="jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>

		<script type="application/javascript"> 
			$(function(){  
				$("#ville_nom").on('input', function() { 
					$("#ville_nom").autocomplete({source: 'autocomplete.php?req='+$("#ville_nom").val()}); 
				}); 
			});   
		</script>



<div class="jumbotron jumbotron-fluid">
  <div class="container">

  	<div class="row">
  		<link type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet" /> 
		<form action="autocomplete.php" method="post"> 
			<p>VOTRE COMMUNE :</p>
			<p id="box"><input type="text" id="ville_nom" name="ville_nom" /></p> 
			<p><input type="submit" /></p> 
		</form>

		<!-- en bas de la page HTML, juste avant </body> --> 
		<script type="application/javascript" src="jquery-ui/js/jquery-1.9.1.js"></script> 
		<script type="application/javascript" src="jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>

		<script type="application/javascript"> 
			$(function(){  
				$("#ville_nom").on('input', function() { 
					$("#ville_nom").autocomplete({source: 'autocomplete.php?req='+$("#ville_nom").val()}); 
				}); 
			});   
		</script>
	</div>
  </div>
</div>


</body>
</html>