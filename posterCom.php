<?php
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'passbidon');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$req = $bdd->prepare('INSERT INTO com_blog (id_billet, auteur, contenu) VALUES(:id, :pseudo, :message)');
	$req->execute(array(':id' => $_POST['id'], ':pseudo' => $_POST['pseudo'], ':message' => $_POST['message']));
?>