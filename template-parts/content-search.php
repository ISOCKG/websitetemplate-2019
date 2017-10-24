<?php global $cnt; if($cnt==0){ ?><h2 class="post_header"><?php esc_html_e('Founded items', 'isoc'); ?></h2><?php } ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4'); ?> >
    <div class="single-blog-item">
        <div class="blog-thumnail">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('isoc_thumb'); ?></a>
        </div>
        <div class="blog-content">
            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="more-btn"><?php esc_html_e('View more', 'isoc'); ?></a>
        </div>
        <span class="blog-date"><?php the_date('d.m.Y'); ?></span>
    </div>
</article>