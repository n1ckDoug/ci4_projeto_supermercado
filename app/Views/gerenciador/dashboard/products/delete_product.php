<?= $this->extend('layouts/layout_gerenciador') ?>
<?= $this->section('content') ?>
<?= $this->include('gerenciador/partials/page_title') ?>

<div class="d-flex content-box">

    <div class="p-3">
        <img src="<?= file_exists('assets/gerenciador/images/products/' . $product->image) ? base_url('assets/gerenciador/images/products/' . $product->image) : base_url('assets/gerenciador/images/products/no_image.png') ?>" class="img-fluid">
    </div>

    <div class="p-3">
        <h3 class="text-black mb-3">
            <strong>
                <?= $product->name ?>
            </strong>
        </h3>
        <p class="text-secondary mb-3">
            <strong>
                <?= $product->description ?>
            </strong>
        </p>
        <p class="text-danger mb-3">Tem certeza que dejesa excluir esse produto? <br> É um processo irreversível.</p>
        <div class="d-flex">
            <a href="<?= site_url('gerenciador/produtos') ?>" class="btn btn-outline-secondary px-5"><i class="fas fa-ban me-2"></i>Cancelar</a>
            <a href="<?= site_url('gerenciador/produtos/delete_confirm/' . Encrypt($product->id)) ?>" class="btn btn-danger px-5 ms-3"><i class="fas fa-trash me-2"></i>Deletar</a>
        </div>
    </div>

</div>

<?= $this->endSection() ?>