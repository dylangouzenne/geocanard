<!DOCTYPE html>
<html>
<head>
	<title>accueil blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h1>Bienvenu sur le blog de la promo Simplon Auch2</h1>

	<div>
		<?php
		
		//Connection avec la BDD.
		$bdd = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'dylan','Fmdph320', $pdo_options);

		// selectionner toutes les valeurs de la table Articles 

		$reponse = $bdd->query("SELECT * FROM articles");

		// afficher les articles sur la page visiteur
		while($donnees = $reponse -> fetch())

		echo

		"<div class='articles'><p>Titre : ".$donnees['titre']." Date d'ajout : ".$donnees['date'].'</p><p>'.$donnees['contenu']."</p>
		<form method='post' action='accueil.php'>
    	<input type='submit' name='id' value=".$donnees['id'].">id de l'article</input>
    	<input type='submit' name='suprimer' value='suprimer'></input></div>
    	</form>";

    	//On supprime les messages
    	if (isset($_POST['suprimer'])) {
			
			//$reponse = $bdd->query('DELETE FROM articles WHERE id='$_POST['id']';');
			$bdd->query('DELETE FROM articles WHERE id='.$_POST['id']);
		};

		?>
	</div>

	<!-- bouton redirection vers la page admin -->
	<form method="POST" action="admin.php">
	<input type="submit" name="Ajouter un Article" value="Ajouter un Article" >
	</form>


</body>
</html>