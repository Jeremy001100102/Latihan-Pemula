<?php 
	

	if(isset($_GET['action']) == "insert"){
		session_start();

		$_SESSION['insert'] = true;
		echo "
			<script>
				document.location.href = 'view.php';
			</script>
			";
		}

	
	require 'model.php';


	if (isset($_POST['submit'])) {


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



	//update
	
	
		if(isset($_POST['update'])) {

			session_start();

			if(edit($_POST, $_SESSION['id']) > 0){
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
			session_unset();		
		
		}


	//delete

		if(isset($_GET['id'])){


			$id = $_GET['id'];

			if(erase($id) > 0){
				echo "	
					<script>
						alert('Data Berhasil Dihapus');
						document.location.href = 'index.php';
					</script>
				";
				session_start();

				$_SESSION['css'] = true;
				exit;
			}
				
			echo "	
					<script>
						alert('Data Gagal Dihapus');
						document.location.href = 'index.php';
					</script>
				";
		}
	
 

?>




