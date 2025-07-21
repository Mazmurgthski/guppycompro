<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="about" class="about-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="mb-5">
            <h1 class="subjudulpanjang"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
            <img src="<?= base_url('assets/img/profil/' . $profil['foto_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_foto_perusahaan_id'] : $profil['alt_foto_perusahaan_en']; ?>" class="d-block w-100" style="margin-top: 30px; height: 300px; width: 100%; object-fit: cover;">
            <p class="deskripsi" style="margin-top: 30px;"><?= $lang == 'id' ? $profil['deskripsi_perusahaan_id'] : $profil['deskripsi_perusahaan_en']; ?></p>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>