<?php

	//OUVERTURE D'UNE CONNEXION A LA BASE DE DONNEE SOUS EMPLOI
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//REQUETE INSERTION EN PDO
	$sql=$connect->prepare('INSERT INTO etudiant VALUES (NULL, :nom, :prenom, :email, :mdp,NULL, NULL, NULL, NULL, NULL, NULL, NULL)'); 

	//LIAISON DES MARQUEURS A UNE VALEUR
	$sql->bindValue(':nom',$_POST['nometu'],PDO::PARAM_STR);
	$sql->bindValue(':prenom',$_POST['prenometu'],PDO::PARAM_STR);
	$sql->bindValue(':email',$_POST['emailetu'],PDO::PARAM_STR);
	$sql->bindValue(':mdp',$_POST['motdepasse'],PDO::PARAM_STR);

	//EXECUTION DE LA REQUETE PREPAREE

	$insertetudiant = $sql->execute();

	header('location:../Views/connexion.php');

?>


	