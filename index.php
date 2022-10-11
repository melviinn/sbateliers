<?php
	var_dump( $_GET[ 'route' ] ) ;
	$route = $_GET[ 'route' ] ;

	if( $route == '' ){
		require "vues/vue-accueil.php" ;
	}
	elseif( $route == 'clients/enregistrement' ){
		require "vues/vue-enregistrement.php" ;
	}
	elseif( $route == 'clients/enregistrer' ){
		require "controleurs/ctrl-enregistrer.php" ;
	}
	elseif( $route == 'clients/connexion' ){
		require "vues/vue-connexion.php" ;
	}
	elseif( $route == 'clients/connecter' ){
		require "controleurs/ctrl-connecter-client.php" ;
	}
	elseif( $route == 'clients/espace' ){ 
		session_start() ;
		//require "vues/vue-espace-clients.php" ;
		echo $_SESSION[ "numero" ] ;
		echo $_SESSION[ "nom" ] ;
		echo $_SESSION[ "prenom" ] ;
	}
	elseif( $route == 'clients/profil' ){
		require "vues/vue-profil-client.php" ;
	}
	elseif( $route == 'clients/deconnecter' ){
		require "controleur/ctrl-deconnecter-client.php" ;
	}
?>
