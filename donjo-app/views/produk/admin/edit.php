<div class="row-fluid">
					<div class="span12">
						
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit Admin</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								
								<div id="form_sample_2" class="form-horizontal">
								
									<?php echo form_open_multipart('adminweb/admin_update/','class="form-horizontal"'); ?>
									<input type="hidden" name='id_admin' value="<?php echo $id_admin;?>"> 
									<div class="control-group">
										<label class="control-label">Hak Akses</label>
										<div class="controls">
											<select id="select2_sample1" name="hak_akses" class="span6 select2">
														
														<?php
														if ($hak_akses=="admin") { ?>
														<option value="admin" selected="selected">Admin</option>
														<option value="pegawai">Pegawai</option>
														<?php
														}
														else if ($hak_akses=="pegawai"){?>
														<option value="admin">Admin</option>
														<option value="pegawai" selected="selected">Pegawai</option>
														<?php
														}
														else { ?>
														<option value="admin">Admin</option>
														<option value="pegawai">pegawai</option>
														<?php
														}
														?>
														
											</select>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nama admin</label>
										<div class="controls">
											<input type="text" name="nama_admin" id="nama_admin" class="span6 m-wrap" value="<?php echo $nama_admin;?>" />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input type="text" name="email" id="email" class="span6 m-wrap" value="<?php echo $email;?>" />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Phone</label>
										<div class="controls">
											<input type="text" name="phone" id="phone" class="span6 m-wrap" value="<?php echo $phone;?>" />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Username</label>
										<div class="controls">
											<input type="text" name="username" id="username" class="span6 m-wrap" value="<?php echo $username;?>" />
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Password</label>
										<div class="controls">
											<input type="password" name="password" id="password" class="span6 m-wrap" value="" Placeholder="Password..." />
										</div>
									</div>
									

									<span class="label label-important">NOTE!</span>
											<span>
											Jika Password tidak dirubah maka cukup dikosongkan saja
											</span>

									
									<div class="form-actions">
										<button type="submit" id="simpan" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>adminweb/admin" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
									</div>
									<?php echo form_close(); ?>
								</div>
								
							</div>
						</div>
						
					</div>
				</div>


