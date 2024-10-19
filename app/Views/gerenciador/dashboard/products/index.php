<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>
<?= $this->include('gerenciador/partials/page_title'); ?>

<!-- novo produto -->
<div class="mb-3">
    <a href="<?= site_url('/gerenciador/produtos/novo') ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-plus me-2"></i> Novo produto</a>
</div>

<!-- lista de produtos -->
<?php if (empty($products)): ?>
    <div class="text-center mt-5">
        <h4 class="opacity-50 mb-3">Não existem produtos disponíveis</h4>
        <span>Clique <a href="<?= site_url('/gerenciador/produtos/novo') ?>">aqui</a> para adicionar o primeiro produto do supermercado.</span>
    </div>
<?php else: ?>
    <div class="container-fluid mb-5">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-xxl-6 col-12 ">
                    <div class="content-box shadow overflow-hidden">
                        <div class="d-flex">

                            <?php
                            $image = base_url('assets/gerenciador/images/products/' . $product->image);
                            $tmp = ROOTPATH . 'public/assets/gerenciador/images/products/' . $product->image;
                            if (!file_exists($tmp)) {
                                $image = base_url('assets/gerenciador/images/products/no_image.png');
                            }
                            ?>

                            <div style="width: 200px;height: 200px;">
                                <img src="<?= $image ?>" class="d-block w-100 img-fluid" alt="<?= $product->image ?>">
                            </div>

                            <div class="ms-4 w-100">
                                <h3 class="m-0"><strong><?= $product->name ?></strong></h3>
                                <p class="m-0"><?= $product->description ?></p>
                                <p class="m-0 opacity-50"><?= $product->category ?></p>
                                <?php if ($product->promotion == 0) : ?>
                                    <h3 class="m-0 text-primary"><strong><?= 'R$' . normalize_price($product->price) ?></strong></h3>
                                <?php else : ?>
                                    <h3 class="m-0"><?= 'R$' . normalize_price($product->price) ?>/<span class="text-primary"><strong><?= 'R$' . normalize_price(calculate_promotion($product->price, $product->promotion)) ?></strong></span></h3>
                                <?php endif; ?>

                                <div class="my-2">
                                    <!-- promotion -->
                                    <?php if ($product->promotion > 0) : ?>
                                        <span class="badge bg-success">(Com promoção de <?= intval($product->promotion) ?>%)</span>
                                    <?php endif; ?>

                                    <!-- stock -->
                                    <span class="badge bg-dark">
                                        <?= $product->stock ?>
                                        <?= $product->stock == 1 ? 'unidade' : 'unidades' ?>
                                    </span>
                                    <?php if ($product->stock <= $product->stock_min_limit): ?>
                                        <span class="badge bg-danger">Stock reduzido</span>
                                    <?php endif; ?>

                                    <!-- availability -->
                                    <?php if (!$product->availability): ?>
                                        <span class="badge bg-warning text-dark">Produto indiponível</span>
                                    <?php endif; ?>
                                </div>

                                <div class="text-end align-items-bottom">
                                    <a href="<?= base_url('/gerenciador/produtos/editar_produto/' . Encrypt($product->id)) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-pen-to-square me-2"></i>Editar</a>
                                    <a href="<?= base_url('/gerenciador/stocks/produto/' . Encrypt($product->id)) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-solid fa-cubes-stacked me-2"></i>Stock</a>
                                    <a href="<?= base_url('/gerenciador/produtos/delete/' . Encrypt($product->id)) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-trash-can me-2"></i>Eliminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>



<?= $this->endSection(); ?>