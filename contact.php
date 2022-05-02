<?php
    session_start();
  ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/84f87a4f79.js" crossorigin="anonymous"></script>
    <title>Charly Muziotti - Web Developer</title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/index.css" />
        <!-- CSS -->

</head>

<header class="header">
    <nav class="navbar">
      <a href="/index.html#banner">A propos de moi</a>
      <a href="/index.html#competences">Compétences</a>
      <a href="/index.html#portfolio">Portfolio</a>
      <a href="#">Contactez-moi</a>
    </nav>

    <div class="icons">
      <i class="fas fa-bars" id="menu-bars"></i>
    </div>
  </header>

  <body>
<div id="scroll_to_top">
    <a href="#top"><i class="fa fa-solid fa-arrow-up"></i></a>
</div>

<section class="contact-block">
    <div class="contact">

      <?php
      if(array_key_exists('errors', $_SESSION)): ?>
      <div class="alert alert-danger">
        <?= implode ('<br>', $_SESSION['errors']); ?>
      </div>
      <?php endif; ?>
      <?php
      if(array_key_exists('success', $_SESSION)): ?>
      <div class="alert alert-success">
        Votre email a bien été envoyé
      </div>
      <?php endif; ?>
        <!-- FORMULAIRE -->
        <form action="contact1.php" method="POST">
            <p>Contactez-moi</p>
            <input type="email" name="email" placeholder="Email" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>"><br>
            <input type="text" name="nom" placeholder="Nom" value="<?= isset($_SESSION['inputs']['nom']) ? $_SESSION['inputs']['nom'] : ''; ?>"><br>
            <input type="text" name="objet" placeholder="Objet"><br>
            <textarea name="message"  placeholder="Votre message" rows="15"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
            <input type="submit" name="envoyer" value="Envoyer">
        </form>

        <!-- OMBRES -->
        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
    </div>
    </section>

      <!-- FOOTER -->
      <footer class="footer">
        <div class="infos">
           <p>Charly MUZIOTTI</p>
           <p>34000 MONTPELLIER</p>
           <div id="button-container">
            <a href="mailto:chrlmztt@gmail.com">
            <button class="primary-button">
                <p>Ecrivez-moi !</p>
              <span class="round" />
            </button>
        </a>
          </div>
           <p>SIRET : 91138608400014</p>
        </div>
        <div class="social-networks">
            <a href="https://twitter.com/charlymcrypto" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="mailto:chrlmztt@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
            <a href="https://www.linkedin.com/in/charly-muziotti/" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://github.com/ACJF00" target="_blank"><i class="fa fa-github-alt"></i></a>
        </div>
     </footer>
     <!-- FOOTER -->

        <!-- JS -->
        <script src="js/script.js"></script>
        <!-- JS -->

</body>
</html>

<?php 
  unset($_SESSION['inputs']);
  unset($_SESSION['success']);
  unset($_SESSION['errors']); 
?>