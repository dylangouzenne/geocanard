<!DOCTYPE html>
<html>
<head>
	<title>page d'admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id='formulaire'>
	<h1>formulaire signalisation de cannard sauvage </h1>

	
	<img id='imgform' src="images/image1.jpeg">


	<form name="inscription" method="post" action="">
		
		<label for='quantite'>Nombre de canard</label>
		<p><input type="number" name="quantite"></p>
		
		<label for='race'>Race de canard</label>
		<p><SELECT name="race" size="1">
			<OPTION>Non identifié
			<OPTION>Col-vert
			<OPTION>Sarcelles
			<OPTION>cane
			<OPTION>Tadorne de Belon
			<OPTION>Fuligule morillon
		</SELECT></p>

		<label for='date'>Date</label>
		<p><input type="date" name="date"></p>

		<label for='adresse'>Adresse</label>
		<p><input type="text" name="adresse"></p>

		<label for='infosup'>Informations suplémentaire</label>
		<p><textarea rows="4" cols="50" name="infosup"></textarea></p>

		<p><input type="submit" name="envoyer"></input></p>
	</form>

	<?php
// on se connecte à mysql :
	try  
	{
		$bdd = new PDO('mysql:host=localhost;dbname=geocanard;charset=utf8', 'simplon', 'Simplon-123');
	}
// en cas d'erreur on affiche un message :
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
// requette insertion dans la BDD
	$req = $bdd->prepare('INSERT INTO canard (quantite, race)
			VALUES(:quantite, :race)');
		$req->execute(array(
			':quantite' => $_POST['quantite'],
			':race' => $_POST['race']
		));
	?>
</div>

<!-- bouton redirection vers la page admin -->
	<form method="POST" action="admin.php">
	<input type="submit" name="accès page admin" value="accès page admin" >
	</form>
</body>
</html>