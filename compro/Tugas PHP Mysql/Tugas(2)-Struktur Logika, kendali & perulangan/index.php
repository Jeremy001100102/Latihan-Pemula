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
				<th class="h-kolom">Nama Produk</th>
			</tr>
		</thead>
		<tbody>
			<?php for($i = 0; $i < 5; $i++):  ?>
			<?php echo $i % 2 == 1 ? "<tr class='header'>" : "<tr>" ?>
			
				<td>1</td>
				<td>Komputer 1</td>
			</tr>
			<?php endfor ?>

		</tbody>
	</table>	
</body>
</html>

