<h2>Edit Tindakan</h2>
<div class="row">
	<div class="col-sm-6">
		<div class="card">
			<div class="card-body">
				<form method="POST">
					<div class="form-group">
						<label for="id_dokter">Dokter</label>
						<select class="form-control" id="id_dokter" name="id_dokter">
							<?php while ( $dokter = mysqli_fetch_assoc($hasil2)) { ?>

							<?php 
								if ($dokter['id'] == $data['id_dokter']) {
									$pilih = 'selected';
								}else{
									$pilih = '';
								}
							?>
							<option value="<?php echo $dokter['id'] ?>" <?php echo $pilih ?>><?php echo $dokter['nama_lengkap'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="id_pasien">Pasien</label>
						<select class="form-control" id="id_pasien" name="id_pasien">
							<?php while ( $pasien = mysqli_fetch_assoc($hasil3)) { ?>

							<?php 
								if ($pasien['id'] == $data['id_pasien']) {
									$pilih = 'selected';
								}else{
									$pilih = '';
								}
							?>

							<option value="<?php echo $pasien['id'] ?>" <?php echo $pilih ?>><?php echo $pasien['nama_lengkap'] ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="diagnosa">Diagnosa</label>
						<textarea class="form-control" placeholder="Diagnosa" id="diagnosa" name="diagnosa"><?php echo $data['diagnosa'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="tindakan">Tindakan</label>
						<textarea class="form-control" placeholder="Tindakan" id="tindakan" name="tindakan"><?php echo $data['tindakan'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="resep">Resep</label>
						<textarea class="form-control" placeholder="Resep" id="resep" name="resep"><?php echo $data['resep'] ?></textarea>
					</div>
					<div class="form-group">
						<label for="tanggal">Tanggal</label>
						<input type="date" class="form-control" id="tanggal" placeholder="No Tanggal" name="tanggal" value="<?php echo $data['tanggal'] ?>" required>
					</div>
					<a href="?mod=tindakan" class="btn btn-secondary">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
	</div>
</div>
