<?= $this->extend('layout/layout_main'); ?>
<?= $this->section('content'); ?>

<style>
    .borda-sobre {
        border-right: 1px solid #ccc;
        border-left: 1px solid #ccc;
    }

    @media screen and (max-width: 768px) {
        .borda-sobre {
            border: none;
        }

        .card {
            margin: 0 auto;
        }
    }
</style>

<section class="mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-3">
                <h1 class="fs-1 fw-bold"><span class="text-dark">Trabalhamos para trazer uma excelente qualidade para nossos</span> <span style="color: rgb(77 175 72);">clientes e funcionários</span></h1>
            </div>
            <div class="col-lg-6 mb-3">
                <p class="fs-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa eos natus repellat hic, autem nobis quod sequi! Provident, pariatur animi! Sit deserunt dicta aspernatur iste dolore ad, ipsum excepturi cupiditate maxime quidem fuga rem aliquam distinctio velit! Velit nesciunt, voluptatem quibusdam explicabo incidunt numquam officiis.</p>
                <div class="row text-center">
                    <div class="col mt-3">
                        <p class="fw-bold fs-4">+100</p>
                        <p class="fs-5">Unidades</p>
                    </div>
                    <div class="col mt-3">
                        <p class="fw-bold fs-4">+60Mil</p>
                        <p class="fs-5">Clientes</p>
                    </div>
                    <div class="col mt-3">
                        <p class="fw-bold fs-4">99%</p>
                        <p class="fs-5">Satisfeito</p>
                    </div>
                    <div class="col mt-3">
                        <p class="fw-bold fs-4">+70Mil</p>
                        <p class="fs-5">Avaliações</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <hr class="mb-4">
        <div class="row">
            <h1 class="text-center mb-5">Entregas super rápidas e sem estresse direto para sua casa</h1>
        </div>
        <div class="row">
            <div class="col-md-4 mb-5">
                <h3 class="mb-3">01.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
            <div class="col-md-4 mb-5 borda-sobre">
                <h3 class="mb-3">02.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
            <div class="col-md-4 mb-5">
                <h3 class="mb-3">03.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
            <div class="col-md-4 mb-5">
                <h3 class="mb-3">04.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
            <div class="col-md-4 mb-5 borda-sobre">
                <h3 class="mb-3">05.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
            <div class="col-md-4 mb-5">
                <h3 class="mb-3">06.</h3>
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor praesentium blanditiis aut voluptate rerum quia omnis, facere ipsa sed alias ullam cupiditate natus quae, eius animi sapiente eum id recusandae.</p>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <hr class="mb-4">
        <div class="row">
            <h1 class="text-center mb-5">Por que escolher Nome do SuperMercado?</h1>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <img class="d-block w-100 rounded mb-4" src="<?= base_url() ?>assets/main/images/caixa_img.png" alt="">
            </div>
            <div class="col-lg-7">
                <h3 style="font-size: 20px;"><i class="bi bi-geo-alt"></i> <br> Localização estratégica</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut facere unde sequi aliquid qui sint officiis quo cumque placeat eos adipisci, repudiandae molestias ullam! Consequatur ipsam maxime sapiente id laudantium.</p>
                <h3 style="font-size: 20px;"><i class="bi bi-key-fill"></i> <br> Segurança garantida</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut facere unde sequi aliquid qui sint officiis quo cumque placeat eos adipisci, repudiandae molestias ullam! Consequatur ipsam maxime sapiente id laudantium.</p>
            </div>
        </div>
    </div>
</section>

<section class="mt-5 mb-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-4">Conheça nossa equipe</h2>
        </div>
        <div class="row">

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4" style="width: 18rem;">
                    <img src="<?= base_url() ?>assets/main/images/user.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jhon Doe</h5>
                        <p class="card-text">CEO & Fundador</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section style="background-color: rgb(77 175 72);" class="mt-5 pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 text-light">
                <p class="fs-1 fw-bold">Tem alguma dúvida? Nossa equipe terá prazer em ajudá-lo.</p>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?= base_url('/contato') ?>" class="btn btn-light p-3 mb-3 d-block text-center">Entre em contato <i class="bi bi-caret-right-fill"></i></a>
                    </div>
                    <div class="col-lg-6">
                        <p class="fw-bold fs-3 mb-3 mt-2">Ou ligue: <span style="border-bottom:3px solid white"> (99) 99999-9999</span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <img class="d-block w-100 rounded mb-4" src="<?= base_url() ?>assets/main/images/atendimento_img.png" alt="">
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" src="<?= base_url() ?>assets/main/js/main.js"></script>

<?= $this->endSection(); ?>