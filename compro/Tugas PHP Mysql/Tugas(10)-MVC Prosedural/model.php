<?php 

	//koneksi database
	$conn = mysqli_connect("localhost", "root", "", "pabrik");

	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$data = [];
		while ($data2 = mysqli_fetch_assoc($result)) {
			$data[] = $data2;
		}

		return $data;
	}

	function input($data){
		global $conn;
		$name = $data['name'];
		$price = $data['price'];
		$quantity = $data['qty'];

		$query = "INSERT INTO products VALUES('', '$name', '$price', '$quantity')";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

	function erase($id){
		global $conn;
		$query = "DELETE FROM products WHERE product_id = $id ";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}

	function edit($data, $id){
		global $conn;
		$name = htmlspecialchars($data['name']);
		$price = htmlspecialchars($data['price']);
		$quantity = htmlspecialchars($data['qty']);

		$query = "UPDATE products SET 
					name = '$name',
					price = $price,
					qty = $quantity
				  WHERE product_id = $id; 
				";

		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

	}

	function cari($keyword, $urut){

		if(empty($keyword)){
			if($urut == "0"){
				$query = "SELECT * FROM products ORDER BY price DESC";
			}else if($urut == "1"){
				$query = "SELECT * FROM products ORDER BY price ASC";
			}else{
				echo "
					<script>
						document.location.href = 'index.php';
					</script>
				";
			}
		}else if($keyword != "" && $urut != ""){
			if($urut == "0"){
				$query = "SELECT * FROM products WHERE
				name LIKE '%$keyword%' ORDER BY price DESC";
			}else{
				$query = "SELECT * FROM products WHERE
				name LIKE '%$keyword%' ORDER BY price ASC";
			}
		
		}else{
			$query = "SELECT * FROM products 
					WHERE
					name LIKE '%$keyword%'
			";
		}

		return query($query);
	}

	function rupiah($harga){
		$konversi = "Rp.\t". number_format($harga,0);
		$konversi2 = str_replace(',','.',$konversi);
		return $konversi2;
	}
 ?>