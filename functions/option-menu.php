<?php
function orange_register_menu() {
    // Registering the menu page
    add_theme_page('Orange Publishers Settings', 'Orange Settings', 'manage_options', 'orange-settings', 'themeSettingPage');

    // Call the settings function
    add_action( 'admin_init', 'registerOrangeSettings' );
}
add_action( 'admin_menu', 'orange_register_menu' );

// The Settings Page
function themeSettingPage() {
    require_once get_template_directory().'/views/option-menu-page.php';
}

// Register the settings
function registerOrangeSettings() { // whitelist options
    register_setting( 'orange-service-group', 'selectService' );
}

