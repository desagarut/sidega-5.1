<div class="content-wrapper">
	<section class="content-header">
		<h1>Tambah/Ubah Data Transportasi Warga</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('home') ?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('transportasi_warga') ?>"><i class="fa fa-dashboard"></i>Daftar Transportasi Warga</a></li>
			<li class="active">Tambah/Ubah Data Transportasi Warga</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="<?= site_url('transportasi_warga') ?>" class="btn btn-social btn-flat btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Daftar Transportasi Warga</a>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
                                    <!-- Start Info Pedagang -->
										<label class="col-sm-3 control-label" style="text-align:left; color:#999">INFO PEDAGANG</label>
                                    </div>
                                    <div class="form-group" >
                                        <label class="col-sm-3 control-label required"  for="nama_pengelola">Nama | NIK </label>
                                        <div class="col-sm-3">
                                            <input maxlength="50" class="form-control input-sm required" name="nama_pengelola" id="nama_pengelola" value="<?= $main->nama_pengelola ?>" type="text" placeholder="Nama pengelola" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input maxlength="50" class="form-control input-sm required" name="nik" id="nik" value="<?= $main->nik ?>" type="text" placeholder="NIK" />
                                        </div>
                                        <div class="col-sm-2">
                                            <input maxlength="50" class="form-control input-sm required" name="no_hp" id="no_hp" value="<?= $main->no_hp ?>" type="text" placeholder="No. Telepon" />
                                        </div>
                                    </div>                                
                                
                                    <div class="form-group" >
                                        <label class="col-sm-3 control-label required"  for="alamat_tinggal">Alamat Tempat Tinggal</label>
                                        <div class="col-sm-7">
											<textarea rows="3" class="form-control input-sm required" name="alamat_tinggal" id="alamat_tinggal" placeholder="Alamat Tempat Tinggal"><?= $main->alamat_tinggal ?></textarea>
                                        </div>
                                    </div>  
                                    <!-- End Info Pedagang -->
                                    
                                    <!-- Start Info Usaha -->
                                                                  
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left; color:#999">INFO USAHA</label>
                                    </div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Nama Usaha</label>
										<div class="col-sm-7">
											<input maxlength="50" class="form-control input-sm required" name="nama_usaha" id="nama_usaha" value="<?= $main->nama_usaha ?>" type="text" placeholder="Nama Usaha/Warung/Kedai/Transportasi" />
										</div>
                                    </div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Nomor Telepon</label>
                                        <div class="col-sm-2">
                                            <input maxlength="50" class="form-control input-sm required" name="no_hp_toko" id="no_hp_toko" value="<?= $main->no_hp_toko ?>" type="text" placeholder="Nomor Telepon" />
                                        </div>
									</div>
                                    
                                    <div class="form-group">
                                        <label for="nama_toko" class="col-sm-3 control-label">Tahun Berdiri</label>
                                            <div class="col-sm-2">
                                                <select class="form-control input-sm select2" id="tahun_berdiri" name="tahun_berdiri" style="width:100%;">
                                                    <?php for ($i = date('Y'); $i >= 1999; $i--) : ?>
                                                        <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php endfor; ?>
                                                </select>
                                                <script>
                                                    $('#tahun_berdiri').val("<?= $main->tahun_berdiri?>");
                                                </script>
                                            </div>
                                    </div> 
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kepemilikan_tempat_usaha">Kepemilikan Tempat Usaha</label>
										<div class="col-sm-7">
											<select class="form-control input-sm select2" id="kepemilikan_tempat_usaha" name="kepemilikan_tempat_usaha" style="width:100%;">
												<?php foreach ($kepemilikan_tempat_usaha as $value) : ?>
													<option <?= $value === $main->kepemilikan_tempat_usaha ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Jumlah Karyawan</label>
										<div class="col-sm-2">
											<input maxlength="50" class="form-control input-sm required" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $main->jumlah_karyawan ?>" type="text" placeholder="Jumlah Karyawan" />
										</div>
									</div>
									<div class="form-group">
										<label for="jenis_lokasi" class="col-sm-3 control-label">Lokasi Usaha</label>
										<div class="btn-group col-sm-8 kiri" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label <?= $main->lokasi ? NULL : 'active' ?>">
												<input type="radio" name="jenis_lokasi" class="form-check-input" value="1" autocomplete="off" onchange="pilih_lokasi(this.value);"> Pilih Lokasi
											</label>
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label <?= $main->lokasi ? 'active' : NULL ?>">
												<input type="radio" name="jenis_lokasi" class="form-check-input" value="2" autocomplete="off" onchange="pilih_lokasi(this.value);"> Tulis Manual
											</label>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label"></label>
										<div id="pilih">
											<div class="col-sm-7">
												<select class="form-control input-sm select2 required" id="id_lokasi" name="id_lokasi" style="width:100%">
													<option value=''>-- Pilih Lokasi Tempat Usaha --</option>
													<?php foreach ($list_lokasi as $key => $item) : ?>
														<option value="<?= $item["id"] ?>" <?php selected($item["id"], $main->id_lokasi) ?>><?= strtoupper($item["dusun"]) ?> <?= empty($item['rw']) ? "" : " - RW  {$item["rw"]}" ?> <?= empty($item['rt']) ? "" : " / RT  {$item["rt"]}" ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div id="manual">
											<div class="col-sm-7">
												<textarea id="lokasi" class="form-control input-sm required" type="text" placeholder="Lokasi" name="lokasi"><?= $main->lokasi ?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan_lokasi">Keterangan Lokasi Usaha</label>
										<div class="col-sm-7">
											<textarea rows="5" class="form-control input-sm required" name="keterangan_lokasi" id="keterangan_lokasi" placeholder="Keterangan Lengkap Lokasi Usaha"><?= $main->keterangan_lokasi ?></textarea>
										</div>
									</div>
									<?php if ($main->foto) : ?>
										<div class="form-group">
											<label class="control-label col-sm-4" for="nama"></label>
											<div class="col-sm-6">
												<input type="hidden" name="old_foto" value="<?= $main->foto ?>">
												<img class="attachment-img img-responsive img-circle" src="<?= base_url() . LOKASI_GALERI . $main->foto ?>" alt="Gambar Tempat Usaha" width="200" height="200">
											</div>
										</div>
									<?php endif; ?>
									<div class="form-group">
										<label class="control-label col-sm-3" for="upload">Unggah Foto Tempat Usaha</label>
										<div class="col-sm-7">
											<div class="input-group input-group-sm">
												<input type="text" class="form-control " id="file_path" name="foto">
												<input id="file" type="file" class="hidden" name="foto">
												<span class="input-group-btn">
													<button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i> Browse</button>
												</span>
											</div>
											<span class="help-block"><code>(Kosongkan jika tidak ingin mengubah foto)</code></span>
										</div>
									</div>  
                                    <div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sumber_dana">Sumber Modal</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="sumber_modal" name="sumber_modal" style="width:100%;">
												<?php foreach ($sumber_modal as $value) : ?>
													<option <?= $value === $main->sumber_modal ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Taksiran Modal/Aset</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" name="taksiran_modal" id="taksiran_modal" value="<?= $main->taksiran_modal ?>" type="text" placeholder="Taksiran Modal" />
										</div>
									</div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Taksiran Omset</label>
										<div class="col-sm-4">
											<input maxlength="50" class="form-control input-sm required" name="taksiran_omset" id="taksiran_omset" value="<?= $main->taksiran_omset ?>" type="text" placeholder="Taksiran Omset" />
										</div>
									</div>
                                    <!-- End Info Usaha -->
                                    
                                    <!-- Start Klasifikasi Usaha -->
                                                                        
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left; color:#999">KLASIFIKASI USAHA</label>
                                    </div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kelompok_usaha_perdagangan">Kelompok Usaha Perdagangan</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="kelompok_usaha_perdagangan" name="kelompok_usaha_perdagangan" style="width:100%;">
												<?php foreach ($kelompok_usaha_perdagangan as $value) : ?>
													<option <?= $value === $main->kelompok_usaha_perdagangan ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
                                            <a href="<?=site_url("toko_warga/panduan")?>" title="" class="btn" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Panduan"><i class="fa fa-info" style="color:#F00"></i></a>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sarana_berdagang">Sarana Berdagang</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="sarana_berdagang" name="sarana_berdagang" style="width:100%;">
												<?php foreach ($sarana_berdagang as $value) : ?>
													<option <?= $value === $main->sarana_berdagang ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="area_usaha">Area/Kawasan Usaha</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="area_usaha" name="area_usaha" style="width:100%;">
												<?php foreach ($area_usaha as $value) : ?>
													<option <?= $value === $main->area_usaha ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Produk utama</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm required" name="produk_utama" id="produk_utama" value="<?= $main->produk_utama ?>" type="text" placeholder="Produk Utama" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kategori_toko">Kategori Transportasi</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="kategori_toko" name="kategori_toko" style="width:100%;">
												<?php foreach ($kategori_toko as $value) : ?>
													<option <?= $value === $main->kategori_toko ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
                                    
                                    <!-- End Klasifikasi Usaha -->
                                    <!-- Start Klasifikasi Usaha -->
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="email">Email</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="email" id="email" value="<?= $main->email ?>" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="website">Website</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="website" id="website" value="<?= $main->website ?>" type="text" placeholder="Website" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="fb">Facebook</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="fb" id="fb" value="<?= $main->fb ?>" type="text" placeholder="Nama Facebook" />
										</div>
									</div>
                                    <!-- End Klasifikasi Usaha -->
                                    <!-- Start Perizinan Usaha -->
                                                                        
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left; color:#999">IZIN USAHA</label>
                                    </div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="skdu">SKDU (Surat Keterangan Domisili Usaha)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="skdu" id="skdu" value="<?= $main->skdu ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="iud">IUD (Izin Usaha Dagang)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="iud" id="iud" value="<?= $main->iud ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="npwp">NPWP (Nomor Pokok Wajib Pajak)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="npwp" id="npwp" value="<?= $main->npwp ?>" type="text" placeholder="Nomor NPWP" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="situ">SITU (Surat Izin Tempat Usaha)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="situ" id="situ" value="<?= $main->situ ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="siui">SIUI (Surat Izin Usaha Industri)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="siui" id="siui" value="<?= $main->siui ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sip">SIP (Surat Izin Prinsip)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="sip" id="sip" value="<?= $main->sip ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="siup">SIUP (Surat Izin Usaha Perdagangan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="siup" id="siup" value="<?= $main->siup ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tdp">TDP (Tanda Daftar Perusahaan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="tdp" id="tdp" value="<?= $main->tdp ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tdi">TDI (Tanda Daftar Industri)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="tdi" id="tdi" value="<?= $main->tdi ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="imb">IMB (Surat Izin Mendirikan Bangunan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="imb" id="imb" value="<?= $main->imb ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="bpom">BPOM (Badan Pengawas Obat dan Makanan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="bpom" id="bpom" value="<?= $main->bpom ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="ho">HO Surat Izin Gangguan</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="ho" id="ho" value="<?= $main->ho ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-7">
                                            <textarea id="keterangan" class="form-control input-sm required" type="text" placeholder="Keterangan" name="keterangan"><?= $main->keterangan ?></textarea>											
										</div>
									</div>
                                    
                                    
                                    <!-- End Perizinan Usaha -->
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
	function pilih_lokasi(pilih) {
		if (pilih == 1) {
			$('#lokasi').val(null);
			$('#lokasi').removeClass('required');
			$("#manual").hide();
			$("#pilih").show();
			$('#id_lokasi').addClass('required');
		} else {
			$('#id_lokasi').val(null);
			$('#id_lokasi').trigger('change', true);
			$('#id_lokasi').removeClass('required');
			$("#manual").show();
			$('#lokasi').addClass('required');
			$("#pilih").hide();
		}
	}

	$(document).ready(function() {
		pilih_lokasi(<?= is_null($main->lokasi) ? 1 : 2 ?>);
	});
</script>
