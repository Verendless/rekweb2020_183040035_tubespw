<?php 

require 'functions.php';
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
	$order = 'asc';
} else {
	$order = 'desc';
}

$query = "SELECT * FROM laptop ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";
$result = mysqli_query(koneksi(), $query);

$output .= '
  <div class="container">
  <div class="products">
      <p class="detail"><a href="index.php">Home</a> / <a class="active" href="laptop.php">Laptop</a></p>
      <div class="row">
        <div class="col s12 m12">
          <div class="box">
            <ul>
              <li>Sort By :</li>
              <li><a class="sort_laptop" id="nama_laptop" data-order="'.$order.'" href="#">Nama</a></li>
            </ul>
          </div>
        </div>
      </div>
  </div>
</div>
<div class="products-item">
  <div class="container">
    <div class="row">
      <div id="box-search">
';

foreach ($result as $notebook) {
	$output .= '
      <div class="col s12 m4 l3">
        <div class="featured-item">
          <div class="item-box">
            <img src="assets/img/' . $notebook['gambar'] . '" class="responsive-img">
            <div class="box-name">
              <p class="center">' . $notebook['nama_laptop'] . '</p>
            </div>
            <p class="center">' . $notebook['jenis_laptop'] . '</p>
          </div>
          <p class="center"><a class= "learn-more" href="detail_laptop.php?id=' . $notebook['id_laptop'] . '">Learn More</a></p>
        </div>
      </div>
';
}
$output .= '
      </div>
    </div>
  </div>
</div>
';
echo $output;
?>