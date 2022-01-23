<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_warga extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->modul_ini = 400;

		$this->load->library('upload');
		$this->load->model('toko_warga_model');
		$this->load->model('toko_warga_produk_model');
		$this->load->model('referensi_model');
		$this->load->model('config_model');
		$this->load->model('wilayah_model');
		$this->load->model('pamong_model');
		$this->load->model('plan_lokasi_model');
		$this->load->model('plan_area_model');
		$this->load->model('plan_garis_model');
	}

	public function index()
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		if ($this->input->is_ajax_request())
		{
			$start = $this->input->post('start');
			$length = $this->input->post('length');
			$search = $this->input->post('search[value]');
			$order = $this->toko_warga_model::ORDER_ABLE[$this->input->post('order[0][column]')];
			$dir = $this->input->post('order[0][dir]');
			$tahun_berdiri = $this->input->post('tahun_berdiri');

			return $this->output
				->set_content_type('application/json')
				->set_output(json_encode([
					'draw'            => $this->input->post('draw'),
					'recordsTotal'    => $this->toko_warga_model->get_data()->count_all_results(),
					'recordsFiltered' => $this->toko_warga_model->get_data($search, $tahun_berdiri)->count_all_results(),
					'data'            => $this->toko_warga_model->get_data($search, $tahun_berdiri)->order_by($order, $dir)->limit($length, $start)->get()->result(),
				]));
		}

		$this->render('toko_warga/index', [
			'list_tahun' => $this->toko_warga_model->list_filter_tahun(),
		]);
	}
	
	public function show_produk($id = null)
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		$toko_warga = $this->toko_warga_model->find($id);
		$_SESSION['parrent'] = $id;

		if ($this->input->is_ajax_request())
		{
			$start = $this->input->post('start');
			$length = $this->input->post('length');
			$search = $this->input->post('search[value]');
			$order = $this->toko_warga_model::ORDER_ABLE[$this->input->post('order[0][column]')];
			$dir = $this->input->post('order[0][dir]');

			return $this->output
				->set_content_type('application/json')
				->set_output(json_encode([
					'draw'            => $this->input->post('draw'),
					'recordsTotal'    => $this->toko_warga_model->get_data($id)->count_all_results(),
					'recordsFiltered' => $this->toko_warga_model->get_data($id, $search)->count_all_results(),
					'data'            => $this->toko_warga_model->get_data($id, $search)->order_by($order, $dir)->limit($length, $start)->get()->result(),
				]));
		}

		$this->render('toko_warga/produk/index', [
			'toko_warga' => $toko_warga,
		]);
	}

	public function form($id = '')
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		if ($id)
		{
			$data['main'] = $this->toko_warga_model->find($id);
			$data['list_lokasi'] = $this->wilayah_model->list_semua_wilayah();
			$data['sumber_modal'] = $this->referensi_model->list_ref(SUMBER_MODAL);
			$data['area_usaha'] = $this->referensi_model->list_ref(AREA_USAHA);
			$data['kelompok_usaha_perdagangan'] = $this->referensi_model->list_ref(KELOMPOK_USAHA_PERDAGANGAN);
			$data['sarana_berdagang'] = $this->referensi_model->list_ref(SARANA_BERDAGANG);
			$data['kategori_toko'] = $this->referensi_model->list_ref(KATEGORI_TOKO);
			$data['status_toko'] = $this->referensi_model->list_ref(STATUS_TOKO);
			$data['kepemilikan_tempat_usaha'] = $this->referensi_model->list_ref(KEPEMILIKAN_TEMPAT_USAHA);
			$data['form_action'] = site_url("toko_warga/update/$id");
		}
		else
		{
			$data['main'] = NULL;
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

	public function form_produk($id = '')
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		if ($id)
		{
			$parrent = $_SESSION['parrent'];
			$data['parrent'] = $_SESSION['parrent'];
			$data['main'] = $this->model->find($id);
			$data['kategori_produk'] = $this->referensi_model->list_ref(KATEGORI_PRODUK);
			$data['form_action'] = site_url("toko_warga/update_produk/$id/$parrent");
		}
		else
		{
			$parrent = $_SESSION['parrent'];
			$data['parrent'] = $_SESSION['parrent'];
			$data['main'] = NULL;
			$data['kategori_produk'] = $this->referensi_model->list_ref(KATEGORI_PRODUK);
			$data['form_action'] = site_url("toko_warga/insert_produk/$parrent");
		}

		$this->render('toko_warga/produk/form', $data);
	}

	public function insert()
	{
		$this->toko_warga_model->insert();
		redirect('toko_warga/info_toko_warga/$id');
	}

	public function update($id = '')
	{
		$this->toko_warga_model->update($id);
		redirect("toko_warga/info_toko_warga/$id");
	}

	public function delete($id)
	{
		$this->toko_warga_model->delete($id);

		if ($this->db->affected_rows())
		{
			$this->session->success = 4;
		}
		else
		{
			$this->session->success = -4;
		}

		redirect('toko_warga');
	}

	public function lokasi_maps($id)
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(0);

		$data = $this->toko_warga_model->find($id);

		if (is_null($data)) show_404();

		// Update lokasi maps
		if ($request = $this->input->post())
		{
			$this->toko_warga_model->update_lokasi_maps($id, $request);

			$this->session->success = 1;

			redirect('toko_warga');
		}

		$this->render('toko_warga/lokasi_maps', [
			'data'      => $data,
			'desa'      => $this->config_model->get_data(),
			'wil_atas'  => $this->config_model->get_data(),
			'dusun_gis' => $this->wilayah_model->list_dusun(),
			'rw_gis'    => $this->wilayah_model->list_rw(),
			'rt_gis'    => $this->wilayah_model->list_rt(),
			'all_lokasi' => $this->plan_lokasi_model->list_lokasi(),
			'all_garis' => $this->plan_garis_model->list_garis(),
			'all_area' => $this->plan_area_model->list_area(),
			'all_lokasi_toko_warga' => $this->toko_warga_model->list_lokasi_toko_warga(),
		]);
	}

	public function dialog_daftar($id = 0, $aksi = '')
	{
		$this->load->view('global/ttd_pamong', [
			'aksi' => $aksi,
			'pamong' => $this->pamong_model->list_data(),
			'pamong_ttd' => $this->pamong_model->get_ub(),
			'pamong_ketahui' => $this->pamong_model->get_ttd(),
			'form_action' => site_url("toko_warga/daftar/$id/$aksi"),
		]);
	}

	public function daftar($id = 0, $aksi = '')
	{
		$request = $this->input->post();

		$toko_warga = $this->toko_warga_model->find($id);
		$toko_warga_produk = $this->toko_warga_produk_model->find($toko_warga->id);

		$data['toko_warga']    = $toko_warga;
		$data['toko_warga_produk']    = $toko_warga_produk;
		$data['config']         = $this->header['desa'];
		$data['pamong_ttd']     = $this->pamong_model->get_data($request['pamong_ttd']);
		$data['pamong_ketahui'] = $this->pamong_model->get_data($request['pamong_ketahui']);
		$data['aksi']           = $aksi;
		$data['file']           = "Laporan Toko Warga";
		$data['isi']            = "toko_warga/cetak";

		$this->load->view('global/format_cetak', $data);
	}

	public function info_toko_warga($id = 0)
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		$toko_warga = $this->toko_warga_model->find($id);
		$toko_warga_produk = $this->toko_warga_produk_model->find_produk($toko_warga->id);

		$data['toko_warga']    = $toko_warga;
		$data['toko_warga_produk']    = $toko_warga_produk;
		$data['config']         = $this->header['desa'];

		$this->render('toko_warga/informasi', $data);
		//$this->load->view('toko_warga/informasi-ori', $data);
	}

	public function unlock($id)
	{
		$this->toko_warga_model->unlock($id);

		$this->session->success = 1;

		redirect('toko_warga');
	}

	public function lock($id)
	{
		$this->toko_warga_model->lock($id);

		$this->session->success = 1;

		redirect('toko_warga');
	}
	
	public function panduan()
	{
		$this->load->view('toko_warga/panduan');
	}
	
	public function insert_produk($parrent = '')
	{
		$this->toko_warga_model->insert($parrent);
		redirect("toko_warga/show_produk/$parrent");
	}

	public function update_produk($id = '', $parrent = '')
	{
		$this->model->update($id, $parrent);
		redirect("toko_warga/show_produk/$parrent");
	}

	public function delete_produk($parrent, $id)
	{
		$this->model->delete($id);

		if ($this->db->affected_rows())
		{
			$this->session->success = 4;
		}
		else
		{
			$this->session->success = -4;
		}

		redirect("toko_warga/show_produk/{$parrent}");
	}
}
