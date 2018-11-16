<?php
	$host = 'localhost';
	$dbname = 'sousemploi';
	$user ='root';
	$password = '';
	try
	{

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
		$sql1=$connect->prepare('SELECT * FROM entreprise ');
		$sql1->execute();
		$results=$sql1->fetchAll();
		$sql2=$connect->prepare('SELECT * FROM profil_recherche ');
		$sql2->execute();
		$resultats=$sql2->fetchAll();
		$sql1=$connect->prepare('SELECT * FROM entreprise ');
		$sql1->execute();
		$results=$sql1->fetchAll();
	}
	catch(PDOExeption $event)
	{
		die('Attention Erreur : '.$event->getMessage());
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
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
			<form method="POST" action="../Controller/TAjoutOffre.php">

				<input class="nomese" type="text" name="nomOffre"  placeholder="Offer name">
				<input class="nineaese" type="text" name="typeContrat"  placeholder="Contract Type">
				<textarea class="locationese" type="text" name="description"  placeholder="Description"></textarea>
				<select name="idProfil_Recherche" class="profilassoc">
					<option>Profil Associé</option>
								<?php 
									foreach ($resultats as $resultat): 
										echo '<option value= "', $resultat['idProfil_Recherche'], '">', $resultat['nom_profil'], "</option>";
									endforeach; 
								?>
				</select>
				<select name="idEntreprise" class="eseassoc">
					<option>Entreprise Associée</option>
							<?php 
								foreach ($results as $result): 
								echo '<option value= "', $result['idEntreprise'], '">', $result['nomese'], "</option>";
								endforeach; 
							?>	
				</select> 
				<button class="signupese" type="submit" name="inscrit">Ajoutez </button>

			</form>	
</body>
</html>