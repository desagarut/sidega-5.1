<style>
	.input-sm
	{
		padding: 4px 4px;
	}
</style>

<div class="content-wrapper">
	<section class="content-header">
		<h1>Daftar Tukang</h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('beranda')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Data Tukang</li>
		</ol>
	</section>

	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?= site_url("toko_warga/form_toko")?>" title="Tambah Data Warga" class="btn btn-social btn-box bg-olive btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah</a>
                        <a href="<?= site_url("toko_warga/survei")?>" class="btn btn-social btn-box bg-blue btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Survei" target="_blank"><i class="fa fa-search"></i> survei</a>
						<a href="<?= site_url("toko_warga/daftar/cetak")?>" class="btn btn-social btn-box bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Cetak" target="_blank"><i class="fa fa-print"></i> Cetak
						</a> 
						<a href="<?= site_url("toko_warga/daftar/unduh")?>" class="btn btn-social btn-box bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Unduh" target="_blank"><i class="fa fa-download"></i> Unduh
						</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
									<form id="mainform" name="mainform" action="" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-bordered dataTable table-striped table-hover">
														<thead class="bg-gray disabled color-palette">
															<tr>
																<th>No</th>
																<th>Aksi</th>
																<th>Nama Toko</th>
																<th>Nama Pemilik</th>
																<th>Alamat Toko</th>
																<th>No. HP - Email</th>
																<th class="text_center">Tanggal Mulai Buka</th>
																<th>Jenis Toko</th>
																<th>Status Bangunan</th>
																<th>Status</th>
																<th>Keterangan</th>
																<th>Wajib survei</th>
															</tr>
														</thead>
														<tbody>
															<?php
															$nomer = $paging->offset;
															foreach ($toko_list as $key=>$item):
																$nomer++;
															?>
															<tr>
																<td align="center" width="2"><?= $nomer; ?></td>
																<td nowrap>
																	<?php if ($this->CI->cek_hak_akses('h')): ?>
																		<a href="<?= site_url("toko_warga/edit_toko_form/$item[id]")?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Ubah Data Toko" title="Ubah Data Toko" class="btn btn-warning btn-box btn-sm"><i class="fa fa-edit"></i></a>
																		<a href="#" data-href="<?= site_url("toko_warga/hapus_toko/$item[id]")?>" class="btn bg-maroon btn-box btn-sm" title="Hapus Data" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-trash-o"></i></a>
                                                                        <a href="<?= site_url('toko_warga/detil_toko/'.$item["id"])?>" class="btn bg-purple btn-box btn-sm" title="Detail"><i class="fa fa-eye"></i></a><br/>
                                                                        <a href="<?= $item["website"];?>" class="btn btn-default btn-box btn-sm"><i class="fa fa-globe"></i></a>
                                                                <a href="<?= $item["fb"];?>" class="btn btn-default btn-box btn-sm"><i class="fa fa-facebook" style="color:#007EFD"></i></a> 
                                                                <a href="<?= $item["ig"];?>" class="btn btn-default btn-box btn-sm"><i class="fa fa-instagram" style="color:#F3C"></i></a>
																	<?php endif; ?>
																</td>
																<td nowrap><?= $item["nama_toko"] ?></td>
																<td nowrap><a href="<?= site_url('toko_warga/detil_toko/'.$item["id"])?>" title="Data terdata"><strong><?= $item['terdata_info'];?></strong></a><br/><?= $item["terdata_nama"] ?><br /><small><?= $item["info"];?></small></td>
																<td><?= $item["alamat_toko"] ?></td>
																<?php
																$jk = (strtoupper($item['sex']) === "PEREMPUAN") ? "Pr" : "Lk";
																?>
																<td><?= $item["no_hp"];?><br/><?= $item["email"];?></td>
																<td><?= $item["tanggal_awal_operasi"];?></td>
																<td><?= $item["jenis_toko"];?></td>
																<td><?= $item["kepemilikan_bangunan_toko"];?></td>
																<td><?= $item["status_toko"];?></td>
																<td><?= $item["keterangan"];?></td>
																<td><?= ($item["is_wajib_survei"] === '1' ? "Ya" : "Tidak"); ?></td>
															</tr>
															<?php endforeach; ?>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</form>
									<div class="row">
										<div class="col-sm-6">
											<div class="dataTables_length">
												<form id="paging" action="" method="post" class="form-horizontal">
													<label>
														Tampilkan
														<select name="per_page" class="form-control input-sm" onchange="$('#paging').submit()">
															<option value="10" <?php selected($per_page,10); ?> >10</option>
															<option value="100" <?php selected($per_page,100); ?> >100</option>
															<option value="200" <?php selected($per_page,200); ?> >200</option>
														</select>
														Dari
														<strong><?= $paging->num_rows?></strong>
														Total Data
													</label>
												</form>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="dataTables_paginate paging_simple_numbers">
												<ul class="pagination">
												<?php if ($paging->start_link): ?>
														<li>
															<a href="<?=site_url('toko_warga/data_toko/'.$paging->start_link)?>" aria-label="First"><span aria-hidden="true">Awal</span></a>
														</li>
													<?php endif; ?>
													<?php if ($paging->prev): ?>
														<li>
															<a href="<?=site_url('toko_warga/data_toko/'.$paging->prev)?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
														</li>
													<?php endif; ?>
													<?php for ($i=$paging->start_link;$i<=$paging->end_link;$i++): ?>
														<li <?=jecho($p, $i, "class='active'")?>>
															<a href="<?= site_url('toko_warga/data_toko/'.$i)?>"><?= $i?></a>
														</li>
													<?php endfor; ?>
													<?php if ($paging->next): ?>
														<li>
															<a href="<?=site_url('toko_warga/data_toko/'.$paging->next)?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
														</li>
													<?php endif; ?>
													<?php if ($paging->end_link): ?>
														<li>
															<a href="<?=site_url('toko_warga/data_toko/'.$paging->end_link)?>" aria-label="Last"><span aria-hidden="true">Akhir</span></a>
														</li>
													<?php endif; ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php $this->load->view('global/confirm_delete');?>

<div class="modal fade" id="modalBox" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class='modal-dialog'>
		<div class='modal-content'>
			<div class='modal-header'>
				<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
				<h4 class='modal-title' id='myModalLabel'></h4>
			</div>
			<div class="fetched-data"></div>
		</div>
	</div>
</div>
