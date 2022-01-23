<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Add Slider</div>
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
								
									<?php echo form_open_multipart('adminweb/slider_simpan/','class="form-horizontal"'); ?>
									<div class="control-group">
												<label class="control-label">Aktif</label>
												<div class="controls">
													<select id="select2_sample1" name="status" class="span6 select2">
														<option value="1">Y</option>
														<option value="0">N</option>
														
													</select>
												</div>
									</div>
									<div class="control-group">
										<label class="control-label">Tittle</label>
										<div class="controls">
											<input type="text" name="tittle" id="tittle" class="span6 m-wrap" placeholder="Tittle..." />
										</div>
									</div>
									
									<div class="control-group">
										<label class="control-label">Description</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="description" id="description"  ></textarea>
											
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
											File hanya dalam format gif,jpg,png,jpeg dengan resolusi 481PX x 441PX dan ukuran maksimal file sebesar 3 MB
											</span>
									</div>

									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Simpan</button>
										<a href="<?php echo base_url();?>adminweb/slider" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


