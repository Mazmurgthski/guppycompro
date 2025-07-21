<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="contact" class="contact-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="row gy-4">
            <div class="aboutcard col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <div class="responsive-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.525694167994!2d112.61282937401006!3d-7.9445006920797265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827489ab9d67%3A0xcad03ec85e51098!2sJl.%20Simpang%20Remujung%20No.3%2C%20Jatimulyo%2C%20Kec.%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065141!5e0!3m2!1sid!2sid!4v1739112900065!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-1 hero-img">
                <h6 class="category"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h6>
                <h2 class="subjudul"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h2>
                <p class="deskripsi">
                    <?= $lang == 'id' ? $kontak['deskripsi_kontak_id'] : $kontak['deskripsi_kontak_en']; ?>
                </p>
                <div class="d-flex">
                    <a href="<?= base_url($lang == 'id' ? 'id/kontak' : 'en/contact') ?>" class="button-text button-bg">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>