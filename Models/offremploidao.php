<?php

	require_once 'bd_connect.php';
	function insertoffremploi($nomOffre,$typeContrat,$description,$idEntreprise,$idProfil_Recherche)
	{
		$sql = "INSERT INTO offre_emploi VALUES('', '$nomOffre','$typeContrat','$description','$idEntreprise','$idProfil_Recherche')";
		$connect = getConnexion();
		$results = mysqli_query($connect,$sql);
		return $results;
	}

	function listeoffremploi()
	{
		$sql = "SELECT * FROM offre_emploi";
		$connect = getConnexion();
		$results = mysqli_query($connect,$sql);
		return $results;
	}

?>