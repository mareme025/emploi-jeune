<!DOCTYPE html>
<html>
<head>
	<title>Formulaire d'inscription</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body>
	<nav>
    <img src="image/images (1).jpg">
		<ul>
			<li><a href="../index.php">Jobbook</a></li>
			<li><a href="ListeOffreA.php">Find Jobs</a></li>
			<li><a href="connexion.php">Find Talents</a></li>
			<li><a href="connexion.php"><button>Sign in/ Sign up</button></a></li>
		</ul>
	</nav>
	<br><br><br><br>
			<div>
				<form method="POST" action="../Controller/TAjoutEcole.php">
					<p id="connexion"><a href="connexion.php">Sign In</a></p>
					
						<fieldset>
							<legend><h2>Create account</h2></legend>
							<div>
								<label>Nom de l'ecole</label>
							</div>
							<div>
								<input type="text" name="nomese" required="">
							</div>
							
						<div>
							<label>NINEA</label>
						</div>
						<div>
							<input type="text" name="NINEA" >
						</div>
						<div>
							<label>location</label>
						</div>
						<div>
							<input type="text" name="emplacement" >
						</div>
						<div class="form-group">
							<label>Email</label>
						</div>
						<div>
							<input type="email" name="email" required="">
						</div>
						<div class="form-group">
							<label>Mot de Passe</label>
						</div>
						<div>
							<input type="password" name="motdepasse"required="">
							<p id="connexions">Forget Password?</p>
						</div>
						<br><br>
						<div>
							<button type="submit" name="inscrit">Sign Up</button>
						</div>
						<p id="connexions">Already have an account? <a href="connexion.php">Sign In</a></p>
						</fieldset>
						
					</form>
			</div>
					
	<div class="image">
		<img src="image/facebook.png">
		<img src="image/linkedin.png">
		<img src="image/twitter.png">
	</div>
	<footer>
		<p>Copyright &copy; 2018 Jobbook.com</p>
	</footer>
</body>
</html>