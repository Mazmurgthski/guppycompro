<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- carousel -->
<section id="slider" class="slider-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <div id="carouselText" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <?php foreach ($slider as $index => $slide): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>">
                                <h1 class="judul">
                                    <?= ($lang == 'id') ? $slide['caption_slider_id'] : $slide['caption_slider_en']; ?>
                                </h1>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 hero-img">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <?php foreach ($slider as $index => $slide): ?>
                            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="<?= $index; ?>"
                                class="<?= $index === 0 ? 'active' : ''; ?>" aria-label="Slide <?= $index + 1; ?>"></button>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel-inner">
                        <?php foreach ($slider as $index => $slide): ?>
                            <div class="carousel-item <?= $index === 0 ? 'active' : ''; ?>" data-bs-target="#carouselText" data-bs-slide-to="<?= $index; ?>">
                                <img src="<?= base_url('assets/img/slider/' . $slide['foto_slider']) ?>"
                                    class="d-block w-100"
                                    alt="<?= ($lang == 'id') ? $slide['alt_foto_slider_id'] : $slide['alt_foto_slider_en']; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of carousel -->

<!-- about -->
<section id="about" class="about-section mb-5" style="margin-top: 60px;">
  <div class="container-md">

    <!-- Judul Tengah Atas -->
    <div class="text-center mb-4">
      <h2 class="fw-bold text-dark"><?= $lang == 'id' ? $aboutMeta['nama_halaman_id'] : $aboutMeta['nama_halaman_en']; ?></h2>
      <hr class="mx-auto" style="width: 60px; height: 4px; background-color: #0C007C;">
    </div>

    <div class="row gy-4 align-items-center">
      
      <!-- Gambar - slide in left -->
      <div class="aboutcard col-lg-6 order-2 order-lg-1 d-flex justify-content-center" data-aos="fade-right">
        <img 
          src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>" 
          alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>" 
          class="w-100 shadow" 
          style="border-radius: 0; object-fit: cover;">
      </div>

      <!-- Deskripsi - slide in right -->
      <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="fade-left">
        <h4 class="text-dark mb-3"><?= $lang == 'id' ? $aboutMeta['deskripsi_halaman_id'] : $aboutMeta['deskripsi_halaman_en']; ?></h4>
        <p class="deskripsi mb-3"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
        <a href="<?= base_url($lang == 'id' ? 'id/tentang' : 'en/about') ?>" class="button-text button-bg"><?= lang('bahasa.Baca Selengkapnya'); ?></a>
      </div>
    </div>
  </div>
</section>
<!-- end of about -->

<!-- product -->
<section id="product" class="product-section mb-5">
  <div class="container">
    <!-- Judul & Deskripsi -->
    <div>
      <h6 class="category"><?= $lang == 'id' ? $productMeta['nama_halaman_id'] : $productMeta['nama_halaman_en']; ?></h6>
      <h2 class="subjudulproduct"><?= $lang == 'id' ? $productMeta['deskripsi_halaman_id'] : $productMeta['deskripsi_halaman_en']; ?></h2>
    </div>

    <!-- List Produk -->
    <div class="row" style="margin-top: 30px;">
      <?php foreach ((array_slice($product, 0, 4)) as $p) : ?>
        <div class="col-md-3 py-3 py-md-0">
          <a href="<?= base_url($lang == 'id' ? 'id/produk/' . $p['slug_id'] : 'en/product/' . $p['slug_en']); ?>" style="text-decoration: none; color: inherit;">
            <div class="productcard">
              <img src="<?= base_url('assets/img/produk/' . $p['foto_produk']); ?>"
                   alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>"
                   class="card image-top">
              <div class="card-body">
                <h6 class="text-center productname"><?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?></h6>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Tombol Lihat Semua -->
    <div class="text-end mt-4">
      <a href="<?= base_url($lang == 'id' ? 'id/produk' : 'en/product') ?>" class="btn btn-primary" style="background-color: #0C007C; border: none;">
        <?= lang('bahasa.Lihat Semua'); ?>
      </a>
    </div>
  </div>
</section>
<!-- end of product -->

<!-- activity -->
<section id="activity" class="activity-section mb-5">
  <div class="container">
    <!-- Judul & Deskripsi -->
    <div>
      <h6 class="category"><?= $lang == 'id' ? $aktivitasMeta['nama_halaman_id'] : $aktivitasMeta['nama_halaman_en']; ?></h6>
      <h2 class="subjudulproduct"><?= $lang == 'id' ? $aktivitasMeta['deskripsi_halaman_id'] : $aktivitasMeta['deskripsi_halaman_en']; ?></h2>
    </div>

    <!-- List Aktivitas -->
    <div class="row" style="margin-top: 30px;">
      <?php foreach ((array_slice($aktivitas, 0, 4)) as $aktivitas) : ?>
        <div class="col-md-3 py-3 py-md-0">
          <a href="<?= base_url(
                          $lang == 'id'
                            ? 'id/aktivitas/' . (!empty($aktivitas['slug_kategori_id']) ? $aktivitas['slug_kategori_id'] : 'kategori-tidak-ditemukan') . '/' . (!empty($aktivitas['slug_aktivitas_id']) ? $aktivitas['slug_aktivitas_id'] : 'aktivitas-tidak-ditemukan')
                            : 'en/activity/' . (!empty($aktivitas['slug_kategori_en']) ? $aktivitas['slug_kategori_en'] : 'category-not-found') . '/' . (!empty($aktivitas['slug_aktivitas_en']) ? $aktivitas['slug_aktivitas_en'] : 'activity-not-found')
                      ); ?>" style="text-decoration: none; color: inherit;">
            <div class="activitycard">
              <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas["foto_aktivitas"]) ?>"
                   alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>"
                   class="card image-top">
              <div class="card-body">
                <h6 class="text-center activityname"><?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?></h6>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Tombol Lihat Semua -->
    <div class="text-end mt-4">
      <a href="<?= base_url($lang == 'id' ? 'id/aktivitas' : 'en/activity') ?>" class="btn btn-primary" style="background-color: #0C007C; border: none;">
        <?= lang('bahasa.Lihat Semua'); ?>
      </a>
    </div>
  </div>
