<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar</title>
    <link rel="stylesheet" href="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: #007BFF;
            color: white;
            padding: 15px 20px;
            position: relative;
            z-index: 10;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo img {
            width: 136px;
            height: auto;
        }

        .navbar {
            display: none;
            flex-direction: column;
            background-color: white;
            color: black;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar.active {
            display: flex;
        }

        .navbar-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .nav-close-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
        }

        .navbar-list {
            list-style: none;
        }

        .navbar-item {
            margin: 10px 0;
        }

        .navbar-link {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        .navbar-link:hover {
            color: #007BFF;
        }

        .social-list {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .social-link {
            color: #333;
            font-size: 20px;
            text-decoration: none;
        }

        .social-link:hover {
            color: #007BFF;
        }

        .nav-open-btn {
            background: none;
            border: none;
            font-size: 24px;
            color: white;
            cursor: pointer;
            display: none;
        }

        .btn {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #007BFF;
            border: 1px solid white;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: white;
            color: #007BFF;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 5;
        }

        .overlay.active {
            display: block;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .nav-open-btn {
                display: block;
            }

            .navbar {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="./assets/images/logo.png" alt="Doclab home">
            </a>

            <!-- Navigation -->
            <nav class="navbar">
                <div class="navbar-top">
                    <a href="index.php" class="logo">
                        <img src="./assets/images/logo.png" alt="Doclab home">
                    </a>
                    <button class="nav-close-btn" aria-label="close menu">
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">
                    <li class="navbar-item"><a href="#" class="navbar-link">Home</a></li>
                    <li class="navbar-item"><a href="semuadokter.php" class="navbar-link">Doctors</a></li>
                    <li class="navbar-item"><a href="#" class="navbar-link">Services</a></li>
                    <li class="navbar-item"><a href="kontak.php" class="navbar-link">Contact</a></li>
                </ul>

                <ul class="social-list">
                    <li><a href="https://x.com/rsuikustati" class="social-link"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    <li><a href="https://www.facebook.com/p/rsuikustati" class="social-link"><ion-icon name="logo-facebook"></ion-icon></a></li>
                    <li><a href="https://www.instagram.com/rsui.kustati/" class="social-link"><ion-icon name="logo-instagram"></ion-icon></a></li>
                    <li><a href="https://www.youtube.com/@rsui.kustati" class="social-link"><ion-icon name="logo-youtube"></ion-icon></a></li>
                </ul>
            </nav>

            <!-- Navigation Toggle Button -->
            <button class="nav-open-btn" aria-label="open menu">
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <!-- Signup Button -->
            <a href="index-login.php" class="btn">Sign-Up</a>

            <!-- Overlay -->
            <div class="overlay"></div>
        </div>
    </header>

    <script>
        const navTogglers = document.querySelectorAll("[data-nav-toggler]");
        const navbar = document.querySelector(".navbar");
        const overlay = document.querySelector(".overlay");

        navTogglers.forEach(toggler => {
            toggler.addEventListener("click", () => {
                navbar.classList.toggle("active");
                overlay.classList.toggle("active");
            });
        });
    </script>
</body>
</html>
