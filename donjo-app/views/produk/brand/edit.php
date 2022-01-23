<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Edit Brand</div>
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
									<div id="box_error" class="alert alert-error hide">
										Data Sudah Ada!
									</div>
									<input type="hidden" name="id_brand" id="id_brand" value="<?php echo $id_brand;?>">
									

									<div class="control-group">
										<label class="control-label">Brand</label>
										<div class="controls">
											<input type="text" name="nama_brand" id="nama_brand" class="span6 m-wrap" value="<?php echo $nama_brand;?>"/>
										</div>
									</div>
									
									<div class="form-actions">
										<button type="submit" id="update" class="btn green"><i class="icon-ok"></i> Update</button>
										<a href="<?php echo base_url();?>adminweb/brand" class="btn white"><i class="icon-long-arrow-left"></i> Kembali</a>
										
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
			

			var id_brand = $("#id_brand").val();
			var nama_brand = $("#nama_brand").val();
	
	            	$.ajax({
					type:"POST",
					url:"<?php echo base_url();?>adminweb/brand_update",
					data:"id_brand="+id_brand+"&nama_brand="+nama_brand,
					success:function(data) {

						if (data=="1") {
							$("#box_error").show();
						
						}
						else {
							$("#box").show();
						}						
						

					}
				});
            

			
		});

	});
</script>