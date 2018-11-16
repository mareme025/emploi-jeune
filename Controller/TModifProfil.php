<?php
	 
	require_once '../Models/profildao.php';

	if(isset($_POST['inscrit']))
	{
		$idProfil_Recherche = $_POST['idProfil_Recherche'];
		$nom_profil = $_POST['nom_profil'];
		$results = updateprofil($idProfil_Recherche, $nom_profil);
		if($results)
		{
			header('location:../Views/ListeProfil.php');
		}
	}

?>