<script type="text/javascript">
	$(document).ready(function()
	{
		//https://momentjs.com/docs/#/parsing/string-format/
		$('#tanggal_awal_operasi').datetimepicker(
		{
			format: 'YYYY-MM-DD'
		});
	});
</script>

<div class="form-group">
	<label for="nama_toko" class="col-sm-3 control-label">Nama Toko - Tanggal Awal Operasi</label>
	<div class="col-sm-4">
		<input class="form-control input-sm required" type="text" name="nama_toko" id="nama_toko" value="<?= $nama_toko?>" placeholder="Nama Toko">
	</div>

	<div class="col-sm-4">
		<div class="input-group input-group-sm date">
			<div class="input-group-addon">
		        <i class="fa fa-calendar"></i>
		    </div>
		    <input type="text" class="form-control input-sm pull-right required" id="tanggal_awal_operasi" name="tanggal_awal_operasi" value="<?= $tanggal_awal_operasi?>">
	    </div>
	</div>
</div>

<div class="form-group">
	<label for="jenis_toko" class="col-sm-3 control-label">Jenis Toko - Jumlah Toko dimiliki</label>
	<div class="col-sm-4">
		<select class="form-control input-sm" name="jenis_toko" id="jenis_toko">
			<option value="">-- Pilih Jenis Toko --</option>
			<?php foreach ($select_jenis_toko as $id => $nama): ?>
			<option value="<?= $id?>" <?php selected($jenis_toko, $nama); ?> > <?= strtoupper($nama)?> </option>
			<?php endforeach;?>
		</select>
	</div>
	<div class="col-sm-4">
		<input class="form-control input-sm number" type="text" name="jumlah_toko" id="jumlah_toko" value="<?= $jumlah_toko?>" placeholder="Jumlah Toko (angka)">
	</div>
</div>

<div class="form-group">
	<label  class="col-sm-3 control-label" for="status_toko">Status Toko</label>
	<div class="col-sm-4">
		<select class="form-control input-sm required" name="status_toko" id="status_toko">
			<option value="">-- Pilih Status Operasional Toko (Buka/Tutup) --</option>
			<?php foreach ($select_status_toko as $id => $nama): ?>
		  	<option value="<?= $id?>" <?php selected($status_toko, $id); ?> > <?= strtoupper($nama)?> </option>
			<?php endforeach;?>
		</select>
	 </div>
	<div class="col-sm-4">
		<select class="form-control input-sm required" name="kepemilikan_bangunan_toko" id="kepemilikan_bangunan_toko">
			<option value="">-- Kepemilikan Bangunan Toko (Milik Sendiri/Sewa) --</option>
			<?php foreach ($select_kepemilikan_bangunan_toko as $id => $nama): ?>
		  	<option value="<?= $id?>" <?php selected($kepemilikan_bangunan_toko, $id); ?> > <?= strtoupper($nama)?> </option>
			<?php endforeach;?>
		</select>
	 </div>
     
</div>

<div class="form-group">
	<label  class="col-sm-3 control-label" for="wajib_survei">Apakah Wajib disurvei</label>
	<div class="col-sm-8">
		 <select class="form-control input-sm" name="wajib_survei" id="wajib_survei">
			<option value="1" <?php selected($is_wajib_survei, '1'); ?> >Ya</option>
			<option value="0" <?php selected($is_wajib_survei, '0'); ?> >Tidak</option>
		</select>
		<span id="wajib_pantau_plus_msg" class="help-block">
			<code>Jika ya, daftar warga ini masuk dalam daftar toko warga yang disurvei</code>
		</span>
	 </div>
</div>

<div class="form-group">
	<label  class="col-sm-3 control-label" for="deskripsi_toko">Deskripsi Singkat Toko</label>
	<div class="col-sm-8">
		<input class="form-control input-sm" type="text" name="deskripsi_toko" id="deskripsi_toko" value="<?= $deskripsi_toko?>" placeholder="Deskripsi Toko">
	 </div>
</div>

<div class="form-group">
	<label  class="col-sm-3 control-label" for="alamat_toko">Alamat Toko</label>
	<div class="col-sm-8">
		<input class="form-control input-sm" type="text" name="alamat_toko" id="alamat_toko" value="<?= $alamat_toko?>" placeholder="Alamat Toko">
	 </div>
</div>

<div class="form-group">
	<label for="no_hp" class="col-sm-3 control-label">Nomor HP / WA - Email)</label>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" name="no_hp" id="no_hp" value="<?= $no_hp?>" placeholder="No HP/WA">
	</div>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" name="email" id="email" value="<?= $email?>" placeholder="Email">
	</div>
</div>

<div class="form-group">
	<label for="webiste" class="col-sm-3 control-label">Website</label>
	<div class="col-sm-8">
		<input class="form-control input-sm" type="text" name="website" id="website" value="<?= $website?>" placeholder="https://desagarut.id">
	</div>
</div>

<div class="form-group">
	<label for="fb" class="col-sm-3 control-label">Sosial Media</label>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" name="fb" id="fb" value="<?= $fb?>" placeholder="https://facebook.com/desagarut">
	</div>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" name="ig" id="ig" value="<?= $ig?>" placeholder="https://instagram.com/desagarut">
	</div>
</div>

<div class="form-group">
	<label  class="col-sm-3 control-label" for="keterangan">Keterangan</label>
	<div class="col-sm-8">
		 <textarea name="keterangan" id="keterangan" class="form-control input-sm" placeholder="Keterangan" rows="3" style="resize:none;"><?= $keterangan?></textarea>
	 </div>
</div>