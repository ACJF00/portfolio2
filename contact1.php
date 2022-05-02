<?php

  $errors = [];

    if(!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {
      $errors['nom'] = "Vous n'avez pas renseigné votre nom";
    }
    if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Vous n'avez pas renseigné votre email";
    }
    if(!array_key_exists('objet', $_POST) || $_POST['objet'] == '') {
      $errors['objet'] = "Vous n'avez pas renseigné d'objet";
    }
    if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
      $errors['message'] = "Votre message est vide";
    }

    session_start();

    if(!empty($errors)) {
      $_SESSION['errors'] = $errors;
      $_SESSION['inputs'] = $_POST;
      header('Location: contact.php');
    } else {
      $_SESSION['success'] = 1;
      $message = $_POST['message'];
      $headers = 'FROM:site@local.dev';
      $objet = $_POST['objet'];
      mail("chrlmztt@gmail.com", $objet, $message, $headers);
      header('Location: contact.php');
    }
  ?>