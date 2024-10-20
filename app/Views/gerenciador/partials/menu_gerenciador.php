<a href="<?= site_url('/gerenciador') ?>" class="d-flex align-items-center justify-content-center text-dark text-decoration-none my-3">
    <i style="color: rgb(77 175 72);" class="fa-solid fa-cart-shopping fs-1 me-2"></i>
    <p class="text-uppercase fw-bold p-0 m-0"><span style="color: rgb(77 175 72);">Nome do</span> <br> Mercado</p>
</a>
<ul class="nav nav-pills flex-column mb-auto mt-5">
    <li class="nav-item">
        <a class="nav-link mb-2" href="<?= site_url('/gerenciador/produtos') ?>"><i class="fa-solid fa-burger me-3"></i>Produtos</a>
    </li>
    <li>
        <a class="nav-link mb-2" href="<?= site_url('/gerenciador/stocks') ?>"><i class="fa-solid fa-layer-group me-3"></i>Stocks</a>
    </li>
    <li>
        <a class="nav-link mb-2" href="#"><i class="fa-solid fa-chart-column me-3"></i>Dados Estáticos</a>
    </li>
</ul>

<a class="nav-link fw-bold text-uppercase mb-5 main-menu-logout" href="<?= base_url('/gerenciador/logout') ?>"> <i class="fa-solid fa-arrow-right-from-bracket me-3"></i> Sair</a>
