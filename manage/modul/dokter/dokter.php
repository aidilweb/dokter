<?php 
	$act = '';
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}

	if ($act == '') {
		$sql	= "SELECT * FROM dokter";
		$hasil = mysqli_query($con, $sql);
		
		include 'view.php';
	}elseif ($act == 'add') {
		if ($_POST) {		
			$sql = "INSERT INTO dokter(nama_lengkap) VALUES ('".$_POST['nama_lengkap']."')";
			mysqli_query($con, $sql);
			header('location:index.php?mod=dokter');
		}
		include 'add.php';
	}elseif ($act == 'edit') {
		if ($_POST) {		
			$sql = "UPDATE dokter SET nama_lengkap='".$_POST['nama_lengkap']."' WHERE id = ".$_GET['id'];
			mysqli_query($con, $sql);
			header('location:index.php?mod=dokter');
		}
		$sql	=	"SELECT * FROM dokter WHERE id = ".$_GET['id'];
		$hasil =	mysqli_query($con, $sql);
		$data	=	mysqli_fetch_assoc($hasil);

		include 'edit.php';
	}elseif ($act == 'hapus') {
		$sql = "DELETE FROM dokter WHERE id = ".$_GET['id'];
		mysqli_query($con, $sql);
		header('location:index.php?mod=dokter');
	}
?>