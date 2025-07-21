<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="activity" class="activity-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="mb-5">
            <h1 class="subjudulpanjang"><?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?></h1>
            <div class="kategori-artikel mb-2 mt-3" style="margin-top: 10px;">
                <span class="badge text-bg-primary"><?= $lang == 'id' ? $aktivitas['nama_kategori_id'] : $aktivitas['nama_kategori_en']; ?></span>
            </div>
            <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas['foto_aktivitas']); ?>" alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>" style="margin-top: 30px; height: 300px; width: 100%; object-fit: cover;">
            <p class="deskripsi" style="margin-top: 30px;"><?= $lang == 'id' ? $aktivitas['deskripsi_aktivitas_id'] : $aktivitas['deskripsi_aktivitas_en']; ?></p>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>