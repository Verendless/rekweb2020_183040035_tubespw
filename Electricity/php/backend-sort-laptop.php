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
        <table>
          <tr>
            <th>Gambar</th>
            <th><a class="backend_sort_laptop" id="nama_laptop" data-order="'.$order.'" href="#">Nama</a></th>
            <th><a class="backend_sort_laptop" id="jenis_laptop" data-order="'.$order.'" href="#">Jenis</a></th>
            <th><a class="backend_sort_laptop" id="prosesor" data-order="'.$order.'" href="#">Prosesor</a></th>
            <th><a class="backend_sort_laptop" id="vga" data-order="'.$order.'" href="#">VGA</a></th>
            <th><a class="backend_sort_laptop" id="ram" data-order="'.$order.'" href="#">RAM</a></th>
            <th><a class="backend_sort_laptop" id="storage" data-order="'.$order.'" href="#">Storage</a></th>
            <th><a class="backend_sort_laptop" id="dimensi" data-order="'.$order.'" href="#">Dimensi</a></th>
            <th><a class="backend_sort_laptop" id="merek" data-order="'.$order.'" href="#">Merek</a></th>
            <th><a class="backend_sort_laptop" id="harga" data-order="'.$order.'" href="#">Harga</a></th>
            <th>Aksi</th>
          </tr>
          ';
foreach ($result as $notebook) 
{
	$output .= '
            <tr>
              <td><img src="assets/img/' . $notebook["gambar"] .'"></td>
              <td>' . $notebook['nama_laptop'] . '</td>
              <td>' . $notebook['jenis_laptop'] . '</td>
              <td>' . $notebook['prosesor'] . '</td>
              <td>' . $notebook['vga'] . '</td>
              <td>' . $notebook['ram'] . '</td>
              <td width="100px">' . $notebook['storage'] . '</td>
              <td>' . $notebook['dimensi'] . '</td>
              <td>' . $notebook['merek']  . '</td>
              <td>Rp.' . $notebook['harga'] . '</td>
              <td><a href="edit-laptop.php?id=' . $notebook['id_laptop'] . '" class="edit">Edit</a> | 
                <a href="delete-laptop.php?id=' . $notebook['id_laptop'] . '" onclick="return confirm("Anda Yakin Menghapus Data Ini?")" class="delete">Delete</a></td>
            </tr>
	';
}
$output .= '</table>';
echo $output;
 ?>