<?php

namespace ModularityEntryscape;

use ModularityEntryscape\Helper\CacheBust;

class App
{
    public function __construct()
    {
        //Register module
        add_action('plugins_loaded', array($this, 'registerModule'));

        // Add view paths
        add_filter('Municipio/blade/view_paths', array($this, 'addViewPaths'), 1, 1);

        //Register custom css
        wp_register_style(
            'modularity_entryscape',
            MODULARITYENTRYSCAPE_URL . '/dist/' . CacheBust::name('css/modularity-entryscape.css'),
            null,
            '1.0.0'
        );

        //Enqueue
        wp_enqueue_style('modularity_entryscape');
    }

    /**
     * Register the module
     * @return void
     */
    public function registerModule()
    {
        if (function_exists('modularity_register_module')) {
            modularity_register_module(
                MODULARITYENTRYSCAPE_MODULE_PATH,
                'Entryscape'
            );
        }
    }

    /**
     * Add searchable blade template paths
     * @param array  $array Template paths
     * @return array        Modified template paths
     */
    public function addViewPaths($array)
    {
        // If child theme is active, insert plugin view path after child views path.
        if (is_child_theme()) {
            array_splice($array, 2, 0, array(MODULARITYENTRYSCAPE_VIEW_PATH));
        } else {
            // Add view path first in the list if child theme is not active.
            array_unshift($array, MODULARITYENTRYSCAPE_VIEW_PATH);
        }

        return $array;
    }
}
