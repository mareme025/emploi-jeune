<?php
	require_once '../Models/profildao.php';
	if(isset($_GET['idProfil_Recherche']))
	{
		$idProfil_Recherche = $_GET['idProfil_Recherche'];
		$results = getprofilbyid($idProfil_Recherche);
		$tab = mysqli_fetch_row($results);
	}
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
				<div class="panel-heading">Formulaire de modification d'un Profil Recherché</div>
				<div class="panel-body">
					<form method="POST" action="../Controller/TModifProfil.php">
						<div class="form-group">
							<label>identifiant Profil Recherché</label>
							<input type="text" name="idProfil_Recherche" readonly="" class="form-control" value="<?= $tab[0] ?>">
						</div>
						<div class="form-group">
							<label>Nom Profil Recherché</label>
							<input type="text" name="nom_profil" class="form-control" value="<?= $tab[1] ?>">
						</div>
						<div>
							<input type="submit" name="inscrit" class="btn btn-success" value="Inscription">
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>