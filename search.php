<?php get_header(); ?>
        
        <!--div class="isoc_slider">
            <?php //get_template_part('template-parts/content', 'slider'); ?>
        </div-->
        
        <div id="isoc_content" class="isoc_content">
            <div class="container isoc_maxwidth isoc_posts">
                <?php $cnt = 0;
                      if(have_posts()):
                        while(have_posts()):
                            the_post();
                            get_template_part('template-parts/content', 'search');
                            $cnt++;
                        endwhile;
                      else:
                        get_template_part( 'template-parts/content', 'none' );
                      endif;
                ?>
            </div>
            <div class="isoc_pagination">
              <div class="pagination">
              <?php
                $args = array(
                    'show_all'           => false,
                    'end_size'           => 1,
                    'mid_size'           => 2,
                    'prev_next'          => true,
                    'prev_text'          => '<',
                    'next_text'          => '>',
                    'type'               => 'list'
                );
                $return = paginate_links( $args );
                $values = array(
                    "<ul class='page-numbers'>"               => '<ul class="pagination">',
                    "<li><span class='page-numbers current'>" => '<li class="active"><span class="page-numbers current">'
                );
                echo strtr($return, $values);
                
              ?>
              </div>
            </div>
        </div>
        
<?php get_footer(); ?>