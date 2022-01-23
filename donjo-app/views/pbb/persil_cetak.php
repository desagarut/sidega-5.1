<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<table>
	<tbody>
		<tr>
			<td>
				<?php if ($aksi != 'unduh'): ?>
					<img class="logo" src="<?= gambar_desa($config['logo']); ?>" alt="logo-desa">
				<?php endif; ?>
				<h1 class="judul">
					PEMERINTAH <?= strtoupper($this->setting->sebutan_kabupaten . ' ' . $config['nama_kabupaten'] . ' <br>' . $this->setting->sebutan_kecamatan . ' ' . $config['nama_kecamatan'] . ' <br>' . $this->setting->sebutan_desa . ' ' . $config['nama_desa']); ?>
				</h1>
			</td>
		</tr>
		<tr>
			<td><hr class="garis"></td>
		</tr>
		<tr>
			<td class="text-center">
				<h4><u> DATA PERSIL </u></h4>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>
				<table class="border thick">
					<thead>
						<tr class="border thick">
							<th>No</th>
							<th>No. Persil : No. Urut Bidang</th>
							<th>Kelas Tanah</th>
							<th>Luas (M2)</th>
							<th>Lokasi</th>
							<th>C-Desa Awal</th>
							<th>Jml Mutasi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($persil as $item): ?>
						<tr>
							<td ><?= $item['no']?></td>
							<td class="textx"><?= $item['nomor'].' : '.$item['nomor_urut_bidang']?></td>
							<td><?= $persil_kelas[$item["kelas"]]['kode']?></td>
							<td><?= $item['luas_persil']?></td>
							<td><?= $item['alamat'] ?: $item['lokasi']?></td>
							<td><?= $item['nomor_cdesa_awal']?></td>
							<td><?= $item['jml_bidang']?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</td>
		</tr>
	</tbody>
</table>