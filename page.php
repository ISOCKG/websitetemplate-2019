<?php get_header(); ?>
        
        <!--div class="isoc_slider">
            <?php //get_template_part('template-parts/content', 'slider'); ?>
        </div-->
        
        <div id="isoc_content" class="isoc_content">
            <div class="container isoc_maxwidth isoc_page">
                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile;
                ?>
            </div>
        </div>
        
<?php get_footer(); ?>