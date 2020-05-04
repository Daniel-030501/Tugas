<div class="col p-5 pt-2">
  <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3><hr>
</div>
<div class="container">
    <div class="row" id="load_data">
      <?php
        include 'koneksi.php';
        $query = "SELECT * FROM data_mobl ORDER BY id ASC";
        $dewan1 = $koneksi->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $id = $row["id"];
          $nama = $row["nama"];
          $tipe = $row["tipe"];
          $merk = $row["merk"];
          $no_polisi = $row["no_polisi"];
      ?>
        <div class="col mb-3">
          <div class="card ml-3 mr-4">
            <?php echo "<img src='img/$row[gambar]' width='200' height='100' />";?>
            <div class="card-body">
              <h5 class="card-title"><?php echo $nama; ?></h5>
              <p class="card-text"><?php echo $tipe; ?></p>
            </div>
            <div class="card-footer">
                <small class="">Mobil Bermerk <?php echo $merk; ?> Dengan Nomor Polisi <?php echo $no_polisi; ?></small>
              </div>
          </div>
        </div>
      <?php } ?>
 
    </div>
</div>