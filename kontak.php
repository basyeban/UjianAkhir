<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Info Kontak</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
  <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
  <?php
  $menus = [
    'Beranda' => 'index.php',
    'Dokter' => 'semuadokter.php',
    'Tentang Kami' => 'tentangkami.php',
    'Kontak' => 'kontak.php'
  ];
  ?>
  <nav class="navbar">
    <div class="navbar-container">
      <a href="index.php" class="logo">
        <img src="assets/images/logo.png" alt="Logo" />
      </a>
      <ul class="menu">
        <?php foreach ($menus as $name => $link): ?>
          <li><a href="<?php echo $link; ?>"><?php echo $name; ?></a></li>
        <?php endforeach; ?>
        <li><a href="index-login.php" class="signup">Sign-Up</a></li>
      </ul>
    </div>
  </nav>

  <div class="background-section">
    <div class="container">
      <div class="content">
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.363934796758!2d110.8267903!3d-7.5809593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1669e97a0db9%3A0x98a2d5e8023abf4c!2sKustati%20Islamic%20General%20Hospital!5e0!3m2!1sen!2sid!4v1698750492385!5m2!1sen!2sid"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="info-kontak">
          <h3 class="title">Info Kontak</h3>
          <div class="details">
            <div class="alamat">
              <h2>ALAMAT</h2>
              <p class="sub-title">Jl. Kapten Mulyadi No.249, Ps. Kliwon, Kec. Ps. Kliwon, Kota Surakarta, Jawa Tengah 57118</p>
            </div>
            <div class="kontak">
              <h2>KONTAK</h2>
              <p class="sub-title"> (0271) 2937111 (IGD)</p>
              <p class="sub-title"> (0271) 643013 ext 1100 (IGD)</p>
              <p class="sub-title"> 0813 1717 0505 (HOME VISIT)</p>
            </div>
            <div class="pengaduan">
              <h2>LAYANAN PENGADUAN</h2>
              <p> 0813 2688 3336</p>
              <p> rsuikustati@yahoo.com</p>
            </div>
            <div class="sosmed">
              <h2>IKUTI SOSIAL MEDIA KAMI</h2>
              <div class="icons">
                <a href="https://www.instagram.com/rsui.kustati/" target="_blank">
                  <i class='bx bxl-instagram'></i>
                </a>
                <a href="https://www.facebook.com/p/rsuikustati" target="_blank">
                  <i class='bx bxl-facebook'></i>
                </a>
                <a href="https://www.youtube.com/@rsui.kustati" target="_blank">
                  <i class='bx bxl-youtube'></i>
                </a>
                <a href="https://x.com/rsuikustati" target="_blank">
                  <i class='bx bxl-twitter'></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="chat-button">
      <a href="https://wa.me/+6283154764741">Tanya Kami</a>
    </div>
  </div>
  </div>

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
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .navbar {
      background-color: #000000;
      padding: 25px 35px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
    }

    .navbar-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      max-width: 1200px;
    }

    .logo img {
      width: 160px;
    }

    .menu {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 40px;
    }

    .menu li {
      display: inline;
    }

    .menu li a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .signup {
      background-color: #00897b;
      padding: 8px 15px;
    }

    .signup:hover {
      background-color: #00bfa5;
    }

    /* .background-section {
      background: linear-gradient(to right, #004d40, #00695c);
      padding: 20px;
      color: white;
    } */

    .container {
      max-width: 1200px;
      margin: 0 auto;
      margin-top: 50px;
      margin-bottom: 50px;
      padding: 50px;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 4px 6px #000000;
    }

    .title{
      text-align: center;
      margin-top: 30px;
      margin-bottom: 30px;
      font-size: 50px;
    }

    .content {
      display: flex;
      gap: 20px;
    }

    .map {
      flex: 1;
      max-width: 400px;
      aspect-ratio: 1 / 1;
    }

    .map iframe {
      width: 100%;
      height: 100%;
      border: 0;
      border-radius: 10px;
    }

    .info-kontak {
      flex: 2;
      color: black;
    }

    h1 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    .details {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .details>div {
      flex: 1 1 calc(50% - 20px);
      min-width: 300px;
    }

    h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }

    p {
      margin: 12px 0;
    }

    .icons {
      display: flex;
      gap: 15px;
      margin: 20px 0;
    }

    .icons a {
      text-decoration: none;
      color: #333;
      font-size: 24px;
      transition: color 0.3s ease;
    }

    .icons a:hover {
      color: #007bff;
    }

    .chat-button {
      position: fixed;
      bottom: 20px;
      right: 20px;
    }

    .chat-button a {
      background-color: #00c853;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 50px;
      cursor: pointer;
      font-size: 16px;
    }

    .chat-button a:hover {
      background-color: #00a944;
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
      text-decoration: none; /* Menghapus garis bawah default */
      transition: color 0.3s ease, text-shadow 0.3s ease; /* Efek transisi yang halus */
    }

    .contact-link:hover {
      color:rgb(6, 155, 192);
    }

    .footer-section h3 {
      font-size: 30px;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .footer-section p{
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
  </style>
</body>

</html>