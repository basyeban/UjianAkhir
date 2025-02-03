<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
    <title>Tentang Kami</title>
</head>
<body>
<nav class="navbar">
        <a href="index.php" class="logo">
            <img src="assets/images/logo.png" alt="Logo" />
        </a>
        <button class="menu-toggle" onclick="myMenuFunction()">
            ☰
        </button>
        <ul class="nav-menu" id="navMenu">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="semuadokter.php">Dokter</a></li>
            <li><a href="tentangkami.php">Tentang Kami</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="index-login.php" class="signup">Sign-Up</a></li>
        </ul>
    </nav>

    <script>
        function myMenuFunction() {
            var menu = document.getElementById("navMenu");

            if (menu.classList.contains("responsive")) {
                menu.classList.remove("responsive");
            } else {
                menu.classList.add("responsive");
            }
        }
    </script>

  <div class="container">
    <h1 class="title">Tentang Kami</h1>
    <img src="assets/images/LOGO-BARU-24.png" alt="Logo" class="image" />
  </div>



  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <div class="card">
        <div class="footer-section logo">
          <img src="assets/images/logo.png" alt="Logo RSUI Kustati" />
          <p>Main Email: rsuikustati@yahoo.com</p>
          <p>Inquiries: info@mail.com</p>
          <p>Telepon IGD: (0271) 2937111</p>
          <p>WhatsApp HomeVisit: 0813 2688 3336</p>
        </div>
      </div>
      <div class="footer-section kontak">
        <h3>Kontak</h3>
        <p>IGD : <a href="tel:(0271) 2937111" class="contact-link">(0271) 2937111</a></p>
        <p>IGD : <a href="tel:(0271) 643013 ext 1100" class="contact-link">(0271) 643013 ext 1100</a></p>
        <p>HomeVisit : <a href="https://wa.me/+6281326883336" class="contact-link">0813 2688 3336</a></p>
      </div>
      <!-- <div class="footer-section fasilitas">
        <h3>Fasilitas</h3>
        <ul>
          <li><a href="#">Conditions</a></li>
          <li><a href="#">Listing</a></li>
          <li><a href="#">How It Works</a></li>
          <li><a href="#">What We Offer</a></li>
          <li><a href="#">Latest News</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div> -->
      <div class="footer-section social-media">
        <h3>Sosial Media</h3>
        <ul>
          <li><a href="https://x.com/rsuikustati">Twitter</a></li>
          <li><a href="https://www.facebook.com/p/rsuikustati-100064256675572/?locale=id_ID">Facebook</a></li>
          <li><a href="https://www.instagram.com/rsui.kustati/">Instagram</a></li>
          <li><a href="https://www.youtube.com/@rsui.kustati">YouTube</a></li>
        </ul>
      </div>
      <div class="footer-section lokasi">
        <h3>Lokasi</h3>
        <p>Jl. Kapten Mulyadi No.249, Ps. Kliwon,<br>Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57118</p>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.363934796758!2d110.8267903!3d-7.5809593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1669e97a0db9%3A0x98a2d5e8023abf4c!2sKustati%20Islamic%20General%20Hospital!5e0!3m2!1sen!2sid!4v1698750492385!5m2!1sen!2sid"
          width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; RSUI Kustati 2025 | All Rights Reserved by <a href="https://github.com/basyeban">AchmadDaniel</a></p>
    </div>
  </footer>

  <style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar Styles */
        .navbar {
            background-color: #000000;
            padding: 15px 35px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
            position: relative;
        }

        .logo img {
            width: 160px;
        }

        .nav-menu {
            list-style: none;
            display: flex;
            gap: 30px;
        }

        .nav-menu li {
            display: inline;
            text-align: center;
        }

        .nav-menu li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .signup {
            background-color: #00adb3;
            padding: 8px 15px;
        }

        .signup:hover {
            background-color: #00bfa5;
        }

        /* Hamburger Button */
        .menu-toggle {
            display: none;
            font-size: 30px;
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 15px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .menu-toggle {
                display: block;
            }

            .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 60px;
                right: 0;
                background-color: rgba(0, 0, 0, 0.9);
                width: 200px;
                padding: 15px;
                border-radius: 5px;
            }

            .nav-menu.responsive {
                display: flex;
            }

            .nav-menu li {
                margin: 10px 0;
                text-align: right;
            }

            .nav-menu li a {
                display: block;
                color: white;
                text-align: center;
                font-size: 16px;
                padding: 8px;
            }
        }

    .container{
      display: flex;
      justify-content: center;
    }

    .title{
      font-size: 40px;
      align-items: center;
      margin-top: 50px;
    }

    .image{
      width: 100px;
      align-items: center;
    }

    .footer {
      background-color: #004d40;
      color: white;
      margin-top: 50px;
      padding: 30px 20px;
      font-size: 14px;
    }

    .footer-container {
      display: flex;
      flex-wrap: wrap;
      gap: 50px;
      max-width: 1200px;
      margin: 0 auto;
      justify-content: space-between;
    }

    .card {
      background-color: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      margin: 20px auto;
      max-width: 400px;
      text-align: center;
    }

    .card .footer-section img {
      max-width: 160px;
      margin-bottom: 10px;
    }

    .card .footer-section p {
      margin: 5px 0;
      color: #333;
      font-size: 15px;
    }

    .contact-link {
      color: #ffffff;
      text-decoration: none;
      transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .contact-link:hover {
      color: rgb(6, 155, 192);
    }

    .footer-section h3 {
      font-size: 30px;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .footer-section p {
      margin-bottom: 10px;
      font-size: 15px;
    }

    .footer-section ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .footer-section ul li {
      margin: 5px 0;
    }

    .footer-section ul li a {
      color: white;
      font-size: 20px;
      text-decoration: none;
      transition: color 0.3s;
    }

    .footer-section ul li a:hover {
      color: #00bfa5;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      border-top: 1px solid #00695c;
      padding-top: 15px;
    }

    .footer-bottom a {
      color: #00e676;
      text-decoration: none;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
      }

      .footer-section {
        width: 100%;
        margin-bottom: 20px;
      }
    }

    @media (max-width: 768px) {
      .footer {
        padding: 20px;
      }

      .footer-section h3 {
        font-size: 24px;
      }

      .footer-section p, .footer-section ul li a {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .footer {
        padding: 15px;
      }

      .footer-section h3 {
        font-size: 20px;
      }

      .footer-section p, .footer-section ul li a {
        font-size: 14px;
      }
    }
  </style>

</body>
</html>