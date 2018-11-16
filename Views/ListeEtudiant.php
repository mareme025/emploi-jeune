<?php
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE
	$sql=$connect->prepare('SELECT * FROM etudiant');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
	$affichetudiant = $sql->execute();
	//RECUPERATION DES RESULTATS 
	$etudiants = $sql->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Liste des Etudiants</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body class="body">
	<div class="entete">
		<ul>
			<li><a class="JOBBOOK" href="../index.php"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi"><a class="textsign" href="FAjoutOffre.php">Ajout Offre</a></li>
			<li class="profil"><a class="textsignUp" href="FAjoutProfil.php">Ajout Profil</a></li>
			
			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>
		<br><br><br>
			<div class="container">
			  <table class="table table-hover">
			    <thead>
			     
			    </thead>
						<?php foreach ($etudiants as $etudiant):  ?>
				<tr>
					<td>			
						<?= $etudiant['nometu'] ?> 
					</td>
					<td>			
						<?= $etudiant['prenometu'] ?> 
					</td>
					<td>			
						<?= $etudiant['emailetu'] ?> 
					</td>
				</tr>
	<?php endforeach; ?>
					</table>
			</div>
</body>
</html>