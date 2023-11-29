<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('bootstrap/style/style.css') ?>">

</head>

<body class="b-login text-center">

  <main class="form-signin w-100 m-auto">
    <form action="<?php echo url_to('login.processar') ?>" method="post">
      <img class="mb-4" src="assets/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Área de Login</h1>

      <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <label for="email">E-mail</label>


        <span class="text text-danger"><?php echo session()->getFlashdata('erros')['email'] ?? '' ?></span>

      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        <label for="senha">Senha</label>

        <span class="text text-danger"><?php echo session()->getFlashdata('erros')['senha'] ?? '' ?></span>

      </div>

      <?php if (session()->has('error')) : ?>
        <span class="text text-danger"><?php echo session()->getFlashdata('error'); ?></span>
      <?php endif ?>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
  </main>

  <!-- Java Script do Bootstrap -->
  <script src="<?= base_url('bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>