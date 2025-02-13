<?php
include 'lib/header.php';
?>
      
      <div class="background-section">
    <div class="container">
      <div class="content">
      <!-- <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.363934796758!2d110.8267903!3d-7.5809593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1669e97a0db9%3A0x98a2d5e8023abf4c!2sKustati%20Islamic%20General%20Hospital!5e0!3m2!1sen!2sid!4v1698750492385!5m2!1sen!2sid"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div> -->
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
                <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="https://www.facebook.com/p/rsuikustati" target="_blank">
                <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="https://www.youtube.com/@rsui.kustati" target="_blank">
                <ion-icon name="logo-youtube"></ion-icon>
                </a>
                <a href="https://x.com/rsuikustati" target="_blank">
                <ion-icon name="logo-twitter"></ion-icon>
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

  <style>
    /* .container {
  max-width: 1200px;
  margin: 0 auto;
  margin-top: 50px;
  margin-bottom: 50px;
  padding: 50px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15), 
              0 15px 30px rgba(0, 0, 0, 0.1);
} */


.title {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 30px;
  font-size: 50px;
}

.content {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
  margin-top: 30px;
  margin-bottom: 30px;
}

.details {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 20px;
}

.details > div {
  background: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
  flex: 1 1 calc(50% - 20px);
  min-width: 300px;
  text-align: center;
}

.info-kontak {
  margin-top: 35px;
  color: black;
}

h1 {
  font-size: 32px;
  margin-bottom: 20px;
}

h2 {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}

p {
  margin: 12px 0;
  font-size: 16px;
  color: #555;
}


.icons {
  display: flex;
  gap: 15px;
  margin: 20px 0;
  justify-content: center;
}

.icons a {
  text-decoration: none;
  color: #333;
  font-size: 24px;
  transition: color 0.3s ease;
}

.icons a:hover {
  color: #00adb3;
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
  text-decoration: none;
}

.chat-button a:hover {
  background-color: #00a944;
}

@media (max-width: 768px) {
  .container {
    padding: 30px;
  }
  .title {
    font-size: 40px;
  }
  .content {
    flex-direction: column;
    align-items: center;
  }
  /* .map-card {
    max-width: 100%;
  } */
  .details > div {
    flex: 1 1 100%;
  }
}

@media (max-width: 480px) {
  .title {
    font-size: 30px;
  }
  .container {
    padding: 20px;
  }
  .chat-button a {
    font-size: 14px;
    padding: 8px 16px;
  }
}

  </style>

<footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" width="136" height="46" loading="lazy" alt="Doclab home">
          </a>

          <ul class="contact-list has-after">

            <li class="contact-item">

              <div class="item-icon" style="margin-top: 20px;">
                <ion-icon name="mail-open-outline"></ion-icon>
              </div>

              <div>
                <p style="color:#ffffff;">
                  Main Email : <a href="mailto:ahmedbang383@gmail.com" class="contact-link">rsuikustati@yahoo.com</a>
                </p>

                <p style="color:#ffffff;">
                  Inquiries : <a href="mailto:Info@mail.com" class="contact-link">Info@mail.com</a>
                </p>
              </div>

            </li>

            <li class="contact-item">

              <div class="item-icon" style="margin-top: 20px;">
                <ion-icon name="call-outline"></ion-icon>
              </div>

              <div>
                <p style="color:#ffffff;">
                  Telepon IGD : <a href="tel:(0271) 2937111" class="contact-link">(0271) 2937111</a>
                </p>

                <p style="color:#ffffff;">
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

      <p class="text copyright" style="color: #ffffff;">&copy; RSUI Kustati 2025 | All Rights Reserved by <a href="https://github.com/basyeban">AchmadDaniel</a></p>
        
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
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>





  <!-- 
    - #BACK TO TOP
  -->

  <!-- <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a> -->
</body>

</html>