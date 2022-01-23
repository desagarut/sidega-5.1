<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Add Admin</div>
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
								
									<?php echo form_open_multipart('adminweb/admin_simpan/','class="form-horizontal"'); ?>
									<div class="control-group">
												<label class="control-label">Hak Akses</label>
												<div class="controls">
													<select id="select2_sample1" name="hak_akses" class="span6 select2">
														<option value=""></option>
														<option value="admin">Admin</option>
														<option value="pegawai">Pegawai</option>
														
													</select>
												</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nama Admin</label>
										<div class="controls">
											<input type="text" name="nama_admin" id="nama_admin" class="span6 m-wrap" placeholder="Nama Admin..." />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input type="text" name="email" id="email" class="span6 m-wrap" placeholder="Email..." />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Phone</label>
										<div class="controls">
											<input type="text" name="phone" id="phone" class="span6 m-wrap" placeholder="Phone..." />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Username</label>
										<div class="controls">
											<input type="text" name="username" id="username" class="span6 m-wrap" placeholder="Username..." />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" class="span6 m-wrap" placeholder="Password..." />
										</div>
									</div>

									
									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Simpan</button>
										<a href="<?php echo base_url();?>adminweb/admin" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


