<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="about" class="about-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div>
            <h6 class="category"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h6>
            <h1 class="subjudulproduct"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <?php foreach ($allAktivitas as $aktivitas) : ?>
                <div class="col-md-3 py-3 py-md-0">
                    <a href="<?= base_url($lang == 'id'
                                    ? 'id/aktivitas/' . ($aktivitas['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($aktivitas['slug_aktivitas_id'] ?? 'aktivitas-tidak-ditemukan')
                                    : 'en/activity/' . ($aktivitas['slug_kategori_en'] ?? 'category-not-found') . '/' . ($aktivitas['slug_aktivitas_en'] ?? 'activity-not-found')); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="activitycard">
                            <img src="<?= base_url('assets/img/aktivitas/' . $aktivitas["foto_aktivitas"]) ?>"
                                alt="<?= $lang == 'id' ? $aktivitas['alt_aktivitas_id'] : $aktivitas['alt_aktivitas_en']; ?>"
                                class="card image-top">
                            <div class="card-body">
                                <h6 class="text-center activityname">
                                    <?= $lang == 'id' ? $aktivitas['judul_aktivitas_id'] : $aktivitas['judul_aktivitas_en']; ?>
                                </h6>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>