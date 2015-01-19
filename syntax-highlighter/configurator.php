<?php

$sh_config = File::open(PLUGIN . DS . basename(__DIR__) . DS . 'states' . DS . 'config.txt')->unserialize();

$sword = array(
    '1c' => '1C',
    'actionscript' => 'ActionScript',
    'apache' => 'Apache',
    'applescript' => 'AppleScript',
    'asciidoc' => 'AsciiDoc',
    'aspectj' => 'AspectJ',
    'autohotkey' => 'AutoHotkey',
    'avrasm' => 'AVR Assembler',
    'axapta' => 'Axapta',
    'bash' => 'Bash',
    'brainfuck' => 'Brainfuck',
    'capnproto' => 'Cap&rsquo;n Proto',
    'clojure' => 'Clojure',
    'clojure-repl' => 'Clojure REPL',
    'cmake' => 'CMake',
    'coffeescript' => 'CoffeeScript',
    'cpp' => 'C++',
    'cs' => 'C#',
    'css' => 'CSS',
    'd' => 'D',
    'dart' => 'Dart',
    'delphi' => 'Delphi',
    'diff' => 'Diff',
    'django' => 'Django',
    'dos' => 'DOS .bat',
    'dust' => 'Dust',
    'elixir' => 'Elixir',
    'erb' => 'ERB (Embedded Ruby)',
    'erlang' => 'Erlang',
    'erlang-repl' => 'Erlang REPL',
    'fix' => 'FIX',
    'fsharp' => 'F#',
    'gcode' => 'G-code (ISO 6983)',
    'gherkin' => 'Gherkin',
    'glsl' => 'GLSL',
    'go' => 'Go',
    'gradle' => 'Gradle',
    'groovy' => 'Groovy',
    'haml' => 'Haml',
    'handlebars' => 'Handlebars',
    'haskell' => 'Haskell',
    'haxe' => 'Haxe',
    'http' => 'HTTP',
    'ini' => 'Ini',
    'java' => 'Java',
    'javascript' => 'JavaScript',
    'json' => 'JSON',
    'lasso' => 'Lasso',
    'less' => 'Less',
    'lisp' => 'Lisp',
    'livecodeserver' => 'LiveCode',
    'livescript' => 'LiveScript',
    'lua' => 'Lua',
    'makefile' => 'Makefile',
    'markdown' => 'Markdown',
    'mathematica' => 'Mathematica',
    'matlab' => 'Matlab',
    'mel' => 'MEL',
    'mercury' => 'Mercury',
    'mizar' => 'Mizar',
    'monkey' => 'Monkey',
    'nginx' => 'Nginx',
    'nimrod' => 'Nimrod',
    'nix' => 'Nix',
    'nsis' => 'NSIS',
    'objectivec' => 'Objective C',
    'ocaml' => 'OCaml',
    'oxygene' => 'Oxygene',
    'parser3' => 'Parser3',
    'perl' => 'Perl',
    'php' => 'PHP',
    'powershell' => 'PowerShell',
    'processing' => 'Processing',
    'profile' => 'Python profile',
    'protobuf' => 'Protocol Buffers',
    'puppet' => 'Puppet',
    'python' => 'Python',
    'q' => 'Q',
    'r' => 'R',
    'rib' => 'RenderMan RIB',
    'roboconf' => 'Roboconf',
    'rsl' => 'RenderMan RSL',
    'ruby' => 'Ruby',
    'ruleslanguage' => 'Oracle Rules Language',
    'rust' => 'Rust',
    'scala' => 'Scala',
    'scheme' => 'Scheme',
    'scilab' => 'Scilab',
    'scss' => 'SCSS',
    'smali' => 'Smali',
    'smalltalk' => 'Smalltalk',
    'sml' => 'SML',
    'sql' => 'SQL',
    'stata' => 'Stata',
    'step21' => 'STEP Part 21 (ISO 10303-21)',
    'stylus' => 'Stylus',
    'swift' => 'Swift',
    'tcl' => 'Tcl',
    'tex' => 'TeX',
    'thrift' => 'Thrift',
    'twig' => 'Twig',
    'typescript' => 'TypeScript',
    'vala' => 'Vala',
    'vbnet' => 'VB.NET',
    'vbscript' => 'VBScript',
    'vbscript-html' => 'VBScript in HTML',
    'verilog' => 'Verilog',
    'vhdl' => 'VHDL',
    'vim' => 'Vim Script',
    'x86asm' => 'Intel x86 Assembly',
    'xl' => 'XL',
    'xml' => 'HTML, XML'
);

