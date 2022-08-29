<?php 
    get_header();
?>
    <div class="main-wrapper main mt-4">
        <div class="container text-light">
                
        <h1 class="mb-0"><?php the_title(); ?></h1>

                <?php

                    if( have_posts() ) {

                        while( have_posts() ) {

                            the_post();
                            the_content();

                        }

                    }


                ?>
             
        </div>
    </div>

<?php
    get_footer();
?>
