<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://pre.cableando.net/wp-content/uploads/2022/08/cableando-square.png">
    <?php wp_head() ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-default">
        <a class="navbar-brand" href="https://cableando.net/"><img src="https://pre.cableando.net/wp-content/uploads/2022/08/cableando-square.png" class="cableando-logo" alt="Logo de Cableando" title="Cableando"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Articulos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/category/desarrollo">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="main-wrapper main full-size landing-page" id="first-block">
        <div class="container full-size landing-first-block">
            <div class="row link-cards-container">
                <div class="col-sm-12 col-lg card link-card m-4" id="articulos">
                    <div class="card-body">
                        <h1 class="card-icon"><img src="https://pre.cableando.net/wp-content/uploads/2022/08/graduation.png" alt="Sombrero de graduación"/></h1>
                        <h5 class="card-title mb-0">Artículos</h5>
                        <p class="card-text">Lee ya todos nuestros artículos sobre desarrollo, administración o tecnología en general.</p>
                        <a href="https://nebula.cat" class="btn btn-dark stretched-link">Ir a artículos <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg card link-card m-4 shadow-lg" id="recursos">
                    <div class="card-body">
                        <h1 class="card-icon"><img src="https://pre.cableando.net/wp-content/uploads/2022/08/books.png" alt="Sombrero de graduación"/></h1>
                        <h5 class="card-title mb-0">Recursos</h5>
                        <p class="card-text">Consulta todos los recursos que te presentamos para desarrollar todos tus proyectos tecnológicos.</p>
                        <a href="https://nebula.cat" class="btn btn-dark stretched-link">Ir a recursos <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                <div class="col-sm-12 col-lg card link-card m-4" id="discord">
                    <div class="card-body">
                        <h1 class="card-icon"><img src="https://pre.cableando.net/wp-content/uploads/2022/08/micro.png" alt="Sombrero de graduación"/></h1>
                        <h5 class="card-title mb-0">Discord</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="https://nebula.cat" class="btn btn-dark stretched-link">Abrir discord <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
