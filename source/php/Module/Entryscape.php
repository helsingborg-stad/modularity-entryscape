<?php

namespace ModularityEntryscape\Module;

use ModularityEntryscape\Helper\CacheBust;

/**
 * Class Entryscape
 * @package ModularityContact\Module
 */
class Entryscape extends \Modularity\Module
{
    public $slug = 'entryscape';
    public $supports = array();

    public function init()
    {
        $this->nameSingular = __("Entryscape Facet", 'modularity-entryscape');
        $this->namePlural = __("Entryscape Facets", 'modularity-entryscape');
        $this->description = __("Entryscape view for facetting.", 'modularity-entryscape');
    }

    /**
     * Data array
     * @return array $data
     */
    public function data(): array
    {
        $data = array();

        //Append field config
        $data = array_merge($data, (array) \Modularity\Helper\FormatObject::camelCase(
            get_fields($this->ID)
        ));

        //Get slug of clickurl
        $data['entryscapeClickUrl'] = $this->getSlugFromUrl(
            $data['entryscapeClickUrl']
        );

        //Remove slashes
        $data['entryscapeStore'] = $this->trimSlashes(
            $data['entryscapeStore']
        );

        //Translations
        $data['lang'] = (object) array(
            'numberOfResults'           => __("results returned on your query.", 'modularity-entryscape'),
            'noResults'                 => __("No dataset is matching your search query.", 'modularity-entryscape'),
            'numberOfItemsInDirectory'  => __("items in directory.", 'modularity-entryscape'),
            'displaying'                => __("Displaying all", 'modularity-entryscape'),
            'metadataHeader'            => __("Dataset details", 'modularity-entryscape'),
            'dataPreview'               => __("Data preview", 'modularity-entryscape'),
            'showMore'                  => __("Show more", 'modularity-entryscape'),
            'showLess'                  => __("Show less", 'modularity-entryscape'),
            'moreInfo'                  => __("More information", 'modularity-entryscape'),
            'lessInfo'                  => __("Less information", 'modularity-entryscape'),
        );

        return $data;
    }

    /**
     * Get slug from url
     *
     * @param string $url
     * @return string
     */
    private function getSlugFromUrl($url): string
    {
        return $this->trimSlashes(
            parse_url($url, PHP_URL_PATH)
        );
    }

    /**
     * Trim slashes
     *
     * @param string $url
     * @return string
     */
    private function trimSlashes($string): string
    {
        return ltrim(
            rtrim($string, '/'),
            '/'
        );
    }

    /**
     * Blade Template
     * @return string
     */
    public function template(): string
    {
        return "view.blade.php";
    }

    /**
     * Style - Register & adding css
     * @return void
     */
    public function style()
    {
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
     * Available "magic" methods for modules:
     * init()            What to do on initialization
     * data()            Use to send data to view (return array)
     * style()           Enqueue style only when module is used on page
     * script            Enqueue script only when module is used on page
     * adminEnqueue()    Enqueue scripts for the module edit/add page in admin
     * template()        Return the view template (blade) the module should use when displayed
     */
}