$shell = array(
    'arta' => 'Arta',
    'ascetic' => 'Ascetic',
    'atelier-dune.dark' => 'Atelier Dun &ndash; Dark',
    'atelier-dune.light' => 'Atelier Dun &ndash; Light',
    'atelier-forest.dark' => 'Atelier Forest &ndash; Dark',
    'atelier-forest.light' => 'Atelier Forest &ndash; Light',
    'atelier-heath.dark' => 'Atelier Heath &ndash; Dark',
    'atelier-heath.light' => 'Atelier Heath &ndash; Light',
    'atelier-lakeside.dark' => 'Atelier Lakeside &ndash; Dark',
    'atelier-lakeside.light' => 'Atelier Lakeside &ndash; Light',
    'atelier-seaside.dark' => 'Atelier Seaside &ndash; Dark',
    'atelier-seaside.light' => 'Atelier Seaside &ndash; Light',
    'brown_paper' => 'Brown Paper',
    'codepen-embed' => 'Codepen.io Embed',
    'color-brewer' => 'Colorbrewer',
    'dark' => 'Dark',
    'default' => 'Default',
    'docco' => 'Docco',
    'far' => 'FAR',
    'foundation' => 'Foundation',
    'github' => 'GitHub',
    'googlecode' => 'Google Code',
    'hybrid' => 'Hybrid',
    'idea' => 'IDEA',
    'ir_black' => 'IR Black',
    'kimbie.dark' => 'Kimbie &ndash; Dark',
    'kimbie.light' => 'Kimbie &ndash; Light',
    'magula' => 'Magula',
    'mono-blue' => 'Mono Blue',
    'monokai' => 'Monokai',
    'monokai_sublime' => 'Monokai Sublime',
    'obsidian' => 'Obsidian',
    'paraiso.dark' => 'Para&#237;so &ndash; Dark',
    'paraiso.light' => 'Para&#237;so &ndash; Light',
    'pojoaque' => 'Pojoaque',
    'railscasts' => 'Railscasts',
    'rainbow' => 'Rainbow',
    'school_book' => 'School Book',
    'solarized_dark' => 'Solarized &ndash; Dark',
    'solarized_light' => 'Solarized &ndash; Light',
    'sunburst' => 'Sunburst',
    'tomorrow' => 'Tomorrow',
    'tomorrow-night' => 'Tomorrow Night',
    'tomorrow-night-blue' => 'Tomorrow Night Blue',
    'tomorrow-night-bright' => 'Tomorrow Night Bright',
    'tomorrow-night-eighties' => 'Tomorrow Night Eighties',
    'vs' => 'Visual Studio',
    'xcode' => 'XCode',
    'zenburn' => 'Zenburn'
);

$lang = isset($sh_config['languages']) ? $sh_config['languages'] : array();
$lang_all = count($sword);
$lang_checked = count($lang);

?>
<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <input name="token" type="hidden" value="<?php echo $token; ?>">
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_languages; ?> (<?php echo $lang_checked . ' ' . strtolower($speak->of) . ' ' . $lang_all; ?>)</legend>
    <p><button class="btn btn-action btn-small" id="btn-check-all"><?php echo $speak->plugin_sh_title_check; ?></button> <button class="btn btn-action btn-small" id="btn-uncheck-all"><?php echo $speak->plugin_sh_title_uncheck; ?></button></p>
    <div class="grid-group no-gap">
    <?php foreach(Mecha::eat($sword)->order('ASC')->vomit() as $sword_k => $sword_n): ?>
    <?php if(File::exist(PLUGIN . DS . basename(__DIR__) . DS . 'cargo' . DS . 'sword' . DS . 'languages' . DS . $sword_k . '.js')): ?>
    <div class="grid span-2"><label><input name="languages[]" type="checkbox" value="<?php echo $sword_k; ?>"<?php echo in_array($sword_k, $lang) ? ' checked' : ""; ?>> <span><?php echo $sword_n; ?></span></label></div>
    <?php endif; ?>
    <?php endforeach; ?>
    </div>
  </fieldset>
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_style_config; ?></legend>
    <div class="p sh-preview">
      <div class="tab-area">
        <a class="tab active" href="#tab-content-1-1"><?php echo $speak->plugin_sh_tab->html; ?></a>
        <a class="tab" href="#tab-content-1-2"><?php echo $speak->plugin_sh_tab->css; ?></a>
        <a class="tab" href="#tab-content-1-3"><?php echo $speak->plugin_sh_tab->js; ?></a>
      </div>
      <div class="tab-content-area">
        <div class="tab-content" id="tab-content-1-1">
<pre class="hljs-block"><code class="xml"><span class="hljs-doctype">&lt;!DOCTYPE html&gt;</span>
<span class="hljs-tag">&lt;<span class="hljs-title">html</span> <span class="hljs-attribute">dir</span>=<span class="hljs-value">"ltr"</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">head</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">meta</span> <span class="hljs-attribute">charset</span>=<span class="hljs-value">"utf-8"</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">title</span>&gt;</span>Test Page<span class="hljs-tag">&lt;/<span class="hljs-title">title</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">head</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">body</span>&gt;</span>
    <span class="hljs-comment">&lt;!-- a comment --&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"container"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"cf"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h1</span>&gt;</span>Lorem Ipsum<span class="hljs-tag">&lt;/<span class="hljs-title">h1</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">html</span>&gt;</span></code></pre>
        </div>
        <div class="tab-content hidden" id="tab-content-1-2">
