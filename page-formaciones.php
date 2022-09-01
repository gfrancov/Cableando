<?php
    get_header();
?>
    <div class="main-wrapper main full-size landing-page mt-4 mt-lg-0" id="first-block">
        <div class="container full-size">
            <div class="row">

                <?php 
                    // the query
                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>5, 'cat' => 37 )); ?>
                    
                    <?php if ( $wpb_all_query->have_posts() ) : ?>
                    
                        <?php // the loop
                        while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
                        ?>

                            <div class="wp-container-2 wp-block-group resource-card catalunya has-cyan-bluish-gray-background-color has-background mb-4 
                            <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach($posttags as $tag) {
                                        echo $tag->name . ' '; 
                                    }
                                }
                            ?>">
                                <div class="wp-block-group__inner-container">
                                    <figure class="wp-block-image size-large">
                                        <?php the_post_thumbnail( 'post-thumbnail', ['class' => 'wp-image-1608' ]); ?>
                                    </figure>
                                    <div class="wp-container-1 wp-block-group resource-card-content has-cyan-bluish-gray-background-color has-background">
                                        <div class="wp-block-group__inner-container">
                                            <h2>
                                                <?php the_title(); ?>
                                            </h2>
                                            <?php the_excerpt() ?>
                                        </div>
                                    </div>
                                    <div class="wp-block-button is-style-fill">
                                        <a class="wp-block-button__link btn btn-dark" href="<?php the_permalink(); ?>" target="_blank" rel="noopener">
                                            Consultar <i class="fa-solid fa-arrow-right-long"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                
                    
                        <?php wp_reset_postdata(); ?>
                    
                    <?php else : ?>
                        <p><?php _e( 'No hay formaciones por ahora :(' ); ?></p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
