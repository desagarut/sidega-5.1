<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengaturan Kategori Produk</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid') ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url("toko_warga/show_produk/{$id_toko_warga}") ?>"><i class="fa fa-dashboard"></i>Kategori Produk </a></li>
			<li class="active">Pengaturan Kategori Produk</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="<?= site_url("toko_warga/show_produk/{$id_toko_warga}") ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Produk</a>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<input type="hidden" name="id_toko_warga" value="<?= $id_toko_warga ?>">
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="nama_produk">Nama Produk</label>
										<div class="col-sm-7">
											<input maxlength="50" class="form-control input-sm" name="nama_produk" id="nama_produk" value="<?= $main->nama_produk ?>" type="text" placeholder="Nama Produk" />
										</div>
									</div>
                                    
                                    <div class="form-group">
										<label for="kategori_produk" class="col-sm-3 control-label">Kategori Produk</label>
										<div class="btn-group col-sm-8 kiri" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label active">
												<input type="radio" name="kategori_produk" class="form-check-input" value="1" autocomplete="off" onchange="pilih_kategori_produk(this.value);"> Pilih Kategori
											</label>
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label">
												<input type="radio" name="kategori_produk" class="form-check-input" value="2" autocomplete="off" onchange="pilih_kategori_produk(this.value);"> Tulis Manual
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"></label>
										<div id="pilih">
											<div class="col-sm-7">
												<select class="form-control input-sm select2 required" id="id_kategori_produk" name="id_kategori_produk" style="width:100%">
													<option value=''>-- Pilih Kategori --</option>
													<?php foreach ($kategori_produk as $value) : ?>
														<option value="<?= $value ?>" <?= selected($main->kategori_produk, $value) ?>><?= $value ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div id="manual">
											<div class="col-sm-7">
												<input maxlength="50" class="form-control input-sm required" name="kategori_produk" id="kategori_produk" type="text" placeholder="Contoh: Terlaris" value="<?= $main->kategori_produk ?>" />
											</div>
										</div>
									</div>
									<?php if ($main->gambar) : ?>
										<div class="form-group">
											<label class="control-label col-sm-4" for="nama"></label>
											<div class="col-sm-6">
												<input type="hidden" name="old_foto" value="<?= $main->gambar ?>">
												<img class="attachment-img img-responsive img-circle" src="<?= base_url() . LOKASI_GALERI . $main->gambar ?>" alt="Gambar Dokumentasi" width="200" height="200">
											</div>
										</div>
									<?php endif; ?>
									<div class="form-group">
										<label class="control-label col-sm-3" for="upload">Unggah Dokumentasi</label>
										<div class="col-sm-7">
											<div class="input-group input-group-sm">
												<input type="text" class="form-control " id="file_path" name="gambar">
												<input id="file" type="file" class="hidden" name="gambar">
												<span class="input-group-btn">
													<button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
												</span>
											</div>
											<span class="help-block"><code>(Kosongkan jika tidak ingin mengubah gambar)</code></span>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="harga">Harga Produk</label>
										<div class="col-sm-7">
											<input maxlength="50" class="form-control input-sm" name="harga" id="harga" value="<?= $main->harga ?>" type="text" placeholder="Harga" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="stok">Stok Tersedia</label>
										<div class="col-sm-7">
											<input maxlength="50" class="form-control input-sm" name="stok" id="stok" value="<?= $main->stok ?>" type="text" placeholder="Stok" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-7">
											<textarea rows="5" class="form-control input-sm required" name="keterangan" id="keterangan" placeholder="Keterangan"><?= $main->keterangan ?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="box-footer">
							<div class="col-xs-12">
								<button type="reset" class="btn btn-social btn-flat btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
								<button type="submit" class="btn btn-social btn-flat btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
<script>
	function pilih_kategori_produk(pilih) {
		if (pilih == 1) {
			$('#kategori_produk').val('');
			$('#kategori_produk').removeClass('required');
			$("#manual").hide();
			$("#pilih").show();
			$('#id_kategori_produk').addClass('required');
		} else {
			$('#id_kategori_produk').val('');
			$('#id_kategori_produk').trigger('change', true);
			$('#id_kategori_produk').removeClass('required');
			$("#manual").show();
			$('#kategori_produk').addClass('required');
			$("#pilih").hide();
		}
	}

	$(document).ready(function() {
		pilih_kategori_produk(<?= in_array($main->kategori_produk, $kategori_produk) ? 1 : 2 ?>);
	});
</script>
