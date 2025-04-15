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
        echo "<script>alert('Pelayanan Berhasil diproses');</script>";
    }
}

if (isset($_GET['cancel'])) {
    $AppID = $_GET['AppID'];
    $query = mysqli_query($con, "UPDATE appointment SET userStatus = 0 WHERE AppID = '$AppID'");
    if ($query) {
        echo "<script>alert('Pelayananmu berhasil di batalkan');</script>";
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
        echo "<script>alert('Resep Obat berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Tidak dapat,coba lagi!');</script>";
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
    <title>Halaman Dokter</title>
    <script>
        function validateForm() {
            var contactInput = document.forms["searchForm"]["contact"].value;
            var numbersOnly = /^\d+$/;
            if (contactInput === "" || !contactInput.match(numbersOnly) || contactInput.length !== 10) {
                alert("Please enter a valid 10-digit contact number.");
                return false;
            }
        }
    </script>
</head>

<body>
    <!-- dashboard -->
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
                <!-- <form class="form-group" name="searchForm" onsubmit="return validateForm()" method="post" action="search.php">
                    <div class="psearch">
                        <div class="email-field">
                            <input class="form-control" type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
                        </div>
                        <div class="submit-btn">
                            <input type="submit" class="btn btn-primary" id="inputbtn" name="search_submit" value="Search">
                        </div>
                    </div>
                </form> -->
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
        <div class="home-content" id="list-dash">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-square fa-stack-2x text-primary"></i>
                            <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4>Pelayanan Pasien</h4>
                        <p class="cl-effect-1">
                            <a href="perjanjian.php">
                                Lihat Pelayanan
                            </a>
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="right-side">
                        <span class="fa-stack fa-2x">
                            <i class="fa fa-square fa-stack-2x text-primary"></i>
                            <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4>Resep Obat</h4>

                        <p>
                            <a href="resepdokter.php">
                                Lihat Daftar Resep Obat
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Appointments view section -->
        <div class="home-content" id="list-app">
            <table class="app-table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Tanggal Pelayanan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "hms");

                    // Jumlah data per halaman
                    $limit = 8;

                    // Ambil nomor halaman dari URL (default = 1)
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    $offset = ($page - 1) * $limit;

                    // Ambil total jumlah data untuk pagination
                    $dname = $_SESSION['dname'];
                    $totalQuery = "SELECT COUNT(*) as total FROM appointment WHERE doctor = '$dname'";
                    $totalResult = mysqli_query($con, $totalQuery);
                    $totalRow = mysqli_fetch_assoc($totalResult);
                    $totalRecords = $totalRow['total'];

                    // Ambil data appointment dengan batasan halaman
                    $query = "SELECT pid, AppID, fname, lname, gender, email, contact, appdate, apptime, userStatus, doctorStatus 
                      FROM appointment 
                      WHERE doctor = '$dname' 
                      LIMIT $limit OFFSET $offset";
                    $result = mysqli_query($con, $query);
                    $no = $offset + 1;

                    while ($row = mysqli_fetch_array($result)) {
                        $id = $row['AppID'];
                        $accepted = isAccepted($id);
                        $cancelled = isCancelled($id);
                        $prescribed = isPrescribed($id);

                        $showCancelAcceptButtons = !$cancelled && !$accepted && !$prescribed;
                        $showPrescribeButton = $accepted && !$prescribed && !$cancelled;
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['fname']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
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
                            <td>
                                <?php
                                if ($showCancelAcceptButtons) {
                                    echo '<a href="doctor-panel.php?AppID=' . $row['AppID'] . '&cancel=update" onClick="return confirm(\'Kamu Yakin akan membatalkan pelayanan ini?\')" title="Cancel Appointment"><button class="btn btn-primary">Cancel</button></a>';
                                    echo '<a href="doctor-panel.php?AppID=' . $row['AppID'] . '&accept=update" onClick="return confirm(\'Kamu Yakin akan memproses pelayanan ini?\')" title="Accept Appointment"><button class="btn btn-primary">Accept</button></a>';
                                } elseif ($showPrescribeButton) {
                                    echo '<a href="prescribe.php?pid=' . $row['pid'] . '&AppID=' . $row['AppID'] . '&fname=' . $row['fname'] . '&lname=' . $row['lname'] . '&appdate=' . $row['appdate'] . '&apptime=' . $row['apptime'] . '&disease=&allergy=&prescription=" title="Resep"><button class="btn btn-primary">Prescribe</button></a>';
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

    </div>
</body>

</html>