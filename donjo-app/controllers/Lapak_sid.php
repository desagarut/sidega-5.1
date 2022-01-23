<?php

require __dir__.'/Hom_sid.php';

class Lapak_sid extends Hom_sid {

	public function __construct () {

		parent::__construct();

		$this->load->model('lapak_model');
	}
	
	public function index()
	{
		$data = [];
		// Menampilkan menu dan sub menu aktif
		$nav['act'] = 1;
		$nav['act_sub'] = 16;
		$header = $this->header_model->get_data();

		$data['barang'] = $this->lapak_model->barangGet(10);

		$data['kategori_barang'] = $this->lapak_model->listKategori();


		$this->load->view('header', $header);
		$this->load->view('nav', $nav);
		$this->load->view('sid/lapak', $data);
		$this->load->view('footer');
	}

	public function filter () {


		if (empty($_POST['kategori_barang'])){

			unset($_SESSION['lapak_kategori']);
		}

		else {

			$_SESSION['lapak_kategori'] = intval($_POST['kategori_barang']);
		}


		if (empty($_POST['status_barang'])){

			$_SESSION['lapak_status'] = '';
		}

		else {

			$_SESSION['lapak_status'] = intval($_POST['status_barang']);
		}

		redirect('lapak_sid');
	}

	public function show ($barang = null) {

		echo 'Lapak '.$barang;
	}


	public function delete ($barang = null) {

		echo 'Menghapus barang '.$barang;
	}


	public function tampilkan ($barang = null) {

		$this->lapak_model->barangUpdate(intval($barang), ['status' => 2]);

		redirect('Lapak_sid');
	}

	public function sembunyikan ($barang = null) {

		$this->lapak_model->barangUpdate(intval($barang), ['status' => 3]);

		redirect('Lapak_sid');
	}
}
