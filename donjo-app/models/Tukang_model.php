<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

define("JENIS_TUKANG", serialize(array(
	"Toko Kelontong" => "Toko Kelontong",
	"Toko Sayur & Buah" => "Toko Sayur & Buah",
	"Toko Ikan" => "Toko Ikan",
	"Toko Daging" => "Toko Daging",
	"Toko Roti & Kue" => "Toko Roti & Kue",
	"Toko Makanan Beku" => "Toko Makanan Beku",
	"Toko Makanan Siap Saji" => "Toko Siap Saji",
	"Toko Pakaian" => "Toko Pakaian",
	"Toko Pangkas Rambut" => "Toko Pangkas Rambut",
	"Toko Mebeulair" => "Toko Mebeulair",
	"Toko Bahan Bagunan" => "Toko Bahan Bangunan",
	"Bengkel Moto" => "Bengkel Motor",
	"Bengkel Mobil" => "Bengkel Mobil",
	"Cuci Steam" => "Cuci Steam",
	
)));

define("STATUS_TUKANG", serialize(array(
	"Buka" => "BUKA",
	"Tutup Sementara" => "Tutup Sementara",
	"Tutup" => "Telah Tutup",
)));

define("KEPEMILIKAN_TUKANG", serialize(array(
	"Milik Sendiri" => "Milik Sendiri",
	"Sewa/Kontrak" => "Sewa/Kontrak",
	"Menumpang Tanpa Biaya" => "Menumpang Tanpa Biaya",
)));

$h_plus_array = array();
$h_plus_array["-- Semua Data --"] = "99";
for ($i=0; $i<=31; $i++, $h_plus_array["H+$i"] = "$i");
define("H_PLUS", serialize($h_plus_array));


