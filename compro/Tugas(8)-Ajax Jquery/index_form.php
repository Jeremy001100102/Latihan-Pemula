<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
	form{
		margin: 10%;
		font-size: 18px;
		font-weight: bold;
	}

	#nama, #jk, #ket{
		padding: 0.5vw;
		margin: 10px;
		width: 10vw;
	}

	#jk{
		width: 10vw;
	}


	#ket{
		width:15vw;
		height: 5vw;
		margin-left: 0px;
	}

	#info{
		font-size: 18px;
		font-weight: bold;
		margin: 2vw;
		background-color: white;
	}

	.container{
		background-color: darkgray;
		width: 30vw;
		height: 30vw;
		margin-top: 0% !important;
		margin: 10%;
		border-radius: 2%;
		margin-right: 2vw;
		float: left;
		overflow: auto;


	}

	#result{
		margin: 10%;
		margin-bottom: 2%;
		background-color: darkgray;
		max-width: 30vw;
	}
</style>
</head>
<body>
	<div id="result"></div>
	<div class="container">	
		<form id="data_form">
			<label for="nama">Nama :</label> <br>
			<input type="input" placeholder="Masukkan Nama" id="nama">
			<br>
			<label for="jk">Jenis Kelamin :</label> <br><select
			id="jk">
			<option value="Pria">Pria</option>
			<option value="Wanita">Wanita</option>
		</select>
		<br>
		<label for="ket">Keterangan :</label> <br> <textarea placeholder="Keterangan" id="ket" ></textarea>
		<br>
		<input type="submit">
	</form>
	<div id="info">	</div>
</div>





<div class="container" >	
	<button id="loadBuku">Load Buku</button>
	<button id="getBuku">Get Buku</button>
	<div id="daftarBuku">	</div>
	<div id="get">	</div>
</div>


<script src="js/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function(){
		$('#data_form').submit(function(e){

			const nama = $('#nama').val();
			const jk = $('#jk').val();
			const ket = $('#ket').val();
			const result = 'Nama : '+nama+', Jenis Kelamin : '+jk+', Keterangan : '+ket;
			$('#info').html('<p> '+ result+	'</p>');


			$.ajax({
				url: "form_post.php",
				type: "Post",
				data: {result : result},
				success: function (data) {
					$('#result').html(data);
				}
			}); 
			e.preventDefault();
		});

		$('#loadBuku').click(function(){
			$('#daftarBuku').load('data.html');
			$('#daftarBuku').css({"backgroundColor": "white", "color": "black" });
		});

		$('#getBuku').click(function(){
			$.get('data.html').done(function(data){
				$('#get').html(data);
			});
		});


	});

</script>
</body>
</html>