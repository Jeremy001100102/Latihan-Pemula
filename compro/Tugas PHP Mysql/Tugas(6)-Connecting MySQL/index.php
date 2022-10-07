<?php 	

 require 'functions.php';

 $dataProduk = query("SELECT * FROM products");

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Data Produk</h1>
	<table border="1" cellspacing="0" cellpadding="5">
		<thead style="background-color: darkgray;">
			<th>NO</th>
			<th>Nama Produk</th>
			<th>ID Produk</th>
			<th>Harga</th>
			<th>Jumlah Produk</th>
		</thead>
		<tbody>
			<?php $no = 1; foreach( $dataProduk as $dp) : ?>
				<tr>
					<td style="text-align: center;"><?= $no++; ?></td>
					<td><?= $dp['name']; ?></td>
					<td style="text-align: center;"><?= $dp['product_id']; ?></td>
					<td style="text-align: center;"><?= $dp['price']; ?></td>
					<td style="text-align: center;"><?= $dp['qty']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>	
</body>
</html>