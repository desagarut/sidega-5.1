<div class="content-wrapper">
  <section class="content-header">
    <h1>Detil Toko Warga</h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?= site_url('toko_warga')?>"><i class="fa fa-home"></i> Data Toko</a></li>
      <li class="active">Detil Toko</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header"> <a href="<?= site_url('toko_warga')?>" class="btn btn-social btn-box btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
            <?php if ($penduduk['id_status'] === '2' OR $penduduk['id_status'] === '3'): ?>
            <a href="#" class="btn btn-social btn-success btn-sm" data-toggle="modal" data-target="#edit-warga"> <i class="fa fa-edit"></i> Ubah Data Penduduk Non Domisili </a>
            <?php endif ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3"> 
            <!-- Profile Image -->
            <div class="box box-primary">
              <div class="box-body box-profile">
                <div align="center"> <img src="<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>" width="100%"  height="100%"> <small>
                  <h3 class="profile-username text-center">
                    <?= $toko_warga->nama_usaha ?>
                  </h3>
                  <p class="text-muted text-center"> </p>
                </div>
                <ul class="list-group list-group-unbordered" >
                  <li class="list-group-item"><i class="fa fa-map-marker margin-r-5"></i> <b>Alamat: </b> <a class="pull-right">
                    <?= strtoupper($toko_warga->keterangan_lokasi.'<br/> '.$toko_warga->alamat)?>
                    </a> </li>
                  <li class="list-group-item"><i class="fa fa-phone margin-r-5"></i> <b>Telepon:</b><a class="pull-right">
                    <?= strtoupper($toko_warga->no_hp_toko)?>
                    </a> </li>
                  <li class="list-group-item"><i class="fa fa-envelope margin-r-5"></i> <b>Email:</b><a class="pull-right">
                    <?= strtoupper($toko_warga->no_hp_toko)?>
                    </a> </li>
                  <li class="list-group-item"><i class="fa fa-facebook margin-r-5"></i> <b>Fb:</b> <a class="pull-right">
                    <?= strtoupper($toko_warga->fb)?>
                    </a> </li>
                  <li class="list-group-item"><i class="fa fa-instagram margin-r-5"></i> <b>Ig:</b><a class="pull-right">
                    <?= strtoupper($toko_warga->ig)?>
                    </a> </li>
                  <li class="list-group-item"><i class="fa fa-link margin-r-5"></i> <b>Website:</b><a class="pull-right">
                    <?= strtoupper($toko_warga->website)?>
                    </a> </li>
                </ul>
                <a href="https://api.whatsapp.com/send?phone=<?= $toko_warga->no_hp_toko ?>" class="btn btn-social btn-success btn-block" target="_blank"><i class="fa fa-whatsapp"></i> Hubungi</a> </div>
              </small> </div>
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Info Pengelola</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body"> <strong style="color:#06F"><i class="fa fa-book margin-r-5"></i> Nama | Alamat</strong>
                <p class="text-muted"> <i class="fa fa-user margin-r-5" style="color:#F06"></i>
                  <?= $toko_warga->nama_pengelola ?>
                  | <br/>
                  <i class="fa fa-card margin-r-5"></i>
                  <?= $toko_warga->nik ?>
                  <br/>
                </p>
                <hr>
                <strong style="color:#06F"> Alamat Tinggal</strong>
                <p class="text-muted"><i class="fa fa-map-marker margin-r-5"></i>
                  <?= $toko_warga->alamat_tinggal ?>
                </p>
                <hr>
                <strong style="color:#06F"><i class="fa fa-pencil margin-r-5"></i> Kontak</strong>
                <p> <i class="fa fa-phone"></i> +
                  <?= $toko_warga->no_hp_toko ?>
                  <br/>
                  <i class="fa fa-envelope"></i>
                  <?= $toko_warga->no_hp_toko ?>
                </p>
              </div>
              <!-- /.box-body --> 
            </div>
          </div>
          <div class="col-md-9">
            <div class="box box-primary">
              <div class="box-header with-border"> 
                <!-- The Resume -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li> <i class="fa fa-map-marker bg-red"></i>
                    <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Lokasi
                      <?= $toko_warga->nama_usaha ?>
                      </a> </h3>
                    <div class="timeline-body">
                      <div id="map" style="height: 340px;"></div>
                    </div>
                  </li>
                  <li><i class="fa fa-camera bg-aqua"></i>
                    <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i></span>
                      <h3 class="timeline-header"><a href="#">Produk Toko</a></h3>
                      <div class="timeline-body">
                        <?php foreach ($toko_warga_produk as $key => $value): ?>
                        <a href="#" data-toggle="modal" data-target="#<?= $value->id ?>"><img src="<?= base_url() . LOKASI_GALERI . $value->gambar ?>" width="280px"  height="180px"></a>
                        </td>
                        <?php endforeach;?>
                      </div>
                    </div>
                  </li>
                  <li><i class="fa fa-info bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#bantuan">Info Toko</a></h3>
                      <div class="timeline-body">
                        <table class="table table-bordered" >
                          <tbody>
                            <tr>
                              <td>Nama Toko</td>
                              <td><strong>
                                <?= $toko_warga->nama_usaha ?>
                                </strong></td>
                            </tr>
                            <tr>
                              <td>Alamat Toko</td>
                              <td><?= $toko_warga->keterangan_lokasi ?>
                                ,
                                <?= $toko_warga->alamat ?></td>
                            </tr>
                            <tr>
                              <td>Tahun Berdiri</td>
                              <td><?= $toko_warga->tahun_berdiri ?></td>
                            </tr>
                            <tr>
                              <td>Kelompok Usaha Perdagangan</td>
                              <td><?= $toko_warga->kelompok_usaha_perdagangan ?></td>
                            </tr>
                            <tr>
                              <td>Jenis Toko</td>
                              <td><?= $toko_warga->kategori_toko ?></td>
                            </tr>
                            <tr>
                              <td>Status Toko</td>
                              <td><?= $toko_warga->status ?></td>
                            </tr>
                            <tr>
                              <td>Kepemilikan Tempat Usaha</td>
                              <td><?= $toko_warga->kepemilikan_tempat_usaha ?></td>
                            </tr>
                            <tr>
                              <td>Sarana Berdagang</td>
                              <td><?= $toko_warga->sarana_berdagang ?></td>
                            </tr>
                            <tr>
                              <td>Area Usaha</td>
                              <td><?= $toko_warga->area_usaha ?></td>
                            </tr>
                            <tr>
                              <td>Sumber Modal</td>
                              <td><?= $toko_warga->sumber_modal ?></td>
                            </tr>
                            <tr>
                              <td>Taksiran Modal</td>
                              <td><?= $toko_warga->taksiran_modal ?></td>
                            </tr>
                            <tr>
                              <td>Taksiran Omset</td>
                              <td><?= $toko_warga->taksiran_omset ?></td>
                            </tr>
                            <tr>
                              <td>HP</td>
                              <td><?= $toko_warga->no_hp_toko ?></td>
                            </tr>
                            <tr>
                              <td>Email</td>
                              <td><?= $toko_warga->email ?></td>
                            </tr>
                            <tr>
                              <td>Website</td>
                              <td><?= $toko_warga->website ?></td>
                            </tr>
                            <tr>
                              <td>Instagram</td>
                              <td><?= $toko_warga->ig ?></td>
                            </tr>
                            <tr>
                              <td>Facebook</td>
                              <td><?= $toko_warga->fb ?></td>
                            </tr>
                            <tr>
                              <td>Keterangan</td>
                              <td><?= $toko_warga->keterangan_toko ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="timeline-footer"> </div>
                    </div>
                  </li>
                  <li><i class="fa fa-info bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#bantuan">IZIN USAHA</a></h3>
                      <div class="timeline-body">
                        <table class="table table-bordered" >
                          <tbody>
                            <tr>
                              <td >SKDU (Surat Keterangan Domisili Usaha)</td>
                              <td><strong>
                                <?= $toko_warga->skdu ?>
                                </strong></td>
                            </tr>
                            <tr>
                              <td>IUD (Izin Usaha Dagang)</td>
                              <td><?= $toko_warga->iud ?>
                            </tr>
                            <tr>
                              <td>NPWP (Nomor Pokok Wajib Pajak)</td>
                              <td><?= $toko_warga->npwp ?></td>
                            </tr>
                            <tr>
                              <td>SITU (Surat Izin Tempat Usaha)</td>
                              <td><?= $toko_warga->situ ?></td>
                            </tr>
                            <tr>
                              <td>SIUI (Surat Izin Usaha Industri)</td>
                              <td><?= $toko_warga->siui ?></td>
                            </tr>
                            <tr>
                              <td>SIP (Surat Izin Prinsip)</td>
                              <td><?= $toko_warga->sip ?></td>
                            </tr>
                            <tr>
                              <td>SIUP (Surat Izin Usaha Perdagangan)</td>
                              <td><?= $toko_warga->siup ?></td>
                            </tr>
                            <tr>
                              <td>TDP (Tanda Daftar Perusahaan)</td>
                              <td><?= $toko_warga->tdp ?></td>
                            </tr>
                            <tr>
                              <td>TDI (Tanda Daftar Industri)</td>
                              <td><?= $toko_warga->tdi ?></td>
                            </tr>
                            <tr>
                              <td>IMB (Surat Izin Mendirikan Bangunan)</td>
                              <td><?= $toko_warga->imb ?></td>
                            </tr>
                            <tr>
                              <td>BPOM (Badan Pengawas Obat dan Makanan)</td>
                              <td><?= $toko_warga->bpom ?></td>
                            </tr>
                            <tr>
                              <td>HO Surat Izin Gangguan</td>
                              <td><?= $toko_warga->ho ?></td>
                            </tr>
                            <tr>
                              <td>Keterangan</td>
                              <td><?= $toko_warga->keterangan ?></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="timeline-footer"> </div>
                    </div>
                  </li>
                  <li> <i class="fa fa-clock-o bg-green"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><small><a href="#">Terdaftar : <i class="fa fa-clock-o"></i>
                        <?= tgl_indo2($toko_warga->created_at) ?>
                        <?= tgl_indo2($penduduk['created_at']);?>
                        -- <i class="fa fa-user"></i>Diubah:
                        <?=  tgl_indo2($toko_warga->updated_at) ?>
                        </a></small></h3>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<?php foreach ($toko_warga_produk as $key => $value): ?>
