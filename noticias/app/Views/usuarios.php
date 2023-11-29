<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('bootstrap/style/style.css') ?>">

    <title>Usuários</title>
    <script>
        function confirma() {
            if (!confirm('Deseja Excluir o registro?')) {
                return false;
            }

            return true;
        }
    </script>
</head>

<body>

    <?php include_once('header.php') ?>

    <div class="container mt-5">
        <h1>Usuários</h1>

        <?php echo anchor(base_url('usuarios/novo'), 'Novo Usuário', ['class' => 'btn btn-success mb-3']); ?>

        <table class="table">

            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Hab</th>
                <th>Ações</th>
            </tr>
            <?php foreach ($usuarios as $usuario) : ?>
                <tr>
                    <td><?php echo $usuario['ID'] ?></td>
                    <td><?php echo $usuario['NOME'] ?></td>
                    <td><?php echo $usuario['EMAIL'] ?></td>
                    <td><?php echo $usuario['SENHA'] ?></td>
                    <td><?php echo $usuario['HAB'] == '1' ? 'Não' : 'Sim' ?></td>
                    <td><?php echo anchor('usuarios/editar/' . $usuario['ID'], 'Editar') ?></td>
                    <td><?php echo anchor('usuarios/deletar/' . $usuario['ID'], 'Excluir', ['onclick' => 'return confirma()']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

        <?php echo $pager->links(); ?>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>