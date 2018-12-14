<h2>Dokter</h2>
<a href="?mod=dokter&act=add" class="btn btn-primary mb-3">Tambah</a>

<table class="table table-bordered">

	<tr>
		<th>No</th><th>Nama Lengkap</th><th>Aksi</th>
	</tr>
	<?php 
		$no =1;
		while($data = mysqli_fetch_assoc($hasil)){ 
	?>

		<tr>
			<td align= "center"><?php echo $no;$no++; ?></td> 
			<td><?php echo $data['nama_lengkap']; ?></td>
			<td>
				<a href="?mod=dokter&act=edit&id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
				<a href="?mod=dokter&act=hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin dihapus?');">Hapus</a>
			</td>
		</tr>

	<?php } ?>

</table>