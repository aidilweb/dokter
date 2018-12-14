<h2>Tindakan</h2>
<a href="?mod=tindakan&act=add" class="btn btn-primary mb-3">Tambah</a>

<table class="table table-bordered">

	<tr>
		<th>No</th><th>Tanggal</th><th>Nama Pasien</th><th>Nama Dokter</th><th>Aksi</th>
	</tr>
	<?php 
		$no =1;
		while($data = mysqli_fetch_assoc($hasil)){ 
	?>

		<tr>
			<td align= "center"><?php echo $no;$no++; ?></td> 
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['pasien']; ?></td>
			<td><?php echo $data['dokter']; ?></td>
			<td>
				<a href="?mod=tindakan&act=edit&id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
				<a href="?mod=tindakan&act=hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin dihapus?');">Hapus</a>
			</td>
		</tr>

	<?php } ?>

</table>