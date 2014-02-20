<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Le blog de Groman</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

  </head>

  <body>

    <?php $pageName = 'post'; include('template_navbar.php'); ?>

    <div class="container">

      <?php include('header.html') ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        	<!-- affichage du billet -->
	        <div id='post_mono'>
				<h1><?php echo $post['titre'] ?></h1>
				<p><?php echo $post['contenu'] ?></p>
			</div>

			<!-- formulaire pour poster un com -->
			<div class='formPost'>
				<form action="post.php?id=<?php echo $_GET['id'] ?>" method="post">
			        <p>
				        <label for="pseudo">Pseudo</label> : <input type="text" name="pseudo" id="pseudo" /><br />
				        <label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
				        <input type="submit" value="Envoyer" />
				    </p>
				</form>
			</div>

			<!-- affichage des commentaires -->
			<?php
			foreach ($commentaires as $commentaire)
			{
				?>
				<div class='comm'>
					<h2><?php echo $commentaire['auteur'] ?></h2>
					<p><?php echo $commentaire['contenu'] ?></p>
				</div>
				<?php
			}
			?>

        </div><!-- /.blog-main -->

        <?php include('sidebar.html') ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="blog-footer">
      <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </div>


    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>