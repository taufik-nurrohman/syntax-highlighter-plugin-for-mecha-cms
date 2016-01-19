<?php

// Load the configuration data
$sh_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize();

// Register the filters
if($config->html_parser->active !== false && $config->html_parser->active !== 'HTML') {
    Filter::add('content', function($content) use($sh_config) {
        return str_replace('<pre>', '<pre class="' . $sh_config['class_prefix'] . 'block">', $content);
    });
}

// Include syntax highlighter's CSS
Weapon::add('shell_after', function() use($config) {
    if($config->url_path !== $config->manager->slug . '/plugin/' . File::B(__DIR__)) {
        echo Asset::stylesheet(__DIR__ . DS . 'highlight.min.css');
    }
}, 11);

// Include syntax highlighter's JavaScript
Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($sh_config) {
    echo Asset::javascript(__DIR__ . DS . 'highlight.min.js');
}, 11);