<?php
include 'lib/header.php';
?>

<!-- CSS styling untuk Tentang Kami -->
<style>
  .container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }

  .section-title {
    text-align: center;
    color:rgb(0, 0, 0);
    margin: 40px 0;
    padding: 20px;
    border-bottom: 2px solid #00adb3;
  }

  .history {
    background: #ffffff;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  .vision-mission {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
  }

  .card {
    background: #f8f9fa;
    border-radius: 10px;
    padding: 25px;
    flex: 1 1 300px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  .card h3 {
    color: #00adb3;
    border-bottom: 2px solid #00adb3;
    padding-bottom: 10px;
    margin-bottom: 15px;
  }

  .card ul {
    list-style: disc;
    margin-left: 20px;
  }

  @media (max-width: 768px) {
    .vision-mission {
      flex-direction: column;
    }
  }

  /* Tambahan styling untuk dropdown */
  .dropdown-section {
    margin: 20px 0;
  }

  .dropdown-item {
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin: 10px 0;
  }

  details {
    border: 1px solid #ddd;
    border-radius: 10px;
  }

  summary {
    list-style: none;
    cursor: pointer;
    padding: 15px;
    background: #00adb3;
    color: white;
    border-radius: 10px 10px 0 0;
    font-weight: bold;
    position: relative;
  }

  summary::marker {
    display: none;
  }

  summary::after {
    content: '+';
    position: absolute;
    right: 20px;
    transition: transform 0.3s;
  }

  details[open] summary::after {
    transform: rotate(45deg);
  }

  .dropdown-content {
    padding: 20px;
    border-top: 1px solid #eee;
  }

  @media (max-width: 768px) {
    .dropdown-item {
      flex: 1 1 100%;
    }
  }
</style>

<!-- Konten Tentang Kami -->
<div class="container">
  <h1 class="section-title" style="margin-top: 150px;">RSUI Kustati Solo</h1>

  <div class="history">
    <h2>1. Sejarah Berdirinya</h2>
    <p>
      Assalamu’alaikum Warahmatullahi wabarakaatuh.

      “Dan apabila aku sakit Dialah ( Allah ) yang menyembuhkanku.” (QS Asyu’ara ayat 80) RSUI Kustati adalah Rumah Sakit Umum Islam Kustati merupakan institusi pelayanan kesehatan didirikan oleh Yayasan Kustati. Nama “Kustati” berasal dari nama salah seorang putri bangsawan Kasunanan Surakarta yang bernama G.P.H. Hadiwijoyo.

      Riwayat gedung RSUI Kustati cukup panjang dalam sejarah perjuangan Republik Indonesia. Sejak tahun 1930 cikal bakal bangunan tersebut dipakai sebagai Asrama Siswa H.A.S (Holland Arabische School), dan semasa perjuangan kemerdekaan dipakai sebagai Markas Hizbullah. Kemudian sejak tahun 1948 gedung tersebut dipakai sebagai Sekolah Guru dan Hakim Islam (HGSI) dibawah Departemen Agama, dan pada tanggal 21 Desember 1948 bangunan gedung tersebut dibumihanguskan oleh TNI agar tidak dipakai oleh tentara Belanda.

      Awalnya pada hari Pahlawan 10 November 1962, “klinik Kustati” dibuka, yang kemudian dikembangkan menjadi “Klinik Bersalin” pada tahun 1963. Perijinan dari Dep.Kes RI sebagai rumah sakit dimulai pada tahun 1984, tepatnya melalui Surat Keputusan Departemen Kesehatan Republik Indonesia atas nama Menteri Kesehatan RI, Dirjen Yanmed No. 458 / Yankes / RS / 1984 tertanggal 6 Maret 1984.

      Di Kecamatan Pasar Kliwon, RSUI Kustati dikelilingi oleh Kelurahan Semanggi di sebelah timur, Kelurahan Gajahan dan Kelurahan Baluwarti di sebelah Barat, Kelurahan Kedung Lumbu di sebelah Utara dan Kelurahan Joyosuran di sebelah Selatan.

      Sedang ditinjau dari letak kota sekitarnya , RSUI Kustati Surakarta berdekatan dengan Kota Kawedanan Bekonang, Kabupaten Sukoharjo di sebelah timurnya dan kota kecamatan Grogol Kabupaten Sukoharjo disebelah selatannya. Disebelah Barat dibatasi oleh kecamatan Serengan dan Laweyan. Disebelah utara oleh Kecamatan Jebres.

      Ditinjau dari tempat pariwisata, maka RSUI Kustati Surakarta terletak di sebelah timur dari obyek wisata Keraton Kasunan Surakarta.
    </p>
  </div>

  <div class="history">
    <h2>2. Kedudukan & status</h2>
    <p>
      Rumah Sakit Umum Islam Kustati Surakarta adalah amal usaha dari Yayasan Kustati yang bergerak di bidang kesehatan. Adapun status dari RSUI Kustati Surakarta adalah Rumah Sakit Umum Swasta Tipe Madya (Type C).
    </p>
  </div>

  <div class="history">
    <h2>3. Letak Geografis</h2>
    <p>
      Rumah Sakit Umum Islam Kustati Surakarta mempunyai letak geografis yang sangat stratcgis di jalan Kapten Mulyadi No. 249, Kampung Wiropaten RT.03 RW.10, ” Kelurahan Pasar Kliwon, Kecamatan Pasar Kliwon, Kotamadya Surakarta. Jalan Kapten Mulyadi tersebut adalah jalur utama lalu lintas kendaraan dari terminal Bis Solo kearah Wonogiri. Saat ini dilalui jalur Batik Solo Transport (BST) Sedang ditinjau dari letak kota sekitarnya, RSUI Kustati Surakarta berdekatan dengan Kota Kawedanan Bekonang, Kabupaten Sukoharjo di sebelah timurnya dan kota kecamatan Grogol Kabupaten Sukoharjo disebelah selatannya. Disebelah Barat dibatasi oleh kecamatan Serengan dan Laweyan. Disebelah utara oleh Kecamatan Jebres. Ditinjau dari tempat pariwisata, maka RSUI Kustati Surakarta terletak di sebelah timur dari obyek wisata Keraton Kasunan Surakarta. Sedang ditinjau dari letak kota sekitarnya, RSUI Kustati Surakarta berdekatan dengan Kota Kawedanan Bekonang, Kabupaten Sukoharjo di sebelah timurnya dan kota kecamatan Grogol Kabupaten Sukoharjo disebelah selatannya.Disebelah Barat dibatasi oleh kecamatan Serengan dan Laweyan. Disebelah utara oleh Kecamatan Jebres. Ditinjau dari tempat pariwisata, maka RSUI Kustati Surakarta terletak di sebelah timur dari obyek wisata Keraton Kasunan Surakarta.
    </p>
  </div>

  <!-- Section Dropdown -->
  <div class="dropdown-section">
    <div class="dropdown-item">
      <details>
        <summary>Visi</summary>
        <div class="dropdown-content">
          <p>
            Menjadi Rumah Sakit yang memberikan pelayanan kesehatan bermutu dan professional serta berbudaya keselamatan
          </p>
        </div>
      </details>
    </div>

    <div class="dropdown-item">
      <details>
        <summary>Misi</summary>
        <div class="dropdown-content">
          <p>
            Menyelenggarakan pelayanan kesehatan yang mengutamakan mutu dan keselamatan pasien serta berbudaya keselamatan
          </p>
        </div>
      </details>
    </div>

    <div class="dropdown-item">
      <details>
        <summary>Falsafah</summary>
        <div class="dropdown-content">
          <p>
            Ikhtiar Insani Menuju Sehat
          </p>
        </div>
      </details>
    </div>

    <div class="dropdown-item">
      <details>
        <summary>Motto</summary>
        <div class="dropdown-content">
          <p>
            Apabila aku sakit Dialah ( Allah ) yang menyembuhkanku ( Asy-Syu’ara:80)
        </div>
      </details>
    </div>
  </div>
</div>

<!-- Footer tetap dipertahankan -->
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
                Main Email : <a href="mailto:ahmedbang383@gmail.com" class="contact-link">rsuikustati@yahoo.com</a>
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
                WhatsApp HomeVisit : <a href="https://wa.me/+6281326883336" class="contact-link">0813 2688 3336</a>
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
        HomeVisit : <a href="https://wa.me/+6281326883336" class="contact-link">0813 2688 3336</a>
        </span>

      </div>

      <ul class="footer-list" data-reveal="bottom">

        <li>
          <p class="headline-sm footer-list-title">Menu</p>
        </li>

        <li>
          <a href="index.php" class="text footer-link">Beranda</a>
        </li>

        <li>
          <a href="semuadokter.php" class="text footer-link">Dokter</a>
        </li>

        <li>
          <a href="tentangkami.php" class="text footer-link">Tentang Kami</a>
        </li>

        <li>
          <a href="kontak.php" class="text footer-link">Kontak</a>
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

      <p class="text copyright">&copy; RSUI Kustati 2025 | All Rights Reserved by <a href="https://github.com/basyeban">AchmadDaniel</a></p>

      <style>
        .copyright {
          display: inline-flex;
          align-items: center;
          gap: 5px;
          /* Jarak antar elemen */
          white-space: nowrap;
          /* Mencegah teks turun ke bawah */
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

<!-- Sisanya tetap seperti kode asli -->
<script src="./assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
  <ion-icon name="chevron-up"></ion-icon>
</a>