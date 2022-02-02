<div class="box box-info">
	<div class="box-header with-border">
		<h3 class="box-title">Menu Pendataan PBB</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
			<li <?php if ($this->tab_ini == 10): ?>class="active"<?php endif; ?>><a href="<?= site_url('pbb/create')?>"><i class='fa fa-plus'></i> Tambah Data SPPT PBB</a></li>
			<li <?php if ($this->tab_ini == 12): ?>class="active"<?php endif; ?>><a href="<?= site_url('pbb/clear')?>"><i class='fa fa-list'></i>Data SPPT PBB</a></li>
			<li <?php if ($this->tab_ini == 13): ?>class="active"<?php endif; ?>><a href="<?= site_url('pbb/rincian')?>"><i class='fa fa-list'></i>Rincian</a></li>
			<li <?php if ($this->tab_ini == 14): ?>class="active"<?php endif; ?>><a data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Impor Data Persil"><i class='fa fa-upload'></i>Impor Data C-Desa</a></li>
			<li <?php if ($this->tab_ini == 15): ?>class="active"<?php endif; ?>><a href="<?= site_url('pbb/panduan')?>"><i class='fa fa-question-circle'></i>Panduan SPPT PBB</a></li>
		</ul>
	</div>
</div>
