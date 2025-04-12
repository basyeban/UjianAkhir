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
  $doctor = $_POST['doctor'];
  $docFees = $_POST['docFees'];
  $appdate = $_POST['appdate'];
  $apptime = $_POST['apptime'];

  $cur_date = date("Y-m-d");
  date_default_timezone_set('Asia/Jakarta');
  $cur_time = date("H:i:s");

  $apptime1 = strtotime($apptime);
  $appdate1 = strtotime($appdate);
  $oneMonthFromNow = strtotime("+1 month");

  if ($appdate1 < $oneMonthFromNow) {
    if (date("Y-m-d", $appdate1) >= $cur_date) {
      if ((date("Y-m-d", $appdate1) == $cur_date && date("H:i:s", $apptime1) > $cur_time) || date("Y-m-d", $appdate1) > $cur_date) {
        $check_query = mysqli_query($con, "SELECT apptime FROM appointment WHERE doctor='$doctor' AND appdate='$appdate' AND apptime='$apptime' AND (userStatus='1' AND doctorStatus='1')");

        if (mysqli_num_rows($check_query) == 0) {
          $query = mysqli_query($con, "INSERT INTO appointment(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) 
            VALUES('$pid','$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

          if ($query) {
            echo "<script>alert('Perjanjianmu berhasil ditambahkan'); window.location.href = 'patient-panel.php';</script>";
            exit();
          } else {
            echo "<script>alert('Tidak dapat memproses permintaan Anda. Silakan coba lagi!'); window.history.back();</script>";
            exit();
          }
        } else {
          echo "<script>alert('Dokter tidak tersedia pada waktu tersebut. Silakan pilih waktu lain.'); window.history.back();</script>";
          exit();
        }
      } else {
        echo "<script>alert('Pilih waktu atau tanggal perjanjian yang valid.'); window.history.back();</script>";
        exit();
      }
    } else {
      echo "<script>alert('Tanggal perjanjian tidak boleh di masa lalu.'); window.history.back();</script>";
      exit();
    }
  } else {
    echo "<script>alert('Tanggal perjanjian harus dalam satu bulan ke depan.'); window.history.back();</script>";
    exit();
  }
}

// Cancel appointment
if (isset($_GET['cancel']) && isset($_GET['AppID'])) {
  $appID = $_GET['AppID'];
  $query = mysqli_query($con, "UPDATE appointment SET userStatus='0' WHERE AppID='$appID'");
  if ($query) {
    echo "<script>alert('Perjanjian berhasil dibatalkan.'); window.location.href = 'patient-panel.php';</script>";
    exit();
  }
}

// Ubah password
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $pwd = $_POST['password'];

  $query = "UPDATE patient SET password='$pwd' WHERE email='$email'";
  $data = mysqli_query($con, $query);
  if ($data) {
    echo "<script>alert('Password berhasil diubah'); window.location.href = 'patient-panel.php';</script>";
    exit();
  } else {
    echo "<script>alert('Gagal merubah password'); window.history.back();</script>";
    exit();
  }
}

// Function get_specs
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

// Helper function
function isAccepted($id)
{
  global $con;
  $query = "SELECT * FROM appointment WHERE AppID = '$id' AND doctorStatus = 0";
  $result = mysqli_query($con, $query);
  return mysqli_num_rows($result) > 0;
}

function isCancelled($id)
{
  global $con;
  $query = "SELECT * FROM appointment WHERE AppID = '$id' AND userStatus = 0";
  $result = mysqli_query($con, $query);
  return mysqli_num_rows($result) > 0;
}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ubah Password</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style4.css">
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/2323653b3c.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-plus-medical'></i>
      <span class="logo_name"><a href="patient-panel.php">RSUI Kustati : Appointment System</a></span>
    </div>
    <ul class="nav-links">
      <li><a class="active" href="patient-panel.php"><i class='bx bx-grid-alt'></i><span class="links_name">Dashboard</span></a></li>
      <li><a href="booking.php"><i class='bx bx-list-ul'></i><span class="links_name">Daftar Pelayanan</span></a></li>
      <li><a href="history.php"><i class='bx bx-list-ul'></i><span class="links_name">History Pelayanan</span></a></li>
      <li><a href="resep.php"><i class='bx bx-detail'></i><span class="links_name">Resep Obat</span></a></li>
      <li><a href="ubah.php"><i class='bx bx-detail'></i><span class="links_name">Ubah Password</span></a></li>
      <li class="log_out"><a href="logout.php"><i class='bx bx-log-out'></i><span class="links_name">Log out</span></a></li>
    </ul>
  </div>

  <div class="section-container">
    <nav>
      <div class="welcome">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="admin">Welcome, <?php echo $username; ?></span>
      </div>
    </nav>

    <div class="home-content" id="list-change-password">
      <div class="change-password-form">
        <center><h4 style="font-size: 30px;">Ubah Password</h4></center>
        <form class="form-group" method="post" action="" style="margin-top: 40px;">
          <div>
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div>
            <label for="new-password">Password Baru:</label>
            <input type="password" name="password" class="form-control" required>
          </div><br>
          <div class="btn">
            <input type="submit" name="submit" value="Ubah Password" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      sidebarBtn.classList.toggle("bx-menu-alt-right");
      sidebarBtn.classList.toggle("bx-menu");
    };
  </script>

</body>
</html>
