<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_61e6b10aa831e',
    'title' => __('Entryscape', 'modularity-entryscape'),
    'fields' => array(
        0 => array(
            'key' => 'field_61e9527db6ba8',
            'label' => __('Viewtype', 'modularity-entryscape'),
            'name' => 'entryscape_viewtype',
            'type' => 'button_group',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'facet' => __('Facet view', 'modularity-entryscape'),
                'single' => __('Single view', 'modularity-entryscape'),
            ),
            'allow_null' => 0,
            'default_value' => 'facet',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        1 => array(
            'key' => 'field_61e6b13012e5e',
            'label' => __('Entryscape store url', 'modularity-entryscape'),
            'name' => 'entryscape_store',
            'type' => 'url',
            'instructions' => __('Add an url to your entryscape installation https://subdomain.domain.se. Leave out the folder part from configuration.', 'modularity-entryscape'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
        ),
        2 => array(
            'key' => 'field_61e6b19db04a7',
            'label' => __('Context ID', 'modularity-entryscape'),
            'name' => 'entryscape_context_id',
            'type' => 'number',
            'instructions' => '',
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => '',
        ),
        3 => array(
            'key' => 'field_61e6b1d0b04a8',
            'label' => __('Click URL', 'modularity-entryscape'),
            'name' => 'entryscape_click_url',
            'type' => 'page_link',
            'instructions' => __('Select a target page where you have your single-view module attached.', 'modularity-entryscape'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => '',
            'taxonomy' => '',
            'allow_null' => 0,
            'allow_archives' => 0,
            'multiple' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-entryscape',
            ),
        ),
        1 => array(
            0 => array(
                'param' => 'block',
                'operator' => '==',
                'value' => 'acf/entryscape',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
));
}