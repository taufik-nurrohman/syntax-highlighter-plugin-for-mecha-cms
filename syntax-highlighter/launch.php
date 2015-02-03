<?php

// Load the configuration data
$sh_config = File::open(PLUGIN . DS . basename(__DIR__) . DS . 'states' . DS . 'config.txt')->unserialize();

// Register the filters
Filter::add('content', function($content) use($sh_config) {
    return preg_replace(
        array(
            '#<pre>#',
            '#<code class="html">#'
        ),
        array(
            '<pre class="' . $sh_config['class_prefix'] . 'block">',
            '<code class="xml">'
        ),
    $content);
});

// Include syntax highlighter's CSS
Weapon::add('shell_after', function() use($config) {
    if($config->url_current != $config->url . '/' . $config->manager->slug . '/plugin/' . basename(__DIR__)) {
        echo Asset::stylesheet('cabinet/plugins/' . basename(__DIR__) . '/highlight.min.css');
    } else {
        echo '<style>.hljs-block{background:none;padding:.5em;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;text-shadow:none;letter-spacing:0;font-style:normal}.hljs-block code{font:inherit;color:inherit;text-shadow:none}</style>';
    }
}, 11);

// Include syntax highlighter's JavaScript
Weapon::add('SHIPMENT_REGION_BOTTOM', function() use($sh_config) {
    $config = Config::get();
    echo Asset::javascript('cabinet/plugins/' . basename(__DIR__) . '/highlight.min.js');
    if($config->url_current == $config->url . '/' . $config->manager->slug . '/plugin/' . basename(__DIR__)) {
        echo Asset::javascript('cabinet/plugins/' . basename(__DIR__) . '/sword/backend.js');
    }
    if(preg_match('#^' . $config->url . '\/' . $config->manager->slug . '\/(article|page)\/(ignite|repair)#', $config->url_current)) {
        echo '<script>
DASHBOARD.add(\'on_preview_complete\', function() {
    if (typeof hljs != "undefined") {
        var pre = document.getElementsByTagName(\'pre\');
        hljs.configure({
            classPrefix: \'' . $sh_config['class_prefix'] . '\',
            tabReplace: \'    \'
        });
        for (var i = 0, len = pre.length; i < len; ++i) {
            hljs.highlightBlock(pre[i]);
        }
    }
});
</script>';
    }
}, 11);


/**
 * Plugin Updater
 * --------------
 */

Route::accept($config->manager->slug . '/plugin/' . basename(__DIR__) . '/update', function() use($config, $speak, $sh_config) {
    if($request = Request::post()) {
        Guardian::checkToken($request['token']);
        $data = trim(File::open(PLUGIN . DS . basename(__DIR__) . DS . 'cargo' . DS . 'sword' . DS . 'core.js')->read());
        if(isset($request['languages']) && ! empty($request['languages'])) {
            foreach($request['languages'] as $language) {
                $parts = explode('*/', File::open(PLUGIN . DS . basename(__DIR__) . DS . 'cargo' . DS . 'sword' . DS . 'languages' . DS . $language . '.js')->read(), 2);
                $data .= 'hljs.registerLanguage("' . $language . '",' . trim(preg_replace('#\/\*([\s\S]+?)\*\/#', "", $parts[1])) . ');';
            }
            $data .= 'hljs.configure({classPrefix:\'' . $sh_config['class_prefix'] . '\',tabReplace:\'    \'});hljs.initHighlighting();';
        }
        unset($request['token']); // Remove token from request array
        $skin = str_replace('.hljs-', '.' . $request['class_prefix'], File::open(PLUGIN . DS . basename(__DIR__) . DS . 'cargo' . DS . 'shell' . DS . $request['skin'] . '.css')->read());
        File::write($data)->saveTo(PLUGIN . DS . basename(__DIR__) . DS . 'highlight.min.js');
        File::write($skin . $request['css'])->saveTo(PLUGIN . DS . basename(__DIR__) . DS . 'highlight.min.css');
        File::serialize($request)->saveTo(PLUGIN . DS . basename(__DIR__) . DS . 'states' . DS . 'config.txt', 0600);
        Notify::success(Config::speak('notify_success_updated', array($speak->plugin)));
        Guardian::kick(dirname($config->url_current));
    }
});