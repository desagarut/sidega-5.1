<style>
	img.gambar-toko_warga {
		width: 600px;
		height: 300px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
</style>
<table>
	<tbody>
		<tr>
			<td>
				<img class="logo" src="<?= gambar_desa($config['logo']); ?>" alt="logo-desa">
				<h1 class="judul">DATA UMKM TOKO WARGA</h1>
				<h1 class="judul">
					DI WILAYAH KERJA <?= strtoupper($this->setting->sebutan_desa . ' ' . $config['nama_desa'] . ' <br>' . $this->setting->sebutan_kecamatan . ' ' . $config['nama_kecamatan'] . ' <br>' . $this->setting->sebutan_desa . ' ' . $config['nama_kabupaten']); ?>
				</h1>
			</td>
		</tr>
		<tr>
			<td>
				<hr class="garis">
			</td>
		</tr>
		<table>
			<tbody>
				<tr>
					<td width="20%"><strong>NAMA TOKO WARGA</strong></td>
					<td width="1%">:</td>
					<td> <?= $toko_warga->nama_usaha ?></td>
				</tr>
				<tr>
					<td><strong>KATEGORI TOKO</strong></td>
					<td> : </td>
					<td> <?= $toko_warga->kategori_toko ?></td>
				</tr>
				<tr>
					<td><strong>ALAMAT TOKO</strong></td>
					<td> : </td>
					<td> <?= $toko_warga->alamat ?></td>
				</tr>
				<tr>
					<td><strong>KETERANGAN</strong></td>
					<td> : </td>
					<td> <?= $toko_warga->keterangan ?></td>
				</tr>
			</tbody>
		</table>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<table>
			<tbody>
				<?php foreach ($toko_warga_produk as $main) : ?>
					<tr>
						<td class="text-center">
							<h4><?= $toko_warga_produk->nama_produk ?></h4>
                            <p> <?= $toko_warga_produk->kategori_produk . ' ' . $main->harga . ' ' . $main->stok ?></p>
							<img class="img-fluid" src="<?= base_url() . LOKASI_GALERI . $toko_warga_produk->gambar ?>" alt="<?= $toko_warga_produk->nama_produk ?>">
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</tbody>
</table>
