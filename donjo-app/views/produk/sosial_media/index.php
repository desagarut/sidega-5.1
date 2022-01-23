<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Sosial Media</div>
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
									<input type="hidden" name="id_sosial_media" id="id_sosial_media" value="<?php echo $id_sosial_media;?>">
									

									<div class="control-group">
										<label class="control-label">Twitter</label>
										<div class="controls">
											<input type="text" name="tw" id="tw" class="span6 m-wrap" value="<?php echo $tw;?>"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Facebook</label>
										<div class="controls">
											<input type="text" name="fb" id="fb" class="span6 m-wrap" value="<?php echo $fb;?>"/>
										</div>
									</div>

									<div class="control-group">
										<label class="control-label">Gplus</label>
										<div class="controls">
											<input type="text" name="gp" id="gp" class="span6 m-wrap" value="<?php echo $gp;?>"/>
										</div>
									</div>

									<span class="label label-important">NOTE!</span>
											<span>
											Untuk Update Sosial Media Harap http:// Jangan Dihapus
											</span>


									
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

			

			var id_sosial_media = $("#id_sosial_media").val();
			var tw = $("#tw").val();
			var fb = $("#fb").val();
			var gp = $("#gp").val();
			
	            	$.ajax({
					type:"POST",
					url:"<?php echo base_url();?>adminweb/sosial_media_simpan",
					data:"id_sosial_media="+id_sosial_media+"&tw="+tw+"&fb="+fb+"&gp="+gp,
					success:function(data) {
						$("#box").show();
						

					}
				});
            

			
		});

	});
</script>