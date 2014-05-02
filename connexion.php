<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
        <title>Connexion</title>
	<link rel="stylesheet" href="accueil.css" />
</head>

<header>
<div id = "Inscription">
<img src = "" alt = "Logo Musicbox" id = "logo"/>
</div>
</header>

<body>
<h1>Connectez vous à votre MusicBox</h1>

	<fieldset class="Connexion">
		<legend><b><h2>Inscription</h2></b></legend><br/>
		
		<label for="pseudo"><b>Identifiants:</b></label>
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" size="30" maxlength="20" required/>
		<input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" size="30" maxlength="20" required/>

		<input type="submit" name="submit" value="Envoyer" /><br/>
	</fieldset>
	
</body>
</html>
