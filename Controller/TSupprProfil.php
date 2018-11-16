<?php
	
	require_once '../Models/profildao.php';

	if(isset($_GET['idProfil_Recherche']))
	{
		$idProfil_Recherche = $_GET['idProfil_Recherche'];
		$results = deleteprofil($idProfil_Recherche );
		if($results)
		{
			header('location:../Views/ListeProfil.php');
		}

	}



?>