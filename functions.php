<?php
if(!function_exists('orange_setup')) {
    function orange_setup () {
        // Thumbnail Support
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'orange-blog', '420', '280', true );

        // Logo Support
        add_theme_support( 'custom-logo', array(
            'height'      => 221,
            'width'       => 600,
            'flex-height' => true,
            'flex-width'  => true,
        ) );
        // HTML5 Support
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption') );
        // Title Tag support
        add_theme_support( 'title-tag' );
        // Refresh widget support
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Register Menus
        register_nav_menus(
            array(
                'header-menu'   =>  _('Header Menu'),
                'social-menu'   =>  _('Social Menu'),
            )
        );
    }
}
add_action( 'after_setup_theme', 'orange_setup');

//Wp Head
if ( ! function_exists( '_wp_render_title_tag' ) ) {
    function theme_slug_render_title()
    {
        ?>
        <title>
            <?php wp_title( '|', true, 'right' ); ?>
        </title>
        <?php
    }
    add_action( 'wp_head', 'theme_slug_render_title' );
}

////Styles
//if(! function_exists('orange_styles')){
//    function orange_styles() {
//        //All Stylesheets
//        wp_enqueue_style('main-style', get_template_directory_uri().'/assets/dist/css/main.css',false, "1.0");
//    }
//}
//add_action('wp_enqueue_scripts', 'orange_styles');
//
////Scripts
//if(! function_exists('orange_scripts')){
//    function orange_scripts() {
//        //All Stylesheets
//        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/dist/js/app.js',false, "1.0");
//    }
//}
//add_action('wp_enqueue_scripts', 'orange_scripts');

if(! function_exists('orange_footer_sidebar') ) {
    function orange_footer_sidebar() {
        $footer_sidebars = array(
            array(
                'name'          =>  'Footer Widget 1',
                'id'            =>  'footer-widget-1',
                'description'   =>  'Footer widget first column'
            ),
            array(
                'name'          =>  'Footer Widget 2',
                'id'            =>  'footer-widget-2',
                'description'   =>  'Footer widget second column'
            ),
            array(
                'name'          =>  'Footer Widget 3',
                'id'            =>  'footer-widget-3',
                'description'   =>  'Footer widget third column'
            ),
            array(
                'name'          =>  'Footer Widget 4',
                'id'            =>  'footer-widget-4',
                'description'   =>  'Footer widget forth column'
            ),
            array(
                'name'          =>  'Footer Widget 5',
                'id'            =>  'footer-widget-5',
                'description'   =>  'Footer widget fifth column'
            ),
        );

        $defaults = array(
            'name'          =>  'Widget Area',
            'id'            =>  'widget-area',
            'description'   =>  'Default Widget Description',
            'class'         =>  '',
            'before_widget' =>  '<div class="footer-widget">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h5 class="footer-widget-title">',
            'after_title'   =>  '</h5>'
        );

        foreach ($footer_sidebars as $footer_sidebar) {
            $args = wp_parse_args( $footer_sidebar, $defaults );
            register_sidebar( $args );
        }
    }
}
add_action( 'widgets_init', 'orange_footer_sidebar' );

// if no title then add widget content wrapper to before widget
//add_filter( 'dynamic_sidebar_params', 'check_sidebar_params' );
//function check_sidebar_params( $params ) {
//    global $wp_registered_widgets;
//
//    $settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
//    $settings = $settings_getter->get_settings();
//    $settings = $settings[ $params[1]['number'] ];
//
//    if ( $params[0][ 'after_widget' ] == '</div></div>' && isset( $settings[ 'title' ] ) && empty( $settings[ 'title' ] ) ) {
//        $params[0]['before_widget'] .= '<div class="widget-main-content">';
//    }
//
//    return $params;
//}

// Page Sidebar register
function orange_right_sidebar() {
    register_sidebar(
        array(
            'name'          =>  'Right Sidebar',
            'id'            =>  'right-sidebar',
            'description'   =>  'This is right sidebar',
            'class'         =>  '',
            'before_widget' =>  '<div id="%1$s" class="right-widget %2$s">',
            'after_widget'  =>  '</div></div>',
            'before_title'  =>  '<h3 class="widget-title">',
            'after_title'   =>  '</h3><div class="widget-main-content">'
        )
    );
}
add_action('widgets_init', 'orange_right_sidebar');

//Add Taxonomy
    function create_service_cat_taxonomy() {
        $labels = array(
            'name'              => _x( 'Service Category', 'taxonomy general name', 'orange' ),
            'singular_name'     => _x( 'Service Category', 'taxonomy singular name', 'orange' ),
            'search_items'      => __( 'Search Service Category', 'orange' ),
            'all_items'         => __( 'All Service Category', 'orange' ),
            'parent_item'       => __( 'Parent Service Category', 'orange' ),
            'parent_item_colon' => __( 'Parent Service Category:', 'orange' ),
            'edit_item'         => __( 'Edit Service Category', 'orange' ),
            'update_item'       => __( 'Update Service Category', 'orange' ),
            'add_new_item'      => __( 'Add New Service Category', 'orange' ),
            'new_item_name'     => __( 'New Genre Service Category', 'orange' ),
            'menu_name'         => __( 'Service Category', 'orange' ),
        );

        $args = array(
            'hierarchical'          => true,
            'labels'                => $labels,
            'show_ui'               => true,
            'show_admin_column'     => true,
            'query_var'             => true,
            'rewrite'               => array( 'slug' => 'service_cat' ),
            'show_in_rest'          => true,
            'rest_base'             => 'service_cat',
            'rest_controller_class' => 'WP_REST_Terms_Controller',
        );

        register_taxonomy( 'service_cat', array( 'page' ), $args );
    }
    add_action('init', 'create_service_cat_taxonomy');

//    Get external Functions
    require get_template_directory().'/functions/option-menu.php';
