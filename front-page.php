<?php
    get_header();
?>
    <!-- Artículos destacados -->
    <div class="main-wrapper main mt-3">
        <div class="container full-size landing-first-block front-page text-center">
            <div class="row front-card-container">

            <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3, 'cat' => 26 )); ?>
                
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                
                    <?php // the loop
                    $counter = 0;
                    while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post();
                        $counter++;
                        
                        if($counter == 1) {
                            ?>

                <div class="col-12 col-lg-6">
                    <div class="card article-card" style="width: 100%;">
                    <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'card-img-top' ]); ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php the_title(); ?></h5>
                            <a href="<?php the_permalink(); ?>" class="stretched-link btn btn-primary">Leer artículo <i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">

                    <div class="row m-0">

                    <?php
                        } else {
                            ?>


                        <div class="col-12 col-lg-6 p-0 px-3 mt-sm-2">
                            <div class="card article-card mt-sm-4" style="width: 100%;">
                            <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'card-img-top' ]); ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <a href="<?php the_permalink(); ?>" class="stretched-link btn btn-primary">Leer artículo <i class="fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>

                        
                        <?php
                        }
                    ?>

                    <?php endwhile; ?>

                    </div>
               
                
                    <?php wp_reset_postdata(); ?>
                
                <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
    
    <!-- Selector de tareas -->
    <div class="main-wrapper main mt-5">
        <div class="container full-size landing-first-block front-page text-center">
            <div class="row front-card-container">
                <div class="col-sm-12 col-lg">
                    <div class="card front-card m-0 mb-4">
                        <div class="card-body" onclick="window.open('/articulos', '_parent');">
                            <h1 class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/news.png" alt="Periódico"/></h1>
                            <h5 class="card-title mb-0">Artículos</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg">
                    <div class="card front-card m-0 mb-4">
                        <div class="card-body" onclick="window.open('/formaciones', '_parent');">
                            <h1 class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/graduation.png" alt="Sobrero de graduación"/></h1>
                            <h5 class="card-title mb-0">Formación</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg" id="herramientas">
                    <div class="card front-card m-0 mb-4">
                        <div class="card-body" onclick="window.open('/herramientas', '_parent');">
                            <h1 class="card-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/llave.png" alt="Llave inglesa"/></h1>
                            <h5 class="card-title mb-0">Herramientas</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Donaciones -->
    <div class="main-wrapper main mt-5" id="donaciones">
        <div class="container full-size landing-first-block front-page text-center">
            <div class="row front-card-container">

                <div class="col-sm-12 col-lg-6">
                    <div class="card divisor-text p-5" style="text-align: left !important; background-color: transparent; border: none;">
                        <h1>¿Nos ayudas?</h1>
                        <p>Cableando es una comunidad por informáticos para informáticos: artículos, formación y herramientas ¡Ayudanos a seguir cableando! </p>
                        <a href="/donaciones" class="btn btn-light">Hacer una donación <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
                
                <div class="col-sm-12 col-lg-6">

                    <img class="donaciones-imagen mt-3" style="width: 45vw;" src="<?php echo get_template_directory_uri(); ?>/assets/img/cableando-status.png" alt="Función de PHP para hacer donaciones"/>

                </div>
            
            </div>
        </div>
    </div>

    <!-- Discord -->
    <div class="main-wrapper main mt-5 mb-5" id="discord">
        <div class="container full-size landing-first-block front-page text-center">
            <div class="row front-card-container">

                <div class="col-sm-12 col-lg-4">

                    <img class="discord-imagen mt-3 ml-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/discord.png" alt="Función de PHP para hacer donaciones"/>

                </div>

                <div class="col-sm-12 col-lg-8">
                    <div class="card divisor-text p-5" style="text-align: left !important; background-color: transparent; border: none;">
                        <h1>¡Habla con nostros!</h1>
                        <p>Entra a nuestro servidor de Discord y habla con toda la comunidad: pregunta, discute, comparte. </p>
                        <a href="https://discord.cableando.net/" class="btn btn-light">Entrar al servidor <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

<?php
    get_footer();
?>