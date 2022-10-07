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


 ?>