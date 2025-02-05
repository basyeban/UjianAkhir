<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
    <title>Tentang Kami</title>
</head>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

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

        <!-- <ul class="footer-list" data-reveal="bottom">

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

        </ul> -->

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
            gap: 5px; /* Jarak antar elemen */
            white-space: nowrap; /* Mencegah teks turun ke bawah */
          }

          .copyright a{
            color: white;
            text-decoration: none;
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

  <style>

:root {
  /**
   * colors
   */

  --rich-black-fogra-29: hsl(222, 44%, 8%);
  --middle-blue-green_40: hsla(174, 64%, 71%, 0.4);
  --midnight-green: hsl(186, 100%, 19%);
  --midnight-green_a25: hsla(186, 100%, 19%, 0.25);
  --independece: hsl(236, 14%, 39%);
  --verdigris: #00adb3;
  --ming: hsl(186, 72%, 24%);
  --space-cadet: hsla(226, 45%, 24%);
  --eerie-black: hsl(0, 0%, 13%);
  --alice-blue: hsl(187, 25%, 94%);
  --gray-web: hsl(0, 0%, 50%);
  --gainsboro: hsl(0, 0%, 87%);
  --white: hsl(0, 0%, 100%);
  --white_a20: hsla(0, 0%, 100%, 0.2);
  --white_a10: hsla(0, 0%, 100%, 0.1);
  --black: hsl(0, 0%, 0%);

  /**
   * typography
   */

  --ff-oswald: "Oswald", sans-serif;
  --ff-rubik: "Rubik", sans-serif;

  --headline-lg: 5rem;
  --headline-md: 3rem;
  --headline-sm: 2rem;
  --title-lg: 1.8rem;
  --title-md: 1.5rem;
  --title-sm: 1.4rem;

  --fw-500: 500;
  --fw-700: 800;

  /**
   * spacing
   */

  --section-padding: 120px;

  /**
   * box shadow
   */

  --shadow-1: 0px 2px 20px hsla(209, 36%, 72%, 0.2);
  --shadow-2: 0 4px 16px hsla(0, 0%, 0%, 0.06);

  /**
   * border radius
   */

  --radius-circle: 50%;
  --radius-12: 12px;
  --radius-6: 6px;
  --radius-4: 4px;

  /**
   * transition
   */

  --transition-1: 0.25s ease;
  --transition-2: 0.5s ease;
  --transition-3: 1s ease;
  --cubic-in: cubic-bezier(0.51, 0.03, 0.64, 0.28);
  --cubic-out: cubic-bezier(0.05, 0.83, 0.52, 0.97);
}

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

/* footer */
.footer {
  background-color: var(--midnight-green);
  color: var(--white);
  background-size: cover;
  background-position: top right;
  background-repeat: no-repeat;
  padding: 40px 20px;
}

.footer-top {
  display: grid;
  grid-template-columns: 1fr;
  gap: 40px;
  padding-bottom: 60px;
}

.footer-brand {
  background-color: var(--ming);
  padding: 32px;
  border-radius: var(--radius-6);
}

.footer .logo {
  flex-shrink: 0;
}

.contact-list {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.contact-item {
  display: flex;
  align-items: center;
  gap: 12px;
}

.contact-item .item-icon {
  font-size: 2rem;
  color: var(--white);
}

.contact-link {
  transition: var(--transition-1);
  color: var(--white);
  text-decoration: none;
}

.contact-link:hover {
  color: var(--verdigris);
}

.footer-list {
  display: flex;
  flex-direction: column;
  gap: 8px;
}

.footer-list-title {
  color: var(--white);
  font-weight: bold;
  margin-bottom: 10px;
  font-size: 25px;
  align-items: center;
  width: 100%;
}

.footer-link {
  color: white;
  text-decoration: none;
  opacity: 0.8;
  list-style: none;
}

.footer-link:hover {
  color: var(--verdigris);
  opacity: 1;
}

.footer-bottom {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  border-top: 1px solid var(--white_a20);
  padding-top: 20px;
}

/* Social Media Icons */
.footer-bottom .social-list {
  display: flex;
  gap: 12px;
  margin-top: 16px;
}

/* Menghapus bullet point pada daftar sosial media */
.footer-bottom .social-list {
  list-style: none; /* Hapus marker */
  padding: 0; /* Hapus padding default */
  margin: 0; /* Sesuaikan margin */
  display: flex;
  gap: 12px;
}


/* Hover effect */
.footer-bottom .social-link:is(:hover, :focus-visible) {
  background-color: var(--verdigris);
}


.social-list {
  display: flex;
  gap: 10px;
}

.social-link {
  font-size: 1.4rem;
  padding: 12px;
  background-color: var(--white_a10);
  border-radius: var(--radius-circle);
  transition: var(--transition-1);
}

/* Responsive Styles */
@media (min-width: 768px) {
  .footer-top {
    grid-template-columns: repeat(3, 1fr);
  }

  .footer-brand {
    grid-column: 1 / 3;
  }

  .contact-list {
    flex-direction: row;
    justify-content: space-between;
  }
}

@media (min-width: 1024px) {
  .footer-top {
    grid-template-columns: repeat(4, 1fr);
  }

  .footer-brand {
    grid-column: 1 / 5;
    padding: 28px 56px;
    display: grid;
    grid-template-columns: 0.3fr 1fr;
    align-items: center;
  }
}
  </style>

</body>
</html>