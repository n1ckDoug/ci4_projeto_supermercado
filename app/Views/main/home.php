<?= $this->extend('layouts/layout_main'); ?>
<?= $this->section('content'); ?>

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
                <a href="<?= base_url('/produtos') ?>" class="btn btn-warning mb-5 text-center">Compre agora <i
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

<script type="text/javascript" src="<?= base_url() ?>assets/main/js/main.js"></script>

<?= $this->endSection(); ?>