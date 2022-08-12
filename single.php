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
    <!-- Page content-->
    <div class="container blog-post" style="max-width: 100vw;">
        <div class="row">
            <!-- Side widgets-->
            <div class="col-lg-3 sidebar-post pt-4">
                <!-- Side widget-->
                <h3>Contenido</h3>
                <div class="indice" id="indice">
                    
                </div>
            </div>
            <div class="col-lg-8 mt-4">
                <article>
                    <figure class="mb-4"><?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid rounded'] ); ?></figure>
                    <header class="mb-4">
                        <div class="text-muted fst-italic mb-2">Publicado el <?php the_time('j'); ?> de <?php the_time('F'); ?> del <?php the_time('Y'); ?> por <?php the_author(); ?></div>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    </header>
                    <section class="mb-5" id="post-content">
                        <h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
                        <?php

                            if( have_posts() ) {
                                while( have_posts() ) {
                                    the_post();
                                    the_content();
                                }
                            }

                        ?>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                            <!-- Comment with nested comments-->
                            <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                    <!-- Child comment 1-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                        </div>
                                    </div>
                                    <!-- Child comment 2-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            When you put money directly to a problem, it makes a good headline.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single comment-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        function crearIndice() {
            const allTitles = document.querySelectorAll('#post-content h2, #post-content h3, #post-content h4');
            var indice = "<ul>";
            allTitles.forEach(element => {
                var listElement = "<li><a href='#" + element.getAttribute("id") + "'>" + element.innerHTML + "</a></li>"
                indice += listElement;
            });
            indice += "</ul>";
            document.getElementById("indice").innerHTML = indice;
        }
        window.onload = function() {
            crearIndice();
        }
    </script>
                                
<?php
    get_footer();
?>
