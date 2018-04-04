<?php

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_styles() {
    //wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('child1-style', get_stylesheet_directory_uri() . '/css/style.css');
    wp_enqueue_script('custom-script1', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
    wp_enqueue_script('custom-script2', get_stylesheet_directory_uri() . '/js/coustom.js');
    wp_enqueue_script('custom-script3', get_stylesheet_directory_uri() . '/js/skrollr.min.js');

}

function team_member() {

    $labels = array(
        'name' => _x('Team Members'),
        'singular_name' => _x('Team Member'),
        'menu_name' => __('Team Members'),
        'parent_item_colon' => __('Parent Team Member'),
        'all_items' => __('All Team Members'),
        'view_item' => __('View Team Member'),
        'add_new_item' => __('Add New Team Member'),
        'add_new' => __('Add New'),
        'edit_item' => __('Edit Team Member'),
        'update_item' => __('Update Team Member'),
        'search_items' => __('Search Team Member'),
        'not_found' => __('Not Found'),
        'not_found_in_trash' => __('Not found in Trash'),
    );


    $args = array(
        'label' => __('team_members'),
        'description' => __('Team Members'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('team'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('team-members', $args);
}

add_action('init', 'team_member', 0);

function home_slider() {

    $labels = array(
        'name' => _x('Home Slider'),
        'singular_name' => _x('Home Slider'),
        'menu_name' => __('Home Slider'),
        'parent_item_colon' => __('Parent Home Slider'),
        'all_items' => __('All Home Slider'),
        'view_item' => __('View Home Slider'),
        'add_new_item' => __('Add New Home Slider'),
        'add_new' => __('Add New'),
        'edit_item' => __('Edit Home Slider'),
        'update_item' => __('Update Home Slider'),
        'search_items' => __('Search Home Slider'),
        'not_found' => __('Not Found'),
        'not_found_in_trash' => __('Not found in Trash'),
    );


    $args = array(
        'label' => __('home_slider'),
        'description' => __('Home Slider'),
        'labels' => $labels,
        // Features this CPT supports in Post Editor
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies' => array('slider'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );

    // Registering your Custom Post Type
    register_post_type('home-slider', $args);
}

add_action('init', 'home_slider', 0);



//---------         Menus post type--------------------------------------------
add_action('init', 'wpb_register_Menus');

function wpb_register_Menus() {
    $labels = array(
        'name' => _x('Menus', 'Menus'),
        'singular_name' => _x('Menu', 'Menu'),
        'add_new' => _x('Add New', 'Menu'),
        'add_new_item' => _x('Add New Menu', 'Menu'),
        'edit_item' => _x('Edit Menu', 'Menu'),
        'new_item' => _x('New Menu', 'Menu'),
        'view_item' => _x('View Menu', 'Menu'),
        'search_items' => _x('Search Menu', 'Menu'),
        'not_found' => _x('No Menu found', 'Menu'),
        'not_found_in_trash' => _x('No Menu found in Trash', 'Menu'),
        'parent_item_colon' => _x('Parent Menu:', 'Menu'),
        'menu_name' => _x('Menus', 'Menus'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );
    register_post_type('menus', $args);
}

// Our custom post type function
function custom_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name' => _x('Menus', 'Menus'),
        'singular_name' => _x('Menus', 'Menus'),
        'view_item' => __('View Menus', 'Menus'),
        'add_new_item' => __('Add New Menu', 'Menus'),
        'add_new' => __('Add New', 'Menus'),
        'edit_item' => __('Edit Menu', 'Menus'),
        'update_item' => __('Update Menu', 'Menus'),
        'search_items' => __('Search Menu', 'Menus'),
        'not_found' => __('Not Found', 'Menus'),
        'not_found_in_trash' => __('Not found in Trash', 'Menus'),
    );
    $args = array(
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 5,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    // Registering your Custom Post Type
    register_post_type('Menus', $args);
}

add_action('init', 'custom_post_type', 0);

function Menu_taxonomy() {
    register_taxonomy(
            'Menus_categories', //The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
            'menus', //post type name
            array(
        'hierarchical' => true,
        'label' => 'Menus Categories', //Display name
        'query_var' => true,
        'rewrite' => array(
            'slug' => 'menus', // This controls the base slug that will display before each term
            'with_front' => false // Don't display the category base before
        )
            )
    );
}

add_action('init', 'Menu_taxonomy');

//-------------------header customizer------------

function header_theme_customizer($wp_customize) {
    $wp_customize->add_section('header_customize', array(
        'title' => __('Header Button Link', 'header'),
        'priority' => 90,
        'description' => 'Customize your links',
    ));

    $wp_customize->add_setting('order');
    $wp_customize->add_control('order', array(
        'label' => __('Order Online Text', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'order',
        'transport' => 'postMessage'
    ));
     $wp_customize->add_setting('order_link');
    $wp_customize->add_control('order_link', array(
        'label' => __('Order Online Link', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'order_link',
        'transport' => 'postMessage'
    ));
     $wp_customize->add_setting('reserve');
    $wp_customize->add_control('reserve', array(
        'label' => __('Reserve Table Text', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'reserve',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('reserve_link');
    $wp_customize->add_control('reserve_link', array(
        'label' => __('Reserve Table Link', 'header'),
        'type' => 'textbox',
        'section' => 'header_customize',
        'settings' => 'reserve_link',
        'transport' => 'postMessage'
    ));
}
add_action('customize_register', 'header_theme_customizer');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentyseventeen_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'twentyseventeen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'twentyseventeen' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'twentyseventeen' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
        register_sidebar( array(
		'name'          => __( 'Nats Park', 'twentyseventeen' ),
		'id'            => 'nats_park',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
        register_sidebar( array(
		'name'          => __( 'Footer Images', 'twentyseventeen' ),
		'id'            => 'footer-imgs',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	 register_sidebar( array(
		'name'          => __( 'Footer Menu', 'twentyseventeen' ),
		'id'            => 'footer-menu',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Pizza Delivery', 'twentyseventeen' ),
		'id'            => 'pizza-delivery',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Contact', 'twentyseventeen' ),
		'id'            => 'contact',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Location', 'twentyseventeen' ),
		'id'            => 'location',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
        register_sidebar( array(
		'name'          => __( 'News Letter', 'twentyseventeen' ),
		'id'            => 'news_letter',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentyseventeen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'twentyseventeen_widgets_init' );
 
