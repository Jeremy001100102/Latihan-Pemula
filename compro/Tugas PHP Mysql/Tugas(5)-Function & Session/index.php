<?php 

session_start();
	
if(isset($_POST['submit'])){
	$_SESSION['nama'] = $_POST['nama'];
	$_SESSION['harga'] = $_POST['harga']; 
	header('Location: insert_proses.php');
	exit;
	
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Data</title>
</head>
<body>
	
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="nama">Nama Barang : </label></td>
				<td><input type="text" id="nama" name="nama"></td>
			</tr>
			<tr>
				<td><label for="harga">Harga : </label></td>
				<td><input type="number" id="harga" name="harga"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit">Kirim Data!</button></td>
				<td><?php if(isset($_SESSION['error'])){
					echo "<h4 style='color:red; font-style:italic;'>Nama / Harga belum diisi";
					session_unset();
					exit;
					}?>
				</td>
			</tr>
		</table>
	</form>
	
</body>
</html>