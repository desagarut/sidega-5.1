<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Logo Website</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								
    <?php if($this->session->flashdata('message')) { ?>
                <div class="alert alert-success">
                   <span>Logo Berhasil Diupdate</span>  
                </div>
                <?php } ?>
								
									 

									 <?php echo form_open_multipart('adminweb/logo_simpan/','class="form-horizontal"'); ?>
								
									<div class="control-group">
										<label class="control-label">Upload Logo</label>
										<div class="controls">
											<input type="file" name="userfile" class="default" />
											<input type="hidden" name="id_logo" value="<?php echo $id_logo;?>">
											
										</div>
										
									</div>
									<span class="label label-important">NOTE!</span>
											<span>
											File yang diperbolehkan hanya dalam format gif,jpg,png,jpeg resolusi file gambar 373PX x 100PX dan ukuran maksimal file sebesar 3 MB
											</span>

									
									<div class="form-actions">
										<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
										
									</div>
								<?php echo form_close(); ?>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>


