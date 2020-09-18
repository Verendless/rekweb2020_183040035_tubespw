<?php 

require 'functions.php';
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
	$order = 'asc';
} else {
	$order = 'desc';
}

$query = "SELECT * FROM brand ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";
$result = mysqli_query(koneksi(), $query);


$output .= '
  <div class="container">
  <div class="products">
      <p class="detail"><a href="index.php">Home</a> / <a class="active" href="brand.php">Brand</a></p>
      <div class="row">
        <div class="col s12 m12">
          <div class="box">
            <ul>
              <li>Sort By :</li>
              <li><a class="sort_brand" id="brand" data-order="'.$order.'" href="#">Name</a></li>
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

foreach ($result as $merek) {
  $output .= '
        <div class="col s12 m4 l3">
        <div class="featured-item">
          <div class="item-box">
            <img src="assets/img/' . $merek['image'] . '" class="responsive-img">
            <div class="box-name">
              <p class="center">' . $merek['brand'] . '</p>
            </div>
          </div>
          <p class="center"><a class= "learn-more" href="detail_brand.php?id=' . $merek['brand'] . '">Learn More</a></p>
        </div>
      </div>
';
}

$output .= '
      </div>
    </div>
  </div>
</div>
</div>
';
echo $output;

?>