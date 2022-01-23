<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <!-- ======= Portfolio Details Section ======= -->

    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2><i class="ri-store-2-fill" style="color:#e80368;"></i>PRODUK TOKO <strong>WARGA</strong></h2>
          <p></p>
        <a href="<?= site_url('first/toko_show') ?>">
           <button class="btn btn-primary">Cari Toko</button>
        </a>

        </div>

        <div class="row">

        <?php if($gallery) : ?>
			<?php foreach($gallery as $album) : ?>
				<?php if(is_file(LOKASI_GALERI . "kecil_" . $album['gambar'])) : ?>
					<?php $link = AmbilGaleri($album['gambar'],'sedang') ?>
          <div class="col-lg-3 col-md-6 align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
				<img src="<?= AmbilGaleri($album['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $album['nama'] ?>" style="width:100%; height:225px">
					    
                <div class="social">
                  <a href="<?= $album['website'] ?>"><i class="icofont-webiste"></i></a>
                  <a href="https://facebook.com/<?= $album['fb'] ?>"><i class="icofont-facebook"></i></a>
                  <a href="https://instagram.com/<?= $album['ig'] ?>"><i class="icofont-instagram"></i></a>
                  <a href="phone:<?= $album['no_hp_toko'] ?>"><i class="icofont-phone"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $album['nama'] ?></h4>
                <span style="color:#F36"><i class="icofont-cart"></i>Toko <?= $album['kategori_toko'] ?></span>
                <span style="color:#63C"><i class="icofont-location-pin"></i> <?= $album['keterangan_lokasi'] ?></span>
												
                                                    
                <br/><button><a href="https://wa.me/+62<?= $album['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" class="btn btn-social btn-box btn-block btn-sm"  target="_blank" title="pesan"><i class="icofont-whatsapp"></i> Pesan</a></button><button class=""><a href="<?= site_url("toko_warga/produk"); ?>" class="btn btn-social btn-box btn-block btn-sm" title="Detail"><i class="icofont-info"></i> Produk</a></button>

              </div>
            </div>
          </div>
          
        <?php endif ?>
        <?php endforeach ?>
        <?php endif ?>

        </div>

      </div>
    </section><!-- End Our Team Section -->
