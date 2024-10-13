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
                            <div>
                                <img src="<?= base_url('assets/gerenciador/images/products/' . $product->image) ?>" class="img-fluid" alt="<?= $product->image ?>">
                            </div>
                            <div class="ms-4 w-100">
                                <h3 class="m-0"><strong><?= $product->name ?></strong></h3>
                                <p class="m-0"><?= $product->description ?></p>
                                <p class="m-0 opacity-50"><?= $product->category ?></p>
                                <?php if ($product->promotion == 0) : ?>
                                    <h3 class="m-0 text-primary"><strong><?= 'R$' . $product->price ?></strong></h3>
                                <?php else : ?>
                                    <h3 class="m-0"><?= 'R$' . $product->price ?>/<span class="text-primary"><strong><?= 'R$' . calculate_promotion($product->price, $product->promotion) ?></strong></span></h3>
                                    <span class="badge bg-success">(Com promoção de <?= $product->promotion ?> %)</span>
                                <?php endif; ?>
                                <div class="text-end align-items-bottom">
                                    <a href="#" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-pen-to-square me-2"></i>Editar</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-solid fa-cubes-stacked me-2"></i>Stock</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-trash-can me-2"></i>Eliminar</a>
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