<?php
    get_header();
?>
    <div class="main-wrapper main full-size">
        <div class="container">
            <div class="card-columns mt-5" style="text-align:center;">
            <h1 class="text-light"><?php single_cat_title(); ?></h1>
        <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'cat' => get_queried_object_id() )); ?>
                
                <?php if ( $wpb_all_query->have_posts() ) : ?>
                
                    <?php // the loop
                     while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                    ?>


                        <div class="card article-card m-3">
                            <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'card-img-top' ]); ?>
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <a href="<?php the_permalink(); ?>" class="stretched-link btn btn-primary">Leer artículo <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>

                    <?php endwhile; ?>
               
                
                    <?php wp_reset_postdata(); ?>
                
                <?php else : ?>
                    <p class="text-light"><?php _e( 'No hemos encontrado artículos sobre ello :(.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
