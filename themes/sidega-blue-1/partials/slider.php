<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>


    <!-- ======= Portfolio Slider ======= -->

<section id="portfolio-details" class="portfolio-details" style="padding-top:51px">
    <div class="portfolio-details-container" data-aos="fade-up">
      <div class="owl-carousel portfolio-details-carousel">
<?php $active = true; ?>
<?php foreach ($slider_gambar['gambar'] as $gambar) : ?>
<?php $file_gambar = $slider_gambar['lokasi'] . 'sedang_' . $gambar['gambar']; ?>
<?php if(is_file($file_gambar)) : ?>
        <div class="portfolio-description"> 
        <a class="archive__link" href="<?='artikel/'.buat_slug($gambar); ?>">
        	<img src="<?php echo base_url().$slider_gambar['lokasi'].'sedang_'.$gambar['gambar']?>" class="img-fluid" alt="<?= $gambar['judul'] ?>" style="width:100%; height:630px">
            </a>
            <div class="portfolio-info" style="background:rgba(10, 4, 4, 0.6)">
                <h3>
                   <small ><a class="archive__link" href="<?='artikel/'.buat_slug($gambar); ?>"><?= $gambar['judul'] ?></a></small>                </h3>
               <ul>
                  <li style="color:#FFF"><strong>Judul</strong> : <?= $gambar['judul'] ?></li>
                 <!-- <li style="color:#FFF"><strong>Penulis</strong>: <?= $gambar['owner'] ?></li>-->
                  <li style="color:#FFF"><strong>Tanggal</strong>: 01 March, 2020</li>
                  <br/><br/>
                </ul>
          </div>
        </div>
<?php $active = false; ?>
<?php endif; ?>
<?php endforeach; ?>
      </div>
    </div>
</section>
<!-- End Portfolio Details Section -->
