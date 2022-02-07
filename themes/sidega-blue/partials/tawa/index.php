<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======= Portfolio Details Section ======= -->

<div class="section-title" data-aos="fade-up">
  <section id="portfolio-details" class="portfolio-details">
    <div class="row">
      <?php if($main) : ?>
      <div class="col-md-8">
        <div class="portfolio-details-container" data-aos="fade-right" data-aos-delay="300">
          <div class="owl-carousel portfolio-details-carousel">
            <?php foreach($main as $data) : ?>
            <?php if(is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])) : ?>
            <?php $link = site_url('first/tawa_layanan/'.$data['id']) ?>
            <div class="portfolio-description"> <a class="archive__link" href="#"> <img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $data['nama'] ?>"> </a>
              <div class="portfolio-info">
                <h3> <a class="" href="<?= site_url('first/tawa_layanan/'.$data['id']) ?>">
                  <button class="btn btn-warning"><i class="ri-store-2-fill" style="color:#fff;"></i> UMKM:
                  <?= $data['nama'] ?>
                  </button>
                  </a> <a href="https://wa.me/+62<?= $data['no_hp'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>.%20Apakah%20<?= $data['nama'] ?>%20masih%20buka%3F" target="_blank" title="pesan">
                  <button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button>
                  </a> </h3>
              </div>
            </div>
            <?php endif ?>
            <?php endforeach ?>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <?php $this->load->view($folder_themes .'/partials/tawa/qr-code.php') ?>
      </div>
      <?php endif ?>
    </div>
  </section>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6 align-items-stretch owl-carousel portfolio-details-carousel">
    <div class="member" data-aos="fade-up">
      <div class="member-img"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/transport.png" ) ?>" class="img-fluid" alt="" style="width:100%; height:225px"> </div>
      <div class="member-info" style="background-color:#B7FFDB">
        <h4> <strong style="color:#C00">TOWA</strong>: TRANSPORTASI WARGA </h4>
        <p class="text-center"><strong>adalah </strong> wadah bagi <strong>UMKM</strong> (Usaha Masyarakat Kecil Menengah) di wilayah <strong>
          <?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>
          </strong>, yang dikembangkan untuk membantu meningkatkan pertumbuhan ekonomi masyarakat desa.</p>
        <!--<a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan"><button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button></a>
            
            <a href="<?= site_url('first/tawa_layanan/'.$data['id']) ?>"  title="Produk"><button class="btn btn-primary"><i class="icofont-info"></i> Produk</button></a>--> 
      </div>
    </div>
  </div>
  <?php if($main) : ?>
  <?php foreach($main as $data) : ?>
  <?php if(is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])) : ?>
  <?php $link = site_url('first/tawa_layanan/'.$data['id']) ?>
  <div class="col-lg-3 col-md-6 align-items-stretch owl-carousel portfolio-details-carousel">
    <div class="member" data-aos="fade-up">
      <div class="member-img"> <img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $data['nama'] ?>" style="width:100%; height:225px">
          <div class="social"> <a href="https://youtube.com/channel/<?= $data['youtube'] ?>" target="_blank"><i class="icofont-youtube"></i></a> <a href="<?= $data['website'] ?>" target="_blank"><i class="icofont-globe"></i></a> <a href="https://facebook.com/<?= $data['fb'] ?>" target="_blank"><i class="icofont-facebook"></i></a> <a href="https://instagram.com/<?= $data['ig'] ?>" target="_blank"><i class="icofont-instagram"></i></a> <a href="phone:<?= $data['no_hp'] ?>" target="_blank"><i class="icofont-phone"></i></a> </div>
      </div>
      <div class="member-info">
        <h4 style="color:#C00">
          <?= $data['nama'] ?>
        </h4>
        <span style="color:#F60"><i class="icofont-user"></i>
        <strong><?= $data['nama_pengelola']?></strong>
		<span style="color:#03F"><i class="icofont-long-drive"></i>
        <?= $data['jenis_usaha'] ?>
        </span> 
        <span style="color:#63F"><i class="icofont-map-pins"></i> Area
        <?= $data['area']?>
        </span> 
        <span style="color:#066"><i class="icofont-gift" ></i>
        <?= $data['kelompok_usaha']?>
        </span> 
        <span style="color:#F09"><i class="icofont-location-pin"></i>
        <?= $data['lokasi'] ?>
        </span> <br/>
        <a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20<?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?>.%20Apakah%20<?= $data['nama'] ?>%20masih%20buka%3F%" target="_blank" title="pesan">
        <button class="btn btn-success"><i class="icofont-whatsapp"></i> Hubungi</button>
        </a> <a href="<?= site_url('first/tawa_layanan/'.$data['id']) ?>"  title="Produk">
        <button class="btn btn-primary"><i class="icofont-info"></i> Layanan</button>
        </a> </div>
    </div>
  </div>
  <?php endif ?>
  <?php endforeach ?>
  <?php endif ?>
</div>
<!-- End Our Team Section --> 