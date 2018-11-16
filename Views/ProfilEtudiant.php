<?php
session_start();
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	$connect = new PDO('mysql:localhost=127.0.0.1;nameBD=sousemploi','root','');
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
</head>
<body class="body">
	<div class="entete">
		<ul>
			<li><a class="JOBBOOK" href="dashbords.php?numEtudiant=<?= $getid?>"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi"><a class="textsign" href="ListeOffre.php?numEtudiant=<?= $getid?>">Emploi</a></li>
			<li class="profil"><a class="textsignUp" href="detailprofil.php?numEtudiant=<?= $getid ?>">Profil</a></li>
			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
	</div>
	<br><br><br>
	<div>
		<?= $getid?>
		<?= $userinfo['nometu']?>
		<p class="edit"><a class="textsignIn" href="EditionProfil.php?numEtudiant=<?= $getid?>">Editez Profil</a></p>
	</div>
</body>
</html>
