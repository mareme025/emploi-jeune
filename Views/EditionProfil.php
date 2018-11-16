<?php
session_start();
	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
	if(isset($_GET['numEtudiant'])){
			$getid = intval($_GET['numEtudiant']);
			$sql=$connect->prepare('SELECT * FROM etudiant WHERE idEtudiant= ?');
								//$sql->bindValue(':idhh',$getid, PDO::PARAM_INT);
								//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES
								$sql->execute([$getid]);
								//RECUPERATION DES RESULTATS 

								$userinfo = $sql->fetch();
			
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title> Edition Profil</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body class="body">
	<div class="entete">
		<ul>
			<li><a class="JOBBOOK" href="dashbords.php?numEtudiant=<?= $getid?>"><img src="image/JOBBOOK.png"></a></li>
			<li class="emploi"><a class="textsign" href="ListeOffre.php?numEtudiant=<?= $getid?>">Emploi</a></li>
			<li class="profil"><a class="textsignUp" href="ProfilEtudiant.php?numEtudiant=<?= $getid?>">Profil</a></li>
			<li><a class="photo" href="../index.php"><img src="image/profil.png" width="90"></a></li>
		</ul>
		
	</div>
	<br><br>
		<form action="../Controller/TModifEtudiant.php?numEtudiant=<?= $getid?>" method="POST">
			<input class="prenometuE" type="text" name="prenometu"  placeholder="First name" value="<?php echo $userinfo['prenometu'];?>">
			<input class="nometuE" type="text" name="nometu"  placeholder="Last name" value="<?php echo $userinfo['nometu'];?>">
			<input class="emailetuE" type="email" name="emailetu"  placeholder="Email" value="<?php echo $userinfo['emailetu'];?>">
			<input class="passwordetuE" type="password" name="motdepasse" placeholder="Password" value="<?php echo $userinfo['motdepasse'];?>">
			<input class="passwordetu2E" type="password" name="motdepasse2"  placeholder="New Password" >
        	<input class="usernameE" type="text" name="username" placeholder="Username" value="<?php echo $userinfo['username'];?>">
			<input class="datenaissE" type="date" name="datenaiss"  placeholder="Day of Borth" value="<?php echo $userinfo['datenaiss'];?>">
			<textarea class="competence" name="competence"  placeholder="Competence"><?php echo $userinfo['competence'];?></textarea>
			<textarea class="realisation" name="realisation"  placeholder="Realisation"><?php echo $userinfo['realisation'];?></textarea>
			<textarea class="formation" name="formation"  placeholder="Formation"><?php echo $userinfo['formation'];?></textarea>
			<textarea class="langage" name="langage"  placeholder="Language"><?php echo $userinfo['langage'];?></textarea>
			<textarea class="centre" name="centre"  placeholder="Center of Interest"><?php echo $userinfo['centre'];?></textarea> 
			<button class="save" type="submit" name="inscrit">Save</button>
		</form>
	</body>
</html>
