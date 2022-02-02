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
                  <?php $link = site_url('first/produk_show/'.$data['id']) ?>
                  <div class="portfolio-description"> <a class="archive__link" href="#"> <img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $data['nama'] ?>"> </a>
                    <div class="portfolio-info">
                      <h3>
                        <a class="" href="<?= site_url('first/produk_show/'.$data['id']) ?>">
                        <button class="btn btn-warning"><i class="ri-store-2-fill" style="color:#fff;"></i> UMKM: <?= $data['nama'] ?></button>
                        </a>
                      
                        <a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan">
                        <button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button>
                        </a>
                      </h3>
                    </div>
                  </div>
                  <?php endif ?>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <?php $this->load->view($folder_themes .'/partials/toko_warga/qr-code.php') ?>
            </div>
            <?php endif ?>

          </div>
        </section>
      </div>
        
    <div class="row" data-aos="fade-up">
      <div class="col-sm-12">
      <p class="text-center"><strong>Toko Warga </strong>adalah wadah bagi <strong>UMKM</strong> (Usaha Masyarakat Kecil Menengah) di wilayah
        <strong><?= ucfirst($this->setting->sebutan_desa).' '.ucwords($desa['nama_desa']) ?></strong>, yang dikembangkan untuk membantu meningkatkan pertumbuhan ekonomi masyarakat desa.
      </p> 
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 align-items-stretch owl-carousel portfolio-details-carousel">
        <div class="member" data-aos="fade-up">
          <div class="member-img"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/toko.png" ) ?>" class="img-fluid" alt="" style="width:100%; height:225px">
          </div>
          <div class="member-info">
            <h4>
              TOKO LAINNYA
            </h4>
            <p> Klik disini untuk melihat semua toko warga yang terdaftar di sistem informasi desa
            </p>
            <a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan"><button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button></a>
            
            
            <a href="<?= site_url('first/produk_show/'.$data['id']) ?>"  title="Produk"><button class="btn btn-primary"><i class="icofont-info"></i> Produk</button></a>
          </div>
        </div>
      </div>

      <?php if($main) : ?>
      <?php foreach($main as $data) : ?>
      <?php if(is_file(LOKASI_GALERI . "kecil_" . $data['gambar'])) : ?>
      <?php $link = site_url('first/produk_show/'.$data['id']) ?>
      <div class="col-lg-3 col-md-6 align-items-stretch owl-carousel portfolio-details-carousel">
        <div class="member" data-aos="fade-up">
          <div class="member-img"> <img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $data['nama'] ?>" style="width:100%; height:225px">
            <div class="social"> <a href="<?= $data['website'] ?>"><i class="icofont-webiste"></i></a> <a href="https://facebook.com/<?= $data['fb'] ?>"><i class="icofont-facebook"></i></a> <a href="https://instagram.com/<?= $data['ig'] ?>"><i class="icofont-instagram"></i></a> <a href="phone:<?= $data['no_hp_toko'] ?>"><i class="icofont-phone"></i></a> </div>
          </div>
          <div class="member-info">
            <h4>
              <?= $data['nama'] ?>
            </h4>
            <span style="color:#666"><i class="ri-store-2-fill" style="color:#e80368"></i> Toko
            <?= $data['kategori_toko'] ?> - 
            <br/>Produk unggulan : <?= $data['produk_utama']?>
            </span> <span style="color:#63C"><i class="icofont-location-pin"></i>
            
            <?= $data['nama_pengelola']?> | <?= $data['lokasi'] ?>
            </span> <br/>
            
            <a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" target="_blank" title="pesan"><button class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan</button></a>
            
            
            <a href="<?= site_url('first/produk_show/'.$data['id']) ?>"  title="Produk"><button class="btn btn-primary"><i class="icofont-info"></i> Produk</button></a>
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php endforeach ?>
      <?php endif ?>
      
    </div>
<!-- End Our Team Section --> 
