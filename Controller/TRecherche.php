<?php
		
        //$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
        $connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		//$sql =$connect->query('SELECT nomOffre FROM offre_emploi ORDER BY idOffre DESC');

		if(isset($_GET['querys']) AND !empty($_GET['querys']))
		{
			$querys=htmlspecialchars($_GET['querys']);
			$sql = $connect->query('SELECT nomOffre FROM offre_emploi WHERE nomOffre LIKE "%'.$querys.'%" ORDER BY idOffre DESC');
		}

		
?>
					<?php if($sql->rowCount() > 0 ){ ?>
	<ul>
		<?php while ($off = $sql->fetch()){ ?>
				<li><?= $off['nomOffre'] ?>
                header('location:../Views/ListeOffreA.php');
                </li>
			<?php } ?>
	</ul>
	<?php } else { ?>
		Aucun resultat pour: <?= $querys ?>
	<?php } ?>