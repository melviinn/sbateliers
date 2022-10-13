<?php

	$civilite = $_POST[ "civilite" ] ;
	$nom = $_POST[ "nom" ] ;
	$prenom = $_POST[ "prenom" ] ;
	$naissance = $_POST[ "naissance" ] ;
	$email = $_POST[ "email" ] ;
	$mobile = $_POST[ "mobile" ] ;
	$adresse = $_POST[ "adresse" ] ;
	$cp = $_POST[ "cp" ] ;
	$ville = $_POST[ "ville" ] ;
	$mdp = $_POST[ "mdp" ] ;
	
	require "modeles/ModeleSBAteliers.php" ;
	ModeleSBAteliers::enregistrerClient( 
			$civilite ,
			$nom ,
			$prenom ,
			$naissance ,
			$email ,
			$mobile ,
			$adresse ,
			$cp ,
			$ville ,
			$mdp
		) ;
	
	header( "Location: /sbateliers" ) ;

?>
