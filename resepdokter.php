<!DOCTYPE html>

<?php
include('function1.php');
$con = mysqli_connect("localhost", "root", "", "hms");
$doctor = $_SESSION['dname'];   

// Function to check if the appointment is prescribed
function isPrescribed($id)
{
    global $con;
    $query = "SELECT * FROM prescriptiontable WHERE AppID = '$id'";
    $result = mysqli_query($con, $query);
    return mysqli_num_rows($result) > 0;
}
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
if (isset($_GET['accept'])) {
    $AppID = $_GET['AppID'];
    $sql = mysqli_query($con, "UPDATE appointment SET doctorStatus= 0 WHERE AppID = '$AppID'");
    if ($sql) {
        echo "<script>alert('Your appointment was successfully accepted.');</script>";
    }
}

if (isset($_GET['cancel'])) {
    $AppID = $_GET['AppID'];
    $query = mysqli_query($con, "UPDATE appointment SET userStatus = 0 WHERE AppID = '$AppID'");
    if ($query) {
        echo "<script>alert('Your appointment was successfully cancelled.');</script>";
    }
}
// if (isset($_GET['accept'])) {
//     $AppID = $_GET['AppID'];
//     $query = mysqli_query($con, "UPDATE appointment SET userStatus= 1 WHERE AppID = '$AppID'");
//     if ($query) {
//         echo "<script>alert('Your appointment was successfully Accepted.');</script>";
//     }
// }

if (isset($_GET['prescribe'])) {
    $AppID = $_GET['AppID'];
    $appdate = $_GET['appdate'];
    $apptime = $_GET['apptime'];
    $disease = $_GET['disease'];
    $allergy = $_GET['allergy'];
    $prescription = $_GET['prescription'];
    $query = mysqli_query($con, "INSERT INTO prescriptiontable(doctor, AppID, appdate, apptime, disease, allergy, prescription) VALUES ('$doctor', '$AppID', '$appdate', '$apptime', '$disease', '$allergy', '$prescription');");
    if ($query) {
        echo "<script>alert('Prescribed successfully!');</script>";
    } else {
        echo "<script>alert('Unable to process your request. Try again!');</script>";
    }
}

?>

<html lang="en">
<head>
<script src="https://kit.fontawesome.com/2323653b3c.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
    <link rel="stylesheet" href="style4.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Resep Pasien</title>
</head>
<body>
<div class="sidebar">
        <div class="logo-details">
            <i class='bx bx-plus-medical'></i>
            <span class="logo_name">
                <a href="doctor-panel.php">
                    RSUI Kustati : Appointment System</a>
            </span>
        </div>
        <ul class="nav-links">
            <li>
                <a class="active" href="doctor-panel.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="perjanjian.php" role="tab" data-toggle="list" aria-controls="home">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Pelayanan</span>
                </a>
            </li>
            <li>
                <a href="resepdokter.php" role="tab" data-toggle="list" aria-controls="home">
                    <i class='bx bx-detail'></i>
                    <span class="links_name">Resep Obat</span>
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
        <!-- Navbar content -->
        <nav class="doc-nav">
            <div class="welcome">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="admin"><?php echo $_SESSION['dname'] ?></span>
            </div>
            <div>
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

        <!-- Prescription section -->
        <div class="home-content" id="list-pres">
            <table class="pres-table">
                <thead>
                    <tr>
                        <th scope="col">ID Pasien</th>
                        <th scope="col">Nama Depan</th>
                        <th scope="col">ID Pelayanan</th>
                        <th scope="col">Tanggal Pelayanan</th>
                        <th scope="col">Penyakit</th>
                        <th scope="col">Alergi</th>
                        <th scope="col">Resep Obat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hms");
                    if (!$con) {
                        die("Koneksi gagal: " . mysqli_connect_error());
                    }

                    // Jumlah data per halaman
                    $limit = 8;

                    // Ambil nomor halaman dari URL (default = 1)
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Pastikan variabel $doctor diambil dari session
                    // session_start();
                    $doctor = $_SESSION['dname'];

                    // Hitung total jumlah data untuk pagination
                    $totalQuery = "SELECT COUNT(*) as total FROM prescriptiontable WHERE doctor = '$doctor'";
                    $totalResult = mysqli_query($con, $totalQuery);
                    $totalRow = mysqli_fetch_assoc($totalResult);
                    $totalRecords = $totalRow['total'];

                    // Ambil data sesuai halaman dengan limit & offset
                    $query = "SELECT pid, fname, lname, AppID, appdate, apptime, disease, allergy, prescription 
                      FROM prescriptiontable 
                      WHERE doctor = '$doctor' 
                      LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($con, $query);
                    if (!$result) {
                        echo "<tr><td colspan='9'>" . mysqli_error($con) . "</td></tr>";
                    }

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['pid']; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['AppID']; ?></td>
                            <td><?php echo $row['appdate']; ?></td>
                            <td><?php echo $row['disease']; ?></td>
                            <td><?php echo $row['allergy']; ?></td>
                            <td><?php echo $row['prescription']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="pagination">
                <?php
                $currentURL = strtok($_SERVER["REQUEST_URI"], '?');

                // Hitung total halaman
                $totalPages = ceil($totalRecords / $limit);

                // Tombol "Previous"
                if ($page > 1) {
                    echo '<a href="' . $currentURL . '?page=' . ($page - 1) . '">Previous</a>';
                }

                // Nomor halaman
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<a href="' . $currentURL . '?page=' . $i . '" ' . ($i == $page ? 'class="active"' : '') . '>' . $i . '</a>';
                }

                // Tombol "Next"
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
                    margin-bottom: 50px;
                    transition: background-color 0.3s, color 0.3s;
                }

                .pagination a:hover,
                .pagination a.active {
                    background-color: #007bff;
                    color: white;
                    font-weight: bold;
                    border-color: #0056b3;
                }
            </style>
        </div>
</body>
</html>