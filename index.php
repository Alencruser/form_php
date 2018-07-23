<!DOCTYPE html>
<html>
<head>
	<title>Formulaire</title>
</head>
<body>
	<form action="/user.php" method="GET">
		<input type="text" name="nom" placeholder="Nom"/>
		<input type="text" name="prenom" placeholder="Prenom" />
		<button type="submit">Envoyer</button>
	</form>
	<h2>Post method</h2>
	<form action="/user.php" method="POST">
		<input type="text" name="nom" placeholder="Nom"/>
		<input type="text" name="prenom" placeholder="Prenom" />
		<button type="submit">Envoyer</button>
	</form>
	<h2>Formulaire civil</h2>
	<?php
	if(!isset($_POST["noms"])&& !isset($_POST["prenoms"])&& !isset($_POST["civil"])){?>
		<form action="/index.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="noms" placeholder="Nom" />
			<input type="text" name="prenoms" placeholder="Prenom" />
			<select name="civil">
				<option>MR</option>
				<option>MME</option>
			</select>
			<input type="file" name="file">
			<button type="submit">Valider</button>
		</form>
		<?php 
	}else if(pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION)!= "pdf") {
		echo "Votre fichier doit etre en pdf";
	}else
	echo "Vous êtes ".htmlspecialchars($_POST["civil"])." ".htmlspecialchars($_POST["noms"])." ".htmlspecialchars($_POST["prenoms"])." votre fichier est : ".pathinfo($_FILES["file"]["name"], PATHINFO_FILENAME)." et son extension est : ".pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);
	?>
</body>
</html>