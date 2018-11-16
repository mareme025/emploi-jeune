<?php

	//OUVERTURE D'UNE CONNEXION A LA BASE DE DONN2E SOUS EMPLOI
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//session_destroy();
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE INSERTION EN PDO

	$sql=$connect->prepare('INSERT INTO profil_recherche VALUES (NULL, :nom, :compe)'); 
	//LIAISON DES MARQUEURS A UNE VALEUR

	$sql->bindValue(':nom',$_POST['nom_profil'],PDO::PARAM_STR);
	$sql->bindValue(':compe',$_POST['competence'],PDO::PARAM_STR);
	//EXECUTION DE LA REQUETE PREPAREE

	$insertoffremploi = $sql->execute();
	header('location:../Views/ProfilEntreprise.php');


?>



	