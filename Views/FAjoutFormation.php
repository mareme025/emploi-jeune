<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
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
				<div class="panel-heading">Formulaire d'ajout d'une formation</div>
				<div class="panel-body">
					<form method="POST" action="../Controller/TAjoutFormation.php">
						<div class="form-group">
							<label>Nom Formation</label>
							<input type="text" name="nomformation" class="form-control">
						</div>
						<div class="form-group">
							<label>durée Formation</label>
							<input type="number" name="dureeformation" class="form-control">
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