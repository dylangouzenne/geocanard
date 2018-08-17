<!DOCTYPE html>
<html>
<head>
	<title>page d'admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>formulaire ajout article </h1>

	<form name="inscription" method="post" action="">
		<p> Titre de l'article <p></p><input type="text" name="titre"> </p>
		<p> Contenu de l'article <p></p><textarea rows="4" cols="50" name="contenu"></textarea>
		<p><input type="submit" name="envoyer"></input></p>
	</form>

	<?php
// on se connecte à mysql :
	try  
	{
		$bdd = new PDO('mysql:host=localhost;dbname=blog_php;charset=utf8', 'dylan', 'Fmdph320');
	}
// en cas d'erreur on affiche un message :
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}
// requette insertion article dans la BDD
	$req = $bdd->prepare('INSERT INTO articles (titre, contenu)
			VALUES(:titre, :contenu)');
		$req->execute(array(
			':titre' => $_POST['titre'],
			':contenu' => $_POST['contenu']
		));
	?>

	<form method="POST" action="accueil.php">
	<input type="submit" name="Retour espace visiteur" value="Retour espace visiteur" >
	</form>


</body>
</html>