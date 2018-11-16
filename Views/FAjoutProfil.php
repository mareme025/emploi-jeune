<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body class="body">
	<div class="entete">
		<ul>
			<li><a class="JOBBOOK" href="../index.php"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi"><a class="textsign" href="FAjoutOffre.php">Ajout Offre</a></li>
			<li class="profil"><a class="textsignUp" href="FAjoutProfil.php">Ajout Profil</a></li>
			<li class="profil1"><a class="textsignUp1" href="ListeEtudiant.php">Listes Etudiants</a></li>
 			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>
	<br><br><br>
					<form method="POST" action="../Controller/TAjoutProfil.php">
					<input class="nomprofil" type="text" name="nom_profil"  placeholder="Name Profil">
					<input class="compprofil" type="text" name="competence"  placeholder="Competence">
					<button class="signuppro" type="submit" name="inscrit">Ajoutez </button>
					</form>
				</div>
			</div>
		</div> 
</body>
</html>