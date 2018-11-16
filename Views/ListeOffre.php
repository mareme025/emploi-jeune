<?php
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE
	$sql=$connect->prepare('SELECT * FROM offre_emploi');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
	$afficheoffremploi = $sql->execute();
	//RECUPERATION DES RESULTATS 
	$offremplois = $sql->fetchAll();
	if(isset($_GET['numEtudiant'])){
	 		$getid = intval($_GET['numEtudiant']);}
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
			<li><a class="JOBBOOK" href="dashbords.php?numEtudiant=<?= $getid?>"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi"><a class="textsign" href="ListeOffre.php?numEtudiant=<?= $getid ?>">Offres</a></li>
			<li class="profil"><a class="textsignUp" href="detailprofil.php?numEtudiant=<?= $getid ?>">Profil</a></li>
			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>

	<br><br><br>

					<form method="POST" action="ListeOffre.php">
						<input class="jobs" type="search" name="querys" >
						<input class="location" type="search" name="querys" >
						<button class="saves" type="submit" name="research">Recherchez</button>
					</form>
					<h3 class="listeoffre">Liste des offres</h3>
					<!-- <table>
						<tr class="nomoffres">
							<th>Offres</th>
							<th>Contrat</th>
							<th>Description</th>
							<th>Entreprise</th>
							<th>Profil</th>
							<th>Details</th>

						</tr> -->
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
								
								<td><a href="detail.php" class="lien">View</a></td>
     						 </tr>

								<?php endforeach; ?>
							</tbody>
						</table>	
								</div>
</body>
</html>