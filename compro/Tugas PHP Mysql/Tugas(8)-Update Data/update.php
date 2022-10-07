<?php 	
	

	require 'functions.php';
	session_start();

	$id = $_GET['id'];

	$dp = query("SELECT * FROM products WHERE product_id = $id")[0];
	
	$pesan_error = []; 

			
			


	if (isset($_POST['submit'])) {

		

		if($_POST['name'] == "" || $_POST['price'] == "" || $_POST['qty'] == ""){
				
			$pesan_error["name"] = "nama produk tidak boleh kosong";
			$pesan_error["price"] = "harga tidak boleh kosong";
			$pesan_error["qty"] = "kuantitias tidak boleh kosong";

			
			$_SESSION['valid'] = true;


		}else{
			if(edit($_POST, $id) > 0){
				echo"
					<script>
						alert('Data Berhasil Diupdate');
						document.location.href = 'index.php';
					</script>	
				";				
			}else{
				echo"
					<script>
						alert('Data Gagal Diupdate');
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
	<title>Update Data Product</title>
	<style>
	
	</style>
</head>
<body>
	<h1>Update Data Product</h1>
	<form action="" method="post" name="edit" enctype="multipart/form-data">
		<table style="background-color: darkgray; padding: 10px;">
			<tr>
				<td><label for="name">Name Product : </label></td>
				<td><input type="text" name="name" id="name" value="<?= $dp['name']; ?>"></td>
				<td class="error" style="display: none;"><?php  echo $pesan_error['name']; ?></td>
			</tr>
			<tr>
				<td><label for="price">Price : </label></td>
				<td><input type="number" name="price" id="price" value="<?= $dp['price']; ?>"></td>
				<td class="error" style="display: none;"><?php  echo $pesan_error['price']; ?></td>
			</tr>
			<tr>
				<td><label for="quantity">Quantity : </label></td>
				<td><input type="number" name="qty" id="qty" value="<?= $dp['qty']; ?>"></td>
				<td class="error" style="display: none;"><?php  echo $pesan_error['qty']; ?></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" style="position: relative; left: 104px;">Submit</button></td>
			</tr>

			
		</table>
	</form>	

		<?php if(isset($_SESSION['valid'])) {
			
				
			echo "
		
				<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
				<script>
					$(document).ready(function(){
						$('.error').css({
							'display' : 'block',		
   					 		'background-color' : 'white', 
   							'font-style' : 'italic',
   					 		'color' : 'red'
						});
					});
				</script>

			";				
			 session_unset(); 

		} ?>	
</body>
</html>
