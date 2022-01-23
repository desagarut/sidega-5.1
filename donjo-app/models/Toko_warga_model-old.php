<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Toko_warga_model extends CI_Model
{
	protected $table = 'tbl_toko_warga';

	const ENABLE = 1;
	const DISABLE = 0;

	const ORDER_ABLE = [
		2  => 'p.nama_pengelola',
		3  => 'p.no_hp',
		5  => 'p.nama_usaha',
		6  => 'p.tahun_berdiri',
		7  => 'p.kepemilikan_tempat_usaha',
		8  => 'p.lokasi',
		9  => 'p.lat',
		10  => 'p.lng',
		11  => 'p.id_lokasi',
		12  => 'p.foto',
		13  => 'p.taksiran_omset',
		14  => 'p.kelompok_usaha_perdagangan',
		15  => 'p.sarana_berdagang',
		16  => 'p.area_usaha',
		17  => 'p.produk_utama',
		18  => 'p.status',
	];

	public function get_data(string $search = '', $tahun = '')
	{
		$builder = $this->db->select([
			'p.*',
			"(CASE WHEN p.id_lokasi IS NOT NULL THEN CONCAT(
				(CASE WHEN w.rt != '0' THEN CONCAT('RT ', w.rt, ' / ') ELSE '' END),
				(CASE WHEN w.rw != '0' THEN CONCAT('RW ', w.rw, ' - ') ELSE '' END),
				w.dusun
			) ELSE p.lokasi END) AS alamat",
		])
		->from("{$this->table} p")
		//->join('tbl_toko_warga_produk d', 'd.id_toko_warga = p.id', 'left')
		->join('tweb_wil_clusterdesa w', 'p.id_lokasi = w.id', 'left')
		->group_by('p.id');

		if (empty($search))
		{
			$search = $builder;
		}
		else 
		{
			$search = $builder->group_start()
				->like('p.sumber_modal', $search)
				->or_like('p.nama_usaha', $search)
				->or_like('p.keterangan_lokasi', $search)
				->or_like('p.jumlah_karyawan', $search)
				->or_like('p.produk_utama', $search)
				->or_like('p.tahun_berdiri', $search)
				->or_like('p.nama_pengelola', $search)
				->or_like('p.lokasi', $search)
				->or_like('p.kategori_toko', $search)
				->or_like('p.taksiran_omset', $search)
				->or_like('p.kepemilikan_tempat_usaha', $search)
				->group_end();
		}

		$condition = $tahun === 'semua'
			? $search
			: $search->where('p.tahun_berdiri', $tahun);

		return $condition;
	}

	public function list_lokasi_toko_warga()
	{
		$data = $this->db->select(array(
			'p.*',
			"(CASE WHEN p.id_lokasi IS NOT NULL THEN CONCAT(
				(CASE WHEN w.rt != '0' THEN CONCAT('RT ', w.rt, ' / ') ELSE '' END),
				(CASE WHEN w.rw != '0' THEN CONCAT('RW ', w.rw, ' - ') ELSE '' END),
				w.dusun
			) ELSE p.lokasi END) AS alamat",
		))
		->from('tbl_toko_warga p')
		->where('p.status = 1')
		->join('tweb_wil_clusterdesa w', 'p.id_lokasi = w.id', 'left')
		->get()
		->result();

		return $data;
	}

	public function insert()
	{
		$post = $this->input->post();

		$data['nama_pengelola'] 			= $post['nama_pengelola'];
		$data['nik']        				= $post['nik'];
		$data['alamat_tinggal']     		= $post['alamat_tinggal'];
		$data['no_hp']        				= $post['no_hp'];
		$data['no_hp_toko']        			= $post['no_hp_toko'];
		$data['email_toko']        			= $post['email_toko'];
		$data['website']        			= $post['website'];
		$data['fb']        			= $post['fb'];
		$data['ig']        			= $post['ig'];
		$data['youtube']        			= $post['youtube'];
		$data['sumber_modal']       		= $post['sumber_modal'];
		$data['nama_usaha']         		= $post['nama_usaha'];
		$data['kepemilikan_tempat_usaha']	= $post['kepemilikan_tempat_usaha'];
		$data['jumlah_karyawan']            = $post['jumlah_karyawan'];
		$data['tahun_berdiri']     			= $post['tahun_berdiri'];
		$data['id_lokasi']             		= $post['id_lokasi']?: null;
		$data['lokasi']             		= $post['lokasi']?: null;
		$data['keterangan_lokasi']         	= $post['keterangan_lokasi'];
		$data['kelompok_usaha_perdagangan'] = $post['kelompok_usaha_perdagangan'];
		$data['sarana_berdagang']         	= $post['sarana_berdagang'];
		$data['area_usaha']         		= $post['area_usaha'];
		$data['produk_utama']         		= $post['produk_utama'];
		$data['kategori_toko']        		= $post['kategori_toko'];
		$data['created_at']         		= date('Y-m-d H:i:s');
		$data['updated_at']         		= date('Y-m-d H:i:s');
		$data['foto'] 						= $this->upload_gambar_toko_warga('foto');
		$data['taksiran_modal']     		= $post['taksiran_modal'];
		$data['taksiran_omset']     		= $post['taksiran_omset'];

		$data['skdu']     		= $post['skdu'];
		$data['iud']     		= $post['iud'];
		$data['npwp']     		= $post['npwp'];
		$data['situ']     		= $post['situ'];
		$data['siui']     		= $post['siui'];
		$data['sip']     		= $post['sip'];
		$data['siup']     		= $post['siup'];
		$data['tdp']     		= $post['tdp'];
		$data['tdi']     		= $post['tdi'];
		$data['imb']     		= $post['imb'];
		$data['bpom']     		= $post['bpom'];
		$data['ho']     		= $post['ho'];


		if (empty($data['foto'])) unset($data['foto']);

		unset($data['file_foto']);
		unset($data['old_foto']);

		$outp = $this->db->insert('tbl_toko_warga', $data);

		if ($outp) $_SESSION['success'] = 1;
		else $_SESSION['success'] = -1;
	}

	public function update($id=0)
	{
		$post = $this->input->post();

		$data['nama_pengelola'] 			= $post['nama_pengelola'];
		$data['nik']        				= $post['nik'];
		$data['alamat_tinggal']     		= $post['alamat_tinggal'];
		$data['no_hp']        				= $post['no_hp'];
		$data['no_hp_toko']        			= $post['no_hp_toko'];
		$data['email_toko']        			= $post['email_toko'];
		$data['website']        			= $post['website'];
		$data['fb']        			= $post['fb'];
		$data['ig']        			= $post['ig'];
		$data['youtube']        			= $post['youtube'];
		$data['sumber_modal']       		= $post['sumber_modal'];
		$data['nama_usaha']         		= $post['nama_usaha'];
		$data['kepemilikan_tempat_usaha']	= $post['kepemilikan_tempat_usaha'];
		$data['jumlah_karyawan']            = $post['jumlah_karyawan'];
		$data['tahun_berdiri']     			= $post['tahun_berdiri'];
		$data['id_lokasi']             		= $post['id_lokasi']?: null;
		$data['lokasi']             		= $post['lokasi']?: null;
		$data['keterangan_lokasi']         	= $post['keterangan_lokasi'];
		$data['kelompok_usaha_perdagangan'] = $post['kelompok_usaha_perdagangan'];
		$data['sarana_berdagang']         	= $post['sarana_berdagang'];
		$data['area_usaha']         		= $post['area_usaha'];
		$data['produk_utama']         		= $post['produk_utama'];
		$data['kategori_toko']        		= $post['kategori_toko'];
		$data['created_at']         		= date('Y-m-d H:i:s');
		$data['updated_at']         		= date('Y-m-d H:i:s');
		$data['foto'] 						= $this->upload_gambar_toko_warga('foto');
		$data['taksiran_modal']     		= $post['taksiran_modal'];
		$data['taksiran_omset']     		= $post['taksiran_omset'];
 	
		$data['skdu']     		= $post['skdu'];
		$data['iud']     		= $post['iud'];
		$data['npwp']     		= $post['npwp'];
		$data['situ']     		= $post['situ'];
		$data['siui']     		= $post['siui'];
		$data['sip']     		= $post['sip'];
		$data['siup']     		= $post['siup'];
		$data['tdp']     		= $post['tdp'];
		$data['tdi']     		= $post['tdi'];
		$data['imb']     		= $post['imb'];
		$data['bpom']     		= $post['bpom'];
		$data['ho']     		= $post['ho'];

		if (empty($data['foto'])) unset($data['foto']);

		unset($data['file_foto']);
		unset($data['old_foto']);

		$this->db->where('id', $id);
		$outp = $this->db->update('tbl_toko_warga', $data);

		if ($outp) $_SESSION['success'] = 1;
		else $_SESSION['success'] = -1;
	}

	private function upload_gambar_toko_warga($jenis)
	{
		$this->load->library('upload');
		$this->uploadConfig = array(
			'upload_path' => LOKASI_GALERI,
			'allowed_types' => 'gif|jpg|jpeg|png',
			'max_size' => max_upload() * 1024,
		);
		// Adakah berkas yang disertakan?
		$adaBerkas = !empty($_FILES[$jenis]['name']);
		if ($adaBerkas !== TRUE)
		{
			return NULL;
		}
		// Tes tidak berisi script PHP
		if (isPHP($_FILES['logo']['tmp_name'], $_FILES[$jenis]['name']))

		{
			$_SESSION['error_msg'] .= " -> Jenis file ini tidak diperbolehkan ";
			$_SESSION['success'] = -1;
			redirect('identitas_desa');
		}

		$uploadData = NULL;
		// Inisialisasi library 'upload'
		$this->upload->initialize($this->uploadConfig);
		// Upload sukses
		if ($this->upload->do_upload($jenis))
		{
			$uploadData = $this->upload->data();
			// Buat nama file unik agar url file susah ditebak dari browser
			$namaFileUnik = tambahSuffixUniqueKeNamaFile($uploadData['file_name']);
			// Ganti nama file asli dengan nama unik untuk mencegah akses langsung dari browser
			$fileRenamed = rename(
				$this->uploadConfig['upload_path'].$uploadData['file_name'],
				$this->uploadConfig['upload_path'].$namaFileUnik
			);
			// Ganti nama di array upload jika file berhasil di-rename --
			// jika rename gagal, fallback ke nama asli
			$uploadData['file_name'] = $fileRenamed ? $namaFileUnik : $uploadData['file_name'];
		}
		// Upload gagal
		else
		{
			$_SESSION['success'] = -1;
			$_SESSION['error_msg'] = $this->upload->display_errors(NULL, NULL);
		}
		return (!empty($uploadData)) ? $uploadData['file_name'] : NULL;
	}

	public function update_lokasi_maps($id, array $request)
	{
		return $this->db->where('id', $id)->update($this->table, [
			'lat'        => $request['lat'],
			'lng'        => $request['lng'],
			'updated_at' => date('Y-m-d H:i:s'),
		]);
	}

	public function delete($id)
	{
		return $this->db->where('id', $id)->delete($this->table);
	}

	public function find($id)
	{
		return $this->db->select([
			'p.*',
			"(CASE WHEN p.id_lokasi IS NOT NULL THEN CONCAT(
				(CASE WHEN w.rt != '0' THEN CONCAT('RT ', w.rt, ' / ') ELSE '' END),
				(CASE WHEN w.rw != '0' THEN CONCAT('RW ', w.rw, ' - ') ELSE '' END),
				w.dusun
			) ELSE p.lokasi END) AS alamat",
		])
		->from("{$this->table} p")
		->join('tweb_wil_clusterdesa w', 'p.id_lokasi = w.id', 'left')
		->where('p.id', $id)
		->get()
		->row();
	}

	public function list_filter_tahun()
	{
		return $this->db->select('tahun_berdiri')
			->distinct()
			->order_by('tahun_berdiri', 'desc')
			->get($this->table)
			->result();
	}
	
	public function unlock($id)
	{
		return $this->db->set('status', static::ENABLE)
			->where('id', $id)
			->update($this->table);
	}

	public function lock($id)
	{
		return $this->db->set('status', static::DISABLE)
			->where('id', $id)
			->update($this->table);
	}
	
	public function get_data_produk($id, string $search = '')
	{
		$builder = $this->db->select([
			'd.*',
		])
		->from("{$this->table} d")
		->join('tbl_toko_warga p', 'd.id_toko_warga = p.id')
		->where('d.id_toko_warga', $id);

		if (empty($search))
		{
			$condition = $builder;
		}
		else
		{
			$condition = $builder->group_start()
				->like('d.nama_produk', $search)
				->or_like('kategori_produk', $search)
				->or_like('harga', $search)
				->or_like('stok', $search)
				->group_end();
		}

		return $condition;
	}

	
	
}
