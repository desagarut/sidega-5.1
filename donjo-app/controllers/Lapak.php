<?php

require __dir__.'/Home.php';

class Lapak extends Home {

	public function __construct() {

		parent::__construct();

		$this->load->model('lapak_model');
	}

	public function kategori ($kategori = null) {

		var_dump($this->lapak_model->barang_kategori($kategori, 10));
	}

	public function kondisi ($kondisi = null) {

		var_dump($this->lapak_model->barang_kondisi($kondisi, 10));
	}
	
	public function index () {

		var_dump($this->lapak_model->barang_kategori('random', 10));
	}

	public function show ($barang = null) {

		echo 'Lapak '.$barang;
	}
}
