<?php
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE
	$sql=$connect->prepare('SELECT * FROM offre_emploi');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
	$afficheoffremploi = $sql->execute();
	//RECUPERATION DES RESULTATS 
	$offremplois = $sql->fetchAll();
	if(isset($_GET['numEtudiant']))
	 		$getid = intval($_GET['numEtudiant']);
	 		$sql = $connect->prepare("SELECT * FROM etudiant WHERE idEtudiant = ?"); 
	 		$sql->execute([$getid]); 
			$userinfo = $sql->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil</title>
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
			<li class="emploi"><a class="textsign" href="ListeOffre.php?numEtudiant=<?= $getid?>">Emploi</a></li>
			<li class="profil"><a class="textsignUp2" href="ProfilEtudiant.php?numEtudiant=<?= $getid?>">Profil</a></li>
			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>
	<br><br><br>
    <h1 class="dashboard">Tableau de Bord</h1>
    <div class="container">
        <div class="box"><a href="">0<br> Emploi appliqués</a></div>
        <div class="box"><a href="">0<br> Application en cours</a></div>
    </div>
    <div>
    	<p class="titre4">Emplois Postulés &nbsp;&nbsp;&nbsp;<a href="ListeOffre.php" class="titres">Voir tous</a></p>	
    </div>
    	
    <!-- <div class="tableauOffr">
					<table class="tablle">
						<tr  class="nomoffre">
							<th>Nom de l'Offre</th>
							<th>Profil Recherché</th>
							<th>Details</th>

						</tr> -->
						<div class="container">
			  <table class="table table-hover">
			    <thead>
			     
			    </thead>
						<?php foreach ($offremplois as $offremploi): 

								//get entreprise nqme
								$sql=$connect->prepare('SELECT nomese FROM entreprise WHERE idEntreprise=:id');
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
                                <td><?= $offremploi['nomOffre'] ?> </td>
								<td><?= $nomProfil['nom_profil'] ?></td>
								<td><a href="ListeOffre.php" class="lien">Postuler</a></td>
							</tr>

								<?php endforeach; ?>
						</table>
                        </div>
        <p class="titres4">Derniers Offres &nbsp;&nbsp;&nbsp; <a href="ListeOffre.php" class="titress">Voir plus</a></h4>
    <div class="container">
        <div class="box1"><a href=""><br> Developpeur Web<br> CDI<br>Dakar</a></div>
        <div class="box1"><a href=""><br>  Data Science<br> Stage<br>Dakar</a></div>
        <div class="box1"><a href=""><br> Developpeur Mobile<br> CDD<br>Dakar</a></div>
    </div>

</body>
</html>