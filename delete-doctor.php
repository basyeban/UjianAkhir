<?php
$con = mysqli_connect("localhost", "root", "", "hms");
error_reporting(0);
$email=$_GET['email'];
$query= "DELETE FROM doctor WHERE email='$email'";

$data=mysqli_query($con, $query);
if($data){
    echo" <script>alert('Dokter Berhasil dihapus');window.location.href = 'datadokter.php';</script>";
}
else{
    echo"<script> alert('Tidak dapat menghapus dokter');window.location.href = 'datadokter.php';</script>";
}
?>