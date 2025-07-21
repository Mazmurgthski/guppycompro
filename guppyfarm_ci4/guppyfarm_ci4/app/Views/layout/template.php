<?php
// Ambil bahasa yang disimpan di session
$lang = session()->get('lang') ?? 'id';
$current_url = uri_string();
$query_string = $_SERVER['QUERY_STRING'] ?? '';
$segments = explode('/', $current_url);
$lang_segment = $segments[0] ?? '';

if ($lang_segment !== 'en' && $lang_segment !== 'id') {
    $lang_segment = 'id';
}

$homeLink    = ($lang_segment === 'en') ? '/' : '/';
$aboutLink   = ($lang_segment === 'en') ? 'about' : 'tentang';
$contactLink = ($lang_segment === 'en') ? 'contact' : 'kontak';
$articleLink = ($lang_segment === 'en') ? 'article' : 'artikel';
$activityLink = ($lang_segment === 'en') ? 'activity' : 'aktivitas';
$productLink = ($lang_segment === 'en') ? 'product' : 'produk';

array_shift($segments);
$url_without_lang = implode('/', $segments);
$new_lang = ($lang_segment === 'en') ? 'id' : 'en';
$replace_map = [
    'tentang' => 'about',
    'kontak' => 'contact',
    'artikel' => 'article',
    'aktivitas' => 'activity',
    'produk' => 'product',
];

foreach ($replace_map as $id => $en) {
    $url_without_lang = str_replace($lang_segment === 'en' ? $en : $id, $lang_segment === 'en' ? $id : $en, $url_without_lang);
}

$clean_url = ($url_without_lang !== '') ? "$new_lang/$url_without_lang" : $new_lang;
if (!empty($query_string)) {
    $clean_url .= '?' . $query_string;
}

$english_url = base_url($clean_url);
$indonesia_url = base_url($clean_url);

$categoryLinks = [];
if (!empty($categories)) {
    foreach ($categories as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $categoryLinks[] = ['url' => base_url("$lang/$articleLink/$slug"), 'name' => $name];
    }
}

$kategoriAktivitasLinks = [];
if (!empty($categoriesAktivitas)) {
    foreach ($categoriesAktivitas as $cat) {
        $slug = ($lang === 'id') ? $cat['slug_kategori_id'] : $cat['slug_kategori_en'];
        $name = ($lang === 'id') ? $cat['nama_kategori_id'] : $cat['nama_kategori_en'];
        $kategoriAktivitasLinks[] = ['url' => base_url("$lang/$activityLink/$slug"), 'name' => $name];
    }
}
?>

