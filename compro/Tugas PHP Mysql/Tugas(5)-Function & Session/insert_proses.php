<?php

session_start();

if($_SESSION['nama'] == "" || $_SESSION['harga'] == ""){
		$_SESSION['error'] = true;
		header('Location: index.php');
		exit;
	}

function rupiah($harga){
	$konversi = "Rp.\t". number_format($harga,0);
	$konversi2 = str_replace(',','.',$konversi);
	return $konversi2;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>

	<table border="1" cellpadding="5" cellspacing="0">
		<thead style="background-color: darkgray;">	
			<th>Nama Barang</th>
			<th>Harga</th>
		</thead>

		<tbody>
			<td><?php echo $_SESSION['nama']; ?></td>
			<td><?php echo rupiah($_SESSION['harga']);; ?></td>
		</tbody>
	</table>
	
</body>
</html>