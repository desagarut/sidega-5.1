<div class="row-fluid">
					<div class="span12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit Gallery</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								
								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('adminweb/galeri_update/','class="form-horizontal"'); ?>
									<input type="hidden" name='id_galeri' value="<?php echo $id_galeri;?>"> 
									
									
									<div class="control-group">
												<label class="control-label">Album</label>
												<div class="controls">
													<select id="select2_sample2" name="kategorigaleri_id" class="span6 select2">
														<option value=""></option>
														<?php
														foreach ($data_kategorigaleri->result_array() as $tampil) { 
															if ($kategorigaleri_id==$tampil['id_kategorigaleri']) { ?>
															<option value="<?php echo $tampil['id_kategorigaleri'];?>" selected="selected"><?php echo $tampil['nama_kategorigaleri'];?></option>
															<?php
															}
															else { ?>
															<option value="<?php echo $tampil['id_kategorigaleri'];?>"><?php echo $tampil['nama_kategorigaleri'];?></option>
															<?php
															}
														
														}
														?>
													</select>
												</div>
											</div>

									<div class="control-group">
										<label class="control-label">Nama Galeri</label>
										<div class="controls">
											<input type="text" name="nama_galeri" id="nama_galeri" class="span6 m-wrap" value="<?php echo $nama_galeri;?>" />
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
											File hanya dalam format gif,jpg,png,jpeg dengan resolusi 620PX x 260PX dan ukuran maksimal file sebesar 3 MB
											</span>
									</div>

									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>adminweb/galeri" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


