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
  <title>History Pelayanan</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
  function cancelAppointment(AppID) {
    event.preventDefault(); // Mencegah tindakan default dari link
    Swal.fire({
      title: 'Apakah Anda yakin?',
      text: 'Anda ingin membatalkan perjanjian ini?',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ya, batalkan!'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirect ke URL pembatalan jika dikonfirmasi
        window.location.href = `history.php?AppID=${AppID}&cancel=update`;
      }
    });
    return false; // Mencegah tindakan default dari link
  }
</script>
  <style>
    .pagination {
      margin-top: 20px;
      text-align: center;
    }
    .pagination a {
      display: inline-block;
      padding: 10px 15px;
      margin: 5px;
      text-decoration: none;
      color: #333;
      background-color: #f1f1f1;
      border: 1px solid #ddd;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }
    .pagination a:hover {
      background-color: #007bff;
      color: white;
    }
    .pagination a.active {
      background-color: #007bff;
      color: white;
      font-weight: bold;
      border-color: #0056b3;
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
    <!-- Appointment history section -->
    <div class="home-content" id="list-app">
      <div>
      <table class="app-table">
  <thead>
    <tr>
      <th scope="col">Nama Dokter</th>
      <th scope="col">Biaya Konsultasi</th>
      <th scope="col">Tanggal Perjanjian</th>
      <th scope="col">Jam Perjanjian</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $con = mysqli_connect("localhost", "root", "", "hms");
    global $con;
    $limit = 8; // Jumlah data per halaman
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;
    $countQuery = "SELECT COUNT(*) AS total FROM appointment WHERE fname ='$fname' AND lname='$lname'";
    $countResult = mysqli_query($con, $countQuery);
    $totalRecords = mysqli_fetch_array($countResult)['total'];
    $totalPages = ceil($totalRecords / $limit);
    $query = "SELECT AppID, doctor, docFees, appdate, apptime, userStatus, doctorStatus 
              FROM appointment 
              WHERE fname ='$fname' AND lname='$lname' 
              ORDER BY appdate DESC, apptime DESC 
              LIMIT $offset, $limit";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result)) {
      $doctor = $row['doctor'];
      $docFees = $row['docFees'];
      $userStatus = $row['userStatus'];
      $apptime = $row['apptime'];
      $appdate = $row['appdate'];
      $doctorStatus = $row['doctorStatus'];
      $AppID = $row['AppID'];
      $accepted = isAccepted($AppID);
      $cancelled = isCancelled($AppID);
    ?>
      <tr>
        <th scope="row"><?php echo $doctor; ?></th>
        <td><?php echo $docFees; ?></td>
        <td><?php echo $appdate; ?></td>
        <td><?php echo $apptime; ?></td>
        <td>
          <?php
          if ($cancelled) {
            echo "Cancelled";
          } elseif ($accepted) {
            echo "Accepted";
          } else {
            echo "Active";
          }
          ?>
        </td>
        <td>
          <?php if (!$cancelled && !$accepted) { ?>
            <a href="patient-panel.php?AppID=<?php echo $row['AppID'] ?>&cancel=update"
              onClick="return cancelAppointment(<?php echo $row['AppID']; ?>)"
              title="Cancel Appointment">
              <button class="btn btn-primary">Batalkan</button>
            </a>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
        <div class="pagination">
          <?php
          if ($page > 1) {
            echo '<a href="?page=' . ($page - 1) . '">Previous</a>';
          }
          for ($i = 1; $i <= $totalPages; $i++) {
            echo '<a href="?page=' . $i . '" ' . ($i == $page ? 'class="active"' : '') . '>' . $i . '</a>';
          }
          if ($page < $totalPages) {
            echo '<a href="?page=' . ($page + 1) . '">Next</a>';
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>
</html>