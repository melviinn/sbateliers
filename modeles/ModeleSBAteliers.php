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
			$st->closeCursor() ;
			return $client ;
		}
		
		public static function getAteliersProgrammes(){
			$bd = self::getConnexion() ;
			$sql = "select a.numero , theme , date_heure , duree , nom , prenom "
				 . "from atelier a "
				 . "inner join responsable r "
				 . "on a.responsable = r.numero "
				 . "where date_heure > now() " ;
			$st = $bd->prepare( $sql ) ;
			$st->execute() ;
			$ateliers = $st->fetchall( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $ateliers ;
		}
		
		public static function getprofil( $numero ){
			$bd = self::getConnexion() ;
			$sql = "select civilite,date_naissance,email,mobile,adresse,cp,ville from client where numero = :numero" ;
			$st = $bd->prepare( $sql ) ;
			$st->execute( array( ':numero' => $numero ) ) ;
			$client = $st->fetch( PDO::FETCH_ASSOC ) ;
			$st->closeCursor() ;
			return $client ;
		}
		
		public static function enregistrerClient(
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
			) {
				
			$bd = self::getConnexion() ;	
			
			$sql = 'insert into client(civilite,nom,prenom,date_naissance,email,mobile,adresse,cp,ville,mdp) '
				 . 'values( :civilite , :nom , :prenom , :naissance  , :email , :mobile , :adresse , :cp , :ville , :mdp )' ;
			
			$st = $bd -> prepare( $sql ) ;
			
			$st -> execute( array(
					':civilite' => $civilite ,
					':nom' => $nom ,
					':prenom' => $prenom ,
					':naissance' => $naissance ,
					':email' => $email ,
					':mobile' => $mobile ,
					':adresse' => $adresse ,
					':cp' => $cp ,
					':ville' => $ville ,
					':mdp' => $mdp
				)
			) ;
			
			$st -> closeCursor() ;
			
		}
		
	}
	
	//ModeleSBAteliers::getClient( "valentine.onestas@gmail.com" , "azerty" ) ;
	
	//var_dump( ModeleSBAteliers::getAteliersProgrammes() ) ;
	


?>
