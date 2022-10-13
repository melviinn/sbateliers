<?php

	$numero = $_SESSION[ "numero" ] ;
	$nom = $_SESSION[ "nom" ] ;
	$prenom = $_SESSION[ "prenom" ] ;
	
	require "modeles/ModeleSBAteliers.php" ;
	$client = ModeleSBAteliers::getProfil( $numero ) ;
	
	require "vues/vue-profil-client.php" ;
?>
