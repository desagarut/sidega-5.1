<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- ======= Portfolio Details Section ======= -->

    <div class="section-title" data-aos="fade-up">
        <section id="portfolio-details" class="portfolio-details">
          <div class="row">
            <div class="col-md-8">
              <div class="portfolio-details-container" data-aos="fade-right" data-aos-delay="300">
                <div class="owl-carousel portfolio-details-carousel">
                  <?php if($produk_data) : ?>
                  <?php foreach($produk_data as $album) : ?>
                  <?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
                  <?php $link = site_url('first/produk_show/'.$album['id']) ?>
                  <div class="portfolio-description"> <a class="archive__link" href="#"> <img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $album['nama'] ?>"> </a>
                    <div class="portfolio-info">
                      <h3 style="color:#FFF"><?= $album['nama'] ?> | Harga: <?= $album['harga'] ?>
                      <a href="https://wa.me/+62<?= $album['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20yang%20anda%20tawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan">
                      <button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button>
                      </a></h3> <!--<a href="<?= site_url("first/produk_show/{$data['id']}") ?>" title="Detail">
                      <button  class="btn btn-primary" ><i class="icofont-info"></i> Produk</button>
                      </a>--> </div>
                  </div>
                  <?php endif ?>
                  <?php endforeach ?>
                  <?php endif ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <?php $this->load->view($folder_themes .'/partials/toko_warga/info_towa.php') ?>
            </div>
          </div>
        </section>
     <h2><i class="ri-store-2-fill" style="color:#e80368;"></i> Daftar Produk <strong class="color:#e80368"><?= $sub['nama'] ?></strong></h2>

    <div class="row">
      <?php if($produk_data) : ?>
      <?php foreach($produk_data as $album) : ?>
      <?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
      <?php $link = site_url('first/produk_show/'.$album['id']) ?>
      <div class="col-lg-3 col-md-6 align-items-stretch owl-carousel portfolio-details-carousel">
        <div class="member" data-aos="fade-up">
          <div class="member-img"> <img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $album['nama'] ?>" style="width:100%; height:225px">
            <div class="social"> <a href="<?= $album['website'] ?>"><i class="icofont-webiste"></i></a> <a href="https://facebook.com/<?= $album['fb'] ?>"><i class="icofont-facebook"></i></a> <a href="https://instagram.com/<?= $album['ig'] ?>"><i class="icofont-instagram"></i></a> <a href="phone:<?= $album['no_hp_toko'] ?>"><i class="icofont-phone"></i></a> </div>
          </div>
          <div class="member-info">
            <h4>
              <?= $album['nama'] ?>
            </h4>
            <h6 style="color:#F36"> <?= $album['harga'] ?></h6>
            <p class="text-justify member-info-detail"><?= $album['deskripsi'] ?>
            </p> <br/>
            <a href="https://wa.me/+62<?= $album['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan"><button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button></a>
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php endforeach ?>
      <?php endif ?>
    </div>
<!-- End Our Team Section --> 
