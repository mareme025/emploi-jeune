<?php

	//OUVERTURE D'UNE CONNEXION A LA BASE DE DONN2E SOUS EMPLOI
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE INSERTION EN PDO
	$sql=$connect->prepare('INSERT INTO ecole VALUES (NULL, :nom, :email, :empla, :mdp)'); 
	//LIAISON DES MARQUEURS A UNE VALEUR
	$sql->bindValue(':nom',$_POST['nomecole'],PDO::PARAM_STR);
	$sql->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
	$sql->bindValue(':empla',$_POST['emplacement'],PDO::PARAM_STR);
	$sql->bindValue(':mdp',$_POST['motdepasse'],PDO::PARAM_STR);
	
	//EXECUTION DE LA REQUETE PREPAREE

	$insertecole = $sql->execute();
	header('location:../index.php');

?>



	