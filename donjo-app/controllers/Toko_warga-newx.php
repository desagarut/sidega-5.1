<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_warga extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('upload');
		$this->load->model('toko_warga_model');
		$this->load->model('referensi_model');
		$this->load->model('config_model');
		$this->load->model('wilayah_model');
		$this->load->model('pamong_model');
		$this->load->model('plan_lokasi_model');
		$this->load->model('plan_area_model');
		$this->load->model('plan_garis_model');

		$this->modul_ini = 400;
		$this->sub_modul_ini = 401;
	}

	public function clear()
	{
		unset($_SESSION['cari']);
		unset($_SESSION['filter']);
		redirect('toko_warga');
	}

	public function index($p=1, $o=0)
	{
		$data['p'] = $p;
		$data['o'] = $o;

		if (isset($_SESSION['cari']))
			$data['cari'] = $_SESSION['cari'];
		else $data['cari'] = '';

		if (isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';

		if (isset($_POST['per_page']))
			$_SESSION['per_page'] = $_POST['per_page'];
		$data['per_page'] = $_SESSION['per_page'];

		$data['paging'] = $this->toko_warga_model->paging($p,$o);
		$data['main'] = $this->toko_warga_model->list_data($o, $data['paging']->offset, $data['paging']->per_page);
		$data['keyword'] = $this->toko_warga_model->autocomplete();

		$this->render('toko_warga/table', $data);
	}

	public function form($p=1, $o=0, $id='')
	{
		$data['p'] = $p;
		$data['o'] = $o;

		if ($id)
		{
			$data['toko_warga'] = $this->toko_warga_model->get_toko_warga($id);
			
			$data['list_lokasi'] = $this->wilayah_model->list_semua_wilayah();
			$data['sumber_modal'] = $this->referensi_model->list_ref(SUMBER_MODAL);
			$data['area_usaha'] = $this->referensi_model->list_ref(AREA_USAHA);
			$data['kelompok_usaha_perdagangan'] = $this->referensi_model->list_ref(KELOMPOK_USAHA_PERDAGANGAN);
			$data['sarana_berdagang'] = $this->referensi_model->list_ref(SARANA_BERDAGANG);
			$data['kategori_toko'] = $this->referensi_model->list_ref(KATEGORI_TOKO);
			$data['status_toko'] = $this->referensi_model->list_ref(STATUS_TOKO);
			$data['kepemilikan_tempat_usaha'] = $this->referensi_model->list_ref(KEPEMILIKAN_TEMPAT_USAHA);

			$data['form_action'] = site_url("toko_warga/update/$id/$p/$o");
		}
		else
		{
			$data['toko_warga'] = null;
			
			$data['list_lokasi'] = $this->wilayah_model->list_semua_wilayah();
			$data['sumber_modal'] = $this->referensi_model->list_ref(SUMBER_MODAL);
			$data['area_usaha'] = $this->referensi_model->list_ref(AREA_USAHA);
			$data['kelompok_usaha_perdagangan'] = $this->referensi_model->list_ref(KELOMPOK_USAHA_PERDAGANGAN);
			$data['sarana_berdagang'] = $this->referensi_model->list_ref(SARANA_BERDAGANG);
			$data['kategori_toko'] = $this->referensi_model->list_ref(KATEGORI_TOKO);
			$data['status_toko'] = $this->referensi_model->list_ref(STATUS_TOKO);
			$data['kepemilikan_tempat_usaha'] = $this->referensi_model->list_ref(KEPEMILIKAN_TEMPAT_USAHA);

			$data['form_action'] = site_url("toko_warga/insert");
		}

		$this->render('toko_warga/form', $data);
	}

	public function search($produk='')
	{
		$cari = $this->input->post('cari');
		if ($cari != '')
			$_SESSION['cari'] = $cari;
		else unset($_SESSION['cari']);
		if ($produk != '')
		{
			redirect("toko_warga/daftar_produk/$produk");
		}
		else
		{
			redirect('toko_warga');
		}
	}

	public function filter($produk='')
	{
		$filter = $this->input->post('filter');
		if ($filter != 0)
			$_SESSION['filter'] = $filter;
		else unset($_SESSION['filter']);
		if ($produk != '')
		{
			redirect("toko_warga/daftar_produk/$produk");
		}
		else
		{
			redirect('toko_warga');
		}
	}

	public function insert()
	{
		$this->toko_warga_model->insert();
		redirect('toko_warga');
	}

	public function update($id='', $p=1, $o=0)
	{
		$this->toko_warga_model->update($id);
		redirect("toko_warga/index/$p/$o");
	}

	public function delete($p=1, $o=0, $id='')
	{
		$this->redirect_hak_akses('h', "toko_warga/index/$p/$o");
		$this->toko_warga_model->delete_toko_warga($id);
		redirect("toko_warga/index/$p/$o");
	}

	public function delete_all($p=1, $o=0)
	{
		$this->redirect_hak_akses('h', "toko_warga/index/$p/$o");
		$_SESSION['success'] = 1;
		$this->toko_warga_model->delete_all_toko_warga();
		redirect("toko_warga/index/$p/$o");
	}

	public function toko_warga_lock($id='', $produk='')
	{
		$this->toko_warga_model->toko_warga_lock($id, 1);
		if ($produk != '')
			redirect("toko_warga/daftar_produk/$toko_warga/$p");
		else
			redirect("toko_warga/index/$p/$o");
	}

	public function toko_warga_unlock($id='', $produk='')
	{
		$this->toko_warga_model->toko_warga_lock($id, 2);
		if ($produk != '')
			redirect("toko_warga/daftar_produk/$toko_warga/$p");
		else
			redirect("toko_warga/index/$p/$o");
	}

	public function slider_on($id='', $produk='')
	{
		$this->toko_warga_model->toko_warga_slider($id, 1);
		if ($produk != '')
			redirect("toko_warga/daftar_produk/$toko_warga/$p");
		else
			redirect("toko_warga/index/$p/$o");
	}

	public function slider_off($id='', $produk='')
	{
		$this->toko_warga_model->toko_warga_slider($id,0);
		if ($produk != '')
			redirect("toko_warga/daftar_produk/$toko_warga/$p");
		else
			redirect("toko_warga/index/$p/$o");
	}

	public function daftar_produk($gal=0, $p=1, $o=0)
	{
		$data['p'] = $p;
		$data['o'] = $o;

		if (isset($_SESSION['cari']))
			$data['cari'] = $_SESSION['cari'];
		else $data['cari'] = '';

		if (isset($_SESSION['filter']))
			$data['filter'] = $_SESSION['filter'];
		else $data['filter'] = '';

		if (isset($_POST['per_page']))
			$_SESSION['per_page'] = $_POST['per_page'];
		$data['per_page'] = $_SESSION['per_page'];

		$data['paging'] = $this->toko_warga_model->paging2($gal, $p);
		$data['daftar_produk'] = $this->toko_warga_model->daftar_produk($gal, $o, $data['paging']->offset, $data['paging']->per_page);
		$data['nama_produk'] = $gal;
		$data['sub'] = $this->toko_warga_model->get_toko_warga($gal);
		$data['keyword'] = $this->toko_warga_model->autocomplete();

		$this->render('toko_warga/table_produk', $data);
	}

	public function form_produk($produk=0, $id=0)
	{
		if ($id)
		{
			$data['toko_warga'] = $this->toko_warga_model->get_toko_warga($id);
			$data['form_action'] = site_url("toko_warga/update_produk/$produk/$id");
		}
		else
		{
			$data['toko_warga'] = null;
			$data['form_action'] = site_url("toko_warga/insert_produk/$produk");
		}
		$data['album']=$produk;

		$this->render('toko_warga/form_produk', $data);
	}

	public function insert_produk($produk='')
	{
		$this->toko_warga_model->insert_produk($produk);
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function update_produk($produk='', $id='')
	{
		$this->toko_warga_model->update_produk($id);
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function delete_produk($produk='', $id='')
	{
		$this->redirect_hak_akses('h', "toko_warga/daftar_produk/$produk");
		$this->toko_warga_model->delete($id);
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function delete_all_produk($produk='')
	{
		$this->redirect_hak_akses('h', "toko_warga/daftar_produk/$produk");
		$_SESSION['success']=1;
		$this->toko_warga_model->delete_all();
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function lock_produk($produk='', $id='')
	{
		$this->toko_warga_model->toko_warga_lock($id, 1);
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function unlock_produk($produk='', $id='')
	{
		$this->toko_warga_model->toko_warga_lock($id, 2);
		redirect("toko_warga/daftar_produk/$produk");
	}

	public function urut($id, $arah = 0, $produk='')
	{
		$this->toko_warga_model->urut($id, $arah, $produk);
		if ($produk != '')
			redirect("toko_warga/daftar_produk/$produk");
		else
			redirect("toko_warga/index");
	}
}
