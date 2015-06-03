<?php

// Load the configuration data
$sh_config = File::open(PLUGIN . DS . basename(__DIR__) . DS . 'states' . DS . 'config.txt')->unserialize();

// Register the filters
Filter::add('content', function($content) use($config, $sh_config) {
    if($config->html_parser) {
        return str_replace('<pre>', '<pre class="' . $sh_config['class_prefix'] . 'block">', $content);
    }
});

// Include syntax highlighter's CSS
Weapon::add('shell_after', function() use($config) {
    if($config->url_path !== $config->manager->slug . '/plugin/' . basename(__DIR__)) {
        echo Asset::stylesheet('cabinet/plugins/' . basename(__DIR__) . '/highlight.min.css');
    }
}, 11);

// Include syntax highlighter's JavaScript
Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($sh_config) {
    echo Asset::javascript('cabinet/plugins/' . basename(__DIR__) . '/highlight.min.js');
}, 11);