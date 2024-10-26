<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>
<?= $this->include('gerenciador/partials/page_title'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col content-box">
            <h3><?= $product->name ?></h3>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>