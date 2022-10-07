<?php 	
		
	require 'functions.php';
	session_start();

	$id = $_GET['id'];

	if(erase($id) > 0){
		echo "	
			<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'index.php';
			</script>
		";

		$_SESSION['css'] = true;
		exit;
	}
		echo "	
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'index.php';
			</script>


		";


?>