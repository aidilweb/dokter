<h2>Edit Dokter</h2>
<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>" required>
					</div>
					<a href="?mod=dokter" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
