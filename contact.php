<?php

if(!empty($_POST["envoyer"])) {

  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $sujet = $_POST['objet'];
  $message = $_POST['message'];

  $toEmail = "chrlmztt@gmail.com";
  $mailHeaders = "From: " . $nom . "<". $email .">\r\n";

  if(mail($toEmail, $sujet, $message, $mailHeaders)) {
      $message = "Le formulaire à bien été envoyé.";
  }

}
?>