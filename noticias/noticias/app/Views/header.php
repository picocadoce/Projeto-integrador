<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Painel ADM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targets="#navbarText" aria-controls="navbarText" aria-expanded="false" arial-label="Menu Suspenso">
                    <span class="navbar-toggler icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <?php
                            echo anchor(base_url('noticias'), 'Noticias', ['class' => "nav-link active"]);
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                            echo anchor(base_url('usuarios'), 'Usuários', ['class' => "nav-link active"]);
                            ?>
                        </li>
                    </ul>

                    <span class="navbar-text">
                        <?php
                        //Finalizar a sessão
                        echo anchor(url_to('login.sair'), 'Sair', ['class' => 'btn btn-danger'])
                        ?>
                    </span>
                </div>
        </nav>
    </div>
</div>