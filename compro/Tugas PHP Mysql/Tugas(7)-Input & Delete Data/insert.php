<?php 

	require 'functions.php';
	session_start();
	

	if (isset($_POST['submit'])) {

		$_SESSION['name'] = $_POST['name'];
		$_SESSION['price'] = $_POST['price'];
		$_SESSION['qty'] = $_POST['qty'];		
			
			//validation error
			if($_SESSION['name'] == "" && $_SESSION['price'] == "" && $_SESSION['qty'] == "" ){

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#name').attr('value', 'Nama Produk Belum Diisi');
							$('#name').css({'font-style': 'italic', 'color' : 'red'});
							$('#name').click(function () {
								$('#name').css({'font-style': 'normal', 'color' : 'black'});
							});

							$('#price').attr('type', 'text');
							$('#price').attr('value', 'Harga Belum Diisi');
							$('#price').css({'font-style': 'italic', 'color' : 'red'});
							$('#price').click(function () {
								$('#price').css({'font-style': 'normal', 'color' : 'black'});
								$('#price').attr('type', 'number');
							});

							$('#qty').attr('type', 'text');
							$('#qty').attr('value', 'Kuantitas Belum Diisi');
							$('#qty').css({'font-style': 'italic', 'color' : 'red'});
							$('#qty').click(function () {
								$('#qty').css({'font-style': 'normal', 'color' : 'black'});
								$('#qty').attr('type', 'number');
							});


						});
					</script>
				";
				session_unset();
					
			}else if($_SESSION['name'] == "" && $_SESSION['price'] == ""){	

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#name').attr('value', 'Nama Produk Belum Diisi');
							$('#name').css({'font-style': 'italic', 'color' : 'red'});
							$('#name').click(function () {
								$('#name').css({'font-style': 'normal', 'color' : 'black'});
							});

							$('#price').attr('type', 'text');
							$('#price').attr('value', 'Harga Belum Diisi');
							$('#price').css({'font-style': 'italic', 'color' : 'red'});
							$('#price').click(function () {
								$('#price').css({'font-style': 'normal', 'color' : 'black'});
								$('#price').attr('type', 'number');
							});			

						});
					</script>
				";
				session_unset();

			}else if($_SESSION['name'] == "" && $_SESSION['qty'] == ""){

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#name').attr('value', 'Nama Produk Belum Diisi');
							$('#name').css({'font-style': 'italic', 'color' : 'red'});
							$('#name').click(function () {
								$('#name').css({'font-style': 'normal', 'color' : 'black'});
							});

							$('#qty').attr('type', 'text');
							$('#qty').attr('value', 'Quantity Belum Diisi');
							$('#qty').css({'font-style': 'italic', 'color' : 'red'});
							$('#qty').click(function () {
								$('#qty').css({'font-style': 'normal', 'color' : 'black'});
								$('#qty').attr('type', 'number');
							});
						});
					</script>
				";
				session_unset();

			}else if($_SESSION['price'] == "" && $_SESSION['qty'] == ""){
				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){

							$('#price').attr('type', 'text');
							$('#price').attr('value', 'Harga Belum Diisi');
							$('#price').css({'font-style': 'italic', 'color' : 'red'});
							$('#price').click(function () {
								$('#price').css({'font-style': 'normal', 'color' : 'black'});
								$('#price').attr('type', 'number');
							});		
							

							$('#qty').attr('type', 'text');
							$('#qty').attr('value', 'Quantity Belum diisi');
							$('#qty').css({'font-style': 'italic', 'color' : 'red'});
							$('#qty').click(function () {
								$('#qty').css({'font-style': 'normal', 'color' : 'black'});
								$('#qty').attr('type', 'number');
							});
						});
					</script>
				";		
				session_unset();

			}else if($_SESSION['name'] == "") {

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#name').attr('value', 'Nama Produk Belum Diisi');
							$('#name').css({'font-style': 'italic', 'color' : 'red'});
							$('#name').click(function () {
								$('#name').css({'font-style': 'normal', 'color' : 'black'});
							});
						});
					</script>
				";
				session_unset();

			}else if($_SESSION['price'] == ""){

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#price').attr('type', 'text');
							$('#price').attr('value', 'Harga Belum Diisi');
							$('#price').css({'font-style': 'italic', 'color' : 'red'});
							$('#price').click(function () {
								$('#price').css({'font-style': 'normal', 'color' : 'black'});
								$('#price').attr('type', 'number');
							});
						});
					</script>
				";
				session_unset();

			}else if($_SESSION['qty'] == ""){

				echo "
					<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
					<script>
						$(document).ready(function(){
							$('#qty').attr('type', 'text');
							$('#qty').attr('value', 'Quantity Belum Diisi');
							$('#qty').css({'font-style': 'italic', 'color' : 'red'});
							$('#qty').click(function () {
								$('#qty').css({'font-style': 'normal', 'color' : 'black'});
								$('#qty').attr('type', 'number');
							});
						});
					</script>
				";		
				session_unset();	

			}else{	

				if(input($_POST) > 0){
					echo"
						<script>
							alert('Data Berhasil Ditambahkan');
							document.location.href = 'index.php';
						</script>	
					";
				}else{
					echo"
						<script>
							alert('Data Gagal Ditambahkan');
							document.location.href = 'index.php';
						</script>	
					";
				}
			}	
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Data Product</title>
	<style>
	</style>
</head>
<body>
	<h1>Insert Data Product</h1>
	<form action="" method="post">
		<table style="background-color: darkgray; padding: 10px;">
			<tr>
				<td><label for="name">Name Product : </label></td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
			<tr>
				<td><label for="price">Price : </label></td>
				<td><input type="number" name="price" id="price"></td>
			</tr>
			<tr>
				<td><label for="quantity">Quantity : </label></td>
				<td><input type="number" name="qty" id="qty"></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" style="position: relative; left: 104px;">Submit</button></td>
			</tr>
		</table>
	</form>		
</body>
</html>


	