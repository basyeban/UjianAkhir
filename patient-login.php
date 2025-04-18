<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
  <link rel="stylesheet" href="style5.css">
  <title>Login Pasien</title>
  <link rel="stylesheet" type="text/css" href="style5.css">
  <script>
    function myMenuFunction() {
      var i = document.getElementById("navMenu");

      if (i.className === "nav-menu") {
        i.className += " responsive";
      } else {
        i.className = "nav-menu";
      }
    }
    function redirectToPatientLogin() {
      window.location.replace("index-login.php");
    }
    function redirectToDoctorLogin() {
      window.location.replace("doctor-login.php");
    }
    function redirectToAdminLogin() {
      window.location.replace("admin-login.php");
    }

    function showForm(formId) {
      var forms = document.getElementsByClassName("register-container");
      for (var i = 0; i < forms.length; i++) {
        forms[i].style.display = "none";
      }
      var form = document.getElementById(formId);
      form.style.display = "block";
    }
  </script>
</head>

<body>

  <div class="wrapper">
    <nav class="nav">
      <div class="nav-logo">
        <a href="index.php"><img src="logo.png" alt="">
          <span>Rumah Sakit Umum Islam Kustati</span>
      </div>
      <div class="nav-menu" id="navMenu">
        <ul>
          <li><a href="patient-login.php" class="mobile-only">Pasien</a></li>
          <li><a href="doctor-login.php" class="mobile-only">Dokter</a></li>
          <li><a href="admin-login.php" class="mobile-only">Admin</a></li>
        </ul>
      </div>
      <div class="nav-button">
        <button class="btn white-btn" id="registerBtn" onclick="redirectToPatientLogin()">Pasien</button>
        <button class="btn white-btn" id="registerBtn" onclick="redirectToDoctorLogin()">Dokter</button>
        <button class="btn white-btn" id="registerBtn" onclick="redirectToAdminLogin()">Admin</button>
      </div>
      <div class="nav-menu-btn">
        <i class="bx bx-menu" onclick="myMenuFunction()"></i>
      </div>
    </nav>
    <div class="form-box">
      <div class="register-container" id="loginPatient">
        <div class="top">
          <header>Login sebagai Pasien</header>
        </div>
        <form method="POST" action="function.php">
          <div class="two-forms">
            <div class="input-box">
              <input type="text" name="email" class="form-control" placeholder="Masukkan email ID" />
              <i class="bx bx-user"></i><br><br>
            </div><br>
            <div class="input-box">
              <input type="password" class="form-control" name="password2" placeholder="Masukkan password" />
              <i class="bx bx-lock-alt"></i><br><br>
            </div>
          </div><br><br>
          <div class="input-box">
            <input type="submit" id="inputbtn" name="patsub" value="Login" class="btnRegister">
          </div><br>
            <button type="button" class="btnlogin" onclick="window.location.href='index-login.php';">Sign-Up</button>
          </div>
        </form>

      </div>
    </div>


  </div>

</body>

</html>
