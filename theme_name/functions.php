<?php
add_action( 'after_setup_theme', 'lps_theme_setup' );
function lps_theme_setup() {
	
	global $content_width;
	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 600;

	add_action( 'init', 'lps_load_scripts');
	add_action( 'init', 'lps_register_menus' );
	add_action( 'widgets_init', 'lps_register_sidebars' );
	add_filter( 'stylesheet_uri','wpi_stylesheet_uri',10,2);
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails');
	//add_image_size( 'name', width, hight, crop);
}

function wpi_stylesheet_uri($stylesheet_uri, $stylesheet_dir_uri){
    return $stylesheet_dir_uri.'/css/style.css';
	}

function lps_register_menus() {
	register_nav_menus(array('primary'=>__('Primary Nav'),));
	register_nav_menus(array('utility'=>__('Utility Nav'),));
}

function lps_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Sidebar' ),
			'description' => __( 'The following widgets will appear in the main sidebar div.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>'
		)
	);
}

function lps_load_scripts() {
	wp_enqueue_script('basic', get_bloginfo('template_directory').'/js/main.js', array('jquery'), '1.0');
	wp_enqueue_script('modernizr', get_bloginfo('template_directory').'/js/modernizr-2.0.6.js', array('jquery'), '1.0');
	
	if ( !is_admin() ) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"), false);
		wp_enqueue_script('jquery');
		}

	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );	
}

function excerpt($limit) {
      $excerpt = explode(' ', get_the_content(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*]`','',$excerpt);
      $excerpt = preg_replace("/<img(.*?)>/si", "", $excerpt);
      $excerpt = preg_replace("/<em(.*?)>/si", "", $excerpt);
  	  return $excerpt;preg_replace('`\[[^\]]*]`','',$excerpt);
	
}

function custom_excerpt($length='',$more_txt='Read More') {
	$default_length = 30;
	if (empty($length)) {
			$excerpt_length = $default_length;
		} else {
			$excerpt_length = $length;
		}
	$excerpt = excerpt($excerpt_length);
	$link = '<a href="'.get_permalink($post->ID).'" class="more_link">'.$more_txt.'</a>';
	$output = "$excerpt $link";
	echo wpautop($output, true);
}

function post_meta() {
	include 'meta.php';
}

function disable_version() { return ''; }
add_filter('the_generator','disable_version');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);	

?>