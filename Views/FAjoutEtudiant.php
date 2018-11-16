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
		
		<form method="POST" action="../Controller/TAjoutEtudiant.php" class="formetu">
			<div class="talent">Talent</div>
			<input class="prenometu" type="text" name="prenometu"  placeholder="First name">
			<input class="nometu" type="text" name="nometu"  placeholder="Last name">
			<input class="emailetu" type="email" name="emailetu"  placeholder="Email">
			<input class="passwordetu" type="password" name="motdepasse" placeholder="Password">
			<button class="signupetu" type="submit" name="inscrit">Inscription </button>
		</form>
	</body>
		<!-- <footer>
			<p>Copyright &copy; 2018 Jobbook.com</p>
		</footer> -->
	</body> 
</html>