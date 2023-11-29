<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/style/style.css') ?>">

    <title>Notícias</title>
    <script>
        function confirma() {
            if (!confirm('Deseja Excluir o registro?')) {
                return false;
            }

            return true;
        }
    </script>
</head>

<?php include_once('header.php') ?>

<body>
    <div class="container mt-5">
        <h1>Notícias</h1>

        <?php echo anchor(base_url('noticias/novo'), 'Nova Notícia', ['class' => 'btn btn-success mb-3']); ?>

        <table class="table">

            <tr>
                <th>ID</th>
                <th>Foto</th>
                <th>Título</th>
                <th>Data/Hora</th>
                <th>TAG</th>
                <th>Hab</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($noticias as $noticia) : ?>
                <tr>
                    <td><?php echo $noticia['ID'] ?></td>
                    <td>
                        <img src="<?php echo base_url() . 'assets/fotos/' . $noticia['FOTO'] ?>" class="img-list">
                    </td>
                    <td><?php echo $noticia['TITULO'] ?></td>
                    <td><?php echo $noticia['DATA_HORA'] ?></td>
                    <td><?php echo $noticia['TAG'] ?></td>
                    <td><?php echo $noticia['HAB'] == '1' ? 'Sim' : 'Não' ?></td>
                    <td><?php echo anchor('noticias/editar/' . $noticia['ID'], 'Editar') ?></td>
                    <td><?php echo anchor('noticias/deletar/' . $noticia['ID'], 'Excluir', ['onclick' => 'return confirma()']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php echo $pager->links(); ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>