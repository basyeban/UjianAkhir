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
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/svg+xml">

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

  <header class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <img src="./assets/images/logo.png" width="136" height="46" alt="Doclab home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="index.php" class="logo">
            <img src="./assets/images/logo.png" width="136" height="46" alt="Doclab home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="semuadokter.php" class="navbar-link title-md">Doctors</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Services</a>
          </li>

          <li class="navbar-item">
            <a href="kontak.php" class="navbar-link title-md">Contact</a>
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





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="section hero" style="background-image: url('./assets/images/hero-bg.png')" aria-label="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle has-before" data-reveal="left">Welcome To RSUI Kustati</p>

            <h1 class="headline-lg hero-title" data-reveal="left">
              Temukan Dokter Terbaik <br>
              Anda.
            </h1>

            <a href="index-login.php" class="hover-button">Sign-Up / Sign-In</a>

          </div>

          <figure class="hero-banner" data-reveal="right">
            <img src="./assets/images/hero-banner.png" width="590" height="517" loading="eager" alt="hero banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" aria-label="service">
        <div class="container">

          <ul class="service-list">

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-1.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Orthopedi</a>
                </h3>

                <p class="card-text">
                  Layanan Orthopedi RSUI Kustati Profesional
                </p>

                <!-- <button class="btn-circle" aria-label="read more about psychiatry">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-2.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Mulut & Gigi</a>
                </h3>

                <p class="card-text">
                  Layanan Mulut & Gigi RSUI Kustati Profesional
                </p>

                <!-- <button class="btn-circle" aria-label="read more about Gynecology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-3.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">Kandungan</a>
                </h3>

                <p class="card-text">
                  Layanan Kandungan RSUI Kustati Profesional
                </p>

                <!-- <button class="btn-circle" aria-label="read more about Pulmonology">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button> -->

              </div>
            </li>

            <li>
              <div class="service-card" data-reveal="bottom">

                <div class="card-icon">
                  <img src="./assets/images/icon-4.png" width="71" height="71" loading="lazy" alt="icon">
                </div>

                <h3 class="headline-sm card-title">
                  <a href="#">THT</a>
                </h3>

                <p class="card-text">
                  Layanan THT RSUI Kustati Profesional
                </p>

                <!-- <button class="btn-circle" aria-label="read more about Orthopedics">
                  <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                </button> -->

              </div>
            </li>

          </ul>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-labelledby="about-label">
        <div class="container">

          <div class="about-content">

            <p class="section-subtitle title-lg has-after" id="about-label" data-reveal="left">About Us</p>

            <h2 class="headline-md" data-reveal="left">Experienced Workers</h2>

            <p class="section-text" data-reveal="left">
              Aliquam faucibus, odio nec commodo aliquam, neque felis placerat dui, a porta ante lectus dapibus est.
              Aliquam
            </p>

            <ul class="tab-list" data-reveal="left">

              <li>
                <h3 class="tab-btn">Ikhtiar Insani Menuju Sehat</h3>
              </li>

            </ul>

            <p class="tab-text" data-reveal="left">
              Aliquam faucibus, odio nec commodo aliquam, neque felis placerat dui, a porta ante lectus dapibus est.
              Aliquam a bibendum mi, sed condimentum
            </p>

            <div class="wrapper">

              <ul class="about-list">

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Sonsectetur adipisicing elit</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Exercitation ullamco laboris</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Eiusmod tempor incididunt</span>
                </li>

                <li class="about-item" data-reveal="left">
                  <ion-icon name="checkmark-circle-outline"></ion-icon>

                  <span class="span">Aolore magna aliqua</span>
                </li>

              </ul>

            </div>

          </div>

          <figure class="about-banner" data-reveal="right">
            <img src="./assets/images/about-banner.png" width="554" height="678" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">
          <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Daftar Dokter</p>
          <h2 class="headline-md" data-reveal="left">Rumah Sakit Umum Islam Kustati</h2>
      
          <table class="specialist-table" aria-labelledby="listing-label">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Spesialis</th>
                <th>Biaya</th>
                <th>Email</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Psychiatry</td>
                <td>Spesialis Umum</td>
                <td>Rp 10.000</td>
                <td>123@gmail.com</td>
              </tr>
            </tbody>
          </table>
      
          <!-- Tombol di bawah tabel -->
          <div class="button-container">
            <a href="semuadokter.php" class="navigate-button">Lihat Semua Dokter</a>
          </div>
        </div>
      </section>
      
      <style>
        .button-container {
          margin-top: 20px;
          margin-left: 450px;
          margin-right: 450px;
          text-align: center; /* Pusatkan tombol */
        }
      
        .navigate-button {
          background-color: #008080; /* Warna tosca gelap */
          color: #fff;
          border: none;
          padding: 10px 20px;
          font-size: 16px;
          cursor: pointer;
          border-radius: 5px;
          transition: background-color 0.3s ease;
        }
      
        .navigate-button:hover {
          background-color: #006666; /* Warna tosca yang lebih gelap saat hover */
        }
      </style>
      
      <!-- 
        - #BLOG
      -->

      <!-- <section class="section blog" aria-labelledby="blog-label">
        <div class="container">

          <p class="section-subtitle title-lg text-center" id="blog-label" data-reveal="bottom">
            News & Article
          </p>

          <h2 class="section-title headline-md text-center" data-reveal="bottom">Latest Articles</h2>

          <ul class="grid-list">

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Could intermittent fasting reduce breast cancer</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">Give children more autonomy during the pandemic</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

            <li>
              <div class="blog-card has-before has-after" data-reveal="bottom">

                <div class="meta-wrapper">

                  <div class="card-meta">
                    <ion-icon name="person-outline"></ion-icon>

                    <span class="span">By Admin</span>
                  </div>

                  <div class="card-meta">
                    <ion-icon name="folder-outline"></ion-icon>

                    <span class="span">Specialist</span>
                  </div>

                </div>

                <h3 class="headline-sm card-title">How do binge eating and drinking impact the liver?</h3>

                <time class="title-sm date" datetime="2022-01-28">28 January, 2022</time>

                <p class="card-text">
                  Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                  labore et dolore magna aliquyam erat
                </p>

                <a href="#" class="btn-text title-lg">Read More</a>

              </div>
            </li>

          </ul>

        </div>
      </section> -->

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" width="136" height="46" loading="lazy" alt="Doclab home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Main Email : <a href="mailto:contact@website.com" class="contact-link">rsuikustati@yahoo.com</a>
                </p>

                <p>
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p>
                  Telepon IGD : <a href="tel:(0271) 2937111" class="contact-link">(0271) 2937111</a>
                </p>

                <p>
                  WhatsApp HomeVisit : <a href="https://wa.me/081326883336" class="contact-link">0813 2688 3336</a>
                </p>
              </div>

            </li>

          </ul>

        </div>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Kontak</p>

            <span class="text"></span>
              IGD : <a href="tel:(0271) 2937111" class="contact-link">(0271) 2937111</a>
            </span>

            <span class="text"></span>
              IGD : <a href="tel:(0271) 643013 ext 1100" class="contact-link">(0271) 643013 ext 1100</a>
            </span>

            <span class="text"></span>
              HomeVisit : <a href="https://wa.me/081326883336" class="contact-link">0813 2688 3336</a>
            </span>

        </div>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Fasilitas</p>
          </li>

          <li>
            <p class="text footer-link">Conditions</p>
          </li>

          <li>
            <p class="text footer-link">Listing</p>
          </li>

          <li>
            <p class="text footer-link">How It Works</p>
          </li>

          <li>
            <p class="text footer-link">What We Offer</p>
          </li>

          <li>
            <p class="text footer-link">Latest News</p>
          </li>

          <li>
            <p class="text footer-link">Contact Us</p>
          </li>

        </ul>

        <ul class="footer-list" data-reveal="bottom">

          <li>
            <p class="headline-sm footer-list-title">Social Media</p>
          </li>

          <li>
            <a href="https://x.com/rsuikustati" class="text footer-link">twitter</a>
          </li>

          <li>
            <a href="https://www.facebook.com/p/rsuikustati-100064256675572/?locale=id_ID" class="text footer-link">Facebook</a>
          </li>

          <li>
            <a href="https://www.instagram.com/rsui.kustati/" class="text footer-link">Instagram</a>
          </li>

          <li>
            <a href="https://www.youtube.com/@rsui.kustati" class="text footer-link">Youtube</a>
          </li>

        </ul>

        <div class="footer-list" data-reveal="bottom">

          <p class="headline-sm footer-list-title">Lokasi</p>

          <form action="" class="footer-form">
          <span class="text">
              Jl. Kapten Mulyadi No.249, Ps. Kliwon, Kec. Ps. Kliwon, <br>
              Kota Surakarta, Jawa Tengah 57118 
            </span>

            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.363934796758!2d110.8267903!3d-7.5809593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1669e97a0db9%3A0x98a2d5e8023abf4c!2sKustati%20Islamic%20General%20Hospital!5e0!3m2!1sen!2sid!4v1698750492385!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </form>

        </div>

      </div>

      <div class="footer-bottom">

        <p class="text copyright">
          &copy; RSUI Kustati <span id="current-year"></span> | All Rights Reserved by codewithsadee
        </p>
        
        <style>
          .copyright {
            display: inline-flex;
            align-items: center;
            gap: 5px; /* Jarak antar elemen */
            white-space: nowrap; /* Mencegah teks turun ke bawah */
          }
        </style>
        
        <script>
          // Mengambil tahun saat ini
          document.getElementById("current-year").textContent = new Date().getFullYear();
        </script>
        

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

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>