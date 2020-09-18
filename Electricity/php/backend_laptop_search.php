<?php 

require 'functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM laptop WHERE
            nama_laptop LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            jenis_laptop LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            prosesor LIKE '%$keyword%' OR
            vga LIKE '%$keyword%' OR
            ram LIKE '%$keyword%' OR
            storage LIKE '%$keyword%' OR
            dimensi LIKE '%$keyword%' OR
            harga LIKE '%$keyword%'";

$laptop = query($query);
 ?>

 <table>
          <tr>
            <th>Gambar</th>
            <th><a class="sort_laptop" id="nama_laptop" data-order="desc" href="#">Nama</a></th>
            <th><a class="sort_laptop" id="jenis_laptop" data-order="desc" href="#">Jenis</a></th>
            <th><a class="sort_laptop" id="prosesor" data-order="desc" href="#">Prosesor</a></th>
            <th><a class="sort_laptop" id="vga" data-order="desc" href="#">VGA</a></th>
            <th><a class="sort_laptop" id="ram" data-order="desc" href="#">RAM</a></th>
            <th><a class="sort_laptop" id="storage" data-order="desc" href="#">Storage</a></th>
            <th><a class="sort_laptop" id="dimensi" data-order="desc" href="#">Dimensi</a></th>
            <th><a class="sort_laptop" id="merek" data-order="desc" href="#">Merek</a></th>
            <th><a class="sort_laptop" id="harga" data-order="desc" href="#">Harga</a></th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($laptop as $notebook): ?>
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