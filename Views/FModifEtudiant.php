
<?php

		$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
		//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		
		echo $_POST['data'];
		echo "hello";
		$sql=$connect->prepare('SELECT * FROM etudiant WHERE idEtudiant = :num');
		$sql->bindValue(':num',$_GET['numEtudiant'],PDO::PARAM_INT);
		$affichetudiant = $sql->execute();
		$etudiant = $sql->fetch();
	
?>
<!DOCTYPE html>
<html>

<head>
	<title>Formulaire de modification</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
</head>
<body>
	<nav>
    <img src="Views/image/images (1).jpg">
		<ul>
			<li><a href="../index.php">Jobbook</a></li>
			<li><a href="ListeOffreA.php">Find Jobs</a></li>
			<li><a href="connexion.php">Find Talents</a></li>
			<li><a href="connexion.php"><button>Sign in/ Sign up</button></a></li>
		</ul>
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
			<div class="panal panel-info">
				<div class="panel-heading">Formulaire de modification d'un etudiant</div>
				<div class="panel-body">
					<!-- <form method="POST" action="../Controller/TModifEtudiant.php">
						<h2>Coordonnées personnelles</h2>
						<input type="hidden" name="numEtudiant" value="<?= $etudiant['idEtudiant']?>">
						<div class="form-group">
							<label>identifiant l'etudiant</label>
							<input type="text" name="idEtudiant" readonly="" class="form-control" value="<?= $etudiant['idEtudiant'];?>">
						</div>
						<div class="form-group">
							<label>Nom etudiant</label>
							<input type="text" name="nometu" class="form-control" value="<?= $etudiant['nometu'];?>">
						</div>
						<div class="form-group">
							<label>Prenom etudiant</label>
							<input type="text" name="prenometu" class="form-control" value="<?= $etudiant['prenometu'];?>">
						</div>
						<div class="form-group">
							<label>Email etudiant</label>
							<input type="email" name="emailetu"  readonly="" class="form-control" value="<?= $etudiant['emailetu'];?>">
						</div>
						<div class="form-group">
							<label>Mot de passe</label>
							<input type="password" name="motdepasse" class="form-control" value="<?= $etudiant['motdepasse'];?>">
						</div>
						<div class="form-group">
							<label>Nouveau Mot de passe</label>
							<input type="password" name="motdepasse" class="form-control" >
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datenaiss" class="form-control" value="<?= $etudiant['datenaiss'];?>">
						</div>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?= $etudiant['username'];?>">
						</div>
						<h2>Coordonnées professionnelles</h2>
						<div class="form-group">
							<label>Competence</label>
							<textarea name="competence" class="form-control" value="<?= $etudiant['competence'];?>"></textarea>
						</div>
						<div class="form-group">
							<label>Formation</label>
							<textarea name="formation" class="form-control" value="<?= $etudiant['formation'];?>"></textarea>
						</div>
						<div class="form-group">
							<label>Centre d'interet</label>
							<textarea name="centre" class="form-control" value="<?= $etudiant['centre'];?>"></textarea>
						</div>
						<div class="form-group">
							<label>Language</label>
							<textarea name="langage" class="form-control" value="<?= $etudiant['langage'];?>"></textarea>
						</div>
						<div class="form-group">
							<label>Experience professionnelle</label>
							<textarea name="experience" class="form-control" value="<?= $etudiant['experience'];?>"></textarea>
						</div>
						<div>
							<input type="submit" name="inscrit" class="btn btn-success" value="Inscription">
						</div>
					</form> -->
				</div>
			</div>
	</div>
	
</body>
</html>