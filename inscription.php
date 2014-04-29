<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
        <title>Inscription</title>
	<link rel="stylesheet" href="accueil.css" />
</head>

<body>

<h1>Rejoignez la communauté MusicBox</h1>

<form method="post" action="inscription.php">
	
	<fieldset class="Inscription">
		<legend><b><h2>Inscription</h2></b></legend>
		<br/>
		<label class="champ" for="Identité"><b>Identité:</b></label>
		<input type="text" name="prénom" id="prénom" placeholder="Prénom" size="30" required/>
		<input type="text" name="nom" id="nom" placeholder="Nom" size="30" required/>
		<input type="email" name="mail" id="mail" placeholder="Adresse mail" size="30" maxlength="30" required/><br/><br/>
		
                <label for="Date de naissance"><b>Date de naissance:</b></label>
                <input type="date" name="date"><br/><br/>
	
		<label for="Adresse"><b>Adresse:</b></label>
		<input type="text" name="rue" id="rue" placeholder="Rue" size="30"/>
		<input type="text" name="cp" id="cp" placeholder="CP" size="30"/>
		<input type="text" name="ville" id="ville" placeholder="Ville" size="30"/><br/><br/>
	
		<label for="pseudo"><b>Identifiants:</b></label>
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" size="30" maxlength="20" required/>
		<input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" size="30" maxlength="20" required/>
		<input type="password" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Confirmation du mot de passe" size="30" required/><br/><br/>
	
		<label for="autres"><b>Autres</b></label>
		<input type="text" name="autres" id="autres" placeholder="Informations, renseignements supplémentaires, autres.." size="90"/><br/><br/>
		
		<input type="radio" name="conditions" value="J'accepte les conditions d'utilisation du site" id="conditions" required/> 
		<label for="conditions">J'accepte les conditions d'utilisation du site</label><br /><br />
		
		<input type="submit" value="Envoyer" /><br/>
	</fieldset>
	
</body>	
</form>

</html>




