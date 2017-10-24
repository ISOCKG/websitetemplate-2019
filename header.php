<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> style="background-image: url('<?php echo bloginfo('template_url'); ?>/assets/images/Background-Calm-Neutral-Putty-RGB_Graphic_2016-08-01_EN_FINAL_v01.png')">
        <header id="isoc_header" class="isoc_header">
            <nav class="navbar navbar-inverse">
              <div class="container isoc_maxwidth">
                <div class="container-fluid">
                    <div class="navbar-header">
                      <?php echo get_custom_logo(); ?>
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                      </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <?php
                            $nav_array = array(
                                'theme_location'=>'header_menu',
                                'menu_class'=>'nav navbar-nav',
                                'container' => 'false'
                            );
                            wp_nav_menu($nav_array);
                        ?>
                        <form role="search" method="get" class="navbar-form navbar-right search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <div class="input-group">
                              <input type="text" class="form-control" name="s" placeholder="<?php esc_html_e('Search for...', 'isoc'); ?>">
                              <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i> <?php esc_html_e('Search', 'isoc'); ?></button>
                              </span>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </nav>
        </header>