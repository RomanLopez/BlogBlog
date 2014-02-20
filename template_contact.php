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

		<?php $pageName = 'contact'; include('template_navbar.php'); ?>

		<div class="container">

			<?php include('header.html') ?>

			<div class="row">

				<div class="col-sm-8 blog-main">

					<div class='formMail'>
						<form action="contact.php" method="post">
								<p>
									<label for="sujet">Sujet</label> : <input type="text" name="sujet" id="sujet" /><br />
									<label for="message">Message</label> :  <input type="text" name="message" id="message" /><br />
									<label for="adresse">Votre adresse</label> :  <input type="text" name="adresse" id="adresse" /><br />
									<input type="submit" value="Envoyer" />
								</p>
						</form>
					</div>

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