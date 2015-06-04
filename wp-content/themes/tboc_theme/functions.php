<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('col-md-6', 530, 353, true);
add_image_size('col-md-7', 345, 345,true);
add_image_size('col-md-12', 703, 358, true);
add_image_size('personal', 405, 405, true);
add_image_size('encabezadopost',1210, 695, true );
add_image_size('big300', 640, 720,true );
add_image_size('small300', 640, 360,true );
add_image_size('big6', 1280, 720,true );
}

add_post_type_support('page', 'excerpt');
;?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú principal');
	register_nav_menu( 'secondary', 'Menú footer');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	  wp_register_script('jquery', 'https://code.jquery.com/jquery-1.10.0.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('core');
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php
//Post type register

add_action('init', 'clientes_register');
function clientes_register() {
    $args = array(
        'label' => 'Clientes | Casos',
        'singular_label' => 'Cliente',
        'public' => true,
		    'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		    'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'clientes'),
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail' )
    );
    register_post_type('clientes', $args);
    flush_rewrite_rules();
}
add_action('init', 'personales_register');
function personales_register() {
    $args = array(
        'label' => 'Personal',
        'singular_label' => 'Personal',
        'public' => true,
		    'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		    'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'personales'),
        'supports' => array('title', 'editor', 'thumbnail' )
    );
    register_post_type('personales', $args);
    flush_rewrite_rules();
}
add_action('init', 'formulas_register');
function formulas_register() {
    $args = array(
        'label' => 'Formula',
        'singular_label' => 'Formula',
        'public' => true,
        'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'formulas'),
        'supports' => array('title', 'editor', 'thumbnail' )
    );
    register_post_type('formulas', $args);
    flush_rewrite_rules();
}
register_taxonomy('casos', array('clientes'), array("hierarchical" => true, "label" => "Casos", "singular_label" => "Caso", "rewrite" => 'hierarchical'));

?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important; }
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#436891 !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#355272 !important}
	.wp-core-ui .button-primary{background-color:#355272 !important}
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 

function get_type_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'img'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'Vid'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'Doc'; break;
	case 'application/pdf':
		return 'PDF'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return '.Doc'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return '.Xls'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'Ppt'; break;
    default:
      return 'file';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';

function get_icon_for_attachment($post_id) {
  $type = get_post_mime_type($post_id);
  switch ($type) {
    case 'image/jpeg':
    case 'image/png':
    case 'image/gif':
      return 'fa-file-image-o'; break;
    case 'video/mpeg':
    case 'video/mp4': 
    case 'video/quicktime':
      return 'fa-file-video-o'; break;
    case 'text/csv':
    case 'text/plain': 
    case 'text/xml':
      return 'fa-file-text-o'; break;
	case 'application/pdf':
		return 'fa-file-pdf-o'; break;
	case 'application/vnd.openxmlformats-officedocument.wordprocessingml.document':
	case 'application/msword':
		return 'fa-file-word-o'; break;
	case 'application/vnd.ms-excel':
	case 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet':
		return 'fa-file-excel-o'; break;
	case 'application/vnd.ms-powerpoint' :
	case 'application/vnd.openxmlformats-officedocument.presentationml.presentation':
		return 'fa-file-powerpoint-o'; break;
    default:
      return 'fa-file-o';
  }
}
// call it like this:
//echo '<img src="'.get_icon_for_attachment($my_attachment->ID).'" />';



?>
<?php //include_once( rtrim( dirname( __FILE__ ), '/' ) . '/acf-taxonomy-field/taxonomy-field.php' );?>
<?php 
/* add_action( 'pre_get_posts', 'rc_modify_query_limit_posts' );
function rc_modify_query_limit_posts( $query ) {
	if(! is_admin() && $query->is_post_type_archive()){
		$query->set('posts_per_page', '7');
	}
	elseif(! is_admin() && $query->is_main_query() && $query->is_post_type_archive() ){
		$query->set('posts_per_page', '2');
	}
	elseif( ! is_admin() && $query->is_main_query() ) {
		$query->set('posts_per_page', '10');
	}
} */
?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>