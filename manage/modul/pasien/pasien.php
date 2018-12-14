<?php 
	$act = '';
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}

	if ($act == '') {
		$sql	= "SELECT * FROM pasien";
		$hasil = mysqli_query($con, $sql);
		
		include 'view.php';
	}elseif ($act == 'add') {
		if ($_POST) {		
			$sql = "INSERT INTO pasien(nama_lengkap,no_telepon) VALUES ('".$_POST['nama_lengkap']."','".$_POST['no_telepon']."')";
			mysqli_query($con, $sql);
			header('location:index.php?mod=pasien');
		}
		include 'add.php';
	}elseif ($act == 'edit') {
		if ($_POST) {		
			$sql = "UPDATE pasien SET nama_lengkap='".$_POST['nama_lengkap']."', no_telepon='".$_POST['no_telepon']."' WHERE id = ".$_GET['id'];
			mysqli_query($con, $sql);
			header('location:index.php?mod=pasien');
		}
		$sql	=	"SELECT * FROM pasien WHERE id = ".$_GET['id'];
		$hasil =	mysqli_query($con, $sql);
		$data	=	mysqli_fetch_assoc($hasil);

		include 'edit.php';
	}elseif ($act == 'hapus') {
		$sql = "DELETE FROM pasien WHERE id = ".$_GET['id'];
		mysqli_query($con, $sql);
		header('location:index.php?mod=pasien');
	}
?>