<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form action="insert_proses.php" method="post" target="_blank">
		<table >	
			<tr>		
				<td><label for="namaProduk">Nama Produk:</label></td>
				<td><input type="text" name="namaProduk" id="namaProduk"></td>
			</tr>

			<tr>
				<td><label for="kategori">Pilih Kategori:</label></td>
				<td>
					<select id="kategori" name="kategori">
						<option value="buku">Buku</option>
						<option value="koran">Koran</option>
						<option value="majalah">Majalah</option>
						<option value="komik">Komik</option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label for="harga">Harga:</label></td>
				<td><input type="number" name="harga" id="harga"></td>
			</tr>
			<tr>
				<td><label for="jumlah">Jumlah:</label></td>
				<td><input type="number" name="jumlah" id="jumlah"></td>
			</tr>

			<tr> 
				<td colspan="2" align="center">
					<button type="submit" name="submit">Kirim</button></td>
				</tr>
			</table>
		</form>

		<div id="tombol"><button id="teks">Insert</button></div>

		<table cellpadding="10" style="border-collapse: collapse;" border="1">
			<thead style="background-color: darkgray;">
				<th class="h-kolom">Nama Produk</th>
				<th class="h-kolom">Kategori</th>
				<th class="h-kolom">Harga</th>
				<th class="h-kolom">Jumlah</th>
			</thead>
			
			<?php if(isset($_POST['submit'])){ ?>
				<tbody>
					<td><?php echo $_POST['namaProduk']?></td>
					<td><?php echo $_POST['kategori']?></td>
					<td><?php echo $_POST['harga']?></td>
					<td><?php echo $_POST['jumlah']?></td>
				</tbody>
			<?php }else{ ?>
				<tbody style="font-style: italic;
				opacity: 50%;">
					<td>empty</td>
					<td>empty</td>
					<td>empty</td>
					<td>empty</td>
				</tbody>
		<?php } ?>
		
	</table>




	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#tombol').click(function(e){

				$('form').toggle();
				$('#teks').text($('#teks').text() == 'Insert' ? 'Hide' : 'Insert');
			});
		});
	</script>


</body>
</html>