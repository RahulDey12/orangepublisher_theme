<?php
if(!function_exists('orange_setup')) {
    function orange_setup () {
        // Thumbnail Support
        add_theme_support( 'post-thumbnails' );

        add_image_size( 'orange-blog', 930, 620, false );

        // Logo Support
        add_theme_support( 'custom-logo', array(
            'height'      => 100,
            'width'       => 400,
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

//Styles
if(! function_exists('orange_styles')){
    function orange_styles() {
        //All Stylesheets
        wp_enqueue_style('main-style', get_template_directory_uri().'/assets/dist/css/main.css',false, "1.0");
    }
}
add_action('wp_enqueue_scripts', 'orange_styles');

//Scripts
if(! function_exists('orange_scripts')){
    function orange_scripts() {
        //All Stylesheets
        wp_enqueue_script('main-js', get_template_directory_uri().'/assets/dist/js/app.js',false, "1.0");
    }
}
add_action('wp_enqueue_scripts', 'orange_scripts');

