<?php 
	$act = '';
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}

	if ($act == '') {
		$sql	= "SELECT * FROM pengguna";
		$hasil = mysqli_query($con, $sql);
		include 'view.php';
	}elseif ($act == 'add') {
		if ($_POST) {		
			$sql = "INSERT INTO pengguna(nama,username,password) VALUES ('".$_POST['nama']."','".$_POST['username']."','".md5($_POST['password'])."')";
			mysqli_query($con, $sql);
			header('location:index.php?mod=pengguna');
		}
		include 'add.php';
	}elseif ($act == 'edit') {
		if ($_POST) {		
			$sql = "UPDATE pengguna SET nama='".$_POST['nama']."', username='".$_POST['username']."'";
			if ($_POST['password'] !='') {
				$sql .= ", password='".md5($_POST['password'])."'";
			}
			$sql .= " WHERE id = ".$_GET['id'];
			mysqli_query($con, $sql) ;
			header('location:index.php?mod=pengguna');
		}
		$sql	=	"SELECT * FROM pengguna WHERE id = ".$_GET['id'];
		$hasil =	mysqli_query($con, $sql);
		$data	=	mysqli_fetch_assoc($hasil);
		include 'edit.php';
	}elseif ($act == 'hapus') {
		$sql = "DELETE FROM pengguna WHERE id = ".$_GET['id'];
		mysqli_query($con, $sql);
		header('location:index.php?mod=pengguna');
	}
?>