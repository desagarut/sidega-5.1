<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view($folder_themes .'/commons/meta') ?>
	<?php $this->load->view($folder_themes .'/commons/source_css') ?>
</head>
<body>
	<?php if($this->uri->segment(2) == 'kategori' && empty($judul_kategori)) : ?>
		<?php $this->load->view($folder_themes .'/commons/404') ?>
		<?php else : ?>
			<?php $this->load->view($folder_themes .'/commons/header') ?>
			<?php $this->load->view($folder_themes .'/partials/newsticker') ?>
			<section class="main-wrapper">
				<main class="content">
					
					<?php $this->load->view($folder_themes .'/layouts/beranda.tpl.php') ?>
				</main>
				<?php $this->load->view($folder_themes .'/partials/sidebar.php') ?>
			</section>
			<?php $this->load->view($folder_themes .'/commons/footer') ?>
	<?php endif ?>
	<?php $this->load->view($folder_themes .'/commons/source_js') ?>
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6038d558385de407571a563b/1evf02oq9';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>