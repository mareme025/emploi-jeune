<?php
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE
	$sql=$connect->prepare('SELECT * FROM profil_recherche');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
	$afficheprofil = $sql->execute();
	//RECUPERATION DES RESULTATS 
	$profils = $sql->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body class="body">

	<nav>
		<div class="entete">
			<ul>
				<li><a class="" href="ProfilEtudiant.php">Accueil</a></li>
				<li><a class="" href="ListeProfil.php">Liste Profil</a></li>
				<li><a class="" href="Notification.php">Notifications</a></li>
				<li><a class="" href="ListeOffre.php">Liste Offres</a></li>
				<li><a class="" href="EditionProfil.php?numEtudiant=<?= $userinfo['idEtudiant']?>">Edition Profil</a></li>
				<li><a class="" href="deconnexion.php">Deconnexion</a></li>
			</ul>
		</div>
	</nav>
<br><br>
		<div  class="tableauOffre">
					<table >
						<tr >
							<th class="ligne">Idenfifiant</th>
							<th class="ligne">Nom Profil</th>
							<th class="ligne">Competence</th>
						</tr>
								<?php foreach ($profils as $profil):  ?>
				<tr>
					<td class="ligne">			
						<?= $profil['idProfil_Recherche'] ?> 
					</td>
					<td class="ligne">			
						<?= $profil['nom_profil'] ?> 
					</td>
					<td class="ligne">			
						<?= $profil['competence'] ?> 
					</td>
				</tr>
				
	<?php endforeach; ?>
					</table>
</div>
</body>
</html>