<!DOCTYPE html>
<html lang="<?= $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($metaCategory)): ?>
        <title><?= $lang == 'id' ? $metaCategory['title_id'] : $metaCategory['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $metaCategory['meta_desc_id'] : $metaCategory['meta_desc_en']; ?>">
    <?php else: ?>
        <title><?= $lang == 'id' ? $meta['title_id'] : $meta['title_en']; ?></title>
        <meta name="description" content="<?= $lang == 'id' ? $meta['meta_desc_id'] : $meta['meta_desc_en']; ?>">
    <?php endif; ?>
    <link rel="canonical" href="<?= isset($canonical) ? $canonical : base_url() ?>">
    <link href="<?= base_url('logo2.ico'); ?>" rel="icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- AOS CSS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
<!-- AOS Animation CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

</head>

<body>

    <!-- HEADER dan NAVBAR -->
<header id="headerNavbar" class="slide-down">
    <nav class="navbar navbar-expand-lg nav-bg sticky-top transition-navbar" id="mainNavbar" style="border-bottom: 1px solid #DFDFE0;">
        <div class="container">
            <a class="nav-brand d-flex align-items-center" href="/">
                <img class="logo" src="<?= base_url('assets/img/profil/' . $profil['logo_perusahaan']); ?>" alt="<?= $profil['nama_perusahaan']; ?>" width="80" style="margin-right: 10px">
                <?= $profil['nama_perusahaan']; ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- NAV ITEMS -->
                    <li class="nav-item">
                        <a href="<?= base_url($lang . '/') ?>" class="nav-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'home' ? 'active' : '' ?>">
                            <?= lang('bahasa.Beranda'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="nav-link <?= isset($data['activeMenu']) && $data['activeMenu'] === 'about' ? 'active' : '' ?>">
                            <?= lang('bahasa.Tentang'); ?>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url($lang . '/' . $productLink) ?>" class="nav-link <?= isset($activeMenu) && $activeMenu === 'product' ? 'active' : '' ?>">
                            <?= lang('bahasa.Produk'); ?>
                        </a>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle <?= (uri_string() === 'activity' || str_contains(uri_string(), 'activity')) ? 'active' : '' ?>" href="#" role="button">
                            <?= lang('bahasa.Aktivitas'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link dropdown-item" href="<?= base_url($lang . '/' . $activityLink) ?>"><?= $lang == 'id' ? 'Semua Aktivitas' : 'All Activity'; ?></a></li>
                            <?php if (!empty($kategoriAktivitasLinks)): ?>
                                <?php foreach ($kategoriAktivitasLinks as $kategoriAktivitasLink): ?>
                                    <li><a class="nav-link dropdown-item" href="<?= $kategoriAktivitasLink['url']; ?>"><?= $kategoriAktivitasLink['name']; ?></a></li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li><a class="dropdown-item"><?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a class="nav-link dropdown-toggle <?= (uri_string() === 'article' || str_contains(uri_string(), 'article')) ? 'active' : '' ?>" href="#" role="button">
                            <?= lang('bahasa.Artikel'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="nav-link dropdown-item" href="<?= base_url($lang . '/' . $articleLink) ?>"><?= $lang == 'id' ? 'Semua Artikel' : 'All Article'; ?></a></li>
                            <?php if (!empty($categoryLinks)): ?>
                                <?php foreach ($categoryLinks as $categoryLink): ?>
                                    <li><a class="nav-link dropdown-item" href="<?= $categoryLink['url']; ?>"><?= $categoryLink['name']; ?></a></li>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <li><a class="dropdown-item"><?= $lang == 'id' ? 'Tidak ada kategori' : 'No Categories available'; ?></a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url($lang . '/' . $contactLink) ?>" class="nav-link <?= isset($activeMenu) && $activeMenu === 'contact' ? 'active' : '' ?>">
                            <?= lang('bahasa.Kontak'); ?>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span><?= ($lang === 'en') ? 'English' : 'Indonesia'; ?></span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item <?= $lang === 'id' ? 'active disabled' : ''; ?>" href="<?= $indonesia_url; ?>"><img src="<?= base_url('assets/img/logo/indonesia.jpg') ?>" style="width: 20px;" alt=""> Indonesia</a></li>
                            <li><a class="dropdown-item <?= $lang === 'en' ? 'active disabled' : ''; ?>" href="<?= $english_url; ?>"><img src="<?= base_url('assets/img/logo/english.jpg') ?>" style="width: 20px;" alt=""> English</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <footer>

        <!-- footer -->
        <section id="footer" class="footer-section">
            <div class="container-fluid" style="background-color: #01003dff; color: white; padding: 40px 0;">
                <div class="container">
                    <div class="row text-center text-lg-start">
                        <!-- Brand and Description -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <h5 class="title">
                                <a href="/">
                                    <img src="<?= base_url('assets/img/profil/' . $profil['logo_perusahaan']); ?>" alt="<?= $lang == 'id' ? $profil['alt_logo_perusahaan_id'] : $profil['alt_logo_perusahaan_en']; ?>" style="width: 30px; margin-right: 10px;">
                                </a>Guppy Care +
                            </h5>
                            <p class="deskripsi">Copyright © 2025 Aul. All rights reserved.</p>
                        </div>

                        <!-- Navigation Menu -->
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5><?= lang('bahasa.headerLink'); ?></h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="<?= base_url($lang . '/' . $homeLink) ?>"
                                        class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'home' ? 'active' : '' ?>" style="color: white; text-decoration: none;">
                                        <?= lang('bahasa.Beranda'); ?>
                                    </a>
                                </li>
                                <li><a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $aboutLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'about' ? 'active' : '' ?>"><?= lang('bahasa.Tentang'); ?></a></li>
                                <li><a style="color: white; text-decoration: none;" style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $articleLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'article' ? 'active' : '' ?>"><?= lang('bahasa.Artikel'); ?></a></li>
                                <li><a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $productLink) ?>" class="<?= isset($activeMenu) && $activeMenu === 'product' ? 'active' : '' ?>"><?= lang('bahasa.Produk'); ?></a></li>
                                <li><a style="color: white; text-decoration: none;" href="<?= base_url($lang . '/' . $contactLink) ?>" class="<?= isset($data['activeMenu']) && $data['activeMenu'] === 'contact' ? 'active' : '' ?>"><?= lang('bahasa.Kontak'); ?></a></li>
                            </ul>
                        </div>

                        <!-- Navigation Artikel -->
                        <div class="col-lg-2 col-md-6 mb-4">
                            <h5><?= lang('bahasa.headerService'); ?></h5>
                            <ul class="list-unstyled">
                                <?php if (!empty($kategori_teratas) && is_array($kategori_teratas)): ?>
                                    <?php foreach ($kategori_teratas as $kategori): ?>
                                        <li>
                                            <a style="color: white; text-decoration: none;" href="<?= base_url("id/artikel/" . $kategori['slug_kategori_id']) ?>">
                                                <?= $kategori['nama_kategori_id']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li>No categories available</li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Social Media Links -->
                        <div class="col-lg-2 col-md-6 mb-4 text-center text-lg-start">
                            <h5><?= lang('bahasa.sosmedLink'); ?></h5>
                            <ul class="list-unstyled">
                                <?php if (!empty($sosmed) && is_array($sosmed)): ?>
                                    <?php foreach ($sosmed as $s): ?>
                                        <li>
                                            <a style="color: white; text-decoration: none;" href="<?= $s['link_sosmed']; ?>" target="_blank">
                                                <img src="<?= base_url('assets/img/logo/' . $s['logo_sosmed']); ?>" alt="<?= $s['nama_sosmed']; ?>" style="width: 20px; height: 20px; margin-right: 5px;">
                                                <?= $s['nama_sosmed']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li>No social media available</li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Marketplace -->
                        <div class="col-lg-2 col-md-6 mb-4 text-center text-lg-start">
                            <h5><?= lang('bahasa.marketplaceLink'); ?></h5>
                            <ul class="list-unstyled">
                                <?php if (!empty($marketplace) && is_array($marketplace)): ?>
                                    <?php foreach ($marketplace as $s): ?>
                                        <li>
                                            <a style="color: white; text-decoration: none;" href="<?= $s['link_marketplace']; ?>" target="_blank">
                                                <img src="<?= base_url('assets/img/logo/' . $s['logo_marketplace']); ?>" alt="<?= $s['nama_marketplace']; ?>" style="width: 20px; height: 20px; margin-right: 5px;">
                                                <?= $s['nama_marketplace']; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <li>No social media available</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of footer -->


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let navLinks = document.querySelectorAll(".nav-link");
            navLinks.forEach(link => {
                if (link.href === window.location.href) {
                    link.classList.add("active");
                }
                link.addEventListener("click", function() {
                    navLinks.forEach(nav => nav.classList.remove("active"));
                    this.classList.add("active");
                });
            });
        });
    </script>

    <script>
    window.addEventListener('scroll', function () {
        const navbar = document.getElementById('mainNavbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
</script>

<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
  AOS.init();
</script>

</body>

</html>