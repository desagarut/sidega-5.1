<link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/ionicons.min.css">
<link rel="stylesheet" href="<?= base_url()?>assets/css/leaflet.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/fonts.googleapis.com.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/ace.min.css" />
<link rel="stylesheet" href="<?= base_url()?>assets/css/ace-skins.min.css" />

<script src="<?= base_url() ?>assets/bootstrap/js/jquery.min.js"></script>
<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/leaflet.js"></script>
<script src="<?= base_url()?>assets/js/ace-elements.min.js"></script>
<script src="<?= base_url()?>assets/js/ace.min.js"></script>
<div class="content-wrapper">
<section class='content-header'>
    <h1>Home</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid') ?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Info Detil Usaha Warga</li>
		</ol>
</section>
	<div class="main-content">
    <div class="row">
        <div class="col-md-6">
        <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
                  <i class="fa fa-circle-o"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <img class="img-responsive pad" src="../dist/img/photo2.png" alt="Photo">

              <p>I took this photo this morning. What do you guys think?</p>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
              <span class="pull-right text-muted">127 likes - 3 comments</span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments">
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
              <div class="box-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="User Image">

                <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                </div>
                <!-- /.comment-text -->
              </div>
              <!-- /.box-comment -->
            </div>    
    
    <!-- ---------------------- -->
		<div class="page-content">

				<h4 class="judul">
					DETIL INFO <?= $toko_warga->nama_usaha ?><br/>
				</h4>

			<div class="col-sm-6">
				<div class="box box-primary box-solid">
					<div class="box-header with-border">Data Toko Warga</div>
					<div class="box-body">

						<table class="table table-bordered">
							<tr>
								<th width="150px">Nama Usaha</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->nama_usaha ?></td>
							</tr>
							<tr>
								<th>Alamat</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->alamat ?></td>
							</tr>
							<tr>
								<th>Kategori Toko</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->kategori_toko ?></td>
							</tr>
							<tr>
								<th>Modal</th>
								<td width="20px">:</td>
								<td>Rp. <?= number_format($toko_warga->taksiran_modal,0) ?></td>
							</tr>
							<tr>
								<th>Omset</th>
								<td width="20px">:</td>
								<td>Rp. <?= number_format($toko_warga->taksiran_omset,0) ?></td>
							</tr>
							<tr>
								<th>Volume</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->volume?></td>
							</tr>
							<tr>
								<th>Pelaksana</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->pelaksana_kegiatan ?></td>
							</tr>
							<tr>
								<th>Tahun</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->tahun_anggaran ?></td>
							</tr>
							<tr>
								<th>Keterangan</th>
								<td width="20px">:</td>
								<td><?= $toko_warga->keterangan ?></td>
							</tr>
						</table>

					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="box box-primary box-solid">
					<div class="box-header with-border">Lokasi Tempat Usaha</div>
					<div class="box-body">
						<div id="map" style="height: 340px;"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-12">
				<div class="box box-primary box-solid">
					<div class="box-header with-border">Gambar Produk </div>
					<div class="box-body">

						<div class="col-xs-4 col-sm-4 pricing-box">
							<div class="widget-box widget-color-blue">
								<div class="widget-header">
									<h6 class="widget-title bigger lighter text-center">Foto Tempat Usaha</h6>
								</div>
								<div class="widget-body">
									<div class="widget-main text-center">
										<a href="#sampul<?= $toko_warga->id ?>" data-toggle="modal" data-target="#sampul<?= $toko_warga->id ?>"> <img src="<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>" width="280px"  height="180px"></a>
									</div>
									<div class="text-center">
										<button class="btn btn-info btn-minier" data-toggle="modal" data-target="#sampul<?= $toko_warga->id ?>">
											<i class="ace-icon fa fa-eye"></i> View
										</button>
									</div>
								</div>
							</div>
						</div>

						<?php foreach ($toko_warga_produk as $key => $value): ?>
							<div class="col-xs-4 col-sm-4 pricing-box">
								<div class="widget-box widget-color-blue">
									<div class="widget-header">
										<h6 class="widget-title bigger lighter text-center">Foto Produk <?= $value->persentase ?></h6>
									</div>
									<div class="widget-body">
										<div class="widget-main text-center">
											<a href="#" data-toggle="modal" data-target="#<?= $value->id ?>"><img src="<?= base_url() . LOKASI_GALERI . $value->gambar ?>" width="280px"  height="180px"></a>
										</div>
										<div class="text-center">
											<button class="btn btn-info btn-minier" data-toggle="modal" data-target="#<?= $value->id ?>">
												<i class="ace-icon fa fa-eye"></i> View
											</button>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<?php foreach ($toko_warga_produk as $key => $value): ?>
	<div class="modal fade" id="<?= $value->id ?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title"><?= 'Gambar Progres Pembangunan ' . $value->persentase ?></h4>
					</div>
					<div class="modal-body">
						<div class="text-center">
							<img src="<?= base_url() . LOKASI_GALERI . $value->gambar ?>" width="800px"  height="500px">
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>

	<div class="modal fade" id="sampul<?= $toko_warga->id ?>">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Gambar</h4>
					</div>
					<div class="modal-body">
						<div class="text-center">
							<img src="<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>" width="800px"  height="500px">
						</div>
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
			info_tempat += "<img class='media-object' src='<?= base_url() . LOKASI_GALERI . $toko_warga->foto ?>' width='200px' height='100px'>";
			info_tempat += "</div>";
			info_tempat += "<div class='media-body '>";
			info_tempat += "<p><b><?= $toko_warga->judul ?></b></p>";
			info_tempat +="</div>";
			info_tempat +="</div>";

		L.marker([<?= $toko_warga->lat?>,<?= $toko_warga->lng?>],{icon:logo}).addTo(map)
    		.bindPopup(info_tempat).openPopup();
</script>
