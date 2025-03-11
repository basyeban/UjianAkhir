<!DOCTYPE html>
<html lang="en">
<?php
$con = mysqli_connect("localhost", "root", "", "hms");
include('newfunction.php');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['docsub'])) {
  $doctor = $_POST['doctor'];
  $dpassword = $_POST['dpassword'];
  $demail = $_POST['demail'];
  $spec = $_POST['special'];
  $docFees = $_POST['docFees'];

  // Check if the doctor already exists
  $checkQuery = "SELECT * FROM doctor WHERE username='$doctor' OR email='$demail'";
  $checkResult = mysqli_query($con, $checkQuery);

  if (mysqli_num_rows($checkResult) > 0) {
    header("Location: error3.php");
    exit();
  }

  // Insert the new doctor
  $query = "INSERT INTO doctor(username, password, email, spec, docFees) VALUES('$doctor', '$dpassword', '$demail', '$spec', '$docFees')";
  $result = mysqli_query($con, $query);

  if ($result) {
    echo "<script>alert('Doctor added successfully!');</script>";
  }
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

// For reload problem after form submission 19-29
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//   $_SESSION['form_data'] = $_POST;
//   header("Location: admin-panel.php");
//   exit();
// }
// if (isset($_SESSION['form_data'])) {
//   $form_data = $_SESSION['form_data'];
//   unset($_SESSION['form_data']);
// }
// Till here

// function validateEmail($email)
// {
//   if (empty($email)) {
//     return "Please enter the doctor's email address.";
//   }
//   return "";
// }
// if (isset($_POST['docsub1'])) {
//   $demail = $_POST['demail'];

//   $errors = array();

//   // Validate email
//   $emailError = validateEmail($demail);
//   if (!empty($emailError)) {
//     $errors[] = $emailError;
//   }

//   if (count($errors) === 0) {
//     $query = "select * from doctor where email='$demail';";
//     $result = mysqli_query($con, $query);

//     if ($result && mysqli_num_rows($result) > 0) {
//       $deleteQuery = "delete from doctor where email='$demail';";
//       $deleteResult = mysqli_query($con, $deleteQuery);

//       if ($deleteResult) {
//         echo "<script>alert('Doctor removed successfully!'); window.location.href = 'admin-panel.php#list-settings1';</script>";
//       } else {
//         echo "<script>alert('Unable to delete the doctor.'); window.location.href = 'admin-panel.php#list-settings1';</script>";
//       }
//     } else {
//       echo "<script>alert('Doctor with the provided email does not exist.');window.location.href = 'admin-panel.php#list-settings1';</script>";
//     }
//   } else {
//     $errorString = implode("\\n", $errors);
//     echo "<script>alert('$errorString'); window.location.href = 'admin-panel.php#list-settings1';</script>";
//   }
// }
mysqli_close($con);
?>
<script>
  function validateDoctorForm() {
    var doctor = document.getElementsByName("doctor")[0].value;
    var dpassword = document.getElementsByName("dpassword")[0].value;
    var cdpassword = document.getElementsByName("cdpassword")[0].value;
    var demail = document.getElementsByName("demail")[0].value;
    var spec = document.getElementsByName("special")[0].value;
    var docFees = document.getElementsByName("docFees")[0].value;

    if (doctor === "" || dpassword === "" || cdpassword === "" || demail === "" || spec === "" || docFees === "") {
      alert("All details must be included.");
      return false; // Prevent form submission
    }

    // Check email format using a regular expression
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(demail)) {
      alert("Please enter a valid email address.");
      return false; // Prevent form submission
    }

    if (dpassword !== cdpassword) {
      alert("Passwords do not match.");
      return false; // Prevent form submission
    }
    if (isNaN(docFees)) {
      alert("Consultancy Fees must be a numerical value.");
      return false; // Prevent form submission
    }

    // Check if Consultancy Fees contains only numbers
    if (!/^[0-9]+$/.test(docFees)) {
      alert("Consultancy Fees must contain only numbers.");
      return false; // Prevent form submission
    }
    return true; // Form is valid and can be submitted
  }
  if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
// function validateDeleteDoctorForm() {
//   var email = document.getElementsByName('demail')[0].value;
  
//   if (email.trim() === '') {
//     alert('Please enter the doctor\'s email address.');
//     return false; // Prevent form submission
//   }
  