<pre class="hljs-block"><code class="css"><span class="hljs-at_rule"><span class="hljs-comment">/* a comment */</span>
@<span class="keyword">import</span> <span class="hljs-function">url(<span class="hljs-string">'../reset.css'</span>)</span></span>;

<span class="hljs-tag">body</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">font</span>: <span class="hljs-value">normal normal <span class="hljs-number">13</span>px/<span class="hljs-number">1.4</span> Helmet,FreeSans,Sans-Serif</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">background-color</span>: <span class="hljs-value"><span class="hljs-hexcolor">#3f3f3f</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">color</span>: <span class="hljs-value">white</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-id">#container</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">background</span>: <span class="hljs-value"><span class="hljs-hexcolor">#fff</span> <span class="hljs-function">url(<span class="hljs-string">'img/bg.png'</span>)</span> repeat-x <span class="hljs-number">0</span> <span class="hljs-number">0</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">float</span>: <span class="hljs-value">left</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">width</span>: <span class="hljs-value"><span class="hljs-number">600</span>px</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">margin</span>: <span class="hljs-value"><span class="hljs-number">0</span> auto</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-class">.cf</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">display</span>: <span class="hljs-value">block</span></span>;
  <span class="hljs-rule">*<span class="hljs-attribute">zoom</span>: <span class="hljs-value"><span class="hljs-number">1</span></span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-class">.cf</span><span class="hljs-pseudo">:before</span>,
<span class="hljs-class">.cf</span><span class="hljs-pseudo">:after</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">content</span>: <span class="hljs-value"><span class="hljs-string">" "</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">display</span>: <span class="hljs-value">table</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">clear</span>: <span class="hljs-value">both</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">input</span><span class="hljs-attr_selector">[type="text"]</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">display</span>: <span class="hljs-value">inline-block</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">width</span>: <span class="hljs-value"><span class="hljs-number">200</span>px</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">input</span><span class="hljs-attr_selector">[type="text"]</span><span class="hljs-pseudo">:focus</span> <span class="hljs-rules">{<span class="hljs-rule"><span class="hljs-attribute">background-color</span>: <span class="hljs-value"><span class="hljs-hexcolor">#ffa</span></span></span></span>}</code></pre>
        </div>
        <div class="tab-content hidden" id="tab-content-1-3">
<pre class="hljs-block"><code class="hljs-javascript"><span class="hljs-comment">/**
 * Example Comment
 * ---------------
 */</span>
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">initHighlighting</span><span class="hljs-params">(a, b, c)</span> {</span>
    <span class="hljs-keyword">var</span> location = <span class="hljs-string">'N/A'</span>;
    <span class="hljs-keyword">var</span> data = {
        <span class="hljs-string">'title'</span>: <span class="hljs-string">'Test Page'</span>,
        <span class="hljs-string">'total'</span>: <span class="hljs-number">400</span>,
        <span class="hljs-string">'average'</span>: .<span class="hljs-number">5</span>
    };
    location.replace(<span class="hljs-regexp">/\/\*([\s\S]+?)\*\//g</span>, <span class="hljs-string">""</span>);
    alert(<span class="hljs-string">'&lt;br&gt;'</span> + location + (data.average * <span class="hljs-number">4</span>));
}

<span class="hljs-comment">// Run!</span>
initHighlighting();</code></pre>
        </div>
      </div>
    </div>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_skin; ?></span>
      <span class="grid span-5">
        <select name="skin" class="input-block" data-url-home="<?php echo $config->url; ?>" data-url-dir="<?php echo basename(__DIR__); ?>">
          <?php foreach(Mecha::eat($shell)->order('ASC')->vomit() as $shell_k => $shell_n): ?>
          <?php if(File::exist(PLUGIN . DS . basename(__DIR__) . DS . 'cargo' . DS . 'shell' . DS . $shell_k . '.css')): ?>
          <option value="<?php echo $shell_k; ?>"<?php echo $sh_config['skin'] == $shell_k ? ' selected' : ""; ?>><?php echo $shell_n; ?></option>
          <?php endif; ?>
          <?php endforeach; ?>
        </select>
      </span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_class_prefix; ?></span>
      <span class="grid span-5"><input name="class_prefix" type="text" class="input-block" value="<?php echo $sh_config['class_prefix']; ?>" placeholder="hljs-"></span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_css_extra; ?></span>
      <span class="grid span-5"><textarea name="css" class="input-block code"><?php echo $sh_config['css']; ?></textarea></span>
    </label>
  </fieldset>
  <p><button class="btn btn-action" type="submit"><i class="fa fa-check-circle"></i> <?php echo $speak->update; ?></button></p>
</form>