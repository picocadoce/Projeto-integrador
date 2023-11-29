<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/style/style.css') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once('headerhome.php') ?>

    <div class="container mt-1">
        <div class="row">
            <div class="col 12">
                <h2 class="text-center mt-3">
                    <?php echo $noticias['TITULO'] ?>
                </h2>
                <div class="text-center mt-3">
                    <img src="<?php echo base_url() . 'assets/fotos/' . $noticias['FOTO'] ?>" class="mx-auto w-40 img-fluid">
                </div>
                <p class="text-center">
                    <span class="badge bg-info text-dark">
                        <?php echo $noticias['TAGS'] ?>
                    </span>
                    <span class="badge bg-warning text-dark">
                        <b>Data: </b>
                        <?php $dataHora = new DateTime($noticias['DATA_HORA']);
                        echo $dataHora->format('d/m/Y') . ' às ' . $dataHora->format('H:i:s') ?>
                    </span>
                </p>
                <p class="mt-3"><?php echo $noticias['DESCRICAO'] ?> </p>
            </div>
            <div class="text-center">
                <?php echo anchor(base_url('/'), 'VOLTAR', ['class' => 'btn btn-primary mt-3 mb-3']); ?>
            </div>
        </div>
    </div>

    <?php include_once('footer.php') ?>

</body>
<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</html>