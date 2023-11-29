<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/style/style.css') ?>">

    <title>Login</title>
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-info">
            <?php echo $message ?>
            <p class="mt-3"><?php echo anchor(base_url('usuarios'), 'Página de Usuários') ?></p>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>