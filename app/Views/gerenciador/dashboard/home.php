<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm col-12">
            <div class="content-box">
                <h2 class="text-center fs-1">Olá, <?= session()->user['name']; ?>!
                    <br>
                    <small class="text-secondary">Bem-vindo ao ambiente administrativo do site.</small>
                </h2>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>