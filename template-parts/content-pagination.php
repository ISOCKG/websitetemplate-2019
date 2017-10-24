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