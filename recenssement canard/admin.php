<!DOCTYPE html>
<html>
<head>
	<title>accueil blog</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<h1>Recenssement des canard sauvage</h1>

	<div id='formulaire'>
		<?php
		
		//Connection avec la BDD.
		$bdd = new PDO('mysql:host=localhost;dbname=geocanard;charset=utf8', 'simplon', 'Simplon-123', $pdo_options);

		// selectionner toutes les valeurs de la table Articles 

		$reponse = $bdd->query("SELECT * FROM canard");

		// afficher les articles sur la page visiteur
		while($donnees = $reponse -> fetch())

		echo

		"<div class='articles'><p>Quantité : ".$donnees['quantite']." Race de canard : ".$donnees['race'].'</p>';

		?>
	</div>

	<!-- bouton redirection vers la page accueil -->
	<form method="POST" action="accueil.php">
	<input type="submit" name="Retour à l'accueil" value="Retour à l'accueil" >
	</form>


</body>
</html>