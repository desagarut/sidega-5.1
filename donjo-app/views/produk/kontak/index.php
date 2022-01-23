<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Contact</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								
								<div id="form_sample_2" class="form-horizontal">
								<div id="box" class="alert alert-success hide">
										Data Berhasil Diupdate
									</div>
									<input type="hidden" name="id_kontak" id="id_kontak" value="<?php echo $id_kontak;?>">
									<div class="control-group">
										<label class="control-label">Alamat</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="alamat" id="alamat" value="<?php echo $alamat;?>" ><?php echo $alamat;?></textarea>
											
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Telephone</label>
										<div class="controls">
											<input type="text" name="phone" id="phone" class="span6 m-wrap" value="<?php echo $phone;?>"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input type="text" name="email" id="email" class="span6 m-wrap" value="<?php echo $email;?>"/>
										</div>
									</div>


									
									<div class="form-actions">
										<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
										
									</div>
								</div>
								<!-- END FORM-->
							</div>
						</div>
						<!-- END VALIDATION STATES-->
					</div>
				</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$("#update").click(function(){

			var id_kontak = $("#id_kontak").val();
			var alamat = $("#alamat").val();
			var phone = $("#phone").val();
			var email = $("#email").val();

			var email_check = email.split("@");

			if (email_check[1]) {
                var email_check2 = email_check[1].split(".");
            }
            if (!email_check[1] || !email_check2[0] || !email_check2[1]) {
                alert('Penulisan Email Tidak Valid');
                return false;
            }
            

	            	$.ajax({
					type:"POST",
					url:"<?php echo base_url();?>adminweb/kontak_simpan",
					data:"id_kontak="+id_kontak+"&alamat="+alamat+"&phone="+phone+"&email="+email,
					success:function(data) {
						$("#box").show();
						

					}
				});
            

			
		});

	});
</script>