<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

    <!-- ======= Portfolio Details Section ======= -->

<section id="portfolio-details" class="portfolio-details">
  <div class="container" data-aos="fade-up">
    <div class="portfolio-details-container">
      <div class="owl-carousel portfolio-details-carousel">
      
        <?php if($gallery) : ?>
        <?php foreach($gallery as $data) : ?>
        
        <?php if(is_file(LOKASI_GALERI . $data['gambar'])) : ?>
        <?php $link = AmbilGaleri($data['gambar'],'sedang') ?>
        <div class="portfolio-description"> 
        	<img src="<?= AmbilGaleri($data['gambar'],'kecil') ?>" class="img-fluid" alt="<?= $data['nama_usaha'] ?>" style="width:100%; height:600px">

            <div class="portfolio-info" style="background:rgba(10, 4, 4, 0.6)">
                <h3>
                  <small>Nama Toko:</small> <?= $data['nama'] ?> 
                </h3>
                <br/><br/>
               <ul>
                  <li><strong>Nama Toko</strong>:
                    <?= $data['nama_produk'] ?>
                  </li>
                  <li><strong>Pengelola</strong>: <?= $data['nama_pengelola'] ?></li>
                  <li><strong>Project date</strong>: 01 March, 2020</li>
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                </ul>
          </div>
        </div>
        <?php endif ?>
        <?php endforeach ?>
        <?php endif ?>
      </div>
    </div>
  </div>
</section>
<!-- End Portfolio Details Section -->
