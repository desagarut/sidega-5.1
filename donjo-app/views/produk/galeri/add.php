<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Add Gallery</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<?php if(validation_errors()) { ?>
								<div class="alert alert-block alert-error">
								  <button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo validation_errors(); ?>
								</div>
								<?php 
								} 
								?>

								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('adminweb/galeri_simpan/','class="form-horizontal"'); ?>
									
									
									<div class="control-group">
												<label class="control-label">Album</label>
												<div class="controls">
													<select id="select2_sample2" name="kategorigaleri_id" class="span6 select2">
														<option value=""></option>
														<?php
														foreach ($data_kategorigaleri->result_array() as $tampil) { ?>
															<option value="<?php echo $tampil['id_kategorigaleri'];?>"><?php echo $tampil['nama_kategorigaleri'];?></option>
														<?php
														}
														?>
													</select>
												</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nama Galeri</label>
										<div class="controls">
											<input type="text" name="nama_galeri" id="nama_galeri" class="span6 m-wrap" placeholder="Nama Gallery..." />
										</div>
									</div>

								
									<div class="control-group">
										<label class="control-label">Gambar</label>
										<div class="controls">
											<div class="fileupload fileupload-new" data-provides="fileupload">
												<div class="input-append">
													<div class="uneditable-input">
														<i class="icon-file fileupload-exists"></i> 
														<span class="fileupload-preview"></span>
													</div>
													<span class="btn btn-file">
													<span class="fileupload-new">Select file</span>
													<span class="fileupload-exists">Change</span>
													<input type="file" name="userfile" class="default" />
													</span>
													<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
												</div>
											</div>
										</div>
										<span class="label label-important">NOTE!</span>
											<span>
											File hanya dalam format gif,jpg,png,jpeg dengan resolusi 3000PX x 3000PX dan ukuran maksimal file sebesar 3 MB
											</span>
									</div>

									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Simpan</button>
										<a href="<?php echo base_url();?>adminweb/galeri" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


