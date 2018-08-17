<html>
<head>
	<title>chiffrement césar</title>
</head>
<body>
	<!-- <?php phpinfo(); ?> -->

	<h1>formulaire de chiffrement de césar </h1>

	<form name="inscription" method="post" action="chiffrement_de_cesar.php">
		Entrez le texte à chiffrer : <input type="text" name="text_origin" id="text_origin"/>
		<br/>
		<input type="submit" name="valider" value="OK"/>
	</form>
	<?php
        if(isset($_POST['valider'])){
            $saisie=$_POST['text_origin'];
            echo 'votre texte a crypté est : '. $saisie;
        }
        ?>
</body>
</html>