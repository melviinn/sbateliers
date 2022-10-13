<?php
	
	require "modeles/ModeleSBAteliers.php" ;
	$ateliers = ModeleSBAteliers::getAteliersProgrammes() ;
	
	require "vues/vue-ateliers-programmes.php" ;
?>
