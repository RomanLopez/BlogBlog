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

    <?php $pageName = 'index'; include('template_navbar.php'); ?>

    <div class="container">

      <?php include('header.html') ?>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <?php
          foreach ($liste_posts as $liste_post)
          {
            ?>
            <div class="blog-post">
              <h2 class="blog-post-title"><?php echo '<a href="post.php?id='.$liste_post['id'].'">'.$liste_post['titre'].'</a>'?></h2>
              <p class="blog-post-meta"><?php echo 'poste le ' . $liste_post['jour'] .  ' / ' . $liste_post['mois'] . ' / ' . $liste_post['annee'] . ' a ' .  $liste_post['heure'] . 'h' .$liste_post['minute']?></p>
              <p><?php echo $liste_post['contenu'] ?></p>
            </div>
            <?php
          }
          ?>

          <ul class="pager">
            <?php
              if($count == $nbPostsPage)
                echo '<li><a href="index.php?page='.($page + 1).'">Articles plus anciens</a></li>';
              if($page>0)
                echo '<li><a href="index.php?page='.($page - 1).'">Articles plus recents</a></li>';
            ?>
          </ul>

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