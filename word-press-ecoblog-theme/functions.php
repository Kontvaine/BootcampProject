<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );


//nustatome paveiksleliu dydi:
add_image_size('news-image',500,300,true);
//cia true, jei norim, kad kirptu iscentruojant; cia false, jei nenorim, kad kirptu, ebt tada jau ji padarys pagal parametrus;



add_image_size ('other_source_image',270,290,true);

add_image_size ('single_page_top_image',1360,272,true);


//nustatome tekstu into ilgi zodiais :
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

        wp_deregister_script('jquery');
        
        

        

//        files from footer:
//         jquery-1.12.4.min.js done
//        owl.carousel.min.js done
//          custom.js
//        
//        
      
        wp_register_script('jquery', ASSETS_URL . '/assets/js/jquery-1.12.4.min.js', false, false, true); 
//        ARBA FALSE paskutinis virsuje??

        wp_register_script('owlCarousel', ASSETS_URL . '/assets/js/owl.carousel.min.js', array('jquery'), 'false', true);
                
        wp_register_script('googleMaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAW1zA6jIGNhxk2NfXZRl1avwCMMHV_Ahk&callback=myMap', array('jquery'), 'false', true);
        
        wp_register_script('custom', ASSETS_URL . '/assets/js/custom.js', array('jquery'), 'false', true);        
        
        
        
     //enqueue_script - numato juos eileje:    
        
        wp_enqueue_script('jquery');
        wp_enqueue_script('owlCarousel');
        wp_enqueue_script('easing');
        wp_enqueue_script('googleMaps');
        wp_enqueue_script('custom');  

        
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/main.css';

	if( $styles_path ) {
        
        
//        adding files for style:
                
	
		wp_register_style('owlCarousel', ASSETS_URL . '/assets/css/owlcarousel/owl.carousel.min.css', array(), false, 'all');
        
    wp_register_style('owlTheme', ASSETS_URL . '/assets/css/owlcarousel/owl.theme.default.min.css', array('owlCarousel'), false, 'all');
        
    wp_register_style('style', ASSETS_URL . '/assets/css/style_blog.css', array('owlTheme'), false, 'all');
        
               
        
        //iskviesti registruotus failus:
        wp_enqueue_style('owlCarousel');
        wp_enqueue_style('owlTheme');
        wp_enqueue_style('style');
        		
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

?>