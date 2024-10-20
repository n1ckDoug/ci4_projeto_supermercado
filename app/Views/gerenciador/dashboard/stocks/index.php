<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>
<?= $this->include('gerenciador/partials/page_title'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">

            <h3>Produtos</h3>

            <?php if (empty($products)): ?>
                <div class="text-center mt-5">
                    <h4 class="opacity-50 mb-3">Não existem produtos disponíveis</h4>
                    <span>Clique <a href="<?= site_url('/gerenciador/produtos/novo') ?>">aqui</a> para adicionar o primeiro produto do supermercado.</span>
                </div>
            <?php else: ?>
                <?php foreach ($products as $product) : ?>
                    <div class="col">
                        <div class="row content-box">

                            <div class="col-lg-9 col-12 align-items-center">

                                <div class="d-flex align-items-center">
                                    <!-- product image -->
                                    <div class="me-3">
                                        <?php if (!file_exists('assets/gerenciador/images/products/' . $product->image)): ?>
                                            <img src="<?= base_url('assets/gerenciador/images/products/no_image.png') ?>" class="img-fluid stock-image" alt="Sem imagem">
                                        <?php else: ?>
                                            <img src="<?= base_url('assets/gerenciador/images/products/' . $product->image) ?>" class="img-fluid stock-image" alt="<?= $product->image ?>">
                                        <?php endif; ?>
                                    </div>

                                    <!-- product name -->
                                    <div>
                                        <h4 class="mb-0"><strong><?= $product->name ?></strong></h4>
                                        <p class="mb-0"><?= $product->description ?></p>
                                        <?php if (!$product->availability): ?>
                                            <span class="badge bg-danger">Indiponível</span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 col-12 text-end align-self-center">
                                <!-- current stock -->
                                <div>
                                    <h5>Stock atual</h5>
                                    <h3 class="<?= $product->stock <= $product->stock_min_limit ? 'text-danger' : '' ?>"><strong><?= $product->stock ?></strong></h3>
                                </div>
                            </div>

                            <div class="col-12 text-end">
                                <a href="#" class="btn btn-sm btn-outline-success px-3 m-1"><i class="fa-regular fa-square-plus me-2"></i>Adicionar Stock</a>
                                <a href="#" class="btn btn-sm btn-outline-danger px-3 m-1"><i class="fa-regular fa-square-minus me-2"></i>Deletar Stock</a>
                                <a href="#" class="btn btn-sm btn-outline-secondary px-3 m-1"><i class="fa fa-solid fa-right-left me-2"></i>Entradas e Saídas</a>
                            </div>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>