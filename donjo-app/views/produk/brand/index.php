<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-edit"></i>Brand</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="btn-group">
										
										<a  class="btn green" href="#form_modal10" data-toggle="modal">
													Add New <i class="icon-plus"></i>
													</a> 
									</div>
									<?php 
									
													if ($this->session->flashdata('message')){
									echo "<div class='alert alert-error show'>
												                   <span>Brand Berhasil Dihapus</span>  
												                </div>";
													}
													else if($this->session->flashdata('berhasil')){
														echo "<div class='alert alert-success show'>
												                   <span>Brand Berhasil Disimpan</span>  
												                </div>";
													}
												
							?>
								</div>
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Brand</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
										$no=1;
										if ($data_brand->num_rows()>0) {
											foreach ($data_brand->result_array() as $tampil) { ?>
										<tr >
											<td><?php echo $no;?></td>
											<td><?php echo $tampil['nama_brand'];?></td>
											
											<td><a class="btn green" href="<?php echo base_url();?>adminweb/brand_edit/<?php echo $tampil['id_brand'];?>"><i class="icon-edit"></i> Edit</a>
											<a class="btn red" href="<?php echo base_url();?>adminweb/brand_delete/<?php echo $tampil['id_brand'];?>" onclick="return confirm('Yakin Ingin Menghapus <?php echo $tampil['nama_brand'];?>?')"><i class="icon-trash"></i> Delete</a>


										</td>
										</tr>
										<?php
										$no++;
										}
										}
										
										else { ?>
										<tr>
											<td colspan="4">No Result Data</td>
										</tr>
										<?php

										}
										?>
										
									</tbody>
								</table>
							</div>
						</div>
						
					</div>
				</div>

				<!-- Halaman Tambah brand -->

				<div id="form_modal10" class="modal hide fade" role="dialog" aria-labelledby="myModalLabel10" aria-hidden="true">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
												<h3 id="myModalLabel10">Add brand</h3>
											</div>
											<div class="modal-body">
												<div class="row-fluid">
													<div class="form-horizontal">
													
														<div class="control-group">
															<label class="control-label">Nama Brand</label>
															<div class="controls">
																<input class="span8 m-wrap" name="nama_brand" id="nama_brand" type="text" value=""  />
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
												<button class="btn green btn-primary" id="simpan" >Save</button>
											</div>

				<!-- Akhir Halaman brand -->


				


<script type="text/javascript">
	$(document).ready(function(){

		$("#simpan").click(function(){
			var nama_brand = $("#nama_brand").val();

			$.ajax({

				type:"POST",
				url:"<?php echo base_url();?>adminweb/brand_simpan",
				data:"nama_brand="+nama_brand,
				success:function(data) {
					if(data=="1") {
						alert("Nama brand Sudah Ada");
					}
					else {
						
						window.location.reload();
					}
				}

			});

		});

	});
</script>