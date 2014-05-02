<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <title>Rejoignez la communauté MusicBox</title>
        <link rel="stylesheet" href="accueil.css" />
    </head>
</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_POST['submit'])) {
    $firstname = htmlentities(trim($_POST['prenom']));
    $lastname = htmlentities(trim($_POST['nom']));
    $mail = htmlentities(trim($_POST['mail'])); //Champs suivants a modifier dans la page html//
    $date = htmlentities(trim($_POST['date']));
    $street = htmlentities(trim($_POST['rue']));
    $zipcode = htmlentities(trim($_POST['cp']));
    $pseudo = htmlentities(trim($_POST['pseudo']));
    $password = htmlentities(trim($_POST['motdepasse']));
    $repeatpassword = htmlentities(trim($_POST['confirmationmotdepasse']));
    $description = htmlentities(trim($_POST['autres']));



// vérifier que les champs ont bien été remplie :

    if (isset($firstname) && isset($lastname) && isset($mail) && isset($date) && isset($street) && isset($zipcode) && isset($pseudo) && isset($password) && isset($repeatpassword)) {
        if ($password == $repeatpassword) {
            $password = sha1($password); // sécuriser le mot de passe
            $connect = mysql_connect('localhost', 'root', '')or die('Error');
            mysql_select_db('appg4d');

//éviter que deux personne est le meme pseudo

            $reg = mysql_query("SELECT * FROM user WHERE pseudo='$pseudo'");
            $rows = mysql_num_rows($reg);

            if ($rows == 0) {


                $query = mysql_query("INSERT INTO user VALUES('', '$firstname', '$lastname', '$pseudo', '$password', '$date', '$mail', '$zipcode', '$street', '$description')");

                die("Inscription términée <a href = 'connexion.php'> connectez</a> vous");
            } else
                echo "Ce pseudo n'est pas diponnible";
        } else
            echo"Les deux mots de passes sont différends";
    } else
        echo"Veuillez remplir tous les champs";
}
?>
<header>
<div id = "Inscription">
<img src = "" alt = "Logo Musicbox" id = "logo"/>
</div>
</header>

<h1>Rejoignez la communauté MusicBox</h1>

<form method="post" action="inscription.php">
	
	<fieldset class="Inscription">
		<legend><b><h2>Inscription</h2></b></legend>
		<br/>
		<label class="champ" for="Identifiants"><b>Identifiants :</b></label>
		<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" size="30" maxlength="20" required/>
		<input type="password" name="motdepasse" id="motdepasse" placeholder="Mot de passe" size="30" maxlength="20" required/>
		<input type="password" name="confirmationmotdepasse" id="confirmationmotdepasse" placeholder="Confirmation du mot de passe" size="30" required/><br/><br/>
	
                <label for="mail"><b>Adresse mail :</b></label>
                <input type="email" name="mail" id="mail" placeholder="exemple@exemple.com" size="40" maxlength="40" required/><br/><br/>
                
                <input type="checkbox" name="conditions" value="j'accepte " id="conditions" required/> 
		<label for="conditions">J'accepte les conditions d'utilisation du site</label><br /><br />
		
		<input type="submit" value="Envoyer" /><br/>
	</fieldset>
	
</body>	
</form>;



