<?php 	

 require 'functions.php';
 session_start();

 $dataProduk = query("SELECT * FROM products");

 	if (isset($_SESSION['css'])) {
 		echo "
				<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
				<script>
					$(document).ready(function(){
						$('body').css('backgroundColor', '#ACE1AF');
					});
				</script>
		";
		session_unset();
 	}

 	if (isset($_POST["cari"])){
 		
 		$dataProduk = cari($_POST["keyword"], $_POST["urut"]);
 	
 	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Product</title>
</head>
<body>
	<h1>Data Product</h1>

	<a href="insert.php" style="font-size: 20px;">Insert Data Product</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="30" onkeyup placeholder="Masukkan keyword pencarian..." autofocus autocomplete="off">
		<select name="urut">
			<option value="" selected hidden>Urut Berdasarkan</option>
			<option value="0">Harga Termahal</option>
			<option value="1">Harga Termurah</option>
		</select>	
		<button type="submit" name="cari">Cari</button>
	</form>
	<br>

	<table border="1" cellspacing="0" cellpadding="5">
		<thead style="background-color: darkgray;">
			<th>NO</th>
			<th>Nama Produk</th>
			<th>ID Produk</th>
			<th>Harga</th>
			<th>Jumlah Produk</th>
			<th>Aksi</th>
		</thead>
		<tbody>
			<?php $no = 1; foreach( $dataProduk as $dp) : ?>
			<tr>
				<td style="text-align: center;"><?= $no++; ?></td>
				<td><?= $dp['name']; ?></td>
				<td style="text-align: center;"><?= $dp['product_id']; ?></td>
				<td><?= rupiah($dp['price']); ?></td>
				<td style="text-align: center;"><?= $dp['qty']; ?></td>
				<td>
					<a href="update.php?id=<?= $dp['product_id']; ?>">Edit</a> |
					<a href="delete.php?id=<?= $dp['product_id']; ?>">Hapus</a>
				</td>	
			</tr>
		<?php 	endforeach; ?>
		</tbody>
	</table>	
</body>
</html>