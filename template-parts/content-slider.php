<?php $sl_shortcode = get_option('IS_sl_shortcode'); if(!$sl_shortcode){ ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <div class="slides slide-1" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl1.jpg');"></div>
    </div>
    <div class="item slides">
        <div class="slides slide-2" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl2.jpg');"></div>
    </div>
    <div class="item slides">
        <div class="slides slide-3" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl3.jpg');"></div>
    </div>
    <div class="item slides">
        <div class="slides slide-4" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl4.jpg');"></div>
    </div>
    <div class="item slides">
        <div class="slides slide-5" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl5.jpg');"></div>
    </div>
    <div class="item slides">
        <div class="slides slide-6" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/images/sl6.jpg');"></div>
    </div>
  </div>
  <!-- Left and right controls -->
  <!--a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a-->
</div>
<?php } else { echo do_shortcode( $sl_shortcode ); } ?>