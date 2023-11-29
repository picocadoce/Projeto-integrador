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
</head>

<body>

    <?php include_once('header.php') ?>

    <div class="container">
        <h1>Incluir/Editar</h1>

        <?php echo form_open_multipart("noticias/gravar"); ?>

        <div class="form-group">
            <label for="título">Título</label>
            <input type="text" value="<?php echo isset($noticias['TITULO']) ? $noticias['TITULO'] : old('titulo') ?>" name="titulo" id="titulo" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao" rows="10" class="form-control"><?php echo isset($noticias['DESCRICAO']) ? $noticias['DESCRICAO'] : old('descricao') ?></textarea>
        </div>

        <div class="form-group">
            <label for="data_hora">Data/Hora</label>
            <input type="datetime-local" value="<?php echo isset($noticias['DATA_HORA']) ? $noticias['DATA_HORA'] : old('data_hora') ?>" name="data_hora" id="data_hora" class="form-control">
        </div>

        <div class="form-group">
            <label for="tags">Tags</label>
            <input type="text" value="<?php echo isset($noticias['TAGS']) ? $noticias['TAGS'] : old('tags') ?>" name="tags" id="tags" class="form-control">
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" value="<?php echo isset($noticias['FOTO']) ? $noticias['FOTO'] : old('foto') ?>" name="foto" id="foto" class="form-control" />
        </div>
        <?php if (session()->has('erros')) : ?>
            <span class='text text-danger'><?php echo session()->getFlashdata('erros'); ?></span>
        <?php endif ?>
        <!-- #region -->
        <div class="form-check">
            <label for="hab">Habilitado?</label>
            <input type="checkbox" value="1" name="hab" id="hab" class="form-check-input" checked>
        </div>

        <input type="submit" value="Salvar" class="btn btn-primary mt-3">

        <?php echo anchor(base_url('noticias'), 'Voltar sem Salvar', ['class' => 'btn btn-danger mt-3']) ?>

        <input type="hidden" value="<?php echo isset($noticias['ID']) ? $noticias['ID'] : old('id') ?>" name="id" , id="id" value="">

        <?php echo form_close(); ?>
    </div>
    <!-- Java Script do Bootstrap -->
    <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>