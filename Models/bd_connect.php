<?php
$host="localhost";
$dbname="sousemploi";
$user="root";
$password="";
	try
	{
		$connect = new PDO("mysql:host=localhost;dbname=sousemploi", "root", "");
		//$connect = new PDO("mysql:host=us-cdbr-iron-east-01.cleardb.net;dbname=heroku_553016b43f67dee", "b25cc9b81ba22c", "1104ad70");
		if($connect)
	 	{
	 		echo "Connexion Reussi";
	 	}
	}catch(PDOExeption $event)
	{
		die('Attention Erreur : '.$event->getMessage());
	}
	 	
	 	

?>