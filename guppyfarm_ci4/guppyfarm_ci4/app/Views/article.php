<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section id="article" class="article-section mb-5" style="margin-top: 30px;">
    <div class="container">
        <div class="mb-4">
            <h6 class="category"><?= $lang == 'id' ? $meta['nama_halaman_id'] : $meta['nama_halaman_en']; ?></h6>
        </div>

        <!-- Baris pertama dengan 2 kolom -->
        <div class="row gy-4">
            <!-- Kolom Kiri dengan 2 artikel -->
            <div class="col-lg-8">
                <div class="row">
                    <h2 class="subjudul mb-5">
                        <?= $lang == 'id' ? $meta['deskripsi_halaman_id'] : $meta['deskripsi_halaman_en']; ?>
                    </h2>

                    <?php foreach (array_slice($allArticle, 0, 2) as $article) : ?>
                        <a href="<?= base_url(
                                        $lang === 'id'
                                            ? 'id/artikel/' . ($article['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                            : 'en/article/' . ($article['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article['slug_artikel_en'] ?? 'article-not-found')
                                    ); ?>" style="display: block; text-decoration: none; color: inherit;">
                            <div class="articlecard d-flex flex-column justify-content-center">
                                <img src="<?= base_url('assets/img/artikel/' . $article['foto_artikel']); ?>"
                                    alt="<?= $lang == 'id' ? $article['alt_artikel_id'] : $article['alt_artikel_en']; ?>">

                                <h2 class="mt-3">
                                    <strong><?= $lang == 'id' ? $article['judul_artikel_id'] : $article['judul_artikel_en']; ?></strong>
                                </h2>

                                <div class="kategori-artikel mb-3" style="margin-top: 10px;">
                                    <span class="badge text-bg-primary">
                                        <?= $lang == 'id' ? $article['nama_kategori'] : $article['nama_kategori']; ?>
                                    </span>
                                </div>

                                <p style="margin-top: 10px;">
                                    <?= $lang == 'id' ? $article['snippet_id'] : $article['snippet_en']; ?>
                                </p>

                                <div class="d-flex" style="margin-bottom: 10%;">
                                    <a href="<?= base_url(
                                                    $lang === 'id'
                                                        ? 'id/artikel/' . ($article['slug_kategori_id'] ?? 'kategori-tidak-ditemukan') . '/' . ($article['slug_artikel_id'] ?? 'artikel-tidak-ditemukan')
                                                        : 'en/article/' . ($article['slug_kategori_en'] ?? 'category-not-found') . '/' . ($article['slug_artikel_en'] ?? 'article-not-found')
                                                ); ?>" class="button-text button-bg" style="margin-top: 10px;">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>



            <!-- Kolom Kanan dengan Artikel Kecil -->
            <div class="col-lg-4">
                <h4><?= $lang == 'id' ? 'Artikel Lainnya' : 'Related Articles'; ?></h4>
                <hr>
                <?php if (!empty($sideArticle)): ?>
                    <?php foreach ($sideArticle as $article): ?>
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
<?= $this->endSection(); ?>