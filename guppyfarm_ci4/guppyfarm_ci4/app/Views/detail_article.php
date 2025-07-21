<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="article" class="contact-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="mb-5 text-center">
            <h1 class="subjudulpanjang"><?= $lang == 'id' ? $artikel['judul_artikel_id'] : $artikel['judul_artikel_en']; ?></h1>
            <div class="kategori-artikel mb-3 d-flex justify-content-center" style="margin-top: 20px;">
                <span class="kategori-artikel"><?= $lang == 'id' ? $artikel['nama_kategori_id'] : $artikel['nama_kategori_en']; ?></span>
            </div>
            <img src="<?= base_url('assets/img/artikel/' . $artikel['foto_artikel']); ?>" alt="<?= $lang == 'id' ? $artikel['alt_artikel_id'] : $artikel['alt_artikel_en']; ?>" class="mt-3" style="height: 300px; width: 100%; object-fit: cover;">
        </div>

        <div class="row mt-4">
        <div class="col-lg-3">
                <div class="contributor-section">
                    <p class="contributor-label">Kontributor</p>
                    <p class="contributor-name">
                        <i class="bi bi-person-circle"></i>
                        Admin
                    </p>
                    <hr>
                    <p class="contributor-label">Tanggal Update</p>
                    <p><?= date('d F Y', strtotime($artikel['created_at'])); ?></p>
                </div>
            </div>

            <div class="col-lg-9">
                <article class="article-content">
                    <?= $lang == 'id' ? $artikel['deskripsi_artikel_id'] : $artikel['deskripsi_artikel_en']; ?>
                </article>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>