<?php 

class Connection {
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $db = "pabrik";
	public $conn = "";

	function __construct(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
	}
}


class User extends Connection {

	function getAll(){
		$sql = "SELECT * FROM user";
		$result = $this->conn->query($sql);
		$data = [];
		while($row = $result->fetch_assoc()) {
    		$data[] = $row;
  		}
  		return $data;
	}

}


class Product extends Connection {

	function getAll(){
		$sql = "SELECT * FROM products";
		$result = $this->conn->query($sql);
		$data = [];
		while($row = $result->fetch_assoc()) {
    		$data[] = $row;
  		}
  		return $data;
	}

	function rupiah($harga){
		$konversi = "Rp.\t". number_format($harga,0);
		$konversi2 = str_replace(',','.',$konversi);
		return $konversi2;
	}

}


$user = new User();
$produk = new Product();
	

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data User & Data Product</title>
	<style>

		h1{
			float: left;
			margin-right: 268px;
		}

		.clear{
			clear: both;
		}

		table{
			float: left;
			margin-right: 20px;
		}

	</style>
</head>
<body>

	<h1>Data Produk</h1>
	<h1>Data User</h1>

	<!-- table product -->
	<div class="clear"></div>
	<table border="1" cellspacing="0" cellpadding="5">
		<thead>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Stok</th>
		</thead>
		<tbody>
			<?php $no = 1; foreach($produk->getAll() as $dp) : ?>
				<tr>
					<td style="text-align: center;"><?= $no++; ?></td>
					<td><?= $dp['name']; ?></td>
					<td><?= $produk->rupiah($dp['price']); ?></td>
					<td style="text-align: center;"><?= $dp['qty']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

	<!-- table user -->
	<table border="1" cellspacing="0" cellpadding="5">
		<thead>
			<th>No</th>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
		</thead>
		<tbody>
			<?php $no = 1; foreach($user->getAll() as $us) : ?>
				<tr>
					<td style="text-align: center;"><?= $no++; ?></td>
					<td style="text-align: center;"><?= $us['id']; ?></td>
					<td><?= $us['nama']; ?></td>
					<td><?= $us['email']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</body>
</html>




