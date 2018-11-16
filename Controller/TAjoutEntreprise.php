<?php

	//OUVERTURE D'UNE CONNEXION A LA BASE DE DONN2E SOUS EMPLOI
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE INSERTION EN PDO
	$sql=$connect->prepare('INSERT INTO entreprise VALUES (NULL, :nom, :ninea, :empla, :mdp, :email)'); 
	//LIAISON DES MARQUEURS A UNE VALEUR
	echo $sql->bindValue(':nom',$_POST['nomese'],PDO::PARAM_STR);
	echo $sql->bindValue(':ninea',$_POST['NINEA'],PDO::PARAM_STR);
	echo $sql->bindValue(':empla',$_POST['emplacement'],PDO::PARAM_STR);
	echo $sql->bindValue(':mdp',$_POST['motdepasse'],PDO::PARAM_STR);
	echo $sql->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
	
	//EXECUTION DE LA REQUETE PREPAREE

	$insertentreprise = $sql->execute();
	if($insertentreprise)
	{
		echo "succes";
	}
	else
	{
		echo "echec";
	}
	//echo $insertentreprise;
	header('location:../Views/connexion.php');

	

	?>



	