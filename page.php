<?php 
    get_header();
?>
    <div class="main-wrapper main mt-4">
        <div class="container">
                
        <h1><?php the_title(); ?></h1>

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
