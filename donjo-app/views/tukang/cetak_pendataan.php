<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Data Toko Warga</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="<?= base_url()?>assets/css/report.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			.textx
			{
				mso-number-format:"\@";
			}
		</style>
	</head>
	<body>
		<div id="body">
			<table>
				<tbody>
					<tr>
						<td align="center">
							<?php if ($aksi != 'unduh'): ?>
								<img src="<?= gambar_desa($config['logo']);?>" alt="" style="width:100px; height:auto">
							<?php endif; ?>
							<h1>PEMERINTAH <?= strtoupper($this->setting->sebutan_kabupaten)?> <?= strtoupper($config['nama_kabupaten'])?> </h1>
							<h1 style="text-transform: uppercase;"></h1>
							<h1><?= strtoupper($this->setting->sebutan_kecamatan)?> <?= strtoupper($config['nama_kecamatan'])?> </h1>
							<h1><?= strtoupper($this->setting->sebutan_desa)." ".strtoupper($config['nama_desa'])?></h1>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<hr style="border-bottom: 1px solid #000000; height:0px;">
						</td>
					</tr>
                    <tr>
                    </tr>
					<tr>
						<td align="center" >
							<h2>DAFTAR TOKO WARGA</h2>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<strong>Sasaran: </strong>Individu<br>
						</td>
					</tr>
					<tr>
						<td style="padding: 5px 20px;">
							<table class="border thick">
								<thead>
									<tr class="border thick">
										<th>No</th>
										<th>Nama Toko</th>
										<th>Pengelola</th>
										<th>Awal Beroperasi</th>
										<th>Jumlah Toko</th>
										<th>Jenis Toko</th>
										<th>Status Toko</th>
										<th>Status Bangunan</th>
										<th>Kontak</th>
										<th>Keterangan</th>
										<th>Wajib Pantau</th>
									</tr>
								</thead>
								<tbody>
									<?php	$i=1;	foreach ($toko_list as $key=>$item): ?>
										<tr>
											<td align="center"><?= $i?></td>
											<td nowrap="nowrap"  align="center"><strong><?= $item["nama_toko"]?></strong><br/><?= $item["alamat_toko"]?></td>
											<td  align="center"><?= $item["terdata_nama"]?><br/>
												<?= $item["terdata_info"]?><br/>
												<?= $item["tempat_lahir"]?>, <?= $item["tanggal_lahir"]?><br/>
												<?= $item["sex"]?><br/>
												<?= $item["info"]?><br/>
                                            </td>
											<td align="center"><?= $item["tanggal_awal_operasi"]?></td>
											<td align="center"><?= $item["jumlah_toko"]?></td>
											<td align="center"><?= $item["jenis_toko"]?></td>
											<td align="center"><?= $item["status_toko"]?></td>
											<td align="center"><?= $item["kepemilikan_bangunan_toko"]?></td>
											<td><?= $item["no_hp"]?><br/>
												<?= $item["email"]?><br/>
												<?= $item["fb"]?><br/>
												<?= $item["ig"]?><br/>
                                            </td>
											<td><?= $item["keterangan"]?></td>
											<td align="center"><?= ($item["is_wajib_pantau"] === '1' ? "Ya" : "Tidak"); ?></td>
										</tr>
									<?php $i++;	endforeach;	?>
								</tbody>
							</table>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</body>
</html>

