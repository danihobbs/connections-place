<?php 



if ( site_url() == "http://demo.connections-place/" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}

/*--------------------------------------------------
	   Call latest jQuery
---------------------------------------------------*/

function latest_jquery(){
	wp_enqueue_script('jquery');    
}
add_action('init', 'latest_jquery');
	

/*--------------------------------------------------
	  adding css and js
---------------------------------------------------*/
function theme_setup(){

	register_nav_menus( array(
		'main-menu' => __( 'MainMenu'),
		'mobile-menu' => __( 'MobileMenu'),
		'footer-menu' => __( 'FooterMenu'),
        
	) );
	

add_theme_support( 'post-thumbnails', array( 'post','info_facts') );

add_theme_support('woocommerce');

}
//enable custom logo from customize in admin
function connections_custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'connections_custom_logo_setup' );

add_action('after_setup_theme','theme_setup');






/*--------------------------------------------------
	  adding css and js
---------------------------------------------------*/


function blanket_scripts() {


    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'front-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style( 'owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style( 'googlefont','//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700|Roboto:300,400,700,900|Lobster+Two');

    wp_enqueue_style( 'baguetteBox-css', get_template_directory_uri() . '/css/baguetteBox.css');
    wp_enqueue_style( 'global-css', get_template_directory_uri() . '/css/global.css');
    wp_enqueue_style( 'mainstyle', get_stylesheet_uri(), array(), VERSION);
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/media-queries.css');

    wp_enqueue_script( 'modernizr-js','https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.1.3', true );
    wp_enqueue_script( 'owl-carousel-min-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '2.3.4', true );
    wp_enqueue_script( 'baguetteBox-js', get_template_directory_uri() . '/js/baguetteBox.js', array(), '1.11.0', true );
    wp_enqueue_script( 'imagesLoaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.11.0', true );
	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.11.0', true );
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/custom.js', array(), VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'blanket_scripts' );



/*--------------------------------------------------
	  Includes
---------------------------------------------------*/

	//include_once('inc/shortcode.php');
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	//include_once('inc/posttypes.php');


	
/*--------------------------------------------------
	   Add Theme support
---------------------------------------------------*/
	
add_theme_support( 'post-thumbnails', array( 'post','slider') );



	function source_widgets_init() {
		register_sidebar( array(
			'name'          => __( 'Sidebar' ),
			'id'            => 'sidebar',
			'description' 	=> __( 'An optional widget area for your welcome message area.' ),
			'before_widget' => '<div class="saiful-product">',
			'after_widget'  => '</div>',
			'before_title'  => '<h1>',
			'after_title'   => '</h1>',
		) );
	}
	add_action( 'widgets_init', 'source_widgets_init' );




    function new_excerpt_length($length) {
        global $post;
        if ($post->post_type == 'ss')
            return 20;
        else if ($post->post_type == 'post')
            return 25;
        else
            return 55;
    }
    add_filter('excerpt_length', 'new_excerpt_length');

//image sizes 
add_image_size( 'slider', 1500, 475, array( 'center', 'center' ) );
//sidebars
add_action( 'widgets_init', 'main_sidebar_widgets_init' );
function main_sidebar_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'main-sidebar' ),
        'id' => 'sidebar-1',
        'description' => __( 'This is the main right hand sidebar.', 'main-sidebar' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h3 class="widgettitle">',
    'after_title'   => '</h3>',
    ) );
}
?>