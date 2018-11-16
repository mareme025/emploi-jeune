<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="Style/style.css" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<title> NOTIFICATION</title> 
</head>
<body class="body">

	<nav>
		<div class="entete">
			<ul>
				<li><a class="" href="ProfilEtudiant.php">Accueil</a></li>
				<li><a class="" href="Notification.php">Notifications</a></li>
				<li><a class="" href="ListeOffre.php">Liste Offres</a></li>
				<li><a class="" href="EditionProfil.php?numEtudiant=<?= $userinfo['idEtudiant']?>">Edition Profil</a></li>
				<li><a class="" href="deconnexion.php">Deconnexion</a></li>
			</ul>
		</div>
	</nav>
	<br><br><br>
			<table class="tableauOffre">
				<tr>
					<th>Nom Offre</th>
					<th>TypeContrat</th>
					<th>Demandeur</th>
					<th>Description de l'offre </th>
				</tr>
				<tr>
					<td> Administrateur BD</td>	
					<td>CDD</td>
					<td>Sonatel</td>
					<td><button class="btn btn-block"><a href="offre.php">Postuler</a></button> </td>
				 </tr>
					<td>			
						Marketeur
					</td>
					<td>			
						CDI
					</td> 
					</td>
					<td>			
						Auchan
					</td>
					<td>			
						<button class="btn btn-block"><a href="offre.php">Postuler</a></button> 
					</td>
					<tr>
					<td>			
						logiticien 
					</td>
					<td>			
						CDD
					</td>
					<td>			
						Port Autonom de Dakar Sénégal 
					</td>
					<td>			
						<button class="btn btn-block"><a href="">Postuler</a></button>
					</td>
					<tr>
					<td>			
						Infograph 
					</td>
					<td>			
						CDI
					</td>		
					<td>			
						EDACY, SENSOFT, SUITE
					</td>
					</td>
                    <td>			
						<button class="btn btn-block"><a href="">Postuler</a></button>
					</td>
					<tr>
				</tr>
				<td>			
						Developpeur Web 
					</td>
					<td>			
						CDI
					</td>		
					<td>			
						EDACY, TIGO, UNICET
					</td>
					</td>
                    <td>			
						<button class="btn btn-block"><a href="">Postuler</a></button>
					</td>
					<tr>
				</tr>
				<td>			
						Developpeur Mobile 
					</td>
					<td>			
						CDI
					</td>		
					<td>			
						EDACY, Gainde2000
					</td>
					</td>
                    <td>			
						<button class="btn btn-block"><a href="">Postuler</a></button>
					</td>
					<tr>
				</tr>
				<td>			
						Chef de Projet
					</td>
					<td>			
						CDI
					</td>		
					<td>			
						EDACY, SENSOFT, SUITE
					</td>
					</td>
                    <td>			
						<button class="btn btn-block"><a href="">Postuler</a></button>
					</td>
					<tr>
				</tr>
				</table>
				</div>
  </body>
</html>