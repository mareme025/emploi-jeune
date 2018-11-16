<?php
	
	require_once '../Models/entreprisedao.php';

	if(isset($_GET['idEntreprise']))
	{
		$idEntreprise = $_GET['idEntreprise'];
		$results = deletentreprise($idEntreprise );
		if($results)
		{
			header('location:../Views/ListeEntreprise.php');
		}

	}



?>