<?php
	session_start();
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE
	$sql=$connect->prepare('SELECT * FROM offre_emploi');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
	$affichemploi = $sql->execute();
	//RECUPERATION DES RESULTATS 
	$offremplois = $sql->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Liste des Offres</title>
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
			<li><a class="JOBBOOK" href="../index.php"><img src="./image/JOBBOOK.png"></a></li>
			<li><a class="findjobs" href="ListeOffreA.php">Trouvez un travail</a></li>
			<li><a class="findtalent" href="connexion.php">Trouvez un talent</a></li>
			<li class="signIn"><a class="textsignIn" href="connexion.php">Connexion</a></li>
			<li class="signUp"><a class="textsignUp" href="choix.php">Inscription</a></li>
		</ul>
	</div>
	<br><br><br>
					
				<div class="container">
			  <table class="table table-hover">
			    <thead>
			     
			    </thead>
					
						
								<tbody>
									<?php foreach ($offremplois as $offremploi): 

								//get entreprise nqme
								$sql=$connect->prepare('SELECT emplacement FROM entreprise WHERE idEntreprise=:id');
								$sql->bindValue(':id',$offremploi[4], PDO::PARAM_INT);
								//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
								$nomEse = $sql->execute();
								//RECUPERATION DES RESULTATS 
								$nomese = $sql->fetch();

								//get profil rechercher
								$sql=$connect->prepare('SELECT nom_profil FROM profil_recherche WHERE idProfil_Recherche=:idpro');
								$sql->bindValue(':idpro',$offremploi[4], PDO::PARAM_INT);
								//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
								$nomProfil = $sql->execute();
								//RECUPERATION DES RESULTATS 
								$nomProfil = $sql->fetch();

								?>
     						 <tr>
        						<td><?= $offremploi['nomOffre'] ?><br><?= $offremploi['typeContrat'] ?> </td>
								
								<td><?= $nomProfil['nom_profil'] ?><br><?= $nomese['emplacement'] ?></td>
								
								<td><a href="connexion.php" class="lien">View</a></td>
     						 </tr>

								<?php endforeach; ?>
							</tbody>
						</table>
						</div>
</body>
</html>