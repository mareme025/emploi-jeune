<?php
session_start();

	 try {
		
		//CONNEXION DE LA BASE DE DONNEE EN LIGNE
		//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		//CONNEXION DE LA BASE DE DONNEE EN LOCAL
		$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
    // set the PDO error mode to exception
	    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    if(isset($_POST['formconnect']))
		 {
		 	$emailconnect =$_POST['emailconnect'];
       $mdpconnect = htmlspecialchars($_POST['mdpconnect']);
		 	if(!empty($emailconnect) and !empty($mdpconnect))
		 	{	
		 		//Si l'utilisateur est un entreprise 
				$entreprise = $connect->prepare("SELECT * FROM entreprise WHERE email = ? and motdepasse = ?" );
				$entreprise->execute([$emailconnect, $mdpconnect]);
				//$count = $entreprise->fetchColumn();
				$ese = $entreprise->fetch();
				if($ese['idEntreprise'])
 				{
		           	header("location:ProfilEntreprise.php?numEntreprise=".$ese['idEntreprise']);
				}
				//Si l'utilisateur est un etudiant 
				$etudiant = $connect->prepare("SELECT * FROM etudiant WHERE emailetu = ? and motdepasse = ?" );
				$etudiant->execute([$emailconnect, $mdpconnect]);
				//$count = $etudiant->fetchColumn();
				$etu = $etudiant->fetch();
				if($etu['idEtudiant'])
 				{	
					header("location:dashboards.php?numEtudiant=".$etu['idEtudiant']);

				}
				//Si l'utilisateur est une ecole 
				$ecole = $connect->prepare("SELECT count(*) FROM ecole WHERE email = ? and motdepasse = ?" );
				$ecole->execute([$emailconnect, $mdpconnect]);
				$count = $ecole->fetchColumn();
				if($count == 1)
 				{		
		           		header('location:ProfilEcole.php');
				}
			}
		}
	} catch(PDOException $event)
	{
	    echo "Connection failed: " . $event->getMessage();
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
	</head>
	<body class="body">
		<div class="entete">
			<ul>
				<li><a class="JOBBOOK1" href="../index.php"><img src="./image/JOBBOOK.png"></a></li>
				<li><a href="../index.php"><img class="close"img src="./image/+.png"></a></li>
			</ul>
		</div>
		<form method="POST" action="connexion.php">
			<input class="email" type="email" name="emailconnect"  placeholder="Email">
			<input class="password" type="password" name="mdpconnect" placeholder="Password">
			<button class="signin" type="submit" name="formconnect">Connexion </button>
			<a class="donthave" href="choix.php">Avez-vous un compte?Inscrivez-vous</a>
		</form>
	</body>
</html>