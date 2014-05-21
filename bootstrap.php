<?php
/**
 * Plugin Name: Wordpress Single Category Posts
 * Plugin URI: https://github.com/madebydavid/wordpress-single-category-posts
 * Description: Plugin which forces posts to only be in one category at a time
 * Version: 0.1
 * Author: madebydavid
 * Author URI: https://github.com/madebydavid/
 * License: GPL2.0+ 
 */

function MadeByDavid_WordpressSingleCategoryPosts_Autoloader($classname) {
    
    if (false === stripos($classname, "MadeByDavid")) return;
    
    if (!file_exists($filename = dirname(__FILE__) . '/src/' . str_replace('\\', '/', $classname) . '.php')) return;
    
    require $filename;
}
    
/* this is a hack - TODO: think about how to handle composer'd deps of a WP plugin */
require_once WP_CONTENT_DIR . '/../vendor/autoload.php';

define('WORDPRESS_SINGLECATEGORYPOSTS_DIR', dirname(__FILE__));
define('WORDPRESS_SINGLECATEGORYPOSTS_URL', plugin_dir_url(__FILE__));

spl_autoload_register('MadeByDavid_WordpressSingleCategoryPosts_Autoloader');

$GLOBALS['\MadeByDavid\WordpressSingleCategoryPosts\Plugin'] = new \MadeByDavid\WordpressSingleCategoryPosts\Plugin();
