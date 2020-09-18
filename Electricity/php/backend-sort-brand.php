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
        <table>
          <tr>
            <th>Gambar</th>
            <th><a class="sort_brand_backend" id="brand" data-order="'.$order.'" href="#">Brand</a></th>
            <th><a class="sort_brand_backend" id="founded" data-order="'.$order.'" href="#">Founded</a></th>
            <th><a class="sort_brand_backend" id="base" data-order="'.$order.'" href="#">Base</a></th>
            <th><a class="sort_brand_backend" id="area_served" data-order="'.$order.'" href="#">Area Served</a></th>
            <th><a class="sort_brand_backend" id="revenue" data-order="'.$order.'" href="#">Revenue</a></th>
            <th>Aksi</th>
          </tr>
          ';
foreach ($result as $brand) 
{
	$output .= '
            <tr>
              <td><img src="assets/img/' . $brand["image"] .'"></td>
              <td>' . $brand['brand'] . '</td>
              <td>' . $brand['founded'] . '</td>
              <td>' . $brand['base'] . '</td>
              <td>' . $brand['area_served'] . '</td>
              <td>$' . $brand['revenue'] . ' Billion</td>
              <td><a href="edit-brand.php?id=' . $brand['brand'] . '" class="edit">Edit</a> | 
                <a href="delete-brand.php?id=' . $brand['brand'] . '" onclick="return confirm("Anda Yakin Menghapus Data Ini?")" class="delete">Delete</a></td>
            </tr>
	';
}
$output .= '</table>';
echo $output;
 ?>