<div class="modal fade" id="<?= $value->id ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">
          <?= 'Foto Produk ' . $value->persentase ?>
        </h4>
      </div>
      <div class="modal-body">
        <div class="text-center"> <img src="<?= base_url() . LOKASI_GALERI . $value->gambar ?>" width="800px"  height="500px"> </div>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
<div class="modal fade" id="sampul<?= $toko_warga->id ?>">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Gambar</h4>
      </div>
      <div class="modal-body">
        <div class="text-center"> <img src="<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>" width="800px"  height="500px"> </div>
      </div>
    </div>
  </div>
</div>
<script>
	var map = L.map('map').setView([<?= $toko_warga->lat?>,<?= $toko_warga->lng?>], 18);
			L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
			}).addTo(map);

		var logo = L.icon({
			iconUrl: '<?= favico_desa()?>',
			iconSize:     [32, 32], // size of the icon
			//iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
			popupAnchor:  [-1,1] // point from which the popup should open relative to the iconAnchor
		});

		var info_tempat = "<div class='media text-center'>";
			info_tempat += "<div class='media-center'>";
			info_tempat += "<img class='media-object' src='<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>' width='100%'  height='100%'>";
			info_tempat += "</div>";
			info_tempat += "<div class='media-body '>";
			info_tempat += "<p>Nama Usaha:<b><?= $toko_warga->nama_usaha ?></b><br>Alamat: <?= strtoupper($toko_warga->keterangan_lokasi.'<br/> '.$toko_warga->alamat)?></p>";
			info_tempat += "<p>Pengelola:<b> <?= $toko_warga->nama_pengelola ?></b><br/><a href='https://api.whatsapp.com/send?phone=<?= $toko_warga->no_hp_toko ?>' class=:'btn btn-social btn-success btn-block' data-target:'_blank'><i class='fa fa-whatsapp'></i> Hubungi</a></p>";
			info_tempat +="</div>";
			info_tempat +="</div>";

		L.marker([<?= $toko_warga->lat?>,<?= $toko_warga->lng?>],{icon:logo}).addTo(map)
    		.bindPopup(info_tempat).openPopup();
</script> 
