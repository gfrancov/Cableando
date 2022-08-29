<?php
    get_header();
?>
    <div class="main-wrapper main full-size landing-page mt-4 mt-lg-0" id="first-block">
        <div class="container full-size">
            <div class="row">

                <?php 

                    $tags = get_tags();
                    $args = array(
                    'smallest' => 10, 
                    'largest' => 22,
                    'unit' => 'px', 
                    'number' => 10, 
                    'format' => 'flat',
                    'separator' => " ",
                    'orderby' => 'count', 
                    'order' => 'DESC',
                    'echo' => false
                    );

                    $tag_string = wp_generate_tag_cloud( $tags, $args );

                    echo $tag_string;


                    ?>
            </div>
        </div>
    </div>
<?php
    get_footer();
?>