//   // Rest of your validation logic
//   // ...
// }
</script>
<head>
<script src="https://kit.fontawesome.com/2323653b3c.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Data Dokter</title>
</head>
<body>
     <!-- dashboard -->
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-plus-medical'></i>
      <span class="logo_name"><a href="admin-panel.php"> RSUI Kustati : Appointment System</a></span>
    </div>
    <ul class="nav-links">
      <li>
        <a class="active" href="admin-panel.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="datadokter.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Data Dokter</span>
        </a>
      </li>
      <li>
        <a href="datapasien.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Data Pasien</span>
        </a>
      </li>
      <li>
        <a href="detailperjanjian.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-detail'></i>
          <span class="links_name">Detail Perjanjian</span>
        </a>
      </li>
      <li>
        <a href="dataresep.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bx-table'></i>
          <span class="links_name">Data Resep Obat</span>
        </a>
      </li>
      <li>
        <a href="tambahdokter.php" role="tab" data-toggle="list" aria-controls="home">
          <i class='bx bxs-book-add'></i>
          <span class="links_name">Tambah Dokter</span>
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
        <span class="admin">Welcome Admin</span>
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

    <div class="home-content" id="list-doc">
      <div>
        <form class="form-group" action="doctor search.php" method="post">
          <!-- <div class="dsearch">
            <div class="email-field">
              <input type="text" name="doctor_contact" placeholder="Search" class="form-control">
            </div>
            <div class="submit-btn">
              <input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search">
            </div>
          </div> -->
        </form>
      </div>
      <label for="filter-spesialis">Filter Spesialis:</label>
        <select id="filter-spesialis" class="filter-dropdown">
            <option value="">Semua</option>
            <option value="Spesialis Umum">Spesialis Umum</option>
            <option value="Spesialis Anak">Spesialis Anak</option>
            <option value="Spesialis Ahli Bedah">Spesialis Ahli Bedah</option>
            <option value="Spesialis Mata">Spesialis Mata</option>
            <option value="Spesialis Jantung">Spesialis Jantung</option>
            <option value="Spesialis Paru">Spesialis Paru</option>
            <option value="Spesialis Mulut & Gigi">Spesialis Mulut & Gigi</option>
            <option value="Spesialis Ortopedi">Spesialis Ortopedi</option>
            <option value="Spesialis Kandungan">Spesialis Kandungan</option>
            <option value="Spesialis THT">Spesialis THT</option>
        </select>
    
        <?php
$con = mysqli_connect("localhost", "root", "", "hms");
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jumlah data per halaman
$limit = 5;

// Ambil nomor halaman dari URL (default = 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Ambil filter spesialis dari URL
$filterSpec = isset($_GET['filter']) ? $_GET['filter'] : "";

// Hitung total data dengan filter
$totalQuery = "SELECT COUNT(*) AS total FROM doctor";
if (!empty($filterSpec)) {
    $totalQuery .= " WHERE spec = '".mysqli_real_escape_string($con, $filterSpec)."'";
}
$totalResult = mysqli_query($con, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalRecords = $totalRow['total'];

// Hitung total halaman
$totalPages = ceil($totalRecords / $limit);

// Ambil data dokter berdasarkan filter dan halaman
$query = "SELECT * FROM doctor";
if (!empty($filterSpec)) {
    $query .= " WHERE spec = '".mysqli_real_escape_string($con, $filterSpec)."'";
}
$query .= " LIMIT $limit OFFSET $offset";

$result = mysqli_query($con, $query);
?>

<!-- Tampilkan Data dalam Tabel -->
<table class="doctor-table">
    <thead>
        <tr>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Spesialis</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Biaya</th>
            <th scope="col">Kelola Dokter</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            echo "
            <tr>
                <td>{$row['username']}</td>
                <td>{$row['spec']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['docFees']}</td>
                <td>
                    <a href='update-doctor.php?un={$row['username']}&sp={$row['spec']}&em={$row['email']}&pw={$row['password']}&df={$row['docFees']}'>
                        <input type='submit' value='UPDATE' class='btn btn-primary' style='background-color: #FFD700; margin-left: 10px; color: #000;'>
                    </a>
                    <a href='delete-doctor.php?email={$row['email']}' onclick='return confirm(\"Yakin ingin menghapus dokter ini?\")'>
                        <input type='submit' value='DELETE' class='btn btn-primary' style='background-color:#ff0000; margin-left: 10px; color: #fff;'>
                    </a>
                </td>
            </tr>";
        }
        ?>
    </tbody>
</table>

<!-- Pagination -->
<div class="pagination">
    <?php
    $currentURL = strtok($_SERVER["REQUEST_URI"], '?'); // Ambil URL tanpa parameter
    $filterParam = !empty($filterSpec) ? "&filter=" . urlencode($filterSpec) : "";

    // Tombol "Previous"
    if ($page > 1) {
        echo '<a href="' . $currentURL . '?page=' . ($page - 1) . $filterParam . '">Previous</a>';
    }

    // Nomor halaman
    for ($i = 1; $i <= $totalPages; $i++) {
        echo '<a href="' . $currentURL . '?page=' . $i . $filterParam . '" ' . ($i == $page ? 'class="active"' : '') . '>' . $i . '</a>';
    }

    // Tombol "Next"
    if ($page < $totalPages) {
        echo '<a href="' . $currentURL . '?page=' . ($page + 1) . $filterParam . '">Next</a>';
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


<!-- Custom JS untuk Filter -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#filter-spesialis').on('change', function() {
            var selectedSpec = $(this).val();
            var currentURL = window.location.href.split('?')[0]; // Ambil URL tanpa parameter
            var newURL = currentURL + '?page=1&filter=' + encodeURIComponent(selectedSpec);
            window.location.href = newURL;
        });
    });
</script>


<!-- Style untuk Dropdown Filter -->
<style>
.filter-dropdown {
    display: block;
    width: 200px;
    padding: 8px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    background: #fff;
    font-size: 16px;
    color: #333;
}
.filter-dropdown:focus {
    border-color: #008080;
    outline: none;
}
</style>
    </div>
</body>
</html>