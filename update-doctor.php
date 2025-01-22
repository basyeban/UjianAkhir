<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "hms");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
error_reporting(0);
$un = $_GET['un'];
$sp = $_GET['sp'];
$em = $_GET['em'];
$df = $_GET['df'];
$pw = $_GET['pw'];
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Dokter</title>
    <link rel="shortcut icon" href="./assets/images/LOGO-BARU-24.png" type="image/svg+xml">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="home-content" id="list-settings">
        <div class="form-container">
            <form class="form-group" method="GET" action="update-doctor.php">
                <div class="form-row">
                    <div class="form-group1">
                        <label for="doctor">Nama Dokter:</label>
                        <input type="text" value="<?php echo "$un" ?>" class="form-control" name="doctor">
                    </div>
                    <div class="form-group1">
                        <label for="special">Spesialis:</label>
                        <select name="special" class="form-control" id="special">
                            <option value="" disabled>Pilih Spesialis</option>
                            <option value="Spesialis Umum" <?php if ($sp === "General") echo "selected"; ?>>Spesialis Umum</option>
                            <option value="Spesialis Anak" <?php if ($sp === "Cardiologist") echo "selected"; ?>>Spesialis Anak</option>
                            <option value="Spesialis Ahli Bedah" <?php if ($sp === "Neurologist") echo "selected"; ?>>Spesialis Ahli Bedah</option>
                            <option value="Spesialis Mata" <?php if ($sp === "Pediatrician") echo "selected"; ?>>Spesialis Mata</option>
                            <option value="Spesialis Jantung" <?php if ($sp === "Dermatologist") echo "selected"; ?>>Spesialis Jantung</option>
                            <option value="Spesialis Paru" <?php if ($sp === "Gastroenterologist") echo "selected"; ?>>Spesialis Paru</option>
                            <option value="Spesialis Mulut & Gigi" <?php if ($sp === "Ophthalmologist") echo "selected"; ?>>Spesialis Mulut & Gigi</option>
                            <option value="Spesialis Ortopedi" <?php if ($sp === "Orthopedic Surgeon") echo "selected"; ?>>Spesialis Ortopedi </option>
                            <option value="Spesialis Kandungan" <?php if ($sp === "Otolaryngologist") echo "selected"; ?>>Spesialis Kandungan</option>
                            <option value="Spesialis THT" <?php if ($sp === "Urologist") echo "selected"; ?>>Spesialis THT</option>
                        </select>
                    </div>
                </div>
                <div class="form-group1">
                    <label for="demail">Email ID:</label>
                    <input type="email" value="<?php echo "$em" ?>" class="form-control" name="demail" id="demail">
                </div>
                <div class="form-row">
                    <div class="form-group1">
                        <label for="dpassword">Password:</label>
                        <input type="text" value="<?php echo "$pw" ?>" class="form-control" name="dpassword" id="dpassword">
                    </div>
                </div>
                <div class="form-group1">
                    <label for="docFees">Biaya Konsultasi:</label>
                    <input type="text" value="<?php echo "$df" ?>" class="form-control" name="docFees" id="docFees">
                </div>
                <div class="form-group1">
                    <button type="docsub" name="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_GET['submit'])) {
    $doctor = $_GET['doctor'];
    $password = $_GET['dpassword'];
    $demail = $_GET['demail'];
    $special = $_GET['special'];
    $docFees = $_GET['docFees'];

    $query = "UPDATE doctor SET username='$doctor',password='$password',email='$demail',spec='$special', docFees='$docFees' WHERE email='$demail'";
    $data = mysqli_query($con, $query);

    if ($data) {
        echo "<script>alert('Details updated successfully');window.location.href = 'admin-panel.php#list-settings1';</script>";
    } else {
        echo "Failed to update details: " . mysqli_error($con);
    }
}
?>