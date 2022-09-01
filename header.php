<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/cableando-square.png">
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-default">
        <a class="navbar-brand" href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cableando-square.png" class="cableando-logo" alt="Logo de Cableando" title="Cableando"/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/articulos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Articulos
                    </a>
                    <ul class="dropdown-menu">
                        <a class="dropdown-item" href="/category/desarrollo">Desarrollo</a>
                        <a class="dropdown-item" href="/category/sistemas">Sistemas</a>
                        <a class="dropdown-item" href="/category/actualidad">Actualidad</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/formaciones">Formación</a>
                </li>
            </ul>
        </div>
    </nav>
    <script>
        
    </script>