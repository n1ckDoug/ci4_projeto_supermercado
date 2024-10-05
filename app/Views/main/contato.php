<?= $this->extend('layouts/layout_main'); ?>
<?= $this->section('content'); ?>

<style>
    .card-form-contato {
        padding: 20px;
        width: 500px;
        border: 1px solid rgb(77 175 72);
        border-radius: 10px;
        -webkit-box-shadow: 0px 9px 0px -1px rgb(77 175 72);
        -moz-box-shadow: 0px 9px 0px -1px rgb(77 175 72);
        box-shadow: 0px 9px 0px -1px rgb(77 175 72);
    }

    .form-contato,
    .form-select-contato {
        display: block;
        width: 100%;
        padding: .375rem .75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        border-radius: .25rem;
        border: 1px solid #ced4da;
        outline-color: rgb(77 175 72);;
    }
</style>

<section class="mb-5">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="card-form-contato">
            <div class="row">
                <h1 class="fw-bold text-uppercase text-center mb-4" style="color:rgb(77 175 72);">Entre em contato</h1>
            </div>
            <div class="row">
                <form action="">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo: <span class="fw-bold" style="color:rgb(77 175 72);">*</span></label>
                        <input type="text" class="form-contato" id="some" placeholder="Digite seu nome completo">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email: <span class="fw-bold" style="color:rgb(77 175 72);">*</span></label>
                        <input type="email" class="form-contato" id="email" placeholder="Digite seu email">
                    </div>
                    <div class="mb-3">
                        <label for="telefone_contato_usuario" class="form-label">Telefone: <span class="fw-bold" style="color:rgb(77 175 72);">*</span></label>
                        <input type="text" class="form-contato" id="telefone_contato_usuario">
                    </div>
                    <div class="mb-3">
                        <label for="cidade" class="form-label">Cidade: <span class="fw-bold" style="color:rgb(77 175 72);">*</span></label>
                        <select class="form-select-contato" id="cidade" aria-label="Floating label select example">
                            <option value="1" selected>São Paulo</option>
                            <option value="2">Rio de Janeiro</option>
                            <option value="3">Belo Horizonte</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mensagem" class="form-label">Mensagem: <span class="fw-bold" style="color:rgb(77 175 72);">*</span></label>
                        <textarea class="form-contato" id="mensagem" style="height: 200px;resize: none;"></textarea>
                    </div>
                    <button style="background-color: rgb(77 175 72); color:white;" type="submit" class="btn d-block w-100 fw-bold text-uppercase">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>