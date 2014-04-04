
<html> 
 <head>
        <meta charset="utf-8" />
        <title>MusicBox</title>
		<link rel="stylesheet" href="accueil.css" />
    </head>
    
		<body>
		
		<div class="headerfixe">
		
		<header>

<img src="./header.png"/>

		<search>

<form id="form2" name="form2" method="post" action="">
  <label for="search"></label>
  <input name="search" type="text" id="search" value="Rechercher"/>
</form>

<script type="text/javascript">
    window.onload = function(){
	var search = document.getElementById('search');
	//quand le curseur est dans le champs
	search.onfocus = function(){
		//si la valeur du champ vaut Recherche
		if(this.value == 'Rechercher'){
			this.value = '';
		}
	}
        
	//quand le curseur n'est plus dans le champs
        search.onblur = function(){
            //si la valeur du champ vaut rien
            if(this.value == ''){
                    this.value = 'Rechercher';
            }
        }
}
</script>

</search>

<div class="bouton1"><a href="inscription.html"> S'inscrire </a></div>
<div class="bouton2"><a href="page2.html"> S'identifier </a></div>


		</header>
                </html>

