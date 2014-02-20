<?php
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'passbidon');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }

  if(isset($_POST['adresse']))
  {
    $to = 'roman@rurallab.org';
    $subject = $_POST['sujet'];
    $message = $_POST['message'];
    $headers = 'From: '. $_POST['adresse'];

    mail($to, $subject, $message, $headers);
  }

  include('template_contact.php');
?>