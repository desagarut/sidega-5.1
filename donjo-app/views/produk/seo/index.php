<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>Setting Seo</div>
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
									<input type="hidden" name="id_seo" id="id_seo" value="<?php echo $id_seo;?>">
									<div class="control-group">
										<label class="control-label">Tittle</label>
										<div class="controls">
											<input type="text" name="tittle" id="tittle" class="span6 m-wrap" value="<?php echo $tittle;?>"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Keyword</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="keyword" id="keyword" value="<?php echo $keyword;?>" ><?php echo $keyword;?></textarea>
											
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Description</label>
										<div class="controls">
											<textarea class="span12 wysihtml5 m-wrap" rows="6" name="description" id="description" value="<?php echo $description;?>" ><?php echo $description;?></textarea>
											
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

			var id_seo = $("#id_seo").val();
			var tittle = $("#tittle").val();
			var keyword = $("#keyword").val();
			var description = $("#description").val();

	            	$.ajax({
					type:"POST",
					url:"<?php echo base_url();?>adminweb/seo_simpan",
					data:"id_seo="+id_seo+"&tittle="+tittle+"&keyword="+keyword+"&description="+description,
					success:function(data) {
						$("#box").show();
						

					}
				});
            

			
		});

	});
</script>