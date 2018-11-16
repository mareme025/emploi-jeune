<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
	</nav>
	<div class="container col-md-6 col-md-offset-3 marge">
			<div class="panal panel-info">
				<div class="panel-heading">Formulaire de demande</div>
				<div class="panel-body">
					<form method="POST" action="../Controller/TAjoutDemande.php">
						<div class="form-group">
							<label>Nom Ecole</label>
							<input type="text" name="nomecole" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Mot de Passe</label>
							<input type="password" name="motdepasse" class="form-control">
						</div>
						<div class="form-group">
							<label>Emplacement</label>
							<input type="text" name="emplacement" class="form-control">
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