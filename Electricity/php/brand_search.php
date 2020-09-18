<?php 

require 'functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM brand WHERE
            brand LIKE '%$keyword%' OR
            founded LIKE '%$keyword%' OR
            base LIKE '%$keyword%' OR
            revenue LIKE '%$keyword%'";

$result = query($query);

 ?>

      <?php if (empty($result)): ?>
        <h5 class="center">Brand Tidak Di Temukan</h5>
      <?php endif ?>
      <?php foreach ($result as $merek): ?>
      <div class="col s12 m4 l3">
        <div class="featured-item">
          <div class="item-box">
            <img src="assets/img/<?= $merek['image'] ?>" class="responsive-img">
            <div class="box-name">
              <p class="center"><?= $merek['brand'] ?></p>
            </div>
          </div>
          <p class="center"><a class= "learn-more" href="detail_brand.php?id=<?=$merek['brand'] ?>">Learn More</a></p>
        </div>
      </div>
      <?php endforeach ?>