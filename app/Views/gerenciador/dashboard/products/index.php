<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>
<?= $this->include('gerenciador/partials/page_title'); ?>

<!-- new_product -->
<div class="mb-3">
    <a href="<?= site_url('/gerenciador/produtos/novo') ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-plus me-2"></i>Novo produto</a>
</div>

<!-- products list-->
<?php if (empty($products)) : ?>
    <div class="text-center mt-5">
        <h4 class="opacity-50 mb-3">Não existem produtos disponíveis.</h4>
        <span>Clique <a href="<?= site_url('/gerenciador/produtos/novo') ?>">aqui</a> para adicionar o primeiro produto do restaurante.</span>
    </div>
<?php else : ?>
    <div class="container-fluid mb-5">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-xxl-6 col-12 ">
                    <div class="content-box shadow overflow-hidden">
                        <div class="responsive-product">

                            <?php
                            // -- Sem o ROOTPATH ele vai retornar http e não endereço fisico C: por isso o file_exisits não acha a foto
                            $image = base_url('assets/gerenciador/images/products/' . $product->image);
                            $tmp = ROOTPATH . 'public/assets/gerenciador/images/products/' . $product->image;
                            if (!file_exists($tmp)) {
                                $image = base_url('assets/gerenciador/images/products/no_image.png');
                            }
                            ?>

                            <div>
                                <img src="<?= $image; ?>" class="img-fluid product-image" alt="<?= $product->image ?>">
                            </div>
                            <div class="ms-4 w-100">
                                <h3 class="m-0"><strong><?= $product->name ?></strong></h3>
                                <p class="m-0"><?= $product->description ?></p>
                                <p class="m-0 opacity-50"><?= $product->category ?></p>
                                <?php if ($product->promotion == 0) : ?>
                                    <h3 class="m-0 text-primary"><strong><?= 'R$' . normalize_price($product->price) ?></strong></h3>
                                <?php else : ?>
                                    <h3 class="m-0"><?= 'R$' . normalize_price($product->price) ?>/<span class="text-primary"><strong><?= normalize_price(calculate_promotion($product->price, $product->promotion)) . 'R$' ?></strong></span></h3>
                                <?php endif; ?>


                                <div class="my-2">
                                    <!-- promotion -->
                                    <?php if ($product->promotion > 0) : ?>
                                        <span class="badge bg-success">(Com promoção de <?= intval($product->promotion) ?>%)</span>
                                    <?php endif; ?>

                                    <!-- stock -->
                                    <span class="badge bg-dark">
                                        <?= $product->stock ?>
                                        <?= $product->stock == 1 ? 'unidade' : 'unidades'; ?>
                                    </span>
                                    <?php if ($product->stock <= $product->stock_min_limit) : ?>
                                        <span class="badge bg-danger">Stock reduzido</span>
                                    <?php endif; ?>

                                    <!-- disponível ou não -->
                                    <?php if (!$product->availability) : ?>
                                        <span class="badge bg-warning text-dark">Produto indisponível</span>
                                    <?php endif; ?>
                                </div>


                                <div class="text-end align-items-bottom">
                                    <a href="<?= site_url('gerenciador/produtos/editar_produto/') . Encrypt($product->id) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-pen-to-square me-2"></i>Editar</a>
                                    <a href="<?= site_url('gerenciador/estoques/produto/') . Encrypt($product->id) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-solid fa-cubes-stacked me-2"></i>Estoque</a>
                                    <a href="<?= site_url('gerenciador/produtos/delete/') . Encrypt($product->id) ?>" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa-regular fa-trash-can me-2"></i>Deletar</a>
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