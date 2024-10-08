<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="login-box">
    <div class="text-center mb-3">
        <h1 class="fw-bold text-uppercase">Login</h1>
    </div>
    <form action="" method="post">
        <div class="mb-3">
            <input class="form-control" type="text" id="text-username" name="text-username" placeholder="Email">
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" id="text-password" name="text-password" placeholder="Senha">
        </div>
        <div class="mb-3">
            <button class="btn-login" type="submit">ENTRAR</button>
        </div>
    </form>

    <div class="text-center">
        <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
        <p><a href="#" class="login-link">Recuperar senha</a></p>
    </div>

</div>

<?= $this->endSection() ?>