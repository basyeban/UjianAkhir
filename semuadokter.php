<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Dokter RSUI Kustati</title>
  <link rel="stylesheet" href="styles.css">
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
      <a href="#" class="logo">
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

  <div class="container">
        <h3>Daftar Dokter</h3>
        <table class="specialist-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Biaya</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM doctor");
                while ($tampil = mysqli_fetch_array($data)) {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[username]</td>
                        <td>$tampil[spec]</td>
                        <td>" . number_format($tampil['docFees'], 0, ',', '.') . " IDR</td>
                        <td>$tampil[email]</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
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
        <p>IGD : (0271) 2937111</p>
        <p>IGD : (0271) 643013 ext 1100</p>
        <p>HomeVisit : 0813 2688 3336</p>
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

    .container {
        max-width: 90%; /* Maksimal lebar kontainer (90% dari lebar layar) */
        margin: 0 auto; /* Membuat kontainer berada di tengah secara horizontal */
    }

    .specialist-table {
        width: 100%; /* Lebar tabel mengikuti container */
        border-collapse: collapse; /* Menghilangkan spasi antar border */
        margin: 20px 0; /* Memberikan jarak vertikal antara tabel dan elemen lainnya */
        border: 1px solid #ddd; /* Border tabel */
        background-color: #f9f9f9; /* Warna latar belakang tabel */
    }

    .specialist-table th, 
    .specialist-table td {
        padding: 12px 15px; /* Memberikan padding untuk isi tabel */
        text-align: left; /* Perataan teks */
        border: 1px solid #ddd; /* Border untuk sel */
    }

    .specialist-table thead th {
        background-color: var(--verdigris, #00adb3); /* Warna latar belakang header (fallback ke biru) */
        color: white; /* Warna teks header */
        font-weight: bold; /* Membuat teks header tebal */
    }

    .specialist-table tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Warna latar baris genap */
    }

    .specialist-table tbody tr:hover {
        background-color: #ddd; /* Warna latar saat baris dihover */
    }

    h3 {
        text-align: center;
        color: #333;
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

    .footer-section p{
      margin-bottom: 10px;
      font-size: 15px;
    }

    .card .footer-section p {
      margin: 5px 0;
      color: #333;
      font-size: 15px;
    }

    .footer-section h3 {
      font-size: 30px;
      margin-bottom: 10px;
      color: white;
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