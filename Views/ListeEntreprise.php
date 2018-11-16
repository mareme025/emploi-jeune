<?php
	
	$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");

	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE


	$sql=$connect->prepare('SELECT * FROM entreprise');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES


	$affichentreprise = $sql->execute();
	//RECUPERATION DES RESULTATS 

	$entreprises = $sql->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>

	<title>Liste des Etudiants</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
	<link rel="stylesheet" type="text/css" href="Style/bootstrap-cerulean.min.css">
	<script type="text/javascript" src="JS/valide.js"></script>
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
				<div class="panel-heading">Liste des Entreprises</div>
				<div class="panel-body">
					<table class="table table-bordered table-striped">
						<tr>
							<th>Nom Entreprise</th>
							<th>NINEA</th>
							<th>Emplacement </th>
							<th>Email</th>
						</tr>
							<?php foreach ($entreprises as $entreprise):  ?>
				<tr>
					<td>			
						<?= $entreprise['nomese'] ?> 
					</td>
					<td>			
						<?= $entreprise['NINEA'] ?> 
					</td>
					<td>			
						<?= $entreprise['emplacement'] ?> 
					</td>
					<td>			
						<?= $entreprise['email'] ?> 
					</td>
				</tr>
				
	<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
</body>
</html>