<?php
    get_header();
?>
    <div class="main-wrapper main full-size">
        <div class="container">
            <div class="card-columns" style="text-align:center;">
        <?php 
                // the query
                $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1, 'category__not_in' => array(get_cat_ID('formacion')) )); ?>
                
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
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
