<!DOCTYPE html>
<?php
include('function.php');
include('newfunction.php');
$con = mysqli_connect("localhost", "root", "", "hms");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$pid = $_SESSION['pid'];
$username = $_SESSION['username'];
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$gender = $_SESSION['gender'];
$lname = $_SESSION['lname'];
$contact = $_SESSION['contact'];

if (isset($_POST['app-submit'])) {
  $pid = $_SESSION['pid'];
  $username = $_SESSION['username'];
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $gender = $_SESSION['gender'];
  $contact = $_SESSION['contact'];
  $doctor = $_POST['doctor'];
  $email = $_SESSION['email'];
  $docFees = $_POST['docFees'];
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];
  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Jakarta');
  $cur_time = date("H:i:s");
  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);

  // Calculate the date one month from now
  $oneMonthFromNow = date("Y-m-d", strtotime("+1 month"));

  if ($appdate1 < strtotime($oneMonthFromNow)) {
    if (date("Y-m-d", $appdate1) >= $cur_date) {
      if ((date("Y-m-d", $appdate1) == $cur_date && date("H:i:s", $apptime1) > $cur_time) || date("Y-m-d", $appdate1) > $cur_date) {
        $check_query = mysqli_query($con, "SELECT apptime FROM appointment WHERE doctor='$doctor' AND appdate='$appdate' AND apptime='$apptime' AND (userStatus='1' AND doctorStatus='1')");
        if (mysqli_num_rows($check_query) == 0) {
          $query = mysqli_query($con, "INSERT INTO appointment(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) VALUES($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");
          if ($query) {
            echo "<script>
                    Swal.fire({
                      title: 'Sukses!',
                      text: 'Perjanjianmu berhasil ditambahkan',
                      icon: 'success',
                      confirmButtonText: 'OK'
                    });
                  </script>";
          } else {
            echo "<script>
                    Swal.fire({
                      title: 'Gagal!',
                      text: 'Tidak dapat memproses permintaan Anda. Silakan coba lagi!',
                      icon: 'error',
                      confirmButtonText: 'OK'
                    });
                  </script>";
          }
        } else {
          echo "<script>
                  Swal.fire({
                    title: 'Maaf!',
                    text: 'Dengan menyesal kami informasikan bahwa dokter tidak tersedia pada saat atau tanggal ini. Silakan pilih waktu atau tanggal lain!',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                  });
                </script>";
        }
      } else {
        echo "<script>
                Swal.fire({
                  title: 'Peringatan!',
                  text: 'Pilihlah Jam atau Tanggal perjanjian',
                  icon: 'warning',
                  confirmButtonText: 'OK'
                });
              </script>";
      }
    } else {
      echo "<script>
              Swal.fire({
                title: 'Peringatan!',
                text: 'Pilihlah Jam atau Tanggal perjanjian',
                icon: 'warning',
                confirmButtonText: 'OK'
              });
            </script>";
    }
  } else {
    echo "<script>
            Swal.fire({
              title: 'Peringatan!',
              text: 'Pilih tanggal dalam satu bulan dari sekarang!',
              icon: 'warning',
              confirmButtonText: 'OK'
            });
          </script>";
  }
}

if (isset($_GET['cancel'])) {
  $query = mysqli_query($con, "UPDATE appointment SET userStatus='0' WHERE AppID = '" . $_GET['AppID'] . "'");
  if ($query) {
    echo "<script>
            Swal.fire({
              title: 'Sukses!',
              text: 'Perjanjianmu berhasil dibatalkan',
              icon: 'success',
              confirmButtonText: 'OK'
            });
          </script>";
  }
}

function get_specs()
{
  $con = mysqli_connect("localhost", "root", "", "hms");
  $query = mysqli_query($con, "SELECT username, spec FROM doctor");
  $docarray = array();
  while ($row = mysqli_fetch_assoc($query)) {
    $docarray[] = $row;
  }
  $options = '';
  foreach ($docarray as $doc) {
    $options .= '<option value="' . $doc['username'] . '">' . $doc['spec'] . '</option>';
  }
  return $options;
}

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pwd = $_POST['password'];
  $query = "UPDATE patient SET password='$pwd' WHERE email='$email'";
  $data = mysqli_query($con, $query);
  if ($data) {
    echo "<script>
            Swal.fire({
              title: 'Sukses!',
              text: 'Password berhasil diubah',
              icon: 'success',
              confirmButtonText: 'OK'
            });
          </script>";
  } else {
    echo "<script>
            Swal.fire({
              title: 'Gagal!',
              text: 'Gagal merubah password',
              icon: 'error',
              confirmButtonText: 'OK'
            });
          </script>";
  }
}

