<?php 
  try { 
        $bdd = new PDO('mysql:host=localhost;dbname=dbmeteo', 'root', 'password'); 
  } 
   catch (Exception $e) { 
        die('Erreur : '.$e->getMessage()); 
  } 
 
    $reponse = $bdd->prepare('SELECT * FROM villes_france_free WHERE ville_nom LIKE :req'); 
    $reponse->execute(array('req' => '%'.isset($_GET['req']).'%')); 
    $liste = array(); 
 
    while($donnees = $reponse->fetch()) { 
        $a = count($liste); 
    // formatage de l'affichage des données de la liste 
        $liste[$a] = $donnees['ville_nom']; 
    } 
 
    echo json_encode($liste);     
?>