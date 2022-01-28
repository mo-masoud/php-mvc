<main>
    <section class="container-fluid bg-color2 top-right-portal">
        <div class="container py-5">
            <div class="row mb-3">
                <div class="col">
                    <h4 class="animate__animated animate__bounce">Browse Categories</h4>
                </div>
            </div>
            <div id="category-list" class="row">

                <div class="col-md-3 d-none">
                    <a href="#">
                        <div class="category-card font-3" style="background-image: url(images/categories/cat1.png);">
                            Category Name
                        </div>
                    </a>
                </div>


                <?php foreach ($categories as $category): ?>
                <div class="col-md-3">
                    <a href="/search?category_id=<?= $category->id ?>">
                        <div class="category-card font-3 animate__animated animate__bounce"
                            style="background-image: url('images/categories/<?= $category->name ?>.png');">
                            <?= $category->name ?>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</main>