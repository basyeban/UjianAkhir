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
      if ((date("Y-m-d", $appdate1) == $cur_date and date("H:i:s", $apptime1) > $cur_time) or date("Y-m-d", $appdate1) > $cur_date) {
        $check_query = mysqli_query($con, "SELECT apptime FROM appointment WHERE doctor='$doctor' AND appdate='$appdate' AND apptime='$apptime' AND (userStatus='1' AND doctorStatus='1')");

        if (mysqli_num_rows($check_query) == 0) {
          $query = mysqli_query($con, "insert into appointment(pid,fname,lname,gender,email,contact,doctor,docFees,appdate,apptime,userStatus,doctorStatus) values($pid,'$fname','$lname','$gender','$email','$contact','$doctor','$docFees','$appdate','$apptime','1','1')");

          if ($query) {
            echo "<script>alert('Perjanjianmu berhasil ditambahkan');</script>";
          } else {
            echo "<script>alert('Tidak dapat memproses permintaan Anda. Silakan coba lagi!');</script>";
          }
        } else {
          echo "<script>alert('Dengan menyesal kami informasikan bahwa dokter tidak tersedia pada saat atau tanggal ini. Silakan pilih waktu atau tanggal lain!');</script>";
        }
      } else {
        echo "<script>alert('Pilihlah Jam atau Tanggal perjanjian');</script>";
      }
    } else {
      echo "<script>alert('Pilihlah Jam atau Tanggal perjanjian');</script>";
    }
  } else {
    echo "<script>alert('Pilih tanggal dalam satu bulan dari sekarang!');</script>";
  }
}


