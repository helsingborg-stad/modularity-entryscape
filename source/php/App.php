<?php

namespace ModularityEntryscape;

use ModularityEntryscape\Helper\CacheBust;

class App
{
    public function __construct()
    {
        //Register module
        add_action('init', array($this, 'registerModule'));
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
}
