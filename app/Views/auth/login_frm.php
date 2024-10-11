<?= $this->extend('layouts/layout_auth') ?>
<?= $this->section('content') ?>

<div class="login-box">
    <div class="text-center mb-3">
        <h1 class="fw-bold text-uppercase">Login</h1>
    </div>
    <form action="<?= base_url() ?>gerenciador/login_submit" method="POST">
        <div class="mb-3">
            <input class="form-control" type="email" id="text-username" name="text_email" placeholder="Email" value="<?= old('text_email') ?>">
            <?= display_error('text_email', $validation_errors) ?>
        </div>
        <div class="mb-3">
            <input class="form-control" type="password" id="text-password" name="text_password" placeholder="Senha" value="<?= old('text_password') ?>">
            <?= display_error('text_password', $validation_errors) ?>
        </div>
        <div class="mb-3">
            <button class="btn-login" type="submit">ENTRAR</button>
        </div>
    </form>

    <div class="text-center">
        <p>Não tem conta? <a href="#" class="login-link">Cadastre-se</a></p>
        <p><a href="#" class="login-link">Recuperar senha</a></p>
    </div>

    <?php if(!empty($login_error)): ?>
        <div class="alert alert-danger text-center p-1">
            <?= $login_error ?>
        </div>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>