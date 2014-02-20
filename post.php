<?php
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'passbidon');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$billet = $bdd->prepare('SELECT id, date_post, titre, contenu, pour_prof FROM billet_blog WHERE id = :id');
	$billet->execute(array(':id' => $_GET['id']));
	$post = $billet->fetch();

	if(isset($_POST['pseudo']))
	{
		$req = $bdd->prepare('INSERT INTO com_blog (id_billet, auteur, contenu) VALUES(:id, :pseudo, :message)');
		$req->execute(array(':id' => $_GET['id'], ':pseudo' => $_POST['pseudo'], ':message' => $_POST['message']));
	}

	$coms = $bdd->prepare('SELECT id, auteur, contenu FROM com_blog WHERE id_billet = :id');
	$coms->execute(array(':id' => $_GET['id']));
	$commentaires = $coms->fetchAll();

	include('template_post.php');

	$coms->closeCursor();
?>