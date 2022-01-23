<?php defined('BASEPATH') OR exit('No direct script access allowed');
// Model ini digunakan untuk data referensi statis yg tidak disimpan pd database atau sebagai referensi global

define("JENIS_PERATURAN_DESA", serialize([
	"Peraturan Desa (Perdes)",
	"Peraturan Kepala Desa (Perkades)",
	"Peraturan Bersama Kepala Desa"
]));

define("MASA_BERLAKU", serialize([
	"d" => "Hari",
	"w" => "Minggu",
	"M" => "Bulan",
	"y" => "Tahun"
]));

define("KATEGORI_PUBLIK", serialize([
	"Informasi Berkala" => "1",
	"Informasi Serta-merta" => "2",
	"Informasi Setiap Saat" => "3",
	"Informasi Dikecualikan" => "4"
]));

define("STATUS_PERMOHONAN", serialize([
	"Sedang diperiksa" => "0",
	"Belum lengkap" => "1",
	"Menunggu tandatangan" => "2",
	"Siap diambil" => "3",
	"Sudah diambil" => "4",
	"Dibatalkan" => "9"
]));

define("LINK_TIPE", serialize([
	'1' => 'Artikel Statis',
	'7' => 'Kategori Artikel',
	'2' => 'Statistik Penduduk',
	'3' => 'Statistik Keluarga',
	'4' => 'Statistik Program Bantuan',
	'5' => 'Halaman Statis Lainnya',
	'6' => 'Artikel Keuangan',
	'7' => 'Kelompok',
	'9' => 'Data Suplemen',
	'99' => 'Eksternal'
]));

// Statistik Penduduk
define("STAT_PENDUDUK", serialize([
	'13' => 'Umur (Rentang)',
	'15' => 'Umur (Kategori)',
	'0' => 'Pendidikan Dalam KK',
	'14' => 'Pendidikan Sedang Ditempuh',
	'1' => 'Pekerjaan',
	'2' => 'Status Perkawinan',
	'3' => 'Agama',
	'4' => 'Jenis Kelamin',
	'hubungan_kk' => 'Hubungan Dalam KK',
	'5' => 'Warga Negara',
	'6' => 'Status Penduduk',
	'7' => 'Golongan Darah',
	'9' => 'Penyandang Cacat',
	'10' => 'Penyakit Menahun',
	'16' => 'Akseptor KB',
	'17' => 'Akta Kelahiran',
	'18' => 'Kepemilikan KTP',
	'19' => 'Jenis Asuransi',
	'covid' => 'Status Covid'
]));

// Statistik Keluarga
define("STAT_KELUARGA", serialize([
	'kelas_sosial' => 'Kelas Sosial'
]));

// Statistik Bantuan
define("STAT_BANTUAN", serialize([
	'bantuan_penduduk' => 'Penerima Bantuan Penduduk',
	'bantuan_keluarga' => 'Penerima Bantuan Keluarga'
]));

// Statistik Lainnya
define("STAT_LAINNYA", serialize([
	'dpt' => 'Calon Pemilih',
	'wilayah' => 'Wilayah Administratif',
	'peraturan_desa' => 'Produk Hukum',
	'informasi_publik' => 'Informasi Publik',
	'peta' => 'Peta',
	'status_idm' => 'Status IDM',
	'data_analisis' => 'Data Analisis'
]));

// Jabatan Kelompok
define("JABATAN_KELOMPOK", serialize([
	1 => 'KETUA',
	2 => 'WAKIL KETUA',
	3 => 'SEKRETARIS',
	4 => 'BENDAHARA',
	90 => 'ANGGOTA'
]));

// API Server
define("STATUS_AKTIF", serialize([
	'0' => 'Tidak Aktif',
	'1' => 'Aktif'
]));

define("JENIS_NOTIF", serialize([
	'pemberitahuan',
	'pengumuman',
	'peringatan'
]));

define("SERVER_NOTIF", serialize([
	'TrackSID'
]));

define("JENIS_PELANGGAN", serialize([
	1 => 'hosting + update',
	2 => 'hosting saja',
	3 => 'premium',
	4 => 'update saja',
	5 => 'hosting + domain',
	6 => 'hosting + domain + update'
]));

define("STATUS_LANGGANAN", serialize([
	1 => 'aktif',
	2 => 'suspended',
	3 => 'tidak aktif',
]));

define("FILTER_LANGGANAN", serialize([
	1 => 'aktif',
	2 => 'suspended',
	3 => 'tidak aktif',
	4 => 'sebentar lagi berakhir',
	5 => 'baru berakhir',
	6 => 'sudah berakhir'
]));

define("PELAKSANA", serialize([
	1 => 'Herry Wanda',
	2 => 'Mohammad Ihsan',
	3 => 'Rudy Purwanto'
]));

