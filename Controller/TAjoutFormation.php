<?php

	//OUVERTURE D'UNE CONNEXION A LA BASE DE DONN2E SOUS EMPLOI
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE INSERTION EN PDO
	$sql=$connect->prepare('INSERT INTO formation VALUES (NULL, :nom, :temps)'); 
	//LIAISON DES MARQUEURS A UNE VALEUR
	$sql->bindValue(':nom',$_POST['nomformation'],PDO::PARAM_STR);
	$sql->bindValue(':temps',$_POST['dureeformation'],PDO::PARAM_STR);
	
	//EXECUTION DE LA REQUETE PREPAREE

	$insertformation = $sql->execute();
	header('location:../index.php');
?>



	