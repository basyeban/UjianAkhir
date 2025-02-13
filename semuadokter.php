<?php
include 'lib/header.php';
include "koneksi.php";

// Tentukan jumlah data per halaman
$limit = 10;

// Ambil halaman saat ini dari parameter URL (default: halaman 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Ambil filter spesialis dari parameter GET
$filter = isset($_GET['filter']) ? mysqli_real_escape_string($conn, $_GET['filter']) : '';

// Tambahkan kondisi WHERE jika ada filter spesialis
$whereClause = $filter ? "WHERE spec = '$filter'" : "";

// Ambil total jumlah data yang sesuai dengan filter
$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM doctor $whereClause");
$totalData = mysqli_fetch_assoc($result)['total'];
$totalPages = ceil($totalData / $limit);

// Ambil data dengan batasan pagination berdasarkan filter
$data = mysqli_query($conn, "SELECT * FROM doctor $whereClause LIMIT $start, $limit");
?>

<!-- #LISTING -->
<section class="section listing" aria-labelledby="listing-label">
    <div class="container">
        <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Daftar Dokter</p>
        <h2 class="headline-md" data-reveal="left">Rumah Sakit Umum Islam Kustati</h2>
        
        <!-- Dropdown Filter Spesialis -->
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

        <table id="tabel-dokter" class="specialist-table display" aria-labelledby="listing-label">
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
                $no = $start + 1;
                while ($tampil = mysqli_fetch_array($data)) {
                    echo "
                        <tr>
                            <td>$no</td>
                            <td>$tampil[username]</td>
                            <td>$tampil[spec]</td>
                            <td>IDR " . number_format($tampil['docFees'], 0, ',', '.') . "</td>
                            <td>$tampil[email]</td>
                        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>

        <!-- Navigasi Pagination -->
        <div class="pagination">
            <?php if ($page > 1) : ?>
                <a href="?page=<?= $page - 1 ?>&filter=<?= urlencode($filter) ?>" class="prev">« Prev</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                <a href="?page=<?= $i ?>&filter=<?= urlencode($filter) ?>" class="<?= ($i == $page) ? 'active' : '' ?>"><?= $i ?></a>
            <?php endfor; ?>

            <?php if ($page < $totalPages) : ?>
                <a href="?page=<?= $page + 1 ?>&filter=<?= urlencode($filter) ?>" class="next">Next »</a>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- CSS untuk Pagination dan Filter -->
<style>
.pagination {
    text-align: center;
    margin-top: 20px;
}
.pagination a {
    display: inline-block;
    padding: 8px 12px;
    margin: 0 5px;
    text-decoration: none;
    color: #333;
    background: #f0f0f0;
    border-radius: 5px;
    transition: 0.3s;
}
.pagination a.active {
    background: #008080;
    color: #fff;
    font-weight: bold;
}
.pagination a:hover {
    background: #0056b3;
    color: #fff;
}
.pagination .prev, .pagination .next {
    font-weight: bold;
}
@media (max-width: 768px) {
    .pagination a {
        padding: 6px 10px;
    }
}

/* Style untuk Dropdown Filter */
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

<!-- FOOTER -->
<?php include 'lib/footer.php'; ?>

<!-- BACK TO TOP -->
<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
</a>

<!-- Custom JS untuk Filter -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Menandai filter yang aktif saat halaman dimuat
        var selectedFilter = "<?= $filter ?>";
        if (selectedFilter) {
            $('#filter-spesialis').val(selectedFilter);
        }

        // Arahkan halaman dengan filter dan reset ke page 1
        $('#filter-spesialis').on('change', function() {
            var selectedSpec = $(this).val();
            var url = window.location.pathname + "?filter=" + encodeURIComponent(selectedSpec) + "&page=1";
            window.location.href = url;
        });
    });
</script>

<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
