<div class="p-5 pt-2">
    <h3><i class="fas fa-car mr-2"></i>Mobil</h3><hr>
    
    <a href="../Tambah Data/tambah.php" class="btn btn-danger">Tambah Mobil</a>
      
      <table class="table table-bordered mt-4">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Tipe</th>
      <th>Merk</th>
      <th>No Polisi</th>
      <th>Harga Sewa</th>
      <th>Gambar</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php 
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from data_mobl");
    while($d = mysqli_fetch_array($data)){
     ?>
     <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['tipe']; ?></td>
      <td><?php echo $d['merk']; ?></td>
      <td><?php echo $d['no_polisi']; ?></td>
      <td>Rp.<?php echo $d['ketersediaan']; ?></td>
      <td><?php echo "<img src='img/$d[gambar]' width='200' height='100' />";?></td>
      <td>
        <a href="../Tambah Data/edit.php?id=<?php echo $d['id']; ?>" class="btn btn-info">EDIT </a>
        <a href="../Tambah Data/hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">HAPUS</a>
      </td>
     </tr>
     <?php  
    }
    ?>
    </tr>
  </tbody>
</table>
  </div>


<!--  -->