define("SUMBER_DANA", serialize([
	1 => 'Pendapatan Asli Daerah',
	2 => 'Alokasi Anggaran Pendapatan dan Belanja Negara (Dana Desa)',
	3 => 'Bagian Hasil Pajak Daerah dan Retribusi Daerah Kabupaten/Kota',
	4 => 'Alokasi Dana Desa',
	5 => 'Bantuan Keuangan dari APBD Provinsi dan APBD Kabupaten/Kota',
	6 => 'Hibah dan Sumbangan yang Tidak Mengikat dari Pihak Ketiga',
	7 => 'Lain-lain Pendapatan Desa yang Sah',
]));

define("STATUS_PEMBANGUNAN", serialize([
	1 => '0%',
	2 => '30%',
	3 => '80%',
	4 => '100%'
]));

define("ISI_QR", serialize([
 1 => 'Konfirmasi Validitasi Surat',
 2 => 'Pilih Isi Data',
 3 => 'Ketik Isi Manual',
]));

//--- Start Referensi Toko Warga

define("KELOMPOK_USAHA_PERDAGANGAN", serialize(array(
	"Usaha Perdagangan Barang Produksi" => "Usaha Perdagangan Barang Produksi",
	"Usaha Perdagangan Barang Jadi" => "Usaha Perdagangan Barang Jadi",
	"Usaha Perdagangan Besar" => "Usaha Perdagangan Besar",
	"Usaha Perdagangan Perantara" => "Usaha Perdagangan Perantara",
	"Usaha Perdagangan Pengecer" => "Usaha Perdagangan Pengecer",
	"Lainnya" => "Lainnya",
)));

define("AREA_USAHA", serialize(array(
	"Lingkungan Pemukiman Jauh Dari Jalan Raya" => "Lingkungan Pemukiman Jauh Dari Jalan Raya",
	"Lingkungan Pemukiman Pinggir Jalan Raya" => "Lingkungan Pemukiman Pinggir Jalan Raya",
	"Kawasan Pasar" => "Kawasan Pasar",
	"Kawasan Pertokoan" => "Kawasan Pertokoan",
	"Kawasan Mal / Super Mal"=> "Kawasan Mal / Super Mal",
	"Lainnya" => "Lainnya"
)));

//--- Start Referensi Toko Warga
define("SARANA_BERDAGANG", serialize(array(
	"Pikulan" => "Pikulan",
	"Gerobak/Kereta Dorong" => "Gerobak/Kereta Dorong",
	"Gelaran/Dasaran" => "Gelaran/Dasaran",
	"Warung Tenda" => "Warung Tenda",
	"Warung Semi Permanen" => "Warung Semi Permanen",
	"Warung/Kios/Toko Permanen" => "Warung/Kios/Toko Permanen",
	"Lainnya" => "Lainnya",
)));

define("KATEGORI_TOKO", serialize(array(
	"Kelontong" => "Kelontong",
	"Beras" => "Beras",
	"Sayur & Bua" => "Sayur & Buah",
	"Ikan" => "Ikan",
	"Daging" => "Daging",
	"Roti & Kue" => "Roti & Kue",
	"Makanan Beku" => "Makanan Beku",
	"Rumah Makan" => "Rumah Makan",
	"Pakaian" => "Pakaian",
	"Penjahit" => "Penjahit",
	"Pangkas Rambut" => "Pangkas Rambut",
	"Mebeulair" => "Mebeulair",
	"Alat Tulis" => "Alat Tulis",
	"Bahan Bagunan" => "Bahan Bangunan",
	"Perabot Rumah Tangga" => "Perabot Rumah Tangga",
	"Peralatan Motor" => "Peralatan Motor",
	"Peralatan Mobil" => "Peralatan Mobil",
	"Peralatan Pancing" => "Peralatan Pancing",
	"Peralatan Komputer" => "Peralatan Komputer",
	"Peralatan Handphone" => "Peralatan Handphone",
	"Peralatan Pertanian" => "Peralatan Pertanian",
	"Jasa Multipayment" => "Jasa Multipayment",
	"Jasa Cuci Steam" => "Jasa Cuci Steam",
	"Show room Motor" => "Show room Motor",
	"Show room Motor" => "Show room Motor",
	"Lainnya" => "Lainnya",
)));

define("STATUS_TOKO", serialize(array(
	"Buka" => "BUKA",
	"Tutup Sementara" => "Tutup Sementara",
	"Tutup" => "Tutup Permanen",
	"Lainnya" => "Lainnya",
)));

define("KEPEMILIKAN_TEMPAT_USAHA", serialize(array(
	"Milik Sendiri" => "Milik Sendiri",
	"Sewa/Kontrak" => "Sewa/Kontrak",
	"Menumpang Tanpa Biaya" => "Menumpang Tanpa Biaya",
	"Lainnya" => "Lainnya",
)));

