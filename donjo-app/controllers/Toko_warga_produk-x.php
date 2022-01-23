<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_warga_produk extends Admin_Controller
{
	protected $table = 'tbl_toko_warga_produk';

	public function __construct()
	{
		parent::__construct();

		$this->modul_ini = 400;
		
		$this->load->library('upload');
		$this->load->model('referensi_model');
		$this->load->model('toko_warga_model');
		$this->load->model('toko_warga_produk_model', 'model');
	}
/*
	public function show($id = null)
	{
		$this->sub_modul_ini = 401;
		$this->set_minsidebar(1);
		$toko_warga = $this->toko_warga_model->find($id);
		$_SESSION['id_toko_warga'] = $id;

		if ($this->input->is_ajax_request())
		{
			$start = $this->input->post('start');
			$length = $this->input->post('length');
			$search = $this->input->post('search[value]');
			$order = $this->model::ORDER_ABLE[$this->input->post('order[0][column]')];
			$dir = $this->input->post('order[0][dir]');

			return $this->output
				->set_content_type('application/json')
				->set_output(json_encode([
					'draw'            => $this->input->post('draw'),
					'recordsTotal'    => $this->model->get_data($id)->count_all_results(),
					'recordsFiltered' => $this->model->get_data($id, $search)->count_all_results(),
					'data'            => $this->model->get_data($id, $search)->order_by($order, $dir)->limit($length, $start)->get()->result(),
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
			$id_toko_warga = $_SESSION['id_toko_warga'];
			$data['id_toko_warga'] = $_SESSION['id_toko_warga'];
			$data['main'] = $this->model->find($id);
			$data['kategori_produk'] = $this->referensi_model->list_ref(KATEGORI_PRODUK);
			$data['form_action'] = site_url("toko_warga_produk/update/$id/$id_toko_warga");
		}
		else
		{
			$id_toko_warga = $_SESSION['id_toko_warga'];
			$data['id_toko_warga'] = $_SESSION['id_toko_warga'];
			$data['main'] = NULL;
			$data['kategori_produk'] = $this->referensi_model->list_ref(KATEGORI_PRODUK);
			$data['form_action'] = site_url("toko_warga_produk/insert/$id_toko_warga");
		}

		$this->render('toko_warga/produk/form', $data);
	}

	public function insert($id_toko_warga = '')
	{
		$this->model->insert($id_toko_warga);
		redirect("toko_warga_produk/show/$id_toko_warga");
	}

	public function update($id = '', $id_toko_warga = '')
	{
		$this->model->update($id, $id_toko_warga);
		redirect("toko_warga_produk/show/$id_toko_warga");
	}

	public function delete($id_toko_warga, $id)
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

		redirect("toko_warga_produk/show/{$id_toko_warga}");
	}
*/
}
