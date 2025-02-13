<?php
include 'lib/header.php';
?>
      
      

<footer class="footer" style="background-image: url('./assets/images/footer-bg.png')">
    <div class="container">

      <div class="section footer-top">

        <div class="footer-brand" data-reveal="bottom">

          <a href="#" class="logo">
            <img src="./assets/images/logo.png" width="136" height="46" loading="lazy" alt="Kustati home">
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

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>
</body>

</html>