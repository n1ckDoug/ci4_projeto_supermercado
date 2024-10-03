<footer class="pt-5 pb-5 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mb-3">
                <a href="<?= base_url('/'); ?>" class="d-flex text-light text-decoration-none fw-bold">
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
                <p class="fw-bold" style="color: rgb(77 175 72);">Empresa</p>
                <ul class="p-0">
                    <li><a href="<?= base_url('/') ?>" class="nav-link text-light mb-3">Home</a></li>
                    <li><a href="<?= base_url('/sobre') ?>" class="nav-link text-light mb-3">Sobre</a></li>
                    <li><a href="<?= base_url('/produtos') ?>" class="nav-link text-light mb-3">Produtos</a></li>
                    <li><a href="<?= base_url('/contato') ?>" class="nav-link text-light mb-3">Entre em contato</a></li>
                </ul>
            </div>
            <div class="col-lg-3 mb-3">
                <p class="fw-bold" style="color: rgb(77 175 72);">Contato</p>
                <p class="text-light"><i class="bi bi-telephone"></i> Telefone <br> (00) 00000-0000</p>
                <p class="text-light"><i class="bi bi-envelope"></i> Email <br> emaildecontato@gmail.com</p>
                <p class="text-light"><i class="bi bi-geo-alt"></i> Endereço <br> Rua qualquer, 123 - São Paulo - SP
                </p>
            </div>
            <div class="col-lg-3 mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467692.3953574584!2d-46.92494081777092!3d-23.681434666192445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce448183a461d1%3A0x9ba94b08ff335bae!2zU8OjbyBQYXVsbywgU1A!5e0!3m2!1spt-BR!2sbr!4v1727976377180!5m2!1spt-BR!2sbr" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <p class="fw-bold text-light p-3">&copy; 2024 - Todos os direitos reservados</p>
            </div>
        </div>
    </div>
</footer>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/main/js/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        $('#telefone_contato_usuario').mask('(00) 0000-0000', {
            placeholder: "(00) 0000-0000"
        });
    });
</script>