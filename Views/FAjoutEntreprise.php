<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire d'inscription</title>
		<link rel="stylesheet" type="text/css" href="Style/style.css">
	</head>
	<body class="body">
		<div class="entete">
			<ul>
				<li><a class="JOBBOOK" href="../index.php"><img src="./image/JOBBOOK.png"></a></li>
				<li><a href="../index.php"><img class="close"img src="./image/+.png"></a></li>
			</ul>
		</div>
		<div class="titleEnterprise">Entreprise</div>
		<form method="POST" action="../Controller/TAjoutEntreprise.php">
			<input class="nomese" type="text" name="nomese"  placeholder="Name enterprise">
			<input class="nineaese" type="text" name="NINEA"  placeholder="NINEA">
			<input class="locationese" type="text" name="emplacement"  placeholder="Location">
			<input class="emailese" type="email" name="email"  placeholder="Email">
			<input class="mdpese" type="password" name="motdepasse" placeholder="Password">
			<button class="signupeses" type="submit" name="inscrit">Inscription </button>
		</form>
	<!-- <footer>
		<p>Copyright &copy; 2018 Jobbook.com</p>
	</footer> -->
	</body>
</html>