</section>
<!-- end of activity -->


<!-- Article Section -->
<section id="article" class="article-section mb-3">
    <div class="container">
        <div class="mb-2">
            <h6 class="category"><?= $lang == 'id' ? $articleMeta['nama_halaman_id'] : $articleMeta['nama_halaman_en']; ?></h6>
        </div>

        <!-- Baris utama dengan dua kolom (8 + 4) -->
        <div class="row gy-4">
            <!-- Kolom Kiri dengan Artikel Besar -->
            <div class="col-lg-8">
                <div class="row">
                    <h2 class="subjudul mb-5"><?= $lang == 'id' ? $articleMeta['deskripsi_halaman_id'] : $articleMeta['deskripsi_halaman_en']; ?></h2>
                    <a href="<?= base_url(
                                    $lang === 'id'
                                        ? 'id/artikel/' . ($article[0]['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article[0]['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                        : 'en/article/' . ($article[0]['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article[0]['slug_artikel_en'] ?? 'article-not-found')
                                ); ?>" style="display: block; text-decoration: none; color: inherit;">
                        <div class="articlecard d-flex flex-column justify-content-center">
                            <img src="<?= base_url('assets/img/artikel/' . $article[0]['foto_artikel']); ?>"
                                alt="<?= $lang == 'id' ? $article[0]['alt_artikel_id'] : $article[0]['alt_artikel_en']; ?>">
                            <h2 class="mt-3">
                                <strong><?= $lang == 'id' ? $article[0]['judul_artikel_id'] : $article[0]['judul_artikel_en']; ?></strong>
                            </h2>
                            <div class="kategori-artikel mb-3" style="margin-top: 10px;">
                                <span class="badge text-bg-primary"><?= $lang == 'id' ? $article[0]['nama_kategori'] : $article[0]['nama_kategori']; ?></span>
                            </div>

                            <p style="margin-top: 10px;">
                                <?= $lang == 'id' ? $article[0]['snippet_id'] : $article[0]['snippet_en']; ?>
                            </p>
                            <div class="d-flex">
                                <a href="<?= base_url(
                                                $lang === 'id'
                                                    ? 'id/artikel/' . ($article[0]['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article[0]['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                                    : 'en/article/' . ($article[0]['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article[0]['slug_artikel_en'] ?? 'article-not-found')
                                            ); ?>" class="button-text button-bg" style="margin-top: 10px;"><?= lang('bahasa.Baca Selengkapnya'); ?></a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan dengan Artikel Kecil -->
            <div class="col-lg-4">
                <?php if (!empty($sideArtikel)): ?>
                    <?php foreach (array_slice($sideArtikel, 0, 4) as $article): ?>
                        <div class="row mb-4 align-items-start article-item">
                            <a href="<?= base_url($lang == 'id'
                                            ? 'id/artikel/' . $article['slug_kategori_id'] . '/' . $article['slug_artikel_id']
                                            : 'en/article/' . $article['slug_kategori_en'] . '/' . $article['slug_artikel_en']); ?>"
                                style="text-decoration: none; color: inherit;">
                                <div class="col-12 d-flex">
                                    <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>"
                                        alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>"
                                        class="d-block me-3"
                                        style="width: 100px; height: 100px; object-fit: cover; border-radius: 5%;" loading="lazy">
                                    <div>
                                        <strong><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></strong>
                                        <p class="deskripsi">
                                            <?= implode(' ', array_slice(explode(' ', $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']), 0, 7)) . '...'; ?>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Tidak ada artikel terkait.</p>
                <?php endif; ?>
            </div>


        </div>
    </div>
</section>
<!-- end of article -->

<!-- contact -->
<section id="contact" class="contact-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="row gy-4">
            <div class="aboutcard col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <div class="responsive-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.525694167994!2d112.61282937401006!3d-7.9445006920797265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827489ab9d67%3A0xcad03ec85e51098!2sJl.%20Simpang%20Remujung%20No.3%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1739112900065!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 hero-img">
                <h6 class="category"><?= $lang == 'id' ? $contactMeta['nama_halaman_id'] : $contactMeta['nama_halaman_en']; ?></h6>
                <h2 class="subjudul"><?= $lang == 'id' ? $contactMeta['deskripsi_halaman_id'] : $contactMeta['deskripsi_halaman_en']; ?></h2>
                <p class="deskripsi">
                    <?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?>
                </p>
                <div class="d-flex">
                    <a href="<?= base_url($lang == 'id' ? 'id/kontak' : 'en/contact') ?>" class="button-text button-bg"><?= lang('bahasa.Baca Selengkapnya'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of contact -->

<?= $this->endSection(); ?>