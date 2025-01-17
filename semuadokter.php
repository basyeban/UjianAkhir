<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Dokter</title>
    
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px; /* Memberikan jarak keseluruhan ke semua sisi */
        padding: 20px; /* Memberikan ruang tambahan di dalam body */
        background-color: #f4f4f4; /* Warna latar belakang */
    }

    .container {
        max-width: 90%; /* Maksimal lebar kontainer (90% dari lebar layar) */
        margin: 0 auto; /* Membuat kontainer berada di tengah secara horizontal */
    }

    .specialist-table {
        width: 100%; /* Lebar tabel mengikuti container */
        border-collapse: collapse; /* Menghilangkan spasi antar border */
        margin: 20px 0; /* Memberikan jarak vertikal antara tabel dan elemen lainnya */
        border: 1px solid #ddd; /* Border tabel */
        background-color: #f9f9f9; /* Warna latar belakang tabel */
    }

    .specialist-table th, 
    .specialist-table td {
        padding: 12px 15px; /* Memberikan padding untuk isi tabel */
        text-align: left; /* Perataan teks */
        border: 1px solid #ddd; /* Border untuk sel */
    }

    .specialist-table thead th {
        background-color: var(--verdigris, #00adb3); /* Warna latar belakang header (fallback ke biru) */
        color: white; /* Warna teks header */
        font-weight: bold; /* Membuat teks header tebal */
    }

    .specialist-table tbody tr:nth-child(even) {
        background-color: #f2f2f2; /* Warna latar baris genap */
    }

    .specialist-table tbody tr:hover {
        background-color: #ddd; /* Warna latar saat baris dihover */
    }

    h3 {
        text-align: center;
        color: #333;
    }
</style>

    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Dokter</h3>
        <table class="specialist-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Biaya</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $no = 1;
                $data = mysqli_query($conn, "SELECT * FROM doctor");
                while ($tampil = mysqli_fetch_array($data)) {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[username]</td>
                        <td>$tampil[spec]</td>
                        <td>" . number_format($tampil['docFees'], 0, ',', '.') . " IDR</td>
                        <td>$tampil[email]</td>
                    </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
