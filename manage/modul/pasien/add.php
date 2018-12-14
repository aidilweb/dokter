<h2>Tambah Pasien</h2>
<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					<div class="form-group">
						<label for="nama_lengkap">Nama Lengkap</label>
						<input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap" required>
					</div>
					<div class="form-group">
						<label for="no_telepon">No Telepon</label>
						<input type="text" class="form-control" id="no_telepon" placeholder="No Telepon" name="no_telepon" required>
					</div>
					<a href="?mod=pasien" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
