<?= $this->extend('layouts/layout_main'); ?>
<?= $this->section('content'); ?>

<section id="produtos" class="mb-5 pt-5 pb-5" style="margin-top: 115px;">
    <div class="container">
        <div class="row">
            <?php if (empty($products)): ?>
                <div class="text-center mt-5">
                    <h4 class="opacity-50 mb-3">Não existem produtos disponíveis</h4>
                </div>
            <?php else: ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col-lg-3">
                        <div class="card mt-5">

                            <?php
                            $image = base_url('assets/gerenciador/images/products/' . $product->image);
                            $tmp = ROOTPATH . 'public/assets/gerenciador/images/products/' . $product->image;
                            if (!file_exists($tmp)) {
                                $image = base_url('assets/gerenciador/images/products/no_image.png');
                            }
                            ?>

                            <img src="<?= $image ?>" alt="<?= $product->image ?>" class="card-img-top" />
                            <div class="card-body">
                                <?php if ($product->promotion != 0) : ?>
                                    <span class="badge bg-success">(Com promoção de <?= intval($product->promotion) ?>%)</span>
                                <?php endif; ?>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5 class="card-title">
                                        <?= $product->name ?> <br>
                                        <p class="m-0 opacity-50"><?= $product->category ?></p>
                                    </h5>
                                    <?php if ($product->promotion == 0) : ?>
                                        <h3 class="m-0 text-dark"><strong><?= 'R$' . normalize_price($product->price) ?></strong></h3>
                                    <?php else : ?>
                                        <h3>
                                            <span class="text-decoration-line-through text-secondary"><?= 'R$' . normalize_price($product->price) ?></span> <br>
                                            <span class="text-dark"><strong><?= 'R$' . normalize_price(calculate_promotion($product->price, $product->promotion)) ?></strong></span>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="#" class="nav-link fw-bold fs-3">
                                        <i class="bi bi-cart-plus"></i>
                                    </a>
                                    <p class="fw-bold" style="color: #4daf48;">Em Estoque</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif ?>

        </div>
    </div>
</section>

<?= $this->endSection(); ?>