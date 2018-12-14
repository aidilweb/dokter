<?php 
	$act = '';
	if (isset($_GET['act'])) {
		$act = $_GET['act'];
	}

	if ($act == '') {
		$sql	= "SELECT tindakan.*,dokter.nama_lengkap as dokter, pasien.nama_lengkap as pasien FROM tindakan INNER JOIN dokter ON dokter.id=tindakan.id_dokter INNER JOIN pasien ON pasien.id=tindakan.id_pasien ";
		$hasil = mysqli_query($con, $sql);
		
		include 'view.php';
	}elseif ($act == 'add') {
		if ($_POST) {		
			$sql = "INSERT INTO tindakan(id_dokter,id_pasien,diagnosa,tindakan,resep,tanggal) VALUES ('".$_POST['id_dokter']."','".$_POST['id_pasien']."','".$_POST['diagnosa']."','".$_POST['tindakan']."','".$_POST['resep']."','".$_POST['tanggal']."')";
			mysqli_query($con, $sql);
			header('location:index.php?mod=tindakan');
		}


		$sql2	= "SELECT * FROM dokter";
		$hasil2 = mysqli_query($con, $sql2);

		$sql3	= "SELECT * FROM pasien";
		$hasil3 = mysqli_query($con, $sql3);

		include 'add.php';
	}elseif ($act == 'edit') {
		if ($_POST) {		
			$sql = "UPDATE tindakan SET id_dokter='".$_POST['id_dokter']."', id_pasien='".$_POST['id_pasien']."', diagnosa='".$_POST['diagnosa']."', tindakan='".$_POST['tindakan']."', resep='".$_POST['resep']."', tanggal='".$_POST['tanggal']."' WHERE id = ".$_GET['id'];
			mysqli_query($con, $sql);
			header('location:index.php?mod=tindakan');
		}
		$sql	=	"SELECT * FROM tindakan WHERE id = ".$_GET['id'];
		$hasil =	mysqli_query($con, $sql);
		$data	=	mysqli_fetch_assoc($hasil);

		$sql2	= "SELECT * FROM dokter";
		$hasil2 = mysqli_query($con, $sql2);

		$sql3	= "SELECT * FROM pasien";
		$hasil3 = mysqli_query($con, $sql3);

		include 'edit.php';
	}elseif ($act == 'hapus') {
		$sql = "DELETE FROM tindakan WHERE id = ".$_GET['id'];
		mysqli_query($con, $sql);
		header('location:index.php?mod=tindakan');
	}
?>