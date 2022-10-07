<?php 	
		
		session_start();


 ?>


<!-- insert -->
<?php 	if(isset($_SESSION['insert'])) { ?>
	
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
	<form action="controller.php" method="post">
		<table style="background-color: darkgray; padding: 10px;">
			<tr>
				<td><label for="name">Name Product : </label></td>
				<td><input type="text" name="name" id="name" required></td>
			</tr>
			<tr>
				<td><label for="price">Price : </label></td>
				<td><input type="number" name="price" id="price" required></td>
			</tr>
			<tr>
				<td><label for="quantity">Quantity : </label></td>
				<td><input type="number" name="qty" id="qty" required></td>
			</tr>
			<tr>
				<td><button type="submit" name="submit" style="position: relative; left: 104px;">Submit</button></td>
			</tr>
		</table>
	</form>		
</body>
</html>

<?php session_unset(); } ?>




<!-- update -->
<?php  if(isset($_GET['id'])) { ?>

<?php 

	$conn = mysqli_connect("localhost", "root", "", "pabrik");

	$_SESSION['id'] = $_GET['id'];
	$id = $_GET['id'];

	$result = mysqli_query($conn ,"SELECT * FROM products WHERE product_id = $id ");
			
	$dp = mysqli_fetch_assoc($result);
	
	
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
	<form action="controller.php" method="post">
		<table style="background-color: darkgray; padding: 10px;">
			<tr>
				<td><label for="name">Name Product : </label></td>
				<td><input type="text" name="name" id="name" value="<?= $dp['name']; ?>" required></td>
				
			</tr>
			<tr>
				<td><label for="price">Price : </label></td>
				<td><input type="number" name="price" id="price" value="<?= $dp['price']; ?>" required></td>
				
			</tr>
			<tr>
				<td><label for="quantity">Quantity : </label></td>
				<td><input type="number" name="qty" id="qty" value="<?= $dp['qty']; ?>" required></td>
				
			</tr>
			<tr>
				<td><button type="submit" name="update" style="position: relative; left: 104px;">Submit</button></td>
			</tr>

			
		</table>
	</form>	

		
</body>
</html>


  <?php } ?>