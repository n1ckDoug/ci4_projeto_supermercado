<?= $this->extend('layouts/layout_gerenciador'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm col-12">
            <h2 class="fs-1">Olá, <?= session()->user['name']; ?>!
                <br>
                <small class="text-secondary">Bem-vindo ao ambiente administrativo do site.</small>
            </h2>
            <img style="max-width:400px;margin:20px auto;" class="d-block w-100" src="<?= base_url('assets/gerenciador/images/img-painel.gif') ?>" alt="">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>