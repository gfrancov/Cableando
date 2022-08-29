<?php 
    get_header();
?>
    <div class="mt-4 post">
        <div class="container" style="max-width: 100vw !important;">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block d-xl-block">
                    <div class="container sidebar">
                        <div class="container sidebar-block">
                            <!-- Side widget-->
                            <h3>Contenido</h3>
                            <div class="indice" id="indice">
                                
                            </div>
                        </div>
                        <div class="container sidebar-block mt-4">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="changeVisibility" id="changeVisibility">
                                <label class="form-check-label" for="changeVisibility" id="visibility-text">Cambiar a claro</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="container ml-4 mr-4 mt-4">
                        <article>
                            <h1 class="fw-bolder mb-4 post-title"><?php the_title(); ?></h1>
                            <figure class="mb-4"><?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid rounded post-image' ] ); ?></figure>
                            <header class="mb-4">
                                <div class="text-light mb-2">Publicado el <?php the_time('j'); ?> de <?php the_time('F'); ?> del <?php the_time('Y'); ?> <?php $author_id=$post->post_author ?> por <a class="text-light" style="font-weight: 700;" href="/author/<?php echo get_the_author_meta('user_login', $author_id); ?>"><?php echo get_the_author_meta('display_name', $author_id); ?></a>.</div>
                            </header>
                            <section class="mb-5" id="post-content">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Initialize dark mode
        var darkMode = 1;

        // Index creation function
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
        
        function changeVisibility() {
            const checkboxVisibility = document.getElementById("changeVisibility");
            //Disable or enable dark mode
            if(darkMode == 1) {
                
                document.getElementById('post-content').style.backgroundColor = "#fff";
                document.getElementById('post-content').style.color = "#000";
                document.getElementById('visibility-text').innerHTML = "Cambiar a oscuro"

                // Sidebar dark mode
                const sidebarBlocks = document.querySelectorAll('.sidebar-block');
                sidebarBlocks.forEach(function(element) {
                    element.style.backgroundColor = '#fff';
                    element.style.color = '#000';
                });
                
                // Index elements color
                const indexElements = document.querySelectorAll('#indice ul li a');
                indexElements.forEach(function(element) {
                    element.style.color = '#000';
                })

                // Switch off dark mode
                darkMode = 0;

            } else {
                document.getElementById('post-content').style.backgroundColor = "#2c2c2cb5";
                document.getElementById('post-content').style.color = "#fff";
                document.getElementById('visibility-text').innerHTML = "Cambiar a claro"
                darkMode = 1;

                // Sidebar dark mode
                const sidebarBlocks = document.querySelectorAll('.sidebar-block');
                sidebarBlocks.forEach(function(element) {
                    element.style.backgroundColor = '#181818';
                    element.style.color = '#fff';
                });
                
                // Index elements color
                const indexElements = document.querySelectorAll('#indice ul li a');
                indexElements.forEach(function(element) {
                    element.style.color = 'rgba(255, 255, 255, 0.642)';
                })
            }
            console.log(darkMode);
        }

        window.onload = function() {
            crearIndice();

            const buttonVisibility = document.getElementById('changeVisibility');
            buttonVisibility.addEventListener("click", changeVisibility);

        }
    </script>

<?php
    get_footer();
?>