if (isset($_GET['cancel'])) {
  $query = mysqli_query($con, "update appointment set userStatus='0' where AppID = '" . $_GET['AppID'] . "'");
  if ($query) {
    echo "<script>alert('Perjanjianmu Berhasil dibatalakn');</script>";
  }
}
function get_specs()
{
  $con = mysqli_connect("localhost", "root", "", "hms");
  $query = mysqli_query($con, "select username, spec from doctor");
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
    echo " <script> alert('password diubah')</script>";
  } else {
    echo "Gagal merubah password";
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
      alert("Silakan pilih semua bidang yang wajib diisi.");
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
                  lihat history Pelayanan
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
                  Lihat list resep list
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Book Appointment section
    <div class="home-content" id="list-doc">
      <div class="hcontent">
        <h4>Buat Perjanjian</h4>
        <form class="form-group" method="post" action="patient-panel.php" onsubmit="return validateAppointmentForm();">
          <div>
            <label for="spec">Spesialis:</label>
          </div>
          <div class="selspec">
            <select name="spec" class="form-control" id="spec">
              <option value="" disabled selected>Pilih Spesialis</option>
              <?php
              display_specs();
              ?>
            </select>
          </div>
          <script>
            document.getElementById('spec').onchange = function () {
              let spec = this.value;
              let docs = [...document.getElementById('doctor').options];

              docs.forEach((el, ind, arr) => {
                arr[ind].setAttribute("style", "");
                if (el.getAttribute("data-spec") != spec) {
                  arr[ind].setAttribute("style", "display: none");
                }
              });

              // Reset doctor selection and fees when specialization changes
              document.getElementById('doctor').selectedIndex = 0;
              document.getElementById('docFees').value = '';
            };

            document.getElementById('doctor').onchange = function () {
              var selection = document.querySelector(`[value="${this.value}"]`).getAttribute('data-value');
              document.getElementById('docFees').value = selection;
            };
          </script>

          <div>
            <label for="doctor">Dokter:</label>
          </div>
          <div class="sdoc">
            <select name="doctor" class="form-control" id="doctor">
              <option value="" disabled selected>Pilih Dokter</option>

              <?php display_docs(); ?>
            </select>
          </div>
          <script>
            document.getElementById('doctor').onchange = function updateFees(e) {
              var selection = document.querySelector(`[value="${this.value}"]`).getAttribute('data-value');
              document.getElementById('docFees').value = selection;
            };
          </script>
          <div>
            <label for="consultancyfees">
              Biaya Konsultasi
            </label>
          </div>
          <div class="Fees">
            <input class="form-control" type="text" name="docFees" id="docFees" readonly="readonly" />
          </div>
          <div>
            <label>Tanggal Perjanjian</label>
          </div>
          <div class="apdate">
            <input type="date" class="form-control datepicker" name="appdate">
          </div>
          <div>
            <label>Waktu Perjanjian</label>
          </div>
          <div class="Stime">
            <select name="apptime" class="form-control" id="apptime">
              <option value="" disabled selected>Pilih Waktu Perjanjian</option>
              <option value="08:00:00">8:00 AM</option>
              <option value="10:00:00">10:00 AM</option>
              <option value="12:00:00">12:00 PM</option>
              <option value="14:00:00">2:00 PM</option>
              <option value="16:00:00">4:00 PM</option>
            </select>
          </div><br>
          <center>
            <div class="btn">
              <input type="submit" name="app-submit" value="Buat Perjanjian Baru" class="btn btn-primary" id="inputbtn">
            </div>
          </center>
        </form>
      </div>
    </div> -->

    <!-- Appointment history section
    <div class="home-content" id="list-app">
        <div>
            <table class="app-table">
                <thead>
                    <tr>
                        <th scope="col">Nama Dokter </th>
                        <th scope="col">Biaya Konsultasi</th>
                        <th scope="col">Tanggal Perjanjian</th>
                        <th scope="col">Waktu Perjanjian</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hms");
                    global $con;

                    $limit = 5; // Jumlah data per halaman

                    // Ambil halaman saat ini dari parameter URL, default = 1
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Hitung total data
                    $countQuery = "SELECT COUNT(*) AS total FROM appointment WHERE fname ='$fname' AND lname='$lname'";
                    $countResult = mysqli_query($con, $countQuery);
                    $totalRecords = mysqli_fetch_array($countResult)['total'];
                    $totalPages = ceil($totalRecords / $limit);

                    // Query untuk mengambil data dengan limit
                    $query = "SELECT AppID, doctor, docFees, appdate, apptime, userStatus, doctorStatus 
              FROM appointment 
              WHERE fname ='$fname' AND lname='$lname' 
              LIMIT $offset, $limit";
                    $result = mysqli_query($con, $query);

                    while ($row = mysqli_fetch_array($result)) {
                      $doctor = $row['doctor'];
                      $docFees = $row['docFees'];
                      $appdate = $row['appdate'];
                      $apptime = $row['apptime'];
                      $userStatus = $row['userStatus'];
                      $doctorStatus = $row['doctorStatus'];
                      $AppID = $row['AppID'];

                      // Cek status appointment
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
                                        onClick="return confirm('Anda yakin ingin membatalkan perjanjian?')"
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
        </div>
    </div> -->

    <!-- Prescription section
    <div class="home-content" id="list-pres">
        <div>
            <table class="pres-table">
                <thead>
                    <tr>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">ID Perjanjian</th>
                        <th scope="col">Tanggal Perjanjian</th>
                        <th scope="col">Waktu Perjanjian</th>
                        <th scope="col">Penyakit</th>
                        <th scope="col">Alergi</th>
                        <th scope="col">Resep Obat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Connect to the database
                    $con = mysqli_connect("localhost", "root", "", "hms");
                    global $con;

                    // Define the number of records per page
                    $limit = 5;

                    // Get the current page number from the URL (default to 1 if not set)
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Query to get the total number of records
                    $countQuery = "SELECT COUNT(*) AS total FROM prescriptiontable WHERE pid='$pid'";
                    $countResult = mysqli_query($con, $countQuery);
                    $totalRecords = mysqli_fetch_array($countResult)['total'];

                    // Query to fetch the records for the current page
                    $query = "SELECT doctor, AppID, appdate, apptime, disease, allergy, prescription 
                              FROM prescriptiontable 
                              WHERE pid='$pid' 
                              LIMIT $offset, $limit";
                    $result = mysqli_query($con, $query);
                    if (!$result) {
                      echo mysqli_error($con);
                    }

                    // Display records
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['doctor']; ?></td>
                            <td><?php echo $row['AppID']; ?></td>
                            <td><?php echo $row['appdate']; ?></td>
                            <td><?php echo $row['apptime']; ?></td>
                            <td><?php echo $row['disease']; ?></td>
                            <td><?php echo $row['allergy']; ?></td>
                            <td><?php echo $row['prescription']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    
            <div class="pagination">
                <?php
                // Ambil URL saat ini tanpa parameter 'page'
                $currentURL = strtok($_SERVER["REQUEST_URI"], '?');

                // Hitung total halaman
                $totalPages = ceil($totalRecords / $limit);

                // Pastikan halaman saat ini lebih dari 1 sebelum menampilkan tombol "Previous"
                if ($page > 1) {
                  echo '<a href="' . $currentURL . '?page=' . ($page - 1) . '">Previous</a>';
                }

                // Tampilkan nomor halaman dengan link yang benar
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo '<a href="' . $currentURL . '?page=' . $i . '" ' . ($i == $page ? 'class="active"' : '') . '>' . $i . '</a>';
                }

                // Pastikan masih ada halaman berikutnya sebelum menampilkan tombol "Next"
                if ($page < $totalPages) {
                  echo '<a href="' . $currentURL . '?page=' . ($page + 1) . '">Next</a>';
                }
                ?>
    
            </div>
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
        </div>
    </div> -->

    <!-- Change Password section
    <div class="home-content" id="list-change-password">
      <div class="change-password-form">

        <center>
          <h4>Ubah Password</h4>
        </center>
        <form class="form-group" method="post" action="dashboard.php">
          <div>
            <label for="email">Email:</label>
          </div>
          <div>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div>
            <label for="new-password">New Password:</label>
          </div>
          <div>
            <input type="password" name="password" class="form-control" required>
          </div><br>
          <div class="btn">
            <input type="submit" name="submit" value="Change Password" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div> -->

  </div>
</body>

</html>