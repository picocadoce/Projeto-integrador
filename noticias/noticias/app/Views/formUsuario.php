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

    <?php include_once('header.php') ?>

    <div class="container">
        <h1>Incluir/Editar</h1>
        <?php echo form_open('usuarios/gravar') ?>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" value="<?php echo isset($usuarios['NOME']) ? $usuarios['NOME'] : '' ?>" id="nome" name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" <?php echo isset($usuarios['EMAIL']) ? $usuarios['EMAIL'] : '' ?> id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="text" <?php echo isset($usuarios['SENHA']) ? $usuarios['SENHA'] : '' ?> id="senha" name="senha" class="form-control">
        </div>
        <div class="form-check">
            <label for="hab">Habilitado?</label>
            <input type="checkbox" id="hab" name="hab" value="1" checked class="form-check-input">
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary mt-3">
        <?php echo anchor(base_url('usuarios'), 'Voltar sem Salvar', ['class' => 'btn btn-danger mt-3']) ?>
        <input type="hidden" id="id" name="id" value="<?php echo isset($usuarios['ID']) ? $usuarios['ID'] : '' ?>">

        <?php echo form_close() ?>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>