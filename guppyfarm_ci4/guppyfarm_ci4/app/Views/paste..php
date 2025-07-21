<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<style>
    .article-header {
        margin: 60px 0 40px;
    }
    
    .article-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #2D3436;
        margin-bottom: 1.5rem;
    }
    
    .category-tag {
        display: inline-block;
        padding: 6px 16px;
        margin: 0 8px;
        background-color: #F0F2F5;
        color: #4A5568;
        border-radius: 20px;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }
    
    .category-tag:hover {
        background-color: #E2E8F0;
    }
    
    .featured-image {
        width: 100%;
        height: 400px;
        object-fit: cover;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .contributor-section {
        background-color: #F8FAFC;
        padding: 20px;
        border-radius: 8px;
    }
    
    .contributor-label {
        font-size: 0.9rem;
        color: #64748B;
        margin-bottom: 10px;
    }
    
    .contributor-name {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #334155;
        font-weight: 600;
    }
    
    .article-content {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #334155;
    }
    
    .quote-block {
        border-left: 4px solid #3B82F6;
        padding: 20px;
        margin: 30px 0;
        background-color: #F8FAFC;
        font-style: italic;
    }
    
    .section-heading {
        color: #1E293B;
        font-weight: 600;
        font-style: italic;
        margin: 30px 0 15px;
    }
</style>

<section id="article" class="article-section">
    <div class="container">
        <header class="article-header text-center">
            <h1 class="article-title">Inspirasi dan Tips untuk Rumah Anda</h1>
            <div class="categories-wrapper">
                <span class="category-tag">Inspirasi</span>
                <span class="category-tag">Rekomendasi</span>
            </div>
            <img src="assets/img/article2.jpeg" class="featured-image mt-4" alt="Article featured image">
        </header>

        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="contributor-section">
                    <p class="contributor-label">Kontributor</p>
                    <p class="contributor-name">
                        <i class="bi bi-person-circle"></i>
                        aaaaaa
                    </p>
                    <hr>
                    <p class="contributor-label">aaaaa</p>
                    <p>aaaaaaa</p>
                </div>
            </div>

            <div class="col-lg-9">
                <article class="article-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, labore! Atque ratione doloribus repellat. Architecto tempora dicta repudiandae laboriosam velit amet? Est maxime, provident optio, corrupti dolor error natus laborum facere itaque esse fugiat voluptate ratione eveniet, quam libero. A sequi ullam minus distinctio id, officia laboriosam rem eligendi esse?
                    </p>
                    
                    <div class="quote-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta et a itaque animi suscipit? Ut soluta molestiae asperiores aliquid nemo mollitia, beatae molestias aperiam quia nihil voluptate perspiciatis nesciunt repellendus ad nisi amet ullam sed tempora ratione non pariatur velit architecto sequi. Explicabo officiis nesciunt recusandae illum error molestiae ab.
                    </div>

                    <h2 class="section-heading">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe vero quae sequi explicabo numquam praesentium voluptates reiciendis officia distinctio hic, ea beatae deserunt possimus ipsum. Veritatis ipsa dolorum nihil rem modi maiores quo, totam facilis aut consequuntur eos natus praesentium nemo nobis quas amet aliquam. Odio hic ratione maxime velit.
                    </p>

                    <h2 class="section-heading">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe vero quae sequi explicabo numquam praesentium voluptates reiciendis officia distinctio hic, ea beatae deserunt possimus ipsum. Veritatis ipsa dolorum nihil rem modi maiores quo, totam facilis aut consequuntur eos natus praesentium nemo nobis quas amet aliquam. Odio hic ratione maxime velit.
                    </p>

                    <h2 class="section-heading">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe vero quae sequi explicabo numquam praesentium voluptates reiciendis officia distinctio hic, ea beatae deserunt possimus ipsum. Veritatis ipsa dolorum nihil rem modi maiores quo, totam facilis aut consequuntur eos natus praesentium nemo nobis quas amet aliquam. Odio hic ratione maxime velit.
                    </p>
                </article>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>