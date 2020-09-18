<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'php/functions.php';

$laptop = query("SELECT * FROM laptop");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Laptop</title>
</head>
<body>
	<h1 align ="center">Daftar Laptop</h1>
	<table border="1" cellpadding="10" cellspacing="0">
	    <tr>
	      <th>#</th>
	      <th>Gambar</th>
	      <th>Nama</th>
	      <th>Jenis</th>
	      <th>Prosesor</th>
	      <th>VGA</th>
	      <th>RAM</th>
	      <th>Storage</th>
	      <th>Dimensi</th>
	      <th>Merek</th>
	      <th>Harga</th>
	    </tr>';
	$i = 1;
	foreach ($laptop as $notebook) {
		$html .= '
		<tr>
			<td>'. $i++ .'</td>
			<td><img src="assets/img/'.$notebook["gambar"].'" width="150"></td>
			<td>'. $notebook["nama_laptop"] .'</td>
			<td>'. $notebook["jenis_laptop"] .'</td>
			<td>'. $notebook["prosesor"] .'</td>
			<td>'. $notebook["vga"] .'</td>
			<td>'. $notebook["ram"] .'</td>
			<td>'. $notebook["storage"] .'</td>
			<td>'. $notebook["dimensi"] .'</td>
			<td>'. $notebook["merek"] .'</td>
			<td>Rp. '. $notebook["harga"] .'</td>
		</tr>
		';
	}
	    
$html .='</table>
</body>
</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>

