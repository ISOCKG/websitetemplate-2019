        <footer id="isoc_footer" class="isoc_footer">
          <div class="container isoc_maxwidth">
            <div class="col-md-4 col-sm-6 paddingtop-bottom">
                <div class="logofooter"><?php echo get_custom_logo(); ?></div>
                <p><?php bloginfo('description'); ?></p>
                <?php
                    $c_addr = get_option('IS_company_address');
                    $c_ph = get_option('IS_company_phone');
                    $c_em = get_option('IS_company_email');
                ?>
                <?php if($c_addr): ?><p><i class="fa fa-map-pin"></i> <?php echo $c_addr; ?></p><?php endif; ?>
                <?php if($c_ph): ?><p><i class="fa fa-phone"></i> <?php echo $c_ph; ?></p><?php endif; ?>
                <?php if($c_em): ?><p><i class="fa fa-envelope"></i> <?php echo $c_em; ?></p><?php endif; ?>
                
            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
                <h6 class="heading7">
                    <?php esc_html_e('General links', 'isoc'); ?>
                </h6>
                <?php wp_nav_menu(array('theme_location'=>'footer_menu', 'menu_class'=>'footer-ul', 'container'=>'false')); ?>
            </div>
            <div class="col-md-3 col-sm-6 paddingtop-bottom">
                <h6 class="heading7"><?php esc_html_e('Latest posts', 'isoc'); ?></h6>
                <div class="post">
                    <?php
                        $args = array(
                            'numberposts' => 3,
                            'category'    => 0,
                            'category_name'    => '',
                            'orderby'     => 'date',
                            'order'       => 'DESC',
                            'include'     => array(),
                            'exclude'     => array(),
                            'meta_key'    => '',
                            'meta_value'  =>'',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        );
                        $posts = get_posts( $args );
                        foreach($posts as $post){ setup_postdata($post);
                        ?>
                        <p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <span class="blog-date"><?php the_date('d.m.Y'); ?></span>
                        </p>
                        <?php
                        }
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 paddingtop-bottom">
                <div class="social_btns">
                    <p>
                    <?php $fb=get_option('IS_fb_link'); if($fb){ ?>
                        <a href="<?php echo $fb; ?>">
                            <i class="social_btn fa fa-facebook"></i> Facebook
                        </a>
                    <?php } ?>
                    </p>
                    <p>
                    <?php $gh=get_option('IS_gh_link'); if($gh){ ?>
                        <a href="<?php echo $gh; ?>">
                            <i class="social_btn fa fa-github"></i> Github
                        </a>
                    <?php } ?>
                    </p>
                    <p>
                    <?php $tw=get_option('IS_tw_link'); if($tw){ ?>
                        <a href="<?php echo $tw; ?>">
                            <i class="social_btn fa fa-twitter"></i> Twitter
                        </a>
                    <?php } ?>
                    </p>
                    <p>
                    <?php $ig=get_option('IS_ig_link'); if($ig){ ?>
                        <a href="<?php echo $ig; ?>">
                            <i class="social_btn fa fa-instagram"></i> Instagram
                        </a>
                    <?php } ?>
                    </p>
                </div>
            </div>
          </div>
        </footer>
        
        <div class="isoc_copyright">
          <div class="container isoc_maxwidth">
           <div class="row">
            <div class="col-md-6">
              <p><?php echo get_option('IS_copyright_text'); ?></p>
            </div>
            <div class="col-md-6">
              <?php wp_nav_menu(array('theme_location'=>'copyright_menu', 'menu_class'=>'copyright-ul', 'container'=>'false')); ?>
            </div>
           </div>
          </div>
        </div>
      <?php wp_footer(); ?>
    </body>
</html>