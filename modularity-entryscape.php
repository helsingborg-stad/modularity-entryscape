<?php

/**
 * Plugin Name:       Modularity entryscape
 * Plugin URI:        https://github.com/helsingborg-stad/modularity-entryscape
 * Description:       Display entryscape on your page
 * Version: 4.0.1
 * Author:            Sebastian Thulin
 * Author URI:        https://github.com/sebastianthulin
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       mod-entryscape
 * Domain Path:       /languages
 */

 // Protect agains direct file access
if (! defined('WPINC')) {
    die;
}

define('MODULARITYENTRYSCAPE_PATH', plugin_dir_path(__FILE__));
define('MODULARITYENTRYSCAPE_URL', plugins_url('', __FILE__));
define('MODULARITYENTRYSCAPE_TEMPLATE_PATH', MODULARITYENTRYSCAPE_PATH . 'templates/');
define('MODULARITYENTRYSCAPE_VIEW_PATH', MODULARITYENTRYSCAPE_PATH . 'views/');
define('MODULARITYENTRYSCAPE_MODULE_VIEW_PATH', plugin_dir_path(__FILE__) . 'source/php/Module/views');
define('MODULARITYENTRYSCAPE_MODULE_PATH', MODULARITYENTRYSCAPE_PATH . 'source/php/Module/');

load_plugin_textdomain('modularity-entryscape', false, plugin_basename(dirname(__FILE__)) . '/languages');

// Autoload from plugin
if (file_exists(MODULARITYENTRYSCAPE_PATH . 'vendor/autoload.php')) {
    require_once MODULARITYENTRYSCAPE_PATH . 'vendor/autoload.php';
}
require_once MODULARITYENTRYSCAPE_PATH . 'Public.php';

// Acf auto import and export
add_action('acf/init', function () {
    $acfExportManager = new \AcfExportManager\AcfExportManager();
    $acfExportManager->setTextdomain('modularity-entryscape');
    $acfExportManager->setExportFolder(MODULARITYENTRYSCAPE_PATH . 'source/php/AcfFields/');
    $acfExportManager->autoExport(array(
        'facet' => 'group_61e6b10aa831e',
    ));
    $acfExportManager->import();
});

// Modularity 3.0 ready - ViewPath for Component library
add_filter('/Modularity/externalViewPath', function ($arr) {
    $arr['mod-entryscape'] = MODULARITYENTRYSCAPE_MODULE_VIEW_PATH;
    return $arr;
}, 10, 3);

// Start application
new ModularityEntryscape\App();