// Function to check if the appointment is prescribed
function isAccepted($id)
{
  global $con;
  $query = "SELECT * FROM appointment WHERE AppID = '$id' AND doctorStatus=0";
  $result = mysqli_query($con, $query);
  return mysqli_num_rows($result) > 0;
}

// Function to check if the appointment is cancelled
function isCancelled($id)
{
  global $con;
  $query = "SELECT * FROM appointment WHERE AppID = '$id' AND userStatus = 0";
  $result = mysqli_query($con, $query);
  return mysqli_num_rows($result) > 0;
}
?>
<script>
  function validateAppointmentForm() {
    var spec = document.getElementById('spec').value;
    var doctor = document.getElementById('doctor').value;
    var docFees = document.getElementById('docFees').value;
    var appdate = document.querySelector('[name=appdate]').value;
    var apptime = document.getElementById('apptime').value;

    if (spec === "" || doctor === "" || docFees === "" || appdate === "" || apptime === "") {
      Swal.fire({
        title: 'Peringatan!',
        text: 'Silakan pilih semua bidang yang wajib diisi.',
        icon: 'warning',
        confirmButtonText: 'OK'
      });
      return false;
    }
    return true;
  }
</script>
<html lang="en">
<head>
  <script src="https://kit.fontawesome.com/2323653b3c.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style4.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <title>Halaman Pasien</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .status-prescribed {
      color: green;
      font-weight: bold;
    }
    .status-canceled {
      color: red;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <!-- dashboard -->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-plus-medical'></i>
      <span class="logo_name"><a href="patient-panel.php"> RSUI Kustati : Appointment System</a></span>
    </div>
    <ul class="nav-links">
      <li>
        <a class="active" href="patient-panel.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="booking.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Daftar Pelayanan</span>
        </a>
      </li>
      <li>
        <a href="history.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">History Pelayanan</span>
        </a>
      </li>
      <li>
        <a href="resep.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-detail'></i>
          <span class="links_name">Resep Obat</span>
        </a>
      </li>
      <li>
        <a href="ubah.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-detail'></i>
          <span class="links_name">Ubah Password</span>
        </a>
      </li>
      <li class="log_out">
        <a href="logout.php" onclick="logout()">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Log out</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- sections  -->
  <div class="section-container" id="sections">
    <!-- navbar -->
    <nav>
      <div class="welcome">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="admin">
          <?php
          $greeting = "Welcome, " . $username;
          echo $greeting;
          ?>
        </span>
      </div>
    </nav>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
          sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      }
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const sidebarBtn = document.querySelector(".sidebarBtn");
        const sidebar = document.querySelector(".sidebar");
        const sections = document.querySelector("#sections");
        const links = document.querySelectorAll(".nav-links li a");

        // Show the dashboard section by default
        document.getElementById("list-dash").style.display = "block";
        document.getElementById("list-doc").style.display = "none";
        document.querySelector(".nav-links li a.active").classList.remove("active");
        document.querySelector(".nav-links li a[href='#list-dash']").classList.add("active");

        // Hide other sections when the page loads
        document.querySelectorAll(".home-content").forEach(function(section) {
          if (section.id !== "list-dash") {
            section.style.display = "none";
          }
        });

        // Toggle sidebar
        sidebarBtn.onclick = function() {
          sidebar.classList.toggle("active");
          if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
          } else {
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
          }
        };

        // Handle click events for navigation links
        links.forEach(function(link) {
          link.addEventListener("click", function(event) {
            event.preventDefault();
            const targetSection = document.querySelector(this.getAttribute("href"));
            sections.querySelectorAll(".home-content").forEach(function(section) {
              section.style.display = "none";
            });
            targetSection.style.display = "block";
            document.querySelector(".nav-links li a.active").classList.remove("active");
            this.classList.add("active");
          });
        });
      });

      // logout button code
      function logout() {
        event.preventDefault();
        window.location.href = "logout.php"; // Redirect to logout.php
      }

      // default page contents js
      function clickDiv(id) {
        document.querySelector(id).click();
      }
    </script>
    <!-- Default contents and dashboard contents -->
    <div class="section-container">
      <div class="home-content" id="list-dash">
        <div class="overview-boxes">
          <div class="box">
            <div class="right-side">
              <i class="fa fa-users fa-2x"></i>
              <h4>Buat Pelayanan</h4>
              <p>
                <a href="booking.php">
                  Pendaftaran
                </a>
              </p>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <i class="fa fa-paperclip fa-2x"></i>
              <h4>Pelayanan Saya</h4>
              <p>
                <a href="history.php">
                  Lihat history Pelayanan
                </a>
              </p>
            </div>
          </div>
          <div class="box">
            <div class="right-side">
              <i class="fa fa-list-ul fa-2x"></i>
              <h4>Resep Obat</h4>
              <p>
                <a href="resep.php">
                  Lihat list resep
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>