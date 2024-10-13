<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= base_url('assets/gerenciador/images/logo.png') ?>" type="image/png"><!-- icon do website -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url('assets/gerenciador/css/app.css') ?>">
    <title>SuperMercado <?= !empty($title) ? ' - ' . $title : '' ?></title>
</head>

<body>

    <!-- menu button responsive -->
    <div class="container-fluid bg-light" style="position: sticky;top:0;left:0;z-index: 10;">
        <div class="row">
            <i class="btn-main-menu fa-solid fa-bars fs-2" onclick="changeIcon(this)"></i>
        </div>
    </div>

    <!-- gerenciador -->
    <section class="d-flex">

        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-light main-menu">
            <?= $this->include('gerenciador/partials/menu_gerenciador.php'); ?>
        </div>

        <!-- content -->
        <div class="content p-4 flex-fill">
            <!-- top bar -->
            <?= $this->include('gerenciador/partials/top_bar.php'); ?>
            
            <?= $this->renderSection('content') ?>
        </div>
    </section>

    <!-- footer -->
    <?= $this->include('gerenciador/partials/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/gerenciador/js/main.js') ?>"></script>
</body>

</html>