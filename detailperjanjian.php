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
    <title>Detail Perjanjian</title>
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

    <!-- List Appointments section -->
    <div class="home-content" id="list-app">
      <div>
        <!-- <form class="form-group" action="appsearch.php" method="post">
          <div class="appsearch">
            <div class="email-field">
              <input type="text" name="app_contact" placeholder="Search" class="form-control">
            </div>
            <div class="submit-btn"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search">
            </div>
          </div>
        </form> -->
      </div>
      <table class="app-table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Depan</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nama Dokter</th>
            <th scope="col">Biaya Konsultasi</th>
            <th scope="col">Tanggal Perjanjian</th>
            <th scope="col">Status Perjanjian</th>
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

        // Hitung total data
        $totalQuery = "SELECT COUNT(*) AS total FROM appointment";
        $totalResult = mysqli_query($con, $totalQuery);
        $totalRow = mysqli_fetch_assoc($totalResult);
        $totalRecords = $totalRow['total'];

        // Hitung total halaman
        $totalPages = ceil($totalRecords / $limit);

        // Ambil data dengan batasan halaman
        $query = "SELECT * FROM appointment LIMIT $limit OFFSET $offset";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['AppID'];
            $accepted = isAccepted($id);
            $cancelled = isCancelled($id);
            ?>
            <tr>
                <td><?php echo $row['AppID']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['doctor']; ?></td>
                <td><?php echo $row['docFees']; ?></td>
                <td><?php echo $row['appdate']; ?></td>
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
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Pagination -->
<div class="pagination">
    <?php
    $currentURL = strtok($_SERVER["REQUEST_URI"], '?');

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

      <br>
    </div>
</body>
</html>