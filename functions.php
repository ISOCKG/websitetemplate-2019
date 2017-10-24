<?php
$themename = "Internet Society";
$shortname = "IS";

/*Load styles and scripts*/
function load_styles_and_scripts() {
    wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome.min', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jQuery', get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js');
    wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/assets/js/bootstrap.min.js');
    wp_enqueue_script('script', get_template_directory_uri().'/script.js');
}
add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/*Post thumbnail*/
add_theme_support('post-thumbnails');
add_image_size( 'isoc_thumb', 320, 280, array( 'center', 'center' ) );

/*Site logo*/
add_theme_support( 'custom-logo' );

/*Header & Footer Menu & Localization*/
function isoc_theme_func(){
    load_theme_textdomain( 'isoc', get_template_directory() . '/languages' );
	register_nav_menus( array(
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu',
        'copyright_menu' => 'Copyright menu'
	) );
}
add_action('after_setup_theme', 'isoc_theme_func');

/*Admin-panel options*/
$options = array(
    'ci' => __('Company information', 'isoc'),
    array( 'name' => __('Company address', 'isoc'), 'id' => $shortname . '_company_address', 'type' => 'text' ),
    array( 'name' => __('Company email', 'isoc'), 'id' => $shortname . '_company_email', 'type' => 'email' ),
    array( 'name' => __('Copyright text', 'isoc'), 'id' => $shortname . '_copyright_text', 'type' => 'text' ),
    array( 'name' => __('Company phone', 'isoc'), 'id' => $shortname . '_company_phone', 'type' => 'text' ),
    array( 'name' => __('Join text', 'isoc'), 'id' => $shortname . '_join_text', 'type' => 'text' ),
    array( 'name' => __('Join link', 'isoc'), 'id' => $shortname . '_join_link', 'type' => 'text' ),
    'sl' => __('Social links', 'isoc'),
    array( 'name' => __('Facebook link', 'isoc'), 'id' => $shortname . '_fb_link', 'type' => 'text' ),
    array( 'name' => __('Github link', 'isoc'), 'id' => $shortname . '_gh_link', 'type' => 'text' ),
    array( 'name' => __('Twitter link', 'isoc'), 'id' => $shortname . '_tw_link', 'type' => 'text' ),
    array( 'name' => __('Instagram link', 'isoc'), 'id' => $shortname . '_ig_link', 'type' => 'text' ),
    'si' => __('Slider shortcode'),
    array( 'name' => __('Enter slider shortcode', 'isoc'), 'id' => $shortname . '_sl_shortcode', 'type' => 'text' )
);
function isoc_add_admin(){

    global $themename, $shortname, $options;

    if($_GET['page'] == basename(__FILE__) ){
        if('save' == $_REQUEST['action']){
            foreach ($options as $value){
                if(is_array($value)){
                    update_option($value['id'], $_REQUEST[$value['id']]);
                }
            }
            header("Location: admin.php?page=functions.php&saved=true");
            die;
        }
    }

    add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'isoc_admin');
}
function isoc_add_init() {
    wp_enqueue_style('bootstrap.min', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome.min', get_template_directory_uri().'/assets/css/font-awesome.min.css');
}
function isoc_admin(){
    global $themename, $shortname, $options;

    if($_REQUEST['saved']){
        echo '<div id="message" class="updated notice is-dismissible"><p><strong>'.__('Theme settings was saved', 'isoc').'</strong></p></div>';
    }
?>
    <div class="theme_settings">
        <div class="theme_options container-fluid">
            <h2><?php esc_html_e('Theme settings', 'isoc'); ?></h2>
            <form method="post" enctype="multipart/form-data">
                <?php
                    foreach($options as $value){
                        if(is_array($value)){
                ?>
                   <div class="col-md-6">
                    <div class="input-group" style="margin: 5px auto;">
                        <span class="input-group-addon"><?php echo $value['name']; ?></span>
                        <input 
                            class="form-control" 
                            name="<?php echo $value['id']?>" 
                            id="<?php echo $value['id']?>" 
                            type="<?php echo $value['type']?>"
                            value="<?php if (get_settings($value['id']) != ""){ echo stripslashes(get_settings($value['id'])); } ?>"
                            placeholder="<?php echo $value['name']; ?>"
                            <?php if(!empty($value['mp'])){ echo $value['mp']; } ?>
                        />
                    </div>
                   </div>
                    <?php
                        } else {
                    ?>
                    <h4 style="display: table-cell; padding: 15px 0px 5px;"><?php echo $value; ?></h4>
                <?php
                        }
                    }
                ?>
                <div style="padding-right: 15px; margin: 15px 0; float: right;">
                    <button name="action" value="save" type="submit" class="btn btn-primary"><?php esc_html_e('Save changes', 'isoc'); ?></button>
                </div>
            </form>
        </div>
    </div>


<?php }
add_action('admin_init', 'isoc_add_init');
add_action('admin_menu', 'isoc_add_admin');

?>