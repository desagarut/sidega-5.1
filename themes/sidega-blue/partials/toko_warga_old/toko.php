<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <!-- ======= Portfolio Details Section ======= -->

    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><i class="ri-store-2-fill" style="color:#e80368;"></i> TOKO <strong>WARGA</strong></h2>
          <p><strong>Toko Warga </strong>adalah informasi tentang seluruh pedagang yang ada di wilayah <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>, pedagang yang terdaftar dalam Toko Warga terdiri atas seluruh penduduk yang memiliki aktivitas perdagangan di wilayah <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>. Baik penduduk tetap, sementara, maupun penduduk luar desa.<br/>
          Layanan <strong>Toko Warga</strong> memudahkan semua dalam berniaga, pemerintah desa hanya menyediakan fasilitas saja, tidak terlibat dalam transaksi jual beli didalamnya. Pembeli dapat menghubungi penjual secara langsung melalui whatsapp / telepon.<br/>
          Guna memudahkan dalam penggunaan layanan, sebaiknya baca <a href="#">Syarat & Ketentuan Layanan</a> terlebih dahulu.</p>
           <a href="<?= site_url('first/toko_produk') ?>">
               <button class="btn btn-primary">Cari Produk</button>
            </a>

        </div>

        <div class="row">

        <?php if($toko) : ?>
        <?php foreach($toko as $data) : ?>
        
        <?php if(is_file(LOKASI_GALERI . $data['foto'])) : ?>
        <?php $link = AmbilGaleri($data['foto'],'sedang') ?>
          <div class="col-lg-3 col-md-6 align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
              <a href="<?= site_url("first/toko_produk/{$data['id']}") ?>" class="details-link" title="More Details">
				<img src="<?= base_url() . LOKASI_GALERI . $data['foto'] ?>" class="img-fluid" alt="<?= $data['nama_usaha'] ?>" style="width:100%; height:200px">
				</a>	    
                <div class="social">
                  <a href="https://youtube.com/channel/<?= $data['youtube'] ?>" target="_blank"><i class="icofont-youtube"></i></a>
                  <a href="https://facebook.com/<?= $data['fb'] ?>" target="_blank"><i class="icofont-facebook"></i></a>
                  <a href="https://instagram.com/<?= $data['ig'] ?>" target="_blank"><i class="icofont-instagram"></i></a>
                  <a href="tel: +62<?= $data['no_hp_toko'] ?>"><i class="icofont-phone"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $data['nama_usaha'] ?></h4>
                <span><?= $data['kategori_toko'] ?></span>
                <span><?= $data['lokasi'] ?></span>
                <br/><button class=""><a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" class="btn btn-social btn-box btn-block btn-sm"  target="_blank" title="pesan"><i class="icofont-whatsapp"></i> Pesan</a></button><button class=""><a href="<?= site_url("penduduk_log/clear"); ?>" class="btn btn-social btn-box btn-block btn-sm" title="Detail"><i class="icofont-info"></i> Produk</a></button>

              </div>
            </div>
          </div>
          
        <?php endif ?>
        <?php endforeach ?>
        <?php endif ?>

        </div>

      </div>
    </section><!-- End Our Team Section -->
