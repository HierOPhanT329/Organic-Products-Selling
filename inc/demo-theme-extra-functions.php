<?php 
/**
 * Enqueues scripts and styles.
 */
if ( ! function_exists( 'my_theme_scripts' ) ) {
	function my_theme_scripts() {

		// Theme stylesheet.
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), '1.0' );

		wp_enqueue_style( 'carousel-min', get_theme_file_uri( '/assets/css/owl.carousel.min.css' ), array(), '1.0' ); // carousel
		wp_enqueue_style( 'bootstrap-min', get_theme_file_uri( '/assets/css/bootstrap.min.css' ), array(), '1.0' ); // bootstrap
		wp_enqueue_style( 'style-min', get_theme_file_uri( '/assets/css/style.css' ), array(), '1.0' ); //style
		wp_enqueue_style( 'swiper-min', get_theme_file_uri( '/assets/css/swiper-bundle.min.css' ), array(), '1.0' ); //style
		// wp_enqueue_style( 'all-min', get_theme_file_uri('/assets/css/all.min.css' ), array(), '1.0' ); 
		 


		// Load javascripts libraries
		wp_enqueue_script( 'jquery-min', get_theme_file_uri( '/assets/js/jquery-3.4.1.min.js' ), array( 'jquery' ), '4.0.0', true ); // jquery
		wp_enqueue_script( 'bootstrap-bundle-min', get_theme_file_uri( '/assets/js/bootstrap.bundle.min.js' ), array( 'jquery' ), '4.0.0', true );  // bootstrap
		wp_enqueue_script( 'easing-min', get_theme_file_uri( '/assets/js/easing.min.js' ), array( 'jquery' ), '4.0.0', true ); // easing like ease-in-out
		wp_enqueue_script( 'waypoints-min', get_theme_file_uri( '/assets/js/waypoints.min.js' ), array( 'jquery' ), '4.0.0', true ); // waypoint
		wp_enqueue_script( 'counterup', get_theme_file_uri( '/assets/js/counterup.min.js' ), array( 'jquery' ), '4.0.0', true ); // counter
		wp_enqueue_script( 'carousel-min', get_theme_file_uri( '/assets/js/owl.carousel.min.js' ), array( 'jquery' ), '4.0.0', true ); //carousel
		wp_enqueue_script( 'main-min', get_theme_file_uri( '/assets/js/main.js' ), array( 'jquery' ), '4.0.0', true );
		// wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap.min.js' ), array( 'jquery' ), '4.0.0', true ); // bootstrap
		wp_enqueue_script( 'swiper-min', get_theme_file_uri( '/assets/js/swiper-bundle.min.js' ), array( 'jquery' ), '4.0.0', true ); // swiper

	}
}

add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

add_action( 'init', 'my_script_enqueuer' );

function my_script_enqueuer() {
   
   wp_localize_script( 'jquery-core', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));

   wp_enqueue_script( 'jquery' );
   
}

/**
 * ACF option page
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme options',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

class theme_Walker_Nav_Menu extends Walker_Nav_Menu {
	// add main/sub classes to li's and links
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        $id_field = $this->db_fields['id'];

        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = !empty( $children_elements[$element->$id_field] );
        }

        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		if ( $args->has_children ) {
            $item->classes[] = 'dropdown';
        }
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// depth dependent classes
		$depth_classes = array(
		    ( $depth == 0 ? 'main-menu-item nav-item' : 'sub-menu-item' ),
		    ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
		    ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
		    'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
		$caret = '';
		$attributes = '';
		if(in_array('menu-item-has-children', $classes)){
			$caret = '<span class="caret"></span>';
			$attributes .= ' class="nav-link dropdown-toggle" id="navbarDropdown1" aria-haspopup="true" aria-expanded="false"';
		}
		// build html
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

		// link attributes
		$attributes .= ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class=" ' . ( $depth > 0 ? 'dropdown-item' : 'nav-link main-menu-link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s'.$caret.'',
		    $args->before,
		    $attributes,
		    $args->link_before,
		    apply_filters( 'the_title', $item->title, $item->ID ),
		    $args->link_after,
		    $args->after
		);
		
		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

	}
	function start_lvl(&$output, $depth = 0, $args = array() ){

		$indent = str_repeat("\t", $depth);

		$output .= "\n$indent<ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown1\">\n"; 

	}
}

function myextensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}

add_filter('tiny_mce_before_init', 'myextensionTinyMCE' );

// Make the search to index acf content - Start

function cf_search_join( $join ) {
    global $wpdb;
    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

function cf_search_where( $where ) {
    global $pagenow, $wpdb;
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }
    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

function cf_search_distinct( $where ) {
    global $wpdb;
    if ( is_search() ) {
        return "DISTINCT";
    }
    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );
