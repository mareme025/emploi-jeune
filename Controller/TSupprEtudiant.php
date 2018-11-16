<?php
	
	require_once '../Models/etudiantdao.php';

	if(isset($_GET['idEtudiant']))
	{
		$idEtudiant = $_GET['idEtudiant'];
		$results = deletetudiant($idEtudiant );
		if($results)
		{
			header('location:../Views/ListeEtudiant.php');
		}

	}



?>