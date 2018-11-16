<!-- <?php
	
	//$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");

	//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");

	//REQUETE PERMETTANT D'AFFICHER LES ELEMENTS D'UNE TABLE DANS UNE BASE DE DONNEE


	//$sql=$connect->prepare('SELECT * FROM offre_emploi');
	//AFFICHAGE DES INFORMATIONS SE TROUVANT DANS LA BASE DE DONNEES


	//$afficheoffremploi = $sql->execute();
	//RECUPERATION DES RESULTATS 

	//$offremplois = $sql->fetchAll();
?> -->
<?php
		
        //$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
        $connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		$sql =$connect->query('SELECT nomOffre FROM offre_emploi ORDER BY idOffre DESC');

		if(isset($_GET['querys']) AND !empty($_GET['querys']))
		{
			$querys=htmlspecialchars($_GET['querys']);
			$sql = $connect->query('SELECT nomOffre FROM offre_emploi WHERE nomOffre LIKE "%'.$querys.'%" ORDER BY idOffre DESC');
		}

		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Liste des Offres</title>
	<link rel="stylesheet" type="text/css" href="Style/style.css">
</head>
<body class="body">

	<div class="entete">
		<ul>
			<li><a class="JOBBOOK"><img src="./image/JOBBOOK.png"></a></li>
			<li><a class="findjobs" href="ListeOffreA.php">Find Jobs</a></li>
			<li><a class="findtalent" href="connexion.php">Find Talents</a></li>
			<li class="signIn"><a class="textsignIn" href="connexion.php">Sign in</a></li>
			<li class="signUp"><a class="textsignUp" href="choix.php">Sign up</a></li>
		</ul>
	</div>
	<br><br><br>
					<form method="GET" action="recherche.php">
						<h3 class="listeoffre">Find Jobs</h3>
						<input class="jobs" type="text" name="prenometu"  placeholder="All jobs" value="<?php echo $userinfo['prenometu'];?>">
						<input class="location" type="search" name="querys"  placeholder="All Location">
						<button class="saves" type="submit" name="research">Search Now</button>
                    </form>
                    <?php if($sql->rowCount() > 0 ){ ?>
	<ul>
		<?php while ($off = $sql->fetch()){ ?>
				<li><?= $off['nomOffre'] ?></li>
			<?php } ?>
	</ul>
	<?php } else { ?>
		Aucun resultat pour: <?= $querys ?>
	<?php } ?>

</body>
</html>