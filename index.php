<?php
	try
	{
	    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'passbidon');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}

	$nbPostsPage = 5;
	$page = (isset($_GET['page']))? $_GET['page'] : 0;

	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$posts = $bdd->prepare('SELECT id, DAY(date_post) AS jour, MONTH(date_post) AS mois, YEAR(date_post) AS annee, HOUR(date_post) AS heure, MINUTE(date_post) AS minute, SECOND(date_post) AS seconde, titre, contenu, pour_prof FROM billet_blog ORDER BY id DESC LIMIT :numpost , :nbposts');
	$posts->bindValue(':numpost' ,(int)($page * $nbPostsPage),PDO::PARAM_INT);
	$posts->bindValue(':nbposts' ,(int)($nbPostsPage),PDO::PARAM_INT);
	$posts->execute();
	$liste_posts = $posts->fetchAll();
	$count = $posts->rowCount();

	include('template_index.php');

	$posts->closeCursor();
?>