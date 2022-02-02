    <!-- ======= Features Section ======= -->
    <section id="features" class="features" >

        <div class="row" data-aos="fade-left" data-aos-delay="300">
          <div class="col-lg-12">
            <img src="<?= AmbilGaleri($sub['gambar'],'kecil') ?>" class="img-fluid" width="180px" alt="<?= $sub['nama'] ?>"><br/>
            <h2><i class="ri-store-2-fill" style="color: #e80368;"></i> <?= $sub['nama'] ?></h2>
            <p>
            	<i class="ri-user-fill" ></i> <?= $sub['nama_pengelola'] ?><br/>
                <i class="ri-phone-fill"></i> <?= $sub['no_hp'] ?><br/>
                <i class="icofont-location-pin"></i> <?= $sub['lokasi'] ?>
            </p>
          </div>
          <div class="col-lg-12 col-md-4 mt-1">
           <!-- <div class="icon-box">
            <a href=""><i class="ri-facebook-circle-fill" style="color:#2062FB;"></i></a>
              <a href=""><i class="ri-messenger-fill" style="color:#03A2ED;"></i></a>
              <a href=""><i class="ri-youtube-fill" style="color:#DE031A;"></i></a>
              <a href=""><i class="ri-twitter-fill" style="color:#03A2ED;"></i></a>
              <a href=""><i class="ri-instagram-fill" style="color:#52415A;"></i></a>
              <a href=""><i class="ri-telegram-fill" style="color:#52415A;"></i></a>
            </div>-->
            <div class="icon-box"><marquee behavior="alternate" scrollamount="1">
            <a href="<?= site_url('first/toko_show') ?>"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/toko.png" ) ?>" width="70px" /> </a>
            <a href="<?= site_url('first/tuwa') ?>"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/tukang.png" ) ?>" width="70px" /> </a>
            <a href="<?= site_url('first/tawa') ?>"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/transport.png" ) ?>" width="70px" /> </a>
            <a href="<?= site_url('first/wisata') ?>"> <img src="<?= base_url("$this->theme_folder/$this->theme/assets/img/wisata.png" ) ?>" width="70px" /> </a></marquee>
            </div>
          </div>
        </div>

    </section><!-- End Features Section -->
<style type='text/css'>
body img{
  -webkit-transition: -webkit-transform 1.1s ease-in-out;
  transition: transform 1.1s ease-in-out;
}
body img:hover{
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
</style>