<?php 

require 'functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM laptop WHERE
            nama_laptop LIKE '%$keyword%' OR
            merek LIKE '%$keyword%' OR
            jenis_laptop LIKE '%$keyword%' OR
            harga LIKE '%$keyword%' OR
            prosesor LIKE '%$keyword%'";

$laptop = query($query);
 ?>
    <?php if (empty($laptop)): ?>
      <h5 class="center">Laptop Tidak Di Temukan</h5>
    <?php endif ?>
    <?php foreach ($laptop as $notebook): ?>
      <div class="col s6 m3">
        <div class="featured-item">
          <div class="item-box">
            <img src="assets/img/<?= $notebook['gambar'] ?>" class="responsive-img">
            <div class="box-name">
              <p class="center"><?= $notebook['nama_laptop'] ?></p>
            </div>
            <p class="center"><?= $notebook['jenis_laptop'] ?></p>
          </div>
          <p class="center"><a class= "learn-more" href="detail_laptop.php?id=<?=$notebook['id_laptop'] ?>">Learn More</a></p>
        </div>
      </div>
     <?php endforeach ?>