<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <title><?= $title; ?></title>
  </head>
  <body>
    <header id="site-header">
      <a href="#" class="logo">Logo</a>

      <nav class="navbar">
        <a class="<?= $title === 'Accueil'? 'active' : ''; ?>" href="<?= url('accueil') ?>">Accueil</a>
        <a class="<?= $title === 'Avis'? 'active' : ''; ?>" href="./sign_up.html">Avis</a>
        <a class="<?= $title === 'Connexion'? 'active' : ''; ?>" href="<?= url('connexion') ?>">Connexion</a>
        <a class="<?= $title === 'Selection'? 'active' : ''; ?>" href="<?= url('selection') ?>">Nos plats</a>
        <a class="<?= $title === 'Contact'? 'active' : ''; ?>" href="<?= url('contact') ?>">Contact</a>
        <a class="<?= $title === 'FAQ'? 'active' : ''; ?>" href="#faq">FAQ</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
      </div>
    </header>