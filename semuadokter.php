<?php
include 'lib/header.php';
?>

      <!-- 
        - #LISTING
      -->

      <section class="section listing" aria-labelledby="listing-label">
        <div class="container">
          <p class="section-subtitle title-lg" id="listing-label" data-reveal="left">Daftar Dokter</p>
          <h2 class="headline-md" data-reveal="left">Rumah Sakit Umum Islam Kustati</h2>
      
          <table class="specialist-table" aria-labelledby="listing-label">
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
                        <td>IDR " . number_format($tampil['docFees'], 0, ',', '.') . "</td>
                        <td>$tampil[email]</td>
                    </tr>";
          $no++;
        }
        ?>
            </tbody>
          </table>
      </section>
      
      <style>
        .button-container {
  margin-top: 20px;
  text-align: center; /* Center the button */
}

.navigate-button {
  background-color: #008080; /* Dark teal color */
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.navigate-button:hover {
  background-color: #006666; /* Darker teal on hover */
}

/* Media Queries for Responsiveness */
@media (max-width: 1200px) {
  .button-container {
    margin-left: 100px;
    margin-right: 100px;
  }

  .navigate-button {
    font-size: 14px;
    padding: 8px 15px;
  }
}

@media (max-width: 768px) {
  .button-container {
    margin-left: 50px;
    margin-right: 50px;
  }

  .navigate-button {
    font-size: 14px;
    padding: 8px 15px;
  }
}

@media (max-width: 480px) {
  .button-container {
    margin-left: 20px;
    margin-right: 20px;
  }

  .navigate-button {
    font-size: 12px;
    padding: 8px 15px;
  }
}

      </style>




  <!-- 
    - #FOOTER
  -->

<?php include 'lib/footer.php'; ?>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>