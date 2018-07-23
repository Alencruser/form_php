<?php
if(isset($_GET["nom"])&& isset($_GET["prenom"])){
echo "Nom : ".htmlspecialchars($_GET["nom"])."  prenom : ".htmlspecialchars($_GET["prenom"]);
}
if(isset($_POST["nom"])&&isset($_POST["prenom"])){
	echo "Nom : ".htmlspecialchars($_POST["nom"])."  prenom : ".htmlspecialchars($_POST["prenom"]);
}
?>