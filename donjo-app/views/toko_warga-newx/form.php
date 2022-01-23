<div class="content-wrapper">
	<section class="content-header">
		<h1>Pengaturan Album</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('toko_warga')?>"><i class="fa fa-dashboard"></i> Toko Warga</a></li>
			<li class="active">Pengaturan Album</li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="validasi" action="<?= $form_action?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-info">
            <div class="box-header with-border">
							<a href="<?= site_url("toko_warga")?>" class="btn btn-social btn-box btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Tambah Artikel">
								<i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar Toko
            	</a>
						</div>
						<div class="box-body">
                            <div class="form-group">
                            <!-- Start Info Pedagang -->
                                <label class="col-sm-3 control-label" style="text-align:left; color:#999">INFO PEDAGANG</label>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label required"  for="nama_pengelola">Nama | NIK </label>
                                <div class="col-sm-3">
                                    <input maxlength="50" class="form-control input-sm required" name="nama_pengelola" id="nama_pengelola" value="<?=$toko_warga['nama_pengelola']?>" type="text" placeholder="Nama pengelola" />
                                </div>
                                <div class="col-sm-2">
                                    <input maxlength="50" class="form-control input-sm required" name="nik" id="nik" value="<?=$toko_warga['nik']?>" type="text" placeholder="NIK" />
                                </div>
                                <div class="col-sm-2">
                                    <input maxlength="50" class="form-control input-sm required" name="no_hp" id="no_hp" value="<?=$toko_warga['no_hp']?>" type="text" placeholder="Contoh: 82317883161" />
                                </div>
                            </div>                                
                            <div class="form-group">
								<label class="control-label col-sm-3" for="nama">Alamat Tinggal</label>
								<div class="col-sm-7">
									<input name="alamat_tinggal" class="form-control input-sm" maxlength="255" type="text" value="<?=$toko_warga['alamat_tinggal']?>"></input>
								</div>
							</div>
                            <!-- End Info Pedagang -->
                            
                            <!-- Start Info Usaha -->
                                                          
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align:left; color:#999">INFO USAHA</label>
                            </div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="nama">Nama Toko</label>
								<div class="col-sm-7">
									<input name="nama" class="form-control input-sm nomor_sk" maxlength="50" type="text" value="<?=$toko_warga['nama']?>"></input>
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align:left;">Nomor Telepon</label>
                                <div class="col-sm-2">
                                    <input maxlength="50" class="form-control input-sm required" name="no_hp_toko" id="no_hp_toko" value="<?=$toko_warga['no_hp_toko']?>" type="text" placeholder="Contoh: 82317883161" />
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
                                            $('#tahun_berdiri').val("<?=$toko_warga['tahun_berdiri']?>");
                                        </script>
                                    </div>
                            </div> 
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kepemilikan_tempat_usaha">Kepemilikan Tempat Usaha</label>
										<div class="col-sm-7">
											<select class="form-control input-sm select2" id="kepemilikan_tempat_usaha" name="kepemilikan_tempat_usaha" style="width:100%;">
												<?php foreach ($kepemilikan_tempat_usaha as $value) : ?>
													<option <?= $value === $toko_warga['kepemilikan_tempat_usaha'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Jumlah Karyawan</label>
										<div class="col-sm-2">
											<input maxlength="50" class="form-control input-sm required" name="jumlah_karyawan" id="jumlah_karyawan" value="<?= $toko_warga['jumlah_karyawan'] ?>" type="text" placeholder="Jumlah Karyawan" />
										</div>
									</div>
									<div class="form-group">
										<label for="jenis_lokasi" class="col-sm-3 control-label">Lokasi Usaha</label>
										<div class="btn-group col-sm-8 kiri" data-toggle="buttons">
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label <?= $toko_warga['lokasi'] ? NULL : 'active' ?>">
												<input type="radio" name="jenis_lokasi" class="form-check-input" value="1" autocomplete="off" onchange="pilih_lokasi(this.value);"> Pilih Lokasi
											</label>
											<label class="btn btn-info btn-flat btn-sm col-sm-3 form-check-label <?= $toko_warga['lokasi'] ? 'active' : NULL ?>">
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
														<option value="<?= $item["id"] ?>" <?php selected($item["id"], $toko_warga['id_lokasi']) ?>><?= strtoupper($item["dusun"]) ?> <?= empty($item['rw']) ? "" : " - RW  {$item["rw"]}" ?> <?= empty($item['rt']) ? "" : " / RT  {$item["rt"]}" ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
										<div id="manual">
											<div class="col-sm-7">
												<textarea id="lokasi" class="form-control input-sm required" type="text" placeholder="Lokasi" name="lokasi"><?= $toko_warga['lokasi']?></textarea>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan_lokasi">Keterangan Lokasi Usaha</label>
										<div class="col-sm-7">
											<textarea rows="5" class="form-control input-sm required" name="keterangan_lokasi" id="keterangan_lokasi" placeholder="Keterangan Lengkap Lokasi Usaha"><?= $toko_warga['keterangan_lokasi']?></textarea>
										</div>
									</div>
                                    <div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sumber_dana">Sumber Modal</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="sumber_modal" name="sumber_modal" style="width:100%;">
												<?php foreach ($sumber_modal as $value) : ?>
													<option <?= $value === $toko_warga['sumber_modal'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Taksiran Modal/Aset</label>
										<div class="col-sm-4">
											<input class="form-control input-sm required" name="taksiran_modal" id="taksiran_modal" value="<?= $toko_warga['taksiran_modal'] ?>" type="text" placeholder="Taksiran Modal" />
										</div>
									</div>
                                    
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Taksiran Omset</label>
										<div class="col-sm-4">
											<input maxlength="50" class="form-control input-sm required" name="taksiran_omset" id="taksiran_omset" value="<?= $toko_warga['taksiran_omset'] ?>" type="text" placeholder="Taksiran Omset" />
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
													<option <?= $value === $toko_warga['kelompok_usaha_perdagangan'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
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
													<option <?= $value === $toko_warga['sarana_berdagang'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="area_usaha">Area/Kawasan Usaha</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="area_usaha" name="area_usaha" style="width:100%;">
												<?php foreach ($area_usaha as $value) : ?>
													<option <?= $value === $toko_warga['area_usaha'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;">Produk utama</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm required" name="produk_utama" id="produk_utama" value="<?= $toko_warga['produk_utama'] ?>" type="text" placeholder="Produk Utama" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="kategori_toko">Kategori Toko</label>
										<div class="col-sm-5">
											<select class="form-control input-sm select2" id="kategori_toko" name="kategori_toko" style="width:100%;">
												<?php foreach ($kategori_toko as $value) : ?>
													<option <?= $value === $toko_warga['kategori_toko'] ? 'selected' : '' ?> value="<?= $value ?>"><?= $value ?></option>
												<?php endforeach; ?>
											</select>
										</div>
									</div>
                                    
                                    <!-- End Klasifikasi Usaha -->
                                    <!-- Start Klasifikasi Usaha -->
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="email">Email</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="email" id="email" value="<?= $toko_warga['email'] ?>" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="website">Website</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="website" id="website" value="<?= $toko_warga['website'] ?>" type="text" placeholder="Website" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="fb">Facebook</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="fb" id="fb" value="<?= $toko_warga['fb'] ?>" type="text" placeholder="Nama Facebook" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="ig">Instagram</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="ig" id="ig" value="<?= $toko_warga['ig'] ?>" type="text" placeholder="Nama Akun Instagram" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="youtube">Youtube</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="youtube" id="youtube" value="<?= $toko_warga['youtube'] ?>" type="text" placeholder="Chanel Youtube" />
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
											<input maxlength="50" class="form-control input-sm" name="skdu" id="skdu" value="<?= $toko_warga['skdu'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="iud">IUD (Izin Usaha Dagang)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="iud" id="iud" value="<?= $toko_warga['iud'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="npwp">NPWP (Nomor Pokok Wajib Pajak)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="npwp" id="npwp" value="<?= $toko_warga['npwp'] ?>" type="text" placeholder="Nomor NPWP" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="situ">SITU (Surat Izin Tempat Usaha)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="situ" id="situ" value="<?= $toko_warga['situ'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="siui">SIUI (Surat Izin Usaha Industri)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="siui" id="siui" value="<?= $toko_warga['siui'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="sip">SIP (Surat Izin Prinsip)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="sip" id="sip" value="<?= $toko_warga['sip'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="siup">SIUP (Surat Izin Usaha Perdagangan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="siup" id="siup" value="<?= $toko_warga['siup'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tdp">TDP (Tanda Daftar Perusahaan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="tdp" id="tdp" value="<?= $toko_warga['tdp'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="tdi">TDI (Tanda Daftar Industri)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="tdi" id="tdi" value="<?= $toko_warga['tdi'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="imb">IMB (Surat Izin Mendirikan Bangunan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="imb" id="imb" value="<?= $toko_warga['imb'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="bpom">BPOM (Badan Pengawas Obat dan Makanan)</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="bpom" id="bpom" value="<?= $toko_warga['bpom'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="ho">HO Surat Izin Gangguan</label>
										<div class="col-sm-5">
											<input maxlength="50" class="form-control input-sm" name="ho" id="ho" value="<?= $toko_warga['ho'] ?>" type="text" placeholder="Nomor Surat" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label" style="text-align:left;" for="keterangan">Keterangan</label>
										<div class="col-sm-7">
                                            <textarea id="keterangan" class="form-control input-sm" type="text" placeholder="Keterangan" name="keterangan"><?= $toko_warga['keterangan'] ?></textarea>											
										</div>
									</div>
                                    
                                    
                                    <!-- End Perizinan Usaha -->


                            
							<?php if ($toko_warga['gambar']): ?>
								<div class="form-group">
									<label class="control-label col-sm-3" for="nama"></label>
									<div class="col-sm-7">
										<input type="hidden" name="old_gambar" value="<?= $toko_warga['gambar']?>">
									  <img class="attachment-img img-responsive img-circle" src="<?= AmbilGaleri($toko_warga['gambar'], 'sedang') ?>" alt="Gambar Album">
									</div>
								</div>
							<?php endif; ?>
							<div class="form-group">
								<label class="control-label col-sm-3" for="upload">Unggah Gambar</label>
								<div class="col-sm-7">
									<div class="input-group input-group-sm">
										<input type="text" class="form-control <?php !($toko_warga['gambar']) and print('required') ?>" id="file_path">
										<input id="file" type="file" class="hidden" name="gambar">
										<span class="input-group-btn">
											<button type="button" class="btn btn-info btn-box"  id="file_browser"><i class="fa fa-search"></i> Browse</button>
										</span>
									</div>
									<?php $upload_mb = max_upload();?>
									<p><label class="control-label">Batas maksimal pengunggahan berkas <strong><?=$upload_mb?> MB.</strong></label></p>
								</div>
							</div>
						</div>
						<div class='box-footer'>
							<div class='col-xs-12'>
								<button type='reset' class='btn btn-social btn-box btn-danger btn-sm' ><i class='fa fa-times'></i> Batal</button>
								<button type='submit' class='btn btn-social btn-box btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
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