class Tukang_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('referensi_model');
	}

	public function list_jenis_tukang()
	{
		$status_rekam = array_flip(unserialize(JENIS_TUKANG));
		return $status_rekam;
	}

	public function list_status_tukang()
	{
		$status_rekam = array_flip(unserialize(STATUS_TUKANG));
		return $status_rekam;
	}

	public function list_kepemilikan_tukang()
	{
		$status_rekam = array_flip(unserialize(KEPEMILIKAN_TUKANG));
		return $status_rekam;
	}

	public function list_h_plus()
	{
		$status_rekam = array_flip(unserialize(H_PLUS));
		return $status_rekam;
	}

	// TABEL tukang
	public function get_penduduk_not_in_tukang()
	{
		$retval = array();

		$this->db->select('p.id');
		$this->db->from('penduduk_hidup p');
		$this->db->join('tbl_tukang t', 'p.id = t.id_terdata', 'right');
		$penduduk_not_in_tukang = $this->db->get()->result_array();

		$not_in_tukang = "";
		foreach ($penduduk_not_in_tukang as $row)
		{
			$not_in_tukang .= ",".$row["id"];
		}
		$not_in_tukang = ltrim($not_in_tukang, ",");

		$this->db->select('p.id as id, p.nik as nik, p.nama, w.rt, w.rw, w.dusun');
		$this->db->from('penduduk_hidup p');
		$this->db->join('tweb_wil_clusterdesa w', 'w.id = p.id_cluster', 'left');

		if (!empty($not_in_tukang))
		{
			$this->db->where("p.id NOT IN ($not_in_tukang)");
		}

		$data = $this->db->get()->result_array();
		foreach ($data as $item)
		{
			$penduduk = array(
				'id' => $item['id'],
				'nama' => strtoupper($item['nama']) ." [".$item['nik']."]",
				'info' => "RT/RW ". $item['rt']."/".$item['rw']." - ".strtoupper($item['dusun'])
			);
			$retval[] = $penduduk;
		}
		return $retval;
	}

	public function get_penduduk_by_id($id)
	{
		$this->db->select('u.id, u.nama, x.nama AS sex, u.id_kk, u.tempatlahir, u.tanggallahir, w.nama AS status_kawin, f.nama AS warganegara, a.nama AS agama, d.nama AS pendidikan, j.nama AS pekerjaan, u.nik, c.rt, c.rw, c.dusun, k.no_kk, k.alamat');
		$this->db->select("(select (date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0) AS `(date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0)`
		from tweb_penduduk where (tweb_penduduk.id = u.id)) AS umur");
		$this->db->select('(select tweb_penduduk.nama AS nama from tweb_penduduk where (tweb_penduduk.id = k.nik_kepala)) AS kepala_kk');

		$this->db->from('tweb_penduduk u');

		$this->db->join('tweb_penduduk_sex x', 'u.sex = x.id', 'left');
		$this->db->join('tweb_penduduk_kawin w', 'u.status_kawin = w.id', 'left');
		$this->db->join('tweb_penduduk_agama a', 'u.agama_id = a.id', 'left');
		$this->db->join('tweb_penduduk_pendidikan_kk d', 'u.pendidikan_kk_id = d.id', 'left');
		$this->db->join('tweb_penduduk_pekerjaan j', 'u.pekerjaan_id = j.id', 'left');
		$this->db->join('tweb_wil_clusterdesa c', 'u.id_cluster = c.id', 'left');
		$this->db->join('tweb_keluarga k', 'u.id_kk = k.id', 'left');
		$this->db->join('tweb_penduduk_warganegara f', 'u.warganegara_id = f.id', 'left');

		$this->db->where('u.id', $id);

		$query = $this->db->get();
		$data  = $query->row_array();

		$this->load->model('surat_model');
		$data['alamat_wilayah']= $this->surat_model->get_alamat_wilayah($data);

		return $data;
	}

	private function get_tukang($id = NULL, $is_wajib_survei = NULL, $limit = NULL)
	{
		$this->db->select('s.*, o.nik as terdata_id, o.nama, o.tempatlahir, o.tanggallahir, o.sex, w.rt, w.rw, w.dusun');
		$this->db->select("(select (date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0) AS `(date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0)`
		from tweb_penduduk where (tweb_penduduk.id = o.id)) AS umur");
		$this->db->select('(case when (o.id_kk IS NULL or o.id_kk = 0) then o.alamat_sekarang else k.alamat end) AS `alamat`');
		$this->db->from('tbl_tukang s');
		$this->db->join('tweb_penduduk o', 's.id_terdata = o.id', 'left');
		$this->db->join('tweb_keluarga k', 'k.id = o.id_kk', 'left');
		$this->db->join('tweb_wil_clusterdesa w', 'w.id = o.id_cluster', 'left');

		if (isset($id))
			$this->db->where('s.id', $id);

		if ($is_survei_tukang_page)
			$this->db->where('s.is_wajib_survei', '1');

		if (isset($limit))
			$this->db->limit($limit["per_page"], $limit["offset"]);

		$this->db->order_by('s.tanggal_awal_operasi', 'DESC');

		return $this->db->get();
	}

	public function get_tukang_by_id($id)
	{
		$data = $this->get_tukang($id)->row_array();
		$data['judul_terdata_nama'] = 'NIK';
		$data['judul_terdata_info'] = 'Nama Terdata';
		$data['terdata_nama'] = $data['terdata_id'];
		$data['terdata_info'] = $data['nama'];
		return $data;
	}

	public function get_list_tukang($page)
	{
		$retval = array();

		// paging
		if ($this->session->has_userdata('per_page') and $this->session->userdata('per_page') > 0)
		{

			$this->load->library('paging');

			$cfg['page'] = $page;
			$cfg['per_page'] = $this->session->userdata('per_page');
			$cfg['num_rows'] = $this->get_tukang()->num_rows();

			$this->paging->init($cfg);
			$retval["paging"] = $this->paging;
		}
		// paging end

		// get list
		$limit = null;
		if (isset($retval["paging"]))
		{
			$limit["per_page"] = $retval["paging"]->per_page;
			$limit["offset"] = $retval["paging"]->offset;
		}

		$query = $this->get_tukang(NULL, NULL, NULL, $limit);
		if ($query->num_rows() > 0)
		{
			$data = $query->result_array();
			for ($i=0; $i<count($data); $i++)
			{
				$data[$i]['id'] = $data[$i]['id'];
				$data[$i]['terdata_nama'] = $data[$i]['terdata_id'];
				$data[$i]['terdata_info'] = $data[$i]['nama'];
				$data[$i]['nama'] = strtoupper($data[$i]['nama']);
				$data[$i]['tempat_lahir'] = strtoupper($data[$i]['tempatlahir']);
				$data[$i]['tanggal_lahir'] = tgl_indo($data[$i]['tanggallahir']);
				$data[$i]['sex'] = ($data[$i]['sex'] == 1) ? "LAKI-LAKI" : "PEREMPUAN";
				$data[$i]['info'] = $data[$i]['alamat'] . " "  .  "RT/RW ". $data[$i]['rt']."/".$data[$i]['rw']." - ". "Dusun " . strtoupper($data[$i]['dusun']);
			}
			$retval['tukang_list'] = $data;
		}
		return $retval;
	}

	public function get_list_tukang_wajib_survei($is_wajib_survei = NULL)
	{
		return $this->get_tukang(NULL, $is_wajib_survei, NULL)->result_array();
	}

	public function add_tukang($post)
	{
		$data = $this->sterilkan($post);
		$data['id_terdata'] = $post['id_terdata'];

		return $this->db->insert('tbl_tukang', $data);
	}

	private function sterilkan($post)
	{
		$kepemilikan_tukang = $this->referensi_model->list_ref_flip(KEPEMILIKAN_tukang);
		$data = array(
			'tanggal_awal_operasi' => $post['tanggal_awal_operasi'],
			'nama_tukang' => $post['nama_tukang'],
			'jumlah_tukang' => $post['jumlah_tukang'],
			'alamat_tukang' => $post['alamat_tukang'],
			'jenis_tukang' => $post['jenis_tukang'],
			'status_tukang' => $post['status_tukang'],
			'kepemilikan_tukang' => $kepemilikan_tukang[$post['kepemilikan_tukang']],
			'no_hp' => bilangan_spasi($post['no_hp']),
			'email' => strip_tags($post['email']),
			'website' => strip_tags($post['website']),
			'ig' => $post['ig'],
			'fb' => $post['fb'],
			'is_wajib_survei' => $post['wajib_survei'],
			
			'deskripsi_tukang' => alfanumerik_spasi($post['deskripsi_tukang']),
			'keterangan' => alfanumerik_spasi($post['keterangan'])
		);
		return $data;
	}

	public function update_tukang_by_id($post, $id)
	{
		$data = $this->sterilkan($post);

		$this->db->where('id',$id);
		$this->db->update('tbl_tukang', $data);
	}

	public function delete_tukang_by_id($id)
	{
		//delete tukang warga 
		$this->db->where('id', $id);
		$this->db->delete('tbl_tukang');
	}
	// TABEL tukang WARGA END


	// TABEL survei
	private function get_survei_tukang($filter_tgl=null, $filter_nik=null, $limit=NULL)
	{
		$this->db->select('p.*, o.nik, o.nama, o.sex, s.tanggal_awal_operasi');
		$this->db->select('DATEDIFF(p.tanggal_jam, s.tanggal_awal_operasi) AS date_diff');
		$this->db->select("(select (date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0) AS `(date_format(from_days((to_days(now()) - to_days(tweb_penduduk.tanggallahir))),'%Y') + 0)`
		from tweb_penduduk where (tweb_penduduk.id = o.id)) AS umur");
		$this->db->from('tbl_tukang_survei p');
		$this->db->join('tbl_tukang s', 's.id = p.id_tukang', 'left');
		$this->db->join('tweb_penduduk o', 's.id_terdata = o.id', 'left');
		$this->db->order_by('o.nik', 'ASC');
		$this->db->order_by('p.tanggal_jam', 'DESC');

		if (isset($filter_tgl))
		{
			if ($filter_tgl != '0')
				$this->db->where('DATE(p.tanggal_jam)', $filter_tgl);
		}

		if (isset($filter_nik))
		{
			if ($filter_nik != '0')
				$this->db->where('p.id_tukang', $filter_nik);
		}

		if (isset($limit))
			$this->db->limit($limit["per_page"], $limit["offset"]);

		return  $this->db->get();
	}

	public function get_list_survei_tukang($page, $filter_tgl=null, $filter_nik=null)
	{
		$retval = array();

		// paging
		if ($this->session->has_userdata('per_page') and $this->session->userdata('per_page') > 0)
		{
			$this->load->library('paging');

			$cfg['page'] = $page;
			$cfg['per_page'] = $this->session->userdata('per_page');
			$cfg['num_rows'] = $this->get_survei_tukang($filter_tgl, $filter_nik)->num_rows();

			$this->paging->init($cfg);
			$retval["paging"] = $this->paging;
		}
		// paging end

		// get list
		$limit = null;
		if (isset($retval["paging"]))
		{
			$limit["per_page"] = $retval["paging"]->per_page;
			$limit["offset"] = $retval["paging"]->offset;
		}

		$query = $this->get_survei_tukang($filter_tgl, $filter_nik, $limit);
		$retval["query_array"] = $query->result_array();
		return $retval;
	}

	public function get_unique_date_survei_tukang()
	{
		$this->db->select('DATE(p.tanggal_jam) as tanggal');
		$this->db->from('tbl_tukang_survei p');
		$this->db->group_by("tanggal");
		$this->db->order_by('tanggal', 'DESC');

		return $this->db->get()->result_array();
	}

	public function get_unique_nik_survei_tukang()
	{
		$this->db->select('p.id_tukang, o.nik, o.nama');
		$this->db->from('tbl_tukang_survei p');
		$this->db->join('tbl_tukang s', 's.id = p.id_tukang', 'left');
		$this->db->join('tweb_penduduk o', 's.id_terdata = o.id', 'left');
		$this->db->group_by("p.id_tukang");
		$this->db->group_by("o.nik");
		$this->db->group_by("o.nama");

		return $this->db->get()->result_array();
	}

	public function add_survei_tukang($post)
	{
		$data = array(
			'id_tukang' => $post['terdata'],
			'tanggal_jam' => $post['tgl_jam'],
			'suhu_tubuh' => $post['suhu'],
			'batuk' => (isset($post['batuk']) ? '1':'0'),
			'flu' => (isset($post['flu']) ? '1':'0'),
			'sesak_nafas' => (isset($post['sesak']) ? '1':'0'),
			'keluhan_lain' => $this->security->xss_clean($post['keluhan']),
			'jenis_tukang' => $this->security->xss_clean($post['jenis_tukang']),
		);
		return $this->db->insert('tbl_tukang_survei', $data);
	}

	public function delete_survei_tukang_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_tukang_survei');
	}
	// TABEL PEMANTAUAN END

}
?>
