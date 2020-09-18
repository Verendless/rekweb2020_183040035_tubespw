<?php 

require 'functions.php';
$output = '';
$order = $_POST["order"];
if ($order == 'desc') {
	$order = 'asc';
} else {
	$order = 'desc';
}
$query = "SELECT * FROM user ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";
$result = mysqli_query(koneksi(), $query);
$output .= '
        <table>
          <tr>
            <th>#</th>
            <th><a class="sort_user" id="username" data-order="'.$order.'" href="#">Username</a></th>
            <th><a class="sort_user" id="email" data-order="'.$order.'" href="#">Email</a></th>
          </tr>
          ';
$i = 1;
foreach ($result as $user) 
{
	$output .= '
            <tr>
              <td>' . $i++ . '</td>
              <td>' . $user['username'] . '</td>
              <td>' . $user['email'] . '</td>
            </tr>
	';
}
$output .= '</table>';
echo $output;
 ?>