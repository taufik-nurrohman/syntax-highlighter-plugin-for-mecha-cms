<?php

// Load the configuration file
$states = unserialize(File::open(PLUGIN . DS . 'syntax-highlighter' . DS . 'states' . DS . 'config.txt')->read());

// Specify the language file path
if( ! $language = File::exist(PLUGIN . DS . 'syntax-highlighter' . DS . 'languages' . DS . $config->language . DS . 'speak.txt')) {
    $language = PLUGIN . DS . 'syntax-highlighter' . DS . 'languages' . DS . 'en_US' . DS . 'speak.txt';
}

// Merge the plugin language items to `Config::speak()`
Config::merge('speak', Text::toArray(File::open($language)->read(), ':', '  '));

// Apply filters
Filter::add('content', function($content) use($states) {
    return preg_replace(
        array(
            '#<pre>#',
            '#<code class="html">#'
        ),
        array(
            '<pre class="' . $states['class_prefix'] . 'block">',
            '<code class="xml">'
        ),
    $content);
});

// Include the syntax highlighter's CSS
Weapon::add('shell_after', function() use($config) {
    if($config->url_current != $config->url . '/' . $config->manager->slug . '/plugin/syntax-highlighter') {
        echo Asset::stylesheet('cabinet/plugins/syntax-highlighter/highlight.min.css');
    }
}, 11);

// Include the syntax highlighter's JavaScript
Weapon::add('sword_after', function() use($states) {
    $config = Config::get();
    echo Asset::script('cabinet/plugins/syntax-highlighter/highlight.min.js');
    if($config->url_current == $config->url . '/' . $config->manager->slug . '/plugin/syntax-highlighter') {
        echo Asset::script('cabinet/plugins/syntax-highlighter/sword/preview.js');
    }
    if($config->page_type == 'manager') {
        echo '<script>
DASHBOARD.add(\'on_preview_complete\', function() {
    if (typeof hljs != "undefined") {
        var pre = document.getElementsByTagName(\'pre\');
        hljs.configure({
            classPrefix: \'' . $states['class_prefix'] . '\',
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

// Run the syntax highlighter
Weapon::add('cargo_after', function() use($states) {
    echo '<script>
hljs.configure({
    classPrefix: \'' . $states['class_prefix'] . '\',
    tabReplace: \'    \'
});
hljs.initHighlighting();
</script>';
}, 11);


/**
 * Plugin Updater
 * --------------
 */

Route::accept($config->manager->slug . '/plugin/syntax-highlighter/update', function() use($config, $speak, $states) {
    if($request = Request::post()) {
        Guardian::checkToken($request['token']);
        $data = trim(File::open(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight' . DS . 'sword' . DS . 'core.js')->read());
        if( ! empty($request['languages'])) {
            foreach($request['languages'] as $language) {
                $parts = explode('*/', File::open(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight' . DS . 'sword' . DS . 'languages' . DS . $language . '.js')->read(), 2);
                $data .= trim(preg_replace('#\/\*([\s\S]+?)\*\/#', "", $parts[1]));
            }
        }
        unset($request['token']); // Remove token from request array
        $skin = str_replace('.hljs-', '.' . $request['class_prefix'], File::open(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight' . DS . 'shell' . DS . $request['skin'] . '.css')->read());
        File::write($data)->saveTo(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight.min.js');
        File::write($skin . $request['css'])->saveTo(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight.min.css');
        File::write(serialize($request))->saveTo(PLUGIN . DS . 'syntax-highlighter' . DS . 'states' . DS . 'config.txt');
        Notify::success(Config::speak('notify_success_updated', array($speak->plugin)));
        Guardian::kick(dirname($config->url_current));
    }
});