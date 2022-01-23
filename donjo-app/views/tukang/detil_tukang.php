<div class="content-wrapper">
  <section class="content-header">
    <h1>Detil Toko Warga</h1>
    <ol class="breadcrumb">
      <li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
      <li><a href="<?= site_url('covid19')?>"><i class="fa fa-home"></i> Data Toko</a></li>
      <li class="active">Detil Toko</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header"> <a href="<?= site_url('toko_warga')?>" class="btn btn-social btn-box btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left"></i> Kembali Ke Data Toko Warga</a>
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
                <div align="center">
                  <?php if ($penduduk['foto']): ?>
                  <img class="img-responsive img-circle" src="<?= AmbilFoto($penduduk['foto'])?>" alt="Foto Penduduk">
                  <?php else: ?>
                  <img class="img-responsive img-circle" src="<?= base_url()?>assets/files/user_pict/kuser.png" alt="Foto Penduduk">
                  <?php endif; ?>
                  <small>
                  <h3 class="profile-username text-center">
                    <?= strtoupper($penduduk['nama'])?>
                  </h3>
                  <p class="text-muted text-center">
                    <?= strtoupper($penduduk['sex'])?> | (<?= $individu['umur']?> Tahun)
                  </p>
                </div>
              <!--  <ul class="list-group list-group-unbordered" >
                  <li class="list-group-item"> <b>NIK</b> <a class="pull-right">
                    <?= $penduduk['nik']?>
                    </a> </li>
                  <li class="list-group-item"> <b>Alamat:</b><br/> <a class="pull-left">
                    <?= $individu['alamat_wilayah']; ?>
                    </a> </li>
                  <li class="list-group-item"> <b>Hub. Keluarga</b> <a class="pull-right">
                    <?= $penduduk['hubungan']?>
                    </a> </li>
                  <li class="list-group-item"> <b>Status Penduduk</b> <a class="pull-right">
                    <?= strtoupper($penduduk['status'])?>
                    </a> </li>
                </ul>-->
                <a href="https://api.whatsapp.com/send?phone=<?= $terdata['no_hp']; ?>" class="btn btn-social btn-success btn-block"><i class="fa fa-whatsapp"></i> Hubungi</a> </div>
              </small> </div>
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Info Pengelola</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body"> <strong style="color:#06F"><i class="fa fa-book margin-r-5"></i> NIK / Nama</strong>
                    <p class="text-muted"><small>
                      <?= $terdata["terdata_nama"]?> | <?=$terdata["terdata_info"]?><br/>
                      <?= $individu['tempatlahir']?>, <?= tgl_indo($individu['tanggallahir'])?><br/>
                      <?= $individu['pendidikan']?><br/>
                      <?= $individu['warganegara']?> | <?= $individu['agama']?></small>
                    </p>
                    <hr>
                    <strong style="color:#06F"><i class="fa fa-map-marker margin-r-5"></i> Alamat Tinggal</strong>
                    <p class="text-muted">
                      <small><?= $individu['alamat_wilayah']; ?></p></small>
                    <hr>
                    <strong style="color:#06F"><i class="fa fa-pencil margin-r-5"></i> Kontak</strong>
                    <p> <small>
                    	<i class="fa fa-phone"></i><?= $terdata['no_hp']?><br/> 
                        <i class="fa fa-envelope"></i><?= $terdata['email']?></small></p>
                    <hr>
                    <strong style="color:#06F"><i class="fa fa-pencil margin-r-5"></i> Catatan Kependudukan</strong>
                    <small><br/>Biodata Penduduk (NIK :
                    <?= $penduduk['nik']?>
                    )
                    <?php if (!empty($penduduk['nama_pendaftar'])): ?>
                    <p class="kecil"> Terdaftar pada: <i class="fa fa-clock-o"></i>
                      <?= tgl_indo2($penduduk['created_at']);?>
                      Oleh: <i class="fa fa-user"></i>
                      <?= $penduduk['nama_pendaftar']?>
                    </p>
                    <?php else: ?>
                    <p class="kecil"> Terdaftar sebelum: <i class="fa fa-clock-o"></i>
                      <?= tgl_indo2($penduduk['created_at']);?>
                    </p>
                    <?php endif; ?>
                    <?php if (!empty($penduduk['nama_pengubah'])): ?>
                    <p class="kecil"> Terakhir diubah: <i class="fa fa-clock-o"></i>
                      <?= tgl_indo2($penduduk['updated_at']);?>
                      <i class="fa fa-user"></i>
                      <?= $penduduk['nama_pengubah']?>
                    </p></small>
                    <?php endif; ?>
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
                      <h3 class="timeline-header"><a href="#">Lokasi Toko <?= strtoupper($penduduk['nama'])?></a> </h3>
                      <div class="timeline-body">
                        <?php include("donjo-app/views/toko_warga/toko_map.php"); ?>
                      </div>
                      <div class="timeline-footer" align="right"> <a href="<?=site_url("penduduk/ajax_penduduk_maps_koordinat/$p/$o/$penduduk[id]/1")?>" title="Lokasi <?= $penduduk['nama']?>" class="btn btn-social btn-box bg-purple btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Input Koordinat Rumah : <?= strtoupper($penduduk['nama'])?>"><i class='fa fa-map-marker'></i> Ubah Koordinat</a> <a href="<?=site_url("penduduk/ajax_penduduk_maps_openstreet/$p/$o/$penduduk[id]/1")?>" title="Lokasi <?= $penduduk['nama']?>" class="btn btn-social btn-box bg-navy btn-sm"><i class='fa fa-map-o'></i> Ubah di Openstreet</a> <a href="<?=site_url("penduduk/ajax_penduduk_maps_google/$p/$o/$penduduk[id]/1")?>" title="Lokasi <?= $penduduk['nama']?>" class="btn btn-social btn-box btn-primary btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Lokasi Rumah"><i class='fa fa-google'></i> Ubah di GoogleMap</a> </div>
                    </div>
                  </li>
                  <li><i class="fa fa-camera bg-aqua"></i>
                    <div class="timeline-item"> <span class="time"><i class="fa fa-clock-o"></i></span>
                      <h3 class="timeline-header"><a href="#">Produk Toko</a></h3>
                      <div class="timeline-body">
                        <table class="table table-bordered table-striped table-hover detail">
                          <tr>
                            <th class="padat">No</th>
                            <th width="10%">Aksi</th>
                            <th width="20%">Nama </th>
                            <th width="40%">Foto</th>
                            <th width="15%">File</th>
                            <th width="15%">Tanggal Upload</th>
                          </tr>
                          <?php foreach ($list_rumah as $key => $data): ?>
                          <tr>
                            <td class="text-center"><?= $key + 1; ?></td>
                            <td nowrap><a href="<?= base_url().LOKASI_RUMAH?><?= urlencode($data['satuan'])?>" class="btn bg-info btn-box btn-sm" rel=”noopener noreferrer” target="_blank" title="Lihat Produk"><i class="fa fa-eye"></i></a></br>
                              <?php if(!$data['hidden']): ?>
                              <a href="<?= site_url("penduduk/rumah_form/$penduduk[id]/$data[id]")?>" class="btn bg-orange btn-box btn-sm" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Data" title="Ubah Data"  title="Ubah Data"><i class="fa fa-edit"></i></a></br>
                              <a href="#" data-href="<?= site_url("penduduk/delete_rumah/$penduduk[id]/$data[id]")?>" class="btn bg-maroon btn-box btn-sm"  title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                              <?php endif ?></td>
                            <td><?= $data['nama']?></td>
                            <td><img class="img-responsive img-circle" src="<?= base_url().LOKASI_RUMAH?><?= urlencode($data['satuan']); ?>" alt="Foto Produk"></td>
                            <td><a href="<?= base_url().LOKASI_RUMAH?><?= urlencode($data['satuan']); ?>" >
                              <?= $data['satuan']; ?>
                              </a></td>
                            <td><?= tgl_indo2($data['tgl_upload']); ?></td>
                          </tr>
                          <?php endforeach;?>
                        </table>
                      </div>
                      <div class="timeline-footer" align="right"> <a href="<?= site_url("penduduk/rumah/$penduduk[id]")?>" class="btn bg-maroon btn-social btn-box	btn-danger btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Hapus Produk" ><i class="fa fa-trash-o"></i>Hapus</a> <a href="<?= site_url("penduduk/rumah_form/$penduduk[id]")?>" title="Tambah Produk" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Tambah rumah" class="btn btn-social btn-box bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class='fa fa-plus'></i>Tambah</a> </div>
                    </div>
                  </li>
                  <li><i class="fa fa-info bg-blue"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#bantuan">Info Toko</a></h3>
                      <div class="timeline-body">
                        <table class="table table-bordered" >
                          <tbody>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Nama Toko</td>
                              <td><strong><?= $terdata["nama_toko"]?></strong></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Alamat Toko</td>
                              <td><?= $terdata["alamat_toko"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Mulai Beroperasi</td>
                              <td><?= $terdata["tanggal_awal_operasi"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Jenis Toko</td>
                              <td><?= $terdata["jenis_toko"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Jumlah Toko Dimiliki</td>
                              <td><?= $terdata["jumlah_toko"]?>
                                Toko</td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >HP</td>
                              <td><?= $terdata["no_hp"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Email</td>
                              <td><?= $terdata["email"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Status Toko</td>
                              <td><?= $terdata["status_toko"]?></td>
                            </tr>
                            <tr>
                              <td style="padding-top : 10px;padding-bottom : 10px;" >Kepemilikan Bangunan</td>
                              <td><?= $terdata["kepemilikan_bangunan_toko"]?></td>
                            </tr>
                          <td style="padding-top : 10px;padding-bottom : 10px;" >Website</td>
                            <td><?= $terdata["website"]?></td>
                          </tr>
                          </tr>
                          
                          <td style="padding-top : 10px;padding-bottom : 10px;" >Instagram</td>
                            <td><?= $terdata["ig"]?></td>
                          </tr>
                          </tr>
                          
                          <td style="padding-top : 10px;padding-bottom : 10px;" >Facebook</td>
                            <td><?= $terdata["fb"]?></td>
                          </tr>
                          <tr>
                            <td style="padding-top : 10px;padding-bottom : 10px;" >Keterangan</td>
                            <td><?= $terdata["keterangan"]?></td>
                          </tr>
                          </tbody>
                          
                        </table>
                      </div>
                      <div class="timeline-footer"> </div>
                    </div>
                  </li>
                  <li> <i class="fa fa-clock-o bg-green"></i>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><small><a href="#">Data Awal : <i class="fa fa-clock-o"></i>
                        <?= tgl_indo2($penduduk['created_at']);?>
                        -- <i class="fa fa-user"></i>Oleh:
                        <?= $penduduk['nama_pendaftar']?>
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
<div class='modal fade' id='edit-warga' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
        <h4 class='modal-title' id='myModalLabel'><i class='fa fa-plus text-green'></i> Ubah Penduduk Pendatang / Tidak Tetap</h4>
      </div>
      <div class='modal-body'>
        <div class="row">
          <?php include("donjo-app/views/toko_warga/form_isian_penduduk.php"); ?>
        </div>
      </div>
      <div class='modal-footer'>
        <button type="button" class="btn btn-social btn-box btn-warning btn-sm" data-dismiss="modal"><i class='fa fa-sign-out'></i> Tutup</button>
        <a class='btn-ok'>
        <button type="submit" class="btn btn-social btn-box btn-success btn-sm" onclick="$('#'+'form_penduduk').submit();"><i class='fa fa-trash-o'></i> Simpan</button>
        </a> </div>
    </div>
  </div>
</div>