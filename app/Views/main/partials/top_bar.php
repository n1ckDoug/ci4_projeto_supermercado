<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container">
        <a href="<?= base_url('/') ?>" class="navbar-brand me-auto d-flex link-body-emphasis text-decoration-none fw-bold">
            <i style="color: rgb(77 175 72);" class="fs-1 me-2 bi bi-cart4"></i>
            <p class="fs-5 text-uppercase"><span style="color: rgb(77 175 72);">Nome do</span> <br> Mercado</p>
        </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <a href="<?= base_url('/') ?>" class="navbar-brand me-auto d-flex link-body-emphasis text-decoration-none fw-bold">
                        <i style="color: rgb(77 175 72);" class="fs-1 me-2 bi bi-cart4"></i>
                        <p class="fs-5 text-uppercase"><span style="color: rgb(77 175 72);">Nome do</span> <br> Mercado</p>
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/sobre') ?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/produtos') ?>">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/contato') ?>">Contato</a>
                    </li>
                </ul>
            </div>
        </div>

        <a class="nav-link"><i class="bi bi-search"></i></a></a>
        <a href="#" class="nav-link ms-3 me-3">
            <i class="bi bi-cart4"></i>
        </a>
        <a href="<?= base_url('/cadastro') ?>" class="btn btn-navbar me-3">Cadastre-se</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </div>
</nav>