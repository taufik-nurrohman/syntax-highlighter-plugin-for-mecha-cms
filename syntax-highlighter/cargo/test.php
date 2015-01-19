<?php

$js_results = array();
$js_results_new = array();
foreach(glob('sword/*.js') as $file) {
	$content = file_get_contents($file);
	preg_match('#\/\*([\s\S]+?)\*\/#', $content, $matches);
	preg_match('#Language: *(.*?) *[\r\n]#', $matches[1], $lang);
	$js_results[basename($file, '.js')] = $lang[1];
}

ksort($js_results);

var_export($js_results);

// -------

$css_results = array();
$css_str_dump = '<link rel="stylesheet" title="Default" href="styles/default.css">
<link rel="alternate stylesheet" title="Dark" href="styles/dark.css">
<link rel="alternate stylesheet" title="FAR" href="styles/far.css">
<link rel="alternate stylesheet" title="IDEA" href="styles/idea.css">
<link rel="alternate stylesheet" title="Sunburst" href="styles/sunburst.css">
<link rel="alternate stylesheet" title="Zenburn" href="styles/zenburn.css">
<link rel="alternate stylesheet" title="Visual Studio" href="styles/vs.css">
<link rel="alternate stylesheet" title="Ascetic" href="styles/ascetic.css">
<link rel="alternate stylesheet" title="Magula" href="styles/magula.css">
<link rel="alternate stylesheet" title="GitHub" href="styles/github.css">
<link rel="alternate stylesheet" title="Google Code" href="styles/googlecode.css">
<link rel="alternate stylesheet" title="Brown Paper" href="styles/brown_paper.css">
<link rel="alternate stylesheet" title="School Book" href="styles/school_book.css">
<link rel="alternate stylesheet" title="IR Black" href="styles/ir_black.css">
<link rel="alternate stylesheet" title="Solarized - Dark" href="styles/solarized_dark.css">
<link rel="alternate stylesheet" title="Solarized - Light" href="styles/solarized_light.css">
<link rel="alternate stylesheet" title="Arta" href="styles/arta.css">
<link rel="alternate stylesheet" title="Monokai" href="styles/monokai.css">
<link rel="alternate stylesheet" title="Monokai Sublime" href="styles/monokai_sublime.css">
<link rel="alternate stylesheet" title="XCode" href="styles/xcode.css">
<link rel="alternate stylesheet" title="Pojoaque" href="styles/pojoaque.css">
<link rel="alternate stylesheet" title="Rainbow" href="styles/rainbow.css">
<link rel="alternate stylesheet" title="Tomorrow" href="styles/tomorrow.css">
<link rel="alternate stylesheet" title="Tomorrow Night" href="styles/tomorrow-night.css">
<link rel="alternate stylesheet" title="Tomorrow Night Bright" href="styles/tomorrow-night-bright.css">
<link rel="alternate stylesheet" title="Tomorrow Night Blue" href="styles/tomorrow-night-blue.css">
<link rel="alternate stylesheet" title="Tomorrow Night Eighties" href="styles/tomorrow-night-eighties.css">
<link rel="alternate stylesheet" title="Railscasts" href="styles/railscasts.css">
<link rel="alternate stylesheet" title="Obsidian" href="styles/obsidian.css">
<link rel="alternate stylesheet" title="Docco" href="styles/docco.css">
<link rel="alternate stylesheet" title="Mono Blue" href="styles/mono-blue.css">
<link rel="alternate stylesheet" title="Foundation" href="styles/foundation.css">
<link rel="alternate stylesheet" title="Atelier Dun - Dark" href="styles/atelier-dune.dark.css">
<link rel="alternate stylesheet" title="Atelier Dun - Light" href="styles/atelier-dune.light.css">
<link rel="alternate stylesheet" title="Atelier Forest - Dark" href="styles/atelier-forest.dark.css">
<link rel="alternate stylesheet" title="Atelier Forest - Light" href="styles/atelier-forest.light.css">
<link rel="alternate stylesheet" title="Atelier Heath - Dark" href="styles/atelier-heath.dark.css">
<link rel="alternate stylesheet" title="Atelier Heath - Light" href="styles/atelier-heath.light.css">
<link rel="alternate stylesheet" title="Atelier Lakeside - Dark" href="styles/atelier-lakeside.dark.css">
<link rel="alternate stylesheet" title="Atelier Lakeside - Light" href="styles/atelier-lakeside.light.css">
<link rel="alternate stylesheet" title="Atelier Seaside - Dark" href="styles/atelier-seaside.dark.css">
<link rel="alternate stylesheet" title="Atelier Seaside - Light" href="styles/atelier-seaside.light.css">
<link rel="alternate stylesheet" title="Paraíso - Dark" href="styles/paraiso.dark.css">
<link rel="alternate stylesheet" title="Paraíso - Light" href="styles/paraiso.light.css">
<link rel="alternate stylesheet" title="Colorbrewer" href="styles/color-brewer.css">
<link rel="alternate stylesheet" title="Codepen.io Embed" href="styles/codepen-embed.css">
<link rel="alternate stylesheet" title="Kimbie - Dark" href="styles/kimbie.dark.css">
<link rel="alternate stylesheet" title="Kimbie - Light" href="styles/kimbie.light.css">
<link rel="alternate stylesheet" title="Hybrid" href="styles/hybrid.css">';
preg_match_all('#title="(.*?)"#', $css_str_dump, $matches_1);
preg_match_all('#href="styles\/(.*?)\.css"#', $css_str_dump, $matches_2);

foreach($matches_1[1] as $i => $match) {
	$css_results[$matches_2[1][$i]] = str_replace(array(' - ', 'í'), array(' &ndash; ', '&#237;'), $match);
}

ksort($css_results);

var_export($css_results);