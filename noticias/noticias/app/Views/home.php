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
    <?php include_once('headerhome.php'); ?>

    <div class="container mt-5">
        <div class="row">
            <?php foreach ($noticias as $noticia) : ?>
                <div class="col-4 mt-5">
                    <div class="card">
                        <img src="<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo substr($noticia['TITULO'], 0, 50) . '...' ?>
                                <p><?php echo '<span class="badge bg-info text-dark">' . $noticia['TAG'] . '</span>' ?></p>
                            </h5>
                            <p class="card-text">
                                <?php echo substr($noticia['DESCRICAO'], 0, 100) . '...' ?>
                            </p>
                            <?php echo anchor('noticias/mostrar/' . $noticia['ID'], 'Mais...', ['class' => 'btn btn-sm btn-primary']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php echo $pager->links(); ?>
    </div>
    <!--
    <div class="container mt-5">
        <table class="table">
            <?php foreach ($noticias as $noticia) : ?>
                <tr>
                    <td>
                        <img src="<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>" class="img-list">
                    </td>
                    <td>    
                        <?php echo substr($noticia['TITULO'], 0, 50) . '...' ?>
                    </td>
                    <td>
                        <?php echo '<span class="badge bg-info text-dark">' . $noticia['TAG'] . '</span>' ?>
                    </td>
                    <td>
                        <?php echo anchor('noticias/mostrar/' . $noticia['ID'], 'Mais...', ['class' => 'btn btn-sm btn-primary']) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <?php echo $pager->links(); ?>
    </div>
            -->
    <?php include_once('footer.php'); ?>

</body>
<script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</html>