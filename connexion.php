<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
        <title>Connexion</title>
	<link rel="stylesheet" href="accueil.css" />
</head>

<body>

<h1>Connectez vous à votre MusicBox</h1>

<form method="post" action="connexion.php">
	
	<fieldset class="Connexion">
		<legend><b><h2>Inscription</h2></b></legend>
		<br/>
		
	
		<label for="pseudo"><b>Identifiants:</b></label>
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" size="30" maxlength="20" required/>
		<input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" size="30" maxlength="20" required/>
		<input type="password" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Confirmation du mot de passe" size="30" required/><br/><br/>
	

		<input type="submit" value="Envoyer" /><br/>
	</fieldset>
	
	
</form>
</body>
</html>