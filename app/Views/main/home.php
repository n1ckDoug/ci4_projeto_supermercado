<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="<?= base_url() ?>assets/main/css/style.css" rel="stylesheet" />
    <title>SuperMercado</title>
</head>

<body>

    <div class="container">
        <header id="header"
            class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="<?= base_url('/') ?>" class="d-flex link-body-emphasis text-decoration-none fw-bold">
                    <i class="fs-1 text-success me-2 bi bi-cart4"></i>
                    <p class="fs-5 text-uppercase"><span class="text-success">Nome do</span> <br> Mercado</p>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a class="nav-link px-2 fw-bold" href="<?= base_url('/') ?>">Home</a>
                </li>
                <li>
                    <a class="nav-link px-2 fw-bold" href="<?= base_url('/sobre') ?>">Sobre</a>
                </li>
                <li>
                    <a class="nav-link px-2 fw-bold" href="<?= base_url('/produtos') ?>">Produtos</a>
                </li>
                <li>
                    <a class="nav-link px-2 fw-bold" href="<?= base_url('/shop') ?>">Shop</a>
                </li>
                <li>
                    <a class="nav-link px-2 fw-bold" href="<?= base_url('/contato') ?>">Contato</a>
                </li>
            </ul>

            <div class="col-md-3 text-end">
                <ul style="list-style: none;" class="d-flex align-items-center">
                    <li><a href="#" class="nav-link"><i class="bi bi-search"></i></a></li>
                    <li>
                        <a href="#" class="nav-link ms-5 me-5">
                            <i class="bi bi-cart4"></i>
                        </a>
                    </li>
                    <li><a href="<?= base_url('/cadastro') ?>" class="btn btn-success">Cadastre-se</a></li>
                </ul>
            </div>
        </header>
    </div>

    <section id="home" class="mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p class="fs-3">Entregas super rápidas</p>
                    <h1 class="fs-1 fw-bold">
                        Uma vida mais <strong style="color: rgb(77 175 72);">saudável</strong> com alimentos frescos.
                    </h1>
                    <p class="fs-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, iste. Dolorum
                        amet
                        fugit, maiores iure mollitia dignissimos ipsum ad perspiciatis.</p>
                    <a href="#" class="btn btn-warning mb-5 text-center">Compre agora <i
                            class="bi bi-arrow-right"></i></a>
                </div>
                <div class="col-lg-5">
                    <img class="d-block w-100" src="<?= base_url() ?>assets/main/images/supermercado.png" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="home-card-icon p-3 me-2 ms-2">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div>
                                    <p><strong class="fw-bold">Frete grátis</strong> <br> Com qualquer compra acima de
                                        R$100,00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="home-card-icon p-3 me-2 ms-2">
                                    <i class="bi bi-credit-card-2-back-fill"></i>
                                </div>
                                <div>
                                    <p><strong class="fw-bold">Pagamento seguro</strong> <br> Ao utilizar nossos
                                        serviços</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="home-card-icon p-3 me-2 ms-2">
                                    <i class="bi bi-hand-thumbs-up"></i>
                                </div>
                                <div>
                                    <p><strong class="fw-bold">Qualidade garantida</strong> <br> Nossos produtos são da
                                        melhor
                                        qualidade</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre" class="mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="row text-center">
                <h2>Escolha do cliente</h2>
                <h1 class="fw-bold">Confira nossos produtos</h1>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="img01 mb-3"></div>
                </div>
                <div class="col-lg-2">
                    <div class="img02 mb-3"></div>
                </div>
                <div class="col-lg-4">
                    <div class="img03 mb-3"></div>
                </div>
                <div class="col-lg-2">
                    <div class="img02 mb-3"></div>
                </div>
                <div class="col-lg-4">
                    <div class="img03 mb-3"></div>
                </div>
                <div class="col-lg-6">
                    <div class="img01 mb-3"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="oferta" class="mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="d-lg-flex align-items-center">
                    <div class="col-lg-6">
                        <img class="d-block w-100" src="<?= base_url() ?>assets/main/images/frutas.png" alt="">
                    </div>
                    <div style="color: white;" class="col-lg-6">
                        <h2>Ofertas Semanais</h2>
                        <h1 class="fw-bold">Confira a oferta do dia</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ut, dolor maxime at ad
                            doloremque
                            eligendi delectus nobis nulla facilis.</p>
                        <div class="time-promotion">
                            <div id="contador">
                                <div class="row">
                                    <div class="col mb-3">
                                        <div id="contador_dia"></div>
                                    </div>
                                    <div class="col mb-3">
                                        <div id="contador_horas"></div>
                                    </div>
                                    <div class="col mb-3">
                                        <div id="contador_minutos"></div>
                                    </div>
                                    <div class="col mb-3">
                                        <div id="contador_segundos"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="comentarios" class="mt-5 mb-5 pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div id="carouselExample" class="carousel slide d-none d-lg-block">
                    <div class="carousel-inner">
                        <div class="carousel-item active">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor
                                                sit amet consectetur,
                                                adipisicing elit. Assumenda eius iure labore rerum eveniet eaque a velit
                                                reprehenderit, possimus
                                                cupiditate dolorum nobis cum hic perferendis pariatur repellat itaque
                                                delectus iste, quis autem.
                                                Ea maxime veniam delectus aut? Voluptatum, cupiditate? Eius at dolore
                                                dolorum nostrum sequi
                                                temporibus ipsam in rerum, aperiam, atque possimus consequuntur
                                                doloribus hic harum aliquam?
                                                Earum dolor pariatur quisquam, autem dolorem asperiores dolores amet
                                                doloremque ducimus quod.
                                                Amet veritatis quasi fugiat nesciunt cupiditate omnis ea culpa, optio et
                                                totam consequatur
                                                veniam itaque consectetur? Quisquam dolorem esse libero? Cumque quisquam
                                                sit ullam temporibus
                                                incidunt nobis magni illo doloremque quis?<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item">

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <p class="fw-bold">John Doe</p>
                                                <p>CEO & Fundador</p>
                                                <p class="fw-bold text-warning">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                            </div>
                                            <p class="mt-3"><span class="fw-bold text-warning">"</span> Lorem ipsum
                                                dolor sit amet
                                                consectetur
                                                adipisicing elit. Quo autem ipsam quas. Ipsam quaerat expedita, enim ea
                                                itaque saepe
                                                laboriosam
                                                voluptates soluta optio eos voluptate<span
                                                    class="fw-bold text-warning">"</span> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>

                <div id="carouselExample2" class="carousel slide">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="card-comentarios w-100 me-5 mb-5 p-5">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="fw-bold">John Doe</p>
                                        <p>CEO & Fundador</p>
                                        <p class="fw-bold text-warning">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <img src="<?= base_url() ?>assets/main/images/user.png" class="d-block w-100 border" alt="">
                                    </div>
                                    <p class="mt-3"><span class="fw-bold text-warning">"</span>Lorem ipsum dolor sit
                                        amet, consectetur
                                        adipisicing elit. Tenetur magni vel saepe recusandae ipsam, exercitationem
                                        labore quas laboriosam
                                        quos! Architecto soluta nihil delectus inventore distinctio repellendus
                                        cupiditate! Iure non
                                        repellat quae, voluptas nobis eos exercitationem recusandae corporis odit atque.
                                        Dolores asperiores
                                        officia ratione nulla nam voluptates vel laboriosam delectus dolor maxime eaque
                                        cumque quo, nesciunt
                                        doloribus natus suscipit aspernatur amet, quisquam quam. Voluptates eveniet
                                        necessitatibus earum
                                        accusamus corporis reprehenderit illo quam sit, vel, nisi quas ut quia impedit
                                        temporibus rerum,
                                        molestiae pariatur soluta est laudantium nam. Quidem quis velit laborum, eius
                                        porro accusantium
                                        eveniet labore quia nesciunt eos perferendis dolorem.<span
                                            class="fw-bold text-warning">"</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                        data-bs-slide="prev">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                        data-bs-slide="next">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <footer class="mt-5 pt-5 pb-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-3">
                    <a href="#" class="d-flex text-light text-decoration-none fw-bold">
                        <i class="fs-1 text-success me-2 bi bi-cart4"></i>
                        <p class="fs-5 text-uppercase text-light"><span class="text-success">Nome do</span> <br> Mercado
                        </p>
                    </a>
                    <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem adipisci
                        assumenda
                        exercitationem</p>
                    <div class="row text-light">
                        <div class="col">
                            <a href="#"><i class="bi bi-facebook fs-2 text-warning"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="bi bi-twitter-x fs-2 text-warning"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="bi bi-instagram fs-2 text-warning"></i></a>
                        </div>
                        <div class="col">
                            <a href="#"><i class="bi bi-linkedin fs-2 text-warning"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <p class="fw-bold">Empresa</p>
                    <ul class="p-0">
                        <li><a href="#" class="nav-link text-light mb-3">Home</a></li>
                        <li><a href="#" class="nav-link text-light mb-3">Sobre</a></li>
                        <li><a href="#" class="nav-link text-light mb-3">Shop</a></li>
                        <li><a href="#" class="nav-link text-light mb-3">Blog</a></li>
                        <li><a href="#" class="nav-link text-light mb-3">Entre em contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 mb-3">
                    <p class="fw-bold">Contato</p>
                    <p class="text-light"><i class="bi bi-telephone"></i> Telefone <br> (00) 00000-0000</p>
                    <p class="text-light"><i class="bi bi-envelope"></i> Email <br> emaildecontato@gmail.com</p>
                    <p class="text-light"><i class="bi bi-geo-alt"></i> Endereço <br> Rua qualquer, 123 - São Paulo - SP
                    </p>
                </div>
                <div class="col-lg-3 mb-3">
                    <p class="fw-bold">Inscreva-se para receber novidades</p>
                    <p class="text-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, ad minus!</p>
                    <form>
                        <input class="form-control text-center mb-3" type="text" placeholder="Digiete seu email">
                        <button class="btn btn-warning text-uppercase fw-bold d-block w-100">Cadastre-se</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="text-center">
                    <p class="fw-bold text-light p-3">&copy; 2024 - Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/main/js/main.js"></script>
</body>

</html>