<h2>Pasien</h2>
<a href="?mod=pasien&act=add" class="btn btn-primary mb-3">Tambah</a>

<table class="table table-bordered">

	<tr>
		<th>No</th><th>Nama Lengkap</th><th>No Telepon</th><th>Aksi</th>
	</tr>
	<?php 
		$no =1;
		while($data = mysqli_fetch_assoc($hasil)){ 
	?>

		<tr>
			<td align= "center"><?php echo $no;$no++; ?></td> 
			<td><?php echo $data['nama_lengkap']; ?></td>
			<td><?php echo $data['no_telepon']; ?></td>
			<td>
				<a href="?mod=pasien&act=edit&id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a>
				<a href="?mod=pasien&act=hapus&id=<?php echo $data['id'] ?>" class="btn btn-danger" onclick="return confirm('Yakin dihapus?');">Hapus</a>
			</td>
		</tr>

	<?php } ?>

</table>