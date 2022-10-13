<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>SB - Ateliers</title>
	</head>
	<body>
		
		<a href="/sbateliers">Accueil</a>
		<br/>
		<form action="/sbateliers/clients/enregistrer" method="POST">
			Civilité :<br/>
			<input type="radio" name="civilite" value="Mlle" checked />Mlle
			<input type="radio" name="civilite" value="Mme"/>Mme
			<input type="radio" name="civilite" value="M."/>M.
			<br/>
			Nom :<br/>
			<input type="text" name="nom" /><br/>
			Prenom :<br/>
			<input type="text" name="prenom" /><br/>
			Date de naissance :<br/>
			<input type="date" name="naissance" /><br/>
			Adresse électronique :<br/>
			<input type="email" name="email" /><br/>
			Téléphone :<br/>
			<input type="text" name="mobile" /><br/>
			Adresse :<br/>
			<input type="text" name="adresse" /><br/>
			Code postal :<br/>
			<input type="text" name="cp" maxlength="5" size="5" /><br/>
			Ville :<br/>
			<input type="text" name="ville" /><br/>
			Mot de passe :<br/>
			<input type="passwd" name="mdp" /><br/>
			<br/>
			<input type="submit" value="Valider" />
			<input type="reset" value="Annuler" />
		</form>
		
	</body>
	
</html>
