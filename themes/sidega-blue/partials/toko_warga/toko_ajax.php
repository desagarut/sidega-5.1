<!-- ======= Portfolio Section ======= -->

  <section class="content" id="maincontent">
    <form id="mainformexcel" name="mainformexcel" method="post" class="form-horizontal">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">  </div>
            <div class="box-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-2">
                            <select class="form-control input-sm select2" id="tahun" name="tahun" style="width:100%;">
                                <option selected value="semua">Semua Tahun</option>
                                <?php foreach ($list_tahun as $list) : ?>
                                    <option value="<?= $list->tahun_berdiri ?>"><?= $list->tahun_berdiri ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                      </div>
                      <hr>
                      <div class="table-responsive">
                        <table id="tabel-tokowarga" class="table table-bordered">
                          <thead>
                            <tr>
                              <th class="text-center">No</th>
                              <th width="230px" class="text-center">Aksi</th>
                              <th class="text-center">Nama Usaha</th>
                              <th class="text-center">Nama Pengelola</th>
                              <th class="text-center">Tahun Berdiri</th>
                              <th class="text-center">Kategori</th>
                              <th class="text-center">Produk Unggulan</th>
                              <th class="text-center">Kepemilikan</th>
                              <th class="text-center">Lokasi</th>
                              <th class="text-center">Foto Toko</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </section>
  <!-- End Portfolio Section --> 
<script type="text/javascript">
	$(document).ready(function() {
		let tabelTokoWarga = $('#tabel-tokowarga').DataTable({
			'processing': true,
			'serverSide': true,
			'autoWidth': false,
			'pageLength': 10,
			'order': [
				[5, 'desc'],
			],
			'columnDefs': [{
				'orderable': false,
				'targets': [0, 1, 9],
			}],
			'ajax': {
				'url': '<?= site_url('toko_warga'); ?>',
				'method': 'POST',
				'data': function(d) {
					d.tahun_berdiri = $('#tahun').val();
				}
			},
			'columns': [
				{
					'data': null,
					'class': 'text-center',
					'orderable': false,
					'searchable': false,
					'render': function (data, type, row, meta) {
						return meta.row+meta.settings._iDisplayStart+1;
					}
				},
				{
					'data': function(data) {
						let status;
						if (data.status == 1) {
							status = `<a href="<?= site_url('toko_warga/lock/') ?>${data.id}" class="btn bg-navy btn-box btn-sm" title="Non Aktifkan Toko Warga"><i class="fa fa-unlock"></i></a>`
						} else {
							status = `<a href="<?= site_url('toko_warga/unlock/') ?>${data.id}" class="btn bg-navy btn-box btn-sm" title="Aktifkan Toko Warga"><i class="fa fa-lock"></i></a>`
						}

						return `
							<a href="<?= site_url('toko_warga/form/'); ?>${data.id}" title="Edit Data"  class="btn bg-orange btn-box btn-sm"><i class="fa fa-edit"></i></a>
							<a href="<?= site_url('toko_warga/lokasi_maps/'); ?>${data.id}" class="btn bg-olive btn-box btn-sm" title="Lokasi Toko Warga"><i class="fa fa-map"></i></a>
							<a href="<?= site_url('toko_warga/show_produk/'); ?>${data.id}" class="btn bg-purple btn-box btn-sm" title="Detil Produk Toko Warga"><i class="fa fa-list-ol"></i></a>
							${status}
							<a href="#" data-href="<?= site_url('toko_warga/delete/'); ?>${data.id}" class="btn bg-maroon btn-box btn-sm"  title="Hapus" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
							<a href="https://wa.me/+62${data.no_hp_toko}" target="_blank" class="btn bg-green btn-box btn-sm" title="Lihat Detil"><i class="fa fa-whatsapp"></i></a>
							<a href="<?= site_url('toko_warga/info_toko_warga/'); ?>${data.id}" class="btn bg-blue btn-box btn-sm" title="Lihat Detil"><i class="fa fa-eye"></i></a>							`
					}
				},
				{
					'data': 'nama_usaha'
				},
				{
					'data': 'nama_pengelola'
				},
				{
					'data': 'tahun_berdiri'
				},
				{
					'data': 'kategori_toko'
				},
				{
					'data': 'produk_utama'
				},
				{
					'data': 'kepemilikan_tempat_usaha'
				},
				{
					'data': 'alamat'
				},
				{
					'data': function (data) {
						return `<div class="user-panel">
									<div class="image2">
										<img src="<?= base_url(LOKASI_GALERI) ?>${data.foto}" class="img-circle" alt="Gambar Toko">
									</div>
								</div>`
					}
				},
			],
			'language': {
				'url': "<?= base_url('/assets/bootstrap/js/dataTables.indonesian.lang') ?>"
			}
		});

		tabelTokowarga.on('draw.dt', function() {
			let PageInfo = $('#tabel-tokowarga').DataTable().page.info();
			tableTokowarga.column(0, {
				page: 'current'
			}).nodes().each(function(cell, i) {
				cell.innerHTML = i + 1 + PageInfo.start;
			});
		});

		$('#tahun').on('select2:select', function (e) {
			tabelTokowarga.ajax.reload();
		});
	});
</script> 
