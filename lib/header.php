<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>RSUI Kustati</title>
  <meta name="title" content="Doclab - home">
  <meta name="description" content="This is a madical html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-land.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">

   

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header style="background-color :black;">
    <div class="container">

      <a href="index.php" class="logo">
        <img src="./assets/images/logo.png" width="136" height="46" alt="Kusati Home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="index.php" class="logo">
            <img src="./assets/images/logo.png" width="136" height="46" alt="Kusati Home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="index.php" class="navbar-link title-md">Beranda</a>
          </li>

          <li class="navbar-item">
            <a href="semuadokter.php" class="navbar-link title-md">Dokter</a>
          </li>

          <li class="navbar-item">
            <a href="tentangkami.php" class="navbar-link title-md">Tentang Kami</a>
          </li>

          <li class="navbar-item">
            <a href="kontak.php" class="navbar-link title-md">Kontak</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="https://x.com/rsuikustati" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.facebook.com/p/rsuikustati-100064256675572/?locale=id_ID" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.instagram.com/rsui.kustati/" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="https://www.youtube.com/@rsui.kustati" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="index-login.php" class="btn has-before title-md">Sign-Up</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>


