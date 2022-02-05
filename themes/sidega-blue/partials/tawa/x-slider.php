<!-- ======= Clients Section ======= -->

<section id="clients" class="clients features">
  <div class="container" data-aos="zoom-in">
    <div class="clients-slider swiper-container">
      <?php if($gallery) : ?>
      <?php foreach($gallery as $data) : ?>
      <?php if(is_file(LOKASI_GALERI . $data['foto'])) : ?>
      <?php $link = AmbilGaleri($data['foto'],'sedang') ?>
      <div class="col-lg-3 col-md-6 align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img"> <img src="<?= base_url() . LOKASI_GALERI . $data['foto'] ?>" class="img-fluid" alt="<?= $data['nama_usaha'] ?>" style="width:100%; height:200px">
            <div class="social"> <a href="https://youtube.com/channel/<?= $data['youtube'] ?>" target="_blank"><i class="icofont-youtube"></i></a> <a href="https://facebook.com/<?= $data['fb'] ?>" target="_blank"><i class="icofont-facebook"></i></a> <a href="https://instagram.com/<?= $data['ig'] ?>" target="_blank"><i class="icofont-instagram"></i></a> <a href="tel: +62<?= $data['no_hp_toko'] ?>"><i class="icofont-phone"></i></a> </div>
          </div>
          <div class="member-info">
            <h4>
              <?= $data['nama_usaha'] ?>
            </h4>
            <span>
            <?= $data['kategori_toko'] ?>
            </span> <span>
            <?= $data['lokasi'] ?>
            </span> <br/>
            <button class="">
            <a href="https://wa.me/+62<?= $data['no_hp_toko'] ?>?text=Assalamu'alaikum%2C%20halo%20saya%20tertarik%20dengan%20produk%20anda%20yang%20ditawarkan%20di%20website%20desa.%20Apakah%20produknya%20masih%20tersedia%3F" class="btn btn-social btn-box btn-block btn-sm"  target="_blank" title="pesan"><i class="icofont-whatsapp"></i> Pesan</a>
            </button>
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php endforeach ?>
      <?php endif ?>
    </div>
  </div>
  <div class="features icon-box"> <a href=""><i class="ri-facebook-circle-fill" style="color:#2062FB;"></i></a> <a href=""><i class="ri-messenger-fill" style="color:#03A2ED;"></i></a> <a href=""><i class="ri-youtube-fill" style="color:#DE031A;"></i></a> <a href=""><i class="ri-twitter-fill" style="color:#03A2ED;"></i></a> <a href=""><i class="ri-instagram-fill" style="color:#52415A;"></i></a> <a href=""><i class="ri-telegram-fill" style="color:#52415A;"></i></a> </div>
</section>
<!-- End Clients Section -->