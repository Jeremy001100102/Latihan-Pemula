<?php 

	$dataProduk = [

			[
				"nama" => "Matematika",
				"harga" => 10000,
				"kategori" => "Buku",
				"jumlah" => 1
			],

			[
				"nama" => "IPA",
				"harga" => 10000,
				"kategori" => "Buku",
				"jumlah" => 5
			],

			[
				"nama" => "IPS",
				"harga" => 10000,
				"kategori" => "Buku",
				"jumlah" => 10
			]
	]



 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table cellspacing="0" border="1" cellpadding="20">
		<thead>
			<tr class="header">
				<th class="h-kolom">NO</th>
				<th class="h-kolom">Nama</th>
				<th class="h-kolom">Harga</th>
				<th class="h-kolom">Kategori</th>
				<th class="h-kolom">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			
			<?php $x = 0; foreach ($dataProduk as $dp): ?>
				<?php echo $x % 2 == 1 ? "<tr class='header'>" : "<tr>" ?>
				<td><?php 	echo ++$x; ?></td>
				<td><?php 	echo $dp["nama"]; ?></td>
				<td><?php 	echo $dp["harga"]; ?></td>
				<td><?php 	echo $dp["kategori"]; ?></td>
				<td><?php 	echo $dp["jumlah"]; ?></td>
			</tr>
				<?php endforeach ?>

		</tbody>
	</table>	
</body>
</html>