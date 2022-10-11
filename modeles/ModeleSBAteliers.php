<?php

	class ModeleSBAteliers {

		private static $connexion = null ;
		
		private function __construct(){
			self::$connexion = new PDO( 'mysql:host=localhost;dbname=sb', 'slam', 'azerty' ) ;
		}

		private static function getConnexion(){
			if( self::$connexion == null ){
				new ModeleSBateliers() ;
			}
			return self::$connexion ;
		}


		public static function getClient( $email , $mdp ){
			$bd = self::getConnexion() ;
			$sql = "select numero , nom , prenom from client where email = :email and mdp = :mdp" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':email' => $email , ':mdp' => $mdp ) ) ;
			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			return $client ;
		}
		
	}
	
	//ModeleSBAteliers::getClient( "valentine.onestas@gmail.com" , "azerty" ) ;
	


?>
