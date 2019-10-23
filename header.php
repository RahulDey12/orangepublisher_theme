<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://localhost:8080/dist/css/main.css">
    <?php wp_head() ?>
</head>
<body>
    <?php
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
    ?>
    <header>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="header-main col-12">
                        <div class="logo">
                            <a href="<?php echo home_url() ?>">
                                <img src="<?php echo $custom_logo_url ?>" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>
                        <div class="menu">
                            <div class="main-menu row m-0">
                                <div class="page-menu col-8">
                                    <?php
                                    if ( has_nav_menu( 'header-menu' ) ) {
                                        wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu-container' ) );
                                    }
                                    ?>
                                </div>
                                <div class="call col-4">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="text">
                                        <p class="m-0">Call Us Now</p>
                                        <a href="tel:+91 98300 50132">+91 98300 50132</a>
                                    </div>
                                </div>
                            </div>
                            <div class="social-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="main">
