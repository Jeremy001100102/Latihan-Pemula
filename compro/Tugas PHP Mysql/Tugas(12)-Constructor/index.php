<?php 


class Product{

	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $db = "pabrik";
	public $conn = "";

	function __construct(){
		$this->conn = new mysqli($this->servername, $this->username, $this->password, $this->db);
	}

	function getAll(){
		$sql = "SELECT * FROM products";
		$result = $this->conn->query($sql);
		$data = [];
		while($row = $result->fetch_assoc()) {
    		$data[] = $row;
  		}
  		return $data;
	}

}

	$produk = new Product();

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
	<title>Data Produk</title>
</head>
<body>

	<h1>Data Produk</h1>

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
					<td><?= $no++; ?></td>
					<td><?= $dp['name']; ?></td>
					<td><?= rupiah($dp['price']); ?></td>
					<td style="text-align: center;"><?= $dp['qty']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	
</body>
</html>




