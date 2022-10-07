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


 ?>