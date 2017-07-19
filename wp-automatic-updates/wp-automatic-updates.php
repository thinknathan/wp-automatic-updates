<?php
/*
Plugin Name:  Automatic Updates
Plugin URI:   https://github.com/thinknathan/
Description:  Automatically updates WP core, themes, plugins.
Version:      1.0.0
Author:       Think_Nathan
Author URI:   https://thinknathan.ca
License:      MIT License
*/

// Automatically apply all core updates including major ones
add_filter( 'auto_update_core', '__return_true' );
// Disable email notifications from core updates
add_filter( 'auto_core_update_send_email', '__return_false' );
// Automatically update plugins
add_filter( 'auto_update_plugin', '__return_true' );
// Automatically update themes
add_filter( 'auto_update_theme', '__return_true' );