define("SUMBER_MODAL", serialize(array(
	'Modal Sendiri' => 'Modal Sendiri',
	'Pinjaman Tanpa Bunga Dari Keluarga/Saudara' => 'Pinjaman Tanpa Bunga Dari Keluarga/Saudara',
	'Pinjaman Dari Bank Emok/Rentenir' => 'Pinjaman Dari Bank Emok/Rentenir',
	'Pinjaman Dari Koperasi' => 'Pinjaman Dari Koperasi',
	'Pinjaman Dari Bank' => 'Pinjaman Dari Bank',
	'Hibah dan Sumbangan yang Tidak Mengikat dari Pihak Ketiga' => 'Hibah dan Sumbangan yang Tidak Mengikat dari Pihak Ketiga',
	'Lainnya' => 'Lainnya',
)));

define("KATEGORI_PRODUK", serialize([
	1 => 'Unggulan',
	2 => 'Terlaris',
	3 => 'Stok Terbatas',
	4 => 'Stok Habis'
]));

define("JENIS_TRANSPORTASI", serialize(array(
	"Darat" => "Darat",
	"Air" => "Air",
	"Udara" => "Udara",
	"Lainnya" => "Lainnya",
)));

define("JENIS_KENDARAAN", serialize(array(
	"Sepeda" => "Sepeda",
	"Becak" => "Becak",
	"Gerobak" => "Gerobak",
	"Andong/Delman" => "Andong/Delman",
	"Motor Roda 2" => "Motor Roda 2",
	"Motor Roda 3" => "Motor Roda 3",
	"Mobil Penumpang" => "Mobil Penumpang",
	"Mobil Bak" => "Mobil Bak",
	"Mobil Box" => "Mobil Box",
	"Bus" => "Bus",
	"Truk" => "Truk",
	"Kapal" => "Kapal",
	"Pesawat" => "Pesawat",
)));

define("JENIS_USAHA", serialize(array(
	"Sewa Kendaraan" => "Sewa Kendaraan",
	"Jasa Angkutan Penumpang" => "Jasa Angkutan Penumpang",
	"Jasa Angkutan Barang" => "Jasa Angkutan Barang",
	"Lainnya" => "Lainnya",
)));

define("KEPEMILIKAN_KENDARAAN", serialize(array(
	"Milik Sendiri" => "Milik Sendiri",
	"Sewa/Kontrak" => "Sewa/Kontrak",
	"lainnya" => "Lainnya",
)));

define("JENIS_VAKSIN", serialize(array(
	"SINOVAC" => "SINOVAC",
	"ASTRAZENECA" => "ASTRAZENECA",
	"SINOPHARM" => "SINOPHARM",
	"MODERNA" => "MODERNA",
	"PFIZER" => "PFIZER",
	"NOVAVAX" => "NOVAVAX",
	"SPUTNIK-V" => "SPUTNIK-V",
	"JANSEN" => "JANSEN",
	"CONVIDENCIA" => "CONVIDENCIA",
	"ZIFIVAK" => "ZIFIVAK",
)));


//--- End Referensi Toko Warga

class Referensi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function list_nama($tabel)
	{
		$data = $this->list_data($tabel);
		$list = [];
		foreach ($data as $key => $value)
		{
			$list[$value['id']] = $value['nama'];
		}
		return $list;
	}

	public function list_data($tabel, $kecuali='', $termasuk=null)
	{
		if ($kecuali) $this->db->where("id NOT IN ($kecuali)");

		if ($termasuk) $this->db->where("id IN ($termasuk)");

		$data = $this->db->select('*')->order_by('id')->get($tabel)->result_array();
		return $data;
	}

	public function list_wajib_ktp()
	{
		$wajib_ktp = array_flip(unserialize(WAJIB_KTP));
		return $wajib_ktp;
	}

	public function list_ktp_el()
	{
		$ktp_el = array_flip(unserialize(KTP_EL));
		return $ktp_el;
	}

	public function list_status_rekam()
	{
		$status_rekam = array_flip(unserialize(STATUS_REKAM));
		return $status_rekam;
	}

	public function list_by_id($tabel, $id = 'id')
	{
		$data = $this->db->order_by($id)
			->get($tabel)
			->result_array();
		$data = array_combine(array_column($data, $id), $data);
		return $data;
	}

	public function list_ref($stat = STAT_PENDUDUK)
	{
		$list_ref = unserialize($stat);
		return $list_ref;
	}

	public function list_ref_flip($s_array)
	{
		$list = array_flip(unserialize($s_array));
		return $list;
	}

	public function list_ref_pelanggan($stat)
	{
		$list_ref = unserialize($stat);
		return $list_ref;
	}

}
?>
