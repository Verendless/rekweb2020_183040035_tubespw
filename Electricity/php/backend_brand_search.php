<?php 

require 'functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM brand WHERE
            brand LIKE '%$keyword%' OR
            founded LIKE '%$keyword%' OR
            base LIKE '%$keyword%' OR
            revenue LIKE '%$keyword%' OR
            area_served LIKE '%$keyword%'";

$result = query($query);
 ?>

         <table>
          <tr>
            <th>Gambar</th>
            <th><a class="sort_brand" id="brand" data-order="desc" href="#">Brand</a></th>
            <th><a class="sort_brand" id="founded" data-order="desc" href="#">Found</a></th>
            <th><a class="sort_brand" id="base" data-order="desc" href="#">Base</a></th>
            <th><a class="sort_brand" id="area_served" data-order="desc" href="#">Area Served</a></th>
            <th><a class="sort_brand" id="revenue" data-order="desc" href="#">Revenue</a></th>
            <th>Aksi</th>
          </tr>
          <?php foreach ($result as $brand): ?>
            <tr>
              <td><img src="assets/img/<?= $brand['image']  ?>"></td>
              <td><?= $brand['brand']  ?></td>
              <td><?= $brand['founded']  ?></td>
              <td><?= $brand['base']  ?></td>
              <td><?= $brand['area_served']  ?></td>
              <td>$<?= $brand['revenue']  ?> Billion</td>
              <td><a href="edit-brand.php?id=<?=$brand['brand'] ?>" class="edit">Edit</a> | 
                <a href="delete-brand.php?id=<?=$brand['brand']?>" onclick="return confirm('Anda Yakin Menghapus Data Ini?')" class="delete">Delete</a></td>
            </tr>
          <?php endforeach ?>
        </table>