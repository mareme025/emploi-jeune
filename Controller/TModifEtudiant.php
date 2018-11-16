<?php
	 
			//CONNEXION DE LA BASE DE DONNEE EN LIGNE
		//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		//CONNEXION DE LA BASE DE DONNEE EN LOCAL
		$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
		if(isset($_GET['numEtudiant'])){
		    $getid = intval($_GET['numEtudiant']);
	}

	$sql = $connect->prepare('UPDATE etudiant SET nometu=:nom, prenometu=:prenom, emailetu=:email, motdepasse=:mdp, competence=:compe, realisation=:reali, formation=:forma, langage=:langag, centre=:centr, username=:user, datenaiss=:datenaisse WHERE idEtudiant=:num');
 
	$sql->bindValue(':num',$getid,PDO::PARAM_INT);
	$sql->bindValue(':nom',$_POST['nometu'],PDO::PARAM_STR);
	$sql->bindValue(':prenom',$_POST['prenometu'],PDO::PARAM_STR);
	$sql->bindValue(':email',$_POST['emailetu'],PDO::PARAM_STR);
	$sql->bindValue(':mdp',$_POST['motdepasse'],PDO::PARAM_STR);
	$sql->bindValue(':compe',$_POST['competence'],PDO::PARAM_STR);
	$sql->bindValue(':reali',$_POST['realisation'],PDO::PARAM_STR);
	$sql->bindValue(':forma',$_POST['formation'],PDO::PARAM_STR);
	$sql->bindValue(':langag',$_POST['langage'],PDO::PARAM_STR);
	$sql->bindValue(':centr',$_POST['centre'],PDO::PARAM_STR);
	$sql->bindValue(':datenaisse',$_POST['datenaiss'],PDO::PARAM_STR);
	$sql->bindValue(':user',$_POST['username'],PDO::PARAM_STR);

	$affichetudiant = $sql->execute(); 
		header("location:../Views/detailprofil.php?numEtudiant=".$getid);