<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="product-detail">
    <div class="container">
        <div class="row gy-4 align-items-start">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="image-wrapper">
                    <img src="<?= base_url('assets/img/produk/' . $product["foto_produk"]) ?>"
                        alt="<?= $lang == 'id' ? $product['alt_produk_id'] : $product['alt_produk_en']; ?>" class="product-image">
                </div>
            </div>

            <div class="col-lg-6 order-1 order-lg-2">
                <h1 class="product-title"><?= $lang == 'id' ? $product['nama_produk_id'] : $product['nama_produk_en']; ?></h1>
                <?= $lang == 'id' ? $product['deskripsi_produk_id'] : $product['deskripsi_produk_en']; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>