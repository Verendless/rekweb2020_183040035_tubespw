<?php 
  require 'functions.php';
  $laptop = "SELECT * FROM laptop ORDER BY id_laptop DESC";
  $result = mysqli_query(koneksi(), $laptop);
 ?>

  <div class="row">
    <div class="col s12 m8 l12">
      <div class="laptop-menu">
        <p><a href="dashboard.php">Dashboars</a> / <a href="backend-laptop.php">Laptop</a></p>
        <h5 class="center">Table Laptop</h5>
      </div>
      <div class="table-laptop" id="table-laptop">
        <table>
          <tr>
            <th>Gambar</th>
            <th><a class="column-sort" id="nama_laptop" data-order="desc" href="#" onclick="function()">Nama</a></th>
            <th><a class="column-sort" id="jenis_laptop" data-order="desc" href="#">Jenis</a></th>
            <th><a class="column-sort" id="prosesor" data-order="desc" href="#">Prosesor</a></th>
            <th><a class="column-sort" id="vga" data-order="desc" href="#">VGA</a></th>
            <th><a class="column-sort" id="ram" data-order="desc" href="#">RAM</a></th>
            <th><a class="column-sort" id="storage" data-order="desc" href="#">Storage</a></th>
            <th><a class="column-sort" id="dimensi" data-order="desc" href="#">Dimensi</a></th>
            <th><a class="column-sort" id="merek" data-order="desc" href="#">Merek</a></th>
            <th><a class="column-sort" id="harga" data-order="desc" href="#">Harga</a></th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($result as $notebook): ?>
            <tr>
              <td><img src="assets/img/<?= $notebook['gambar']  ?>"></td>
              <td><?= $notebook['nama_laptop']  ?></td>
              <td><?= $notebook['jenis_laptop']  ?></td>
              <td><?= $notebook['prosesor']  ?></td>
              <td><?= $notebook['vga']  ?></td>
              <td><?= $notebook['ram']  ?></td>
              <td width="100px"><?= $notebook['storage']  ?></td>
              <td><?= $notebook['dimensi']  ?></td>
              <td><?= $notebook['merek']  ?></td>
              <td>Rp. <?= $notebook['harga']  ?></td>
              <td><a href="edit-laptop.php?id=<?=$notebook['id_laptop'] ?>" class="edit">Edit</a> | 
                <a href="delete-laptop.php?id=<?=$notebook['id_laptop']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?')" class="delete">Delete</a></td>
            </tr>
          <?php endforeach ?>
        </table>
      </div>
    </div>
  </div>