<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="about" class="about-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div>
        <h6 class="category"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h6>
        <h1 class="subjudulproduct"><?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?></h1>
        </div>
        <div class="row" style="margin-top: 30px;">
        <?php foreach ($product as $p) : ?>
                <div class="col-md-3 py-3 py-md-0 mt-3">
                    <a href="<?= base_url($lang == 'id'
                                    ? 'id/produk/' . $p['slug_id']
                                    : 'en/product/' . $p['slug_en']); ?>"
                        style="text-decoration: none; color: inherit;">
                        <div class="productcard">
                            <img src="<?= base_url('assets/img/produk/' . $p['foto_produk']); ?>"
                                alt="<?= $lang == 'id' ? $p['alt_produk_id'] : $p['alt_produk_en']; ?>"
                                class="card image-top">
                            <div class="card-body">
                                <h6 class="text-center productname">
                                    <?= $lang == 'id' ? $p['nama_produk_id'] : $p['nama_produk_en']; ?>
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