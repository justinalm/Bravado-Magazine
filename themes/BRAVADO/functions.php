<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');

	   wp_register_script('myscript', get_bloginfo('template_directory') . "http://www.justinalm.com/bravado5/wp-content/themes/BRAVADO/js/bravado.js/");
     wp_enqueue_script('myscript');

	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if ( function_exists( 'add_theme_support' ) ) {
    	add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 673, 470, true ); // default Post Thumbnail dimensions   
    }

    if ( function_exists( 'add_image_size' ) ) { 
    	add_image_size( 'medium', 673, 470, true ); //300 pixels wide (and unlimited height)
    	add_image_size( 'full', 960, 450, true ); //(cropped)
    	add_image_size( 'featured', 960, 450, true);
    }



function pagination($prev = '«', $next = '»') {
    global $wp_query, $wp_rewrite;
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    $pagination = array(
        'base' => @add_query_arg('paged','%#%'),
        'format' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $current,
        'prev_text' => __($prev),
        'next_text' => __($next),
        'type' => 'plain'
);
    if( $wp_rewrite->using_permalinks() )
        $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

    if( !empty($wp_query->query_vars['s']) )
        $pagination['add_args'] = array( 's' => get_query_var( 's' ) );

    echo paginate_links( $pagination );
};

function SearchFilter($query) {
    if ($query->is_search) {
    $query->set('post_type', 'post');
    $query->query_vars['posts_per_page'] = 5; // Change 10 to the number of posts you would like to show
    }
    return $query;
    }

    add_filter('pre_get_posts','SearchFilter');
    
?>