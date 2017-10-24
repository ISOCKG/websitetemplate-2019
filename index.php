<?php get_header(); ?>
        
        <div class="isoc_slider">
            <?php get_template_part('template-parts/content', 'slider'); ?>
        </div>
        
        <div id="isoc_content" class="isoc_content">
            <h2 class="post_header"><?php esc_html_e('The latest news', 'isoc'); ?></h2>
            <div class="container isoc_maxwidth isoc_posts">
                <?php 
                    if(have_posts()):
                        while(have_posts()):
                            the_post();
                            get_template_part('template-parts/content', get_post_format());
                        endwhile;
                    else:
                        get_template_part( 'template-parts/content', 'none' );
                    endif;
                ?>
            </div>
            <div class="isoc_pagination">
              <?php get_template_part( 'template-parts/content', 'pagination' ); ?>
            </div>
        </div>
        
        <div class="isoc_join">
            <span><?php echo get_option('IS_join_text'); ?></span>
            <a href="<?php echo get_option('IS_join_link'); ?>"><?php esc_html_e('Become a member', 'isoc'); ?></a>
        </div>
        
<?php get_footer(); ?>