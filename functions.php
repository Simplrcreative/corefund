<?php
//ENQUEUE
function core_common_enqueue() {
	$timestamp = time();
    //SCRIPTS
/*	wp_enqueue_script( 'affix', get_template_directory_uri(). '/includes/js/_16affix.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'lazyload', get_template_directory_uri(). '/includes/js/lazyload.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'gsap', get_template_directory_uri(). '/includes/js/gsap.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'ScrollTrigger', get_template_directory_uri(). '/includes/js/ScrollTrigger.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'ScrollSmoother', get_template_directory_uri(). '/includes/js/ScrollSmoother.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'scrollreveal', get_template_directory_uri(). '/includes/js/scrollreveal.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'drawsvg', get_template_directory_uri(). '/includes/js/drawsvg.min.js', array( 'jquery' ), $timestamp, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri(). '/includes/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script( 'lity', get_template_directory_uri(). '/includes/js/lity.min.js', array( 'jquery' ), '1.0.1', true);
	wp_enqueue_script( 'core', get_template_directory_uri(). '/includes/js/core.js', array( 'jquery' ), $timestamp, true);*/
	
	//MINIFIED
	wp_enqueue_script( 'core', get_template_directory_uri(). '/includes/js/core.min.js', array( 'jquery' ), $timestamp, true);
	
	//STYLES
	if(is_page('landing')) {
		wp_register_style('core', get_template_directory_uri(). '/style-landing.css', array(), $timestamp, 'all' );
		wp_register_style('bootstrap', get_template_directory_uri(). '/includes/css/bootstrap-landing.css', array(), $timestamp, 'all' );
	} else {
		wp_register_style('core', get_template_directory_uri(). '/style.css', array(), $timestamp, 'all' );
		//wp_register_style('lity', get_template_directory_uri(). '/includes/css/lity.min.css', array(), $timestamp, 'all' );
		//wp_enqueue_style('lity');
		wp_register_style('bootstrap', get_template_directory_uri(). '/includes/css/bootstrap.css', array(), $timestamp, 'all' );
	}
	wp_enqueue_style('core');
	wp_enqueue_style('bootstrap');
}
add_action( 'wp_enqueue_scripts', 'core_common_enqueue' );

//THEME SUPPORT
if (function_exists('add_theme_support')) {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('post-category-thumbnails');
}

// //remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// // Remove rss feed links
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );

// // remove wp-embed
add_action( 'wp_footer', function(){
    wp_dequeue_script( 'wp-embed' );
});


add_action( 'wp_enqueue_scripts', function(){
    // // remove block library css
    wp_dequeue_style( 'wp-block-library' );
    // // remove comment reply JS
    wp_dequeue_script( 'comment-reply' );
} );

//MENUS
register_nav_menus(
    array(
    'home' => __( 'Home' ),
    'page' => __( 'Page' )
    )
);

function core_main_menus() {
	echo '<nav class="navbar">';
		if (is_front_page()) {
			if (has_nav_menu('home')) {
				wp_nav_menu([
					'theme_location' => 'home',
					'container' => 'div',
					'container_class' => 'menu_holder',
					'container_id' => '',
					'menu_class' => 'menu home',
					'menu_id' => 'menu-home',
					'depth' => 4,
					'walker' => new core_menu_walker(),
    				'show_carets' => true
				]);
			}
		} else {
			if (has_nav_menu('page')) {
				wp_nav_menu([
					'theme_location' => 'page',
					'container' => 'div',
					'container_class' => 'menu_holder',
					'container_id' => '',
					'menu_class' => 'menu pages',
					'menu_id' => 'menu-pages',
					'depth' => 4,
					'walker' => new core_menu_walker(),
    				'show_carets' => true
				]);
			}
		}
		echo '<div class="mobile_menu_hamburger"></div>';
    echo '</nav>';
}

// THEME SUPPORT
if (function_exists('add_theme_support')) {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails', array('post', 'page'));
    add_theme_support('post-category-thumbnails');
}

//MENU WALKER
class core_menu_walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth=0, $args=[], $id=0) {
        $output .= "<li class='" .  implode(" ", $item->classes) . "'>";

        if ($item->url && $item->url != '#') {
            $output .= '<a href="' . $item->url . '">';
        } else {
            $output .= '<span>';
        }

        $output .= $item->title;

        if ($item->url && $item->url != '#') {
            $output .= '</a>';
        } else {
            $output .= '</span>';
        }
		if ($args->show_carets && $args->walker->has_children) {
			$output .= '<i class="caret fa fa-angle-down"></i>';
		}
    }
}

// DISABLE DEFAULT IMAGE SIZES
function core_disable_image_sizes($sizes) {
	unset($sizes['medium_large']);
	unset($sizes['1536x1536']);
	unset($sizes['2048x2048']); 
	return $sizes;
}
add_action('intermediate_image_sizes_advanced', 'core_disable_image_sizes');

// IMAGES SIZES
add_image_size( 'size50', 50, 9999, FALSE );
add_image_size( 'sizeThumb', 500, 500, TRUE);
add_image_size( 'size600', 600, 9999, FALSE );
add_image_size( 'size900', 900, 9999, FALSE );
add_image_size( 'size1200', 1200, 9999, FALSE );
add_image_size( 'size1900', 1900, 9999, FALSE );
add_image_size( 'size2200', 2200, 9999, FALSE );
add_image_size( 'size2700', 2700, 9999, FALSE );

//CHECK IF .WEBP VERION EXISTS
function webp_exists($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    curl_setopt($ch, CURLOPT_FAILONERROR, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($ch);
    curl_close($ch);
    if($result !== FALSE) {
        return true;
    } else {
        return false;
    }
}

//SIMPLR PICTURES 
function simplr_picture($post_id, $size_ary = '', $field_name = '', $attachment_id = '', $alt = '', $img_class = '') {
	
    //SIZE SETUP
    if($size_ary && is_array($size_ary)) {
        $loading_size = $size_ary[0];
        $mobile_size = $size_ary[1];
        $desktop_size = $size_ary[2];
    } else {
        $loading_size = 'thumbnail';
        $mobile_size = 'medium';
        $desktop_size = 'large';
    }
	
	//CREATE FROM ACF FIELD
    if(!empty($field_name)) {
		
		//IMG OBJECT
		if(is_array($field_name)) {
			 $img = $field_name;
		} else {
			 $img = get_field($field_name, $post_id);
		}
        
        //TYPE
        $img_type = $img['mime_type'];
        $img_type_loading = $img_type;
        $img_type_mobile = $img_type;
        $img_type_desktop = $img_type;

        //SRCS
        $img_src_loading = $img['sizes'][$loading_size];
        $img_src_mobile = $img['sizes'][$mobile_size];
        $img_src_desktop = $img['sizes'][$desktop_size];

        //ALT
        if(!empty($alt)) {
            $img_alt = $alt;
        } else {
            $img_alt = $img['alt'];
        }
		
	
	//CREATE FROM ATTACHMENT ID
    } else {

        if(!empty($attachment_id)) {
            //CREATE FROM ATTACHMENT ID
            $img_id = $attachment_id;

        } else {
            //CREATE FROM FEATURED IMG ID
            $img_id = get_post_thumbnail_id($post_id);
        }

        if(empty($img_id)) {

            return false;

        } else {

            //IMAGE INFO
            $img_meta = wp_get_attachment_metadata($img_id);
            $img_type_loading = $img_meta['sizes'][$loading_size]['mime-type'];
            $img_type_mobile = $img_meta['sizes'][$mobile_size]['mime-type'];
            $img_type_desktop = $img_meta['sizes'][$desktop_size]['mime-type'];

            //SRCS
            $img_src_loading = wp_get_attachment_image_src($img_id, $loading_size);
            $img_src_mobile = wp_get_attachment_image_src($img_id, $mobile_size);
            $img_src_desktop = wp_get_attachment_image_src($img_id, $desktop_size);

            $img_src_loading = $img_src_loading[0];
            $img_src_mobile = $img_src_mobile[0];
            $img_src_desktop = $img_src_desktop[0];

            //ALT
            if(!empty($alt)) {
                $img_alt = $alt;
            } else {
                $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', TRUE);
            }
        }

    }
	
    //LOADING IMG SRC
    if(webp_exists($img_src_loading.'.webp') == true && $img_type_loading != 'image/webp' && $img_type_loading  != 'image/svg') {
       $img_src_loading_update = $img_src_loading.'.webp';
    } else {
        $img_src_loading_update = $img_src_loading;
    }

    //MOBILE IMG SRC
    if(webp_exists($img_src_mobile.'.webp') == true  && $img_type_mobile != 'image/webp' && $img_type_mobile != 'image/svg') {
       $img_src_mobile_update = $img_src_mobile.'.webp';
    } else {
        $img_src_mobile_update = $img_src_mobile;
    }

    //DESKTOP IMG SRC
    if(webp_exists($img_src_desktop.'.webp') == true  && $img_type_desktop != 'image/webp' && $img_type_desktop != 'image/svg') {
       $img_src_desktop_update = $img_src_desktop.'.webp';
    } else {
        $img_src_desktop_update = $img_src_desktop;
    }

    echo '<picture>';
        echo '<source type="image/webp" media="(max-width:959px)" srcset="'.$img_src_loading_update.'" data-srcset="'.$img_src_mobile_update.'">';
        echo '<source type="image/webp" media="(min-width:960px) and (min-resolution: 192dpi)" srcset="'.$img_src_loading_update.'" data-srcset="'.$img_src_desktop_update.'">';
        echo '<source type="image/webp" srcset="'.$img_src_loading_update.'" data-srcset="'.$img_src_desktop_update.'">';
        echo '<img src="'.$img_src_loading_update.'" data-src="'.$img_src_desktop_update.'" class="lazyload lazy '.$img_class.'" alt="'.$img_alt.'">';
    echo '</picture>';
}

//CUSTOM EMAIL ADDRESS
add_filter('wp_mail_from', 'custom_email', 10, 3);

function custom_email($original_email_address) {
    return 'info@corefund.co.za';
}
 
//CUSTOM FROM NAME
add_filter('wp_mail_from_name', 'custom_email_name', 10, 3);

function custom_email_name($original_email_from) {
    return 'Core Fund Administrators';
}
