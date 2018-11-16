<?php
	 
	require_once '../Models/offremploidao.php';

	if(isset($_POST['inscrit']))
	{
		$idOffre_Emploi = $_POST['idOffre_Emploi'];
		$nomOffre = $_POST['nomOffre'];
		$typeContrat = $_POST['typeContrat'];
		$description = $_POST['description'];
		$idProfil_Recherche = $_POST['idProfil_Recherche'];
		$idEntreprise = $_POST['idEntreprise'];

		$results = updateprofil($idOffre_Emploi, $nomOffre, $typeContrat,$description, $idProfil_Recherche, $idEntreprise);
		if($results)
		{
			header('location:../Views/ListeOffre.php');
		}
	}

?>