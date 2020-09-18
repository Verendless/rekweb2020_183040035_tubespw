<?php

require_once __DIR__ . '/vendor/autoload.php';
require 'php/functions.php';

$result = query("SELECT * FROM brand");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print Brand</title>
</head>
<body>
	<h1 align ="center">Daftar Brand</h1>
	<table border="1" cellpadding="10" cellspacing="0" style="margin: auto">
	    <tr>
	      <th>#</th>
	      <th>Image</th>
	      <th>Brand</th>
	      <th>Founded</th>
	      <th>Base</th>
	      <th>Area Served</th>
	      <th>Revenue</th>
	    </tr>';
	$i = 1;
	foreach ($result as $brand) {
		$html .= '
		<tr>
			<td>'. $i++ .'</td>
			<td><img src="assets/img/'.$brand["image"].'" width="150"></td>
			<td>'. $brand["brand"] .'</td>
			<td>'. $brand["founded"] .'</td>
			<td>'. $brand["base"] .'</td>
			<td>'. $brand["area_served"] .'</td>
			<td>'. $brand["revenue"] .'</td>
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
