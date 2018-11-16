<?php
session_start();
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	$connect = new PDO('mysql:localhost=127.0.0.1;nameBD=sousemploi','root','');
	if(isset($_GET['numEntreprise']))
	$getid = intval($_GET['numEntreprise']);
	$sql = $connect->prepare("SELECT * FROM entreprise WHERE idEntreprise = ?"); 
	$sql->execute([$getid]); 
   	$userinfo = $sql->fetch();
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profil Entreprise</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<!--<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">-->
</head>
<body class="body">
	<div class="entete">
		<ul>
			<li><a class="JOBBOOK" href="../index.php"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi2"><a class="textsign2" href="FAjoutOffre.php?numEntreprise=<?= $getid?>">Ajout Offre</a></li>
			<li class="profil2"><a class="textsignUp3" href="FAjoutProfil.php?numEntreprise=<?= $getid?>">Ajout Profil</a></li>
			<li class="profil1"><a class="textsignUp1" href="ListeEtudiant.php?numEntreprise=<?= $getid?>">Listes Etudiants</a></li>

			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>
	<br><br><br>
	<div>
		<p class="edit"><a class="textsignIn" href="EditionProfil.php?numEtudiant=<?= $getid?>">Editez Profil</a></p>
	</div>
</body>
</html>
<?php
}
?>