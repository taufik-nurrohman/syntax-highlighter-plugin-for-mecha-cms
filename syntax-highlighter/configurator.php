<form class="form-plugin" action="<?php echo $config->url_current; ?>/update" method="post">
  <input name="token" type="hidden" value="<?php echo Guardian::makeToken(); ?>">
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_languages; ?></legend>
    <div class="grid-group">
      <div class="grid span-6 grid-group no-gap">
      <?php

      $states = unserialize(File::open(PLUGIN . DS . 'syntax-highlighter' . DS . 'states' . DS . 'config.txt')->read());

      $languages = array(
          'Apache' => 'apache',
          'Bash' => 'bash',
          'C#' => 'cs',
          'C++' => 'cpp',
          'CSS' => 'css',
          'CoffeeScript' => 'coffeescript',
          'Diff' => 'diff',
          'HTML, XML' => 'xml',
          'HTTP' => 'http',
          'Ini' => 'ini',
          'JSON' => 'json',
          'Java' => 'java',
          'JavaScript' => 'javascript',
          'Makefile' => 'makefile',
          'Markdown' => 'markdown',
          'Nginx' => 'nginx',
          'Objective C' => 'objectivec',
          'PHP' => 'php',
          'Perl' => 'perl',
          'Python' => 'python',
          'Ruby' => 'ruby',
          'SQL' => 'sql',
          '1C' => '1c',
          'AVR Assembler' => 'avrasm',
          'ActionScript' => 'actionscript',
          'AppleScript' => 'applescript',
          'AsciiDoc' => 'asciidoc',
          'AutoHotkey' => 'autohotkey',
          'Axapta' => 'axapta',
          'Brainfuck' => 'brainfuck',
          'CMake' => 'cmake',
          'Clojure' => 'clojure',
          'D' => 'd',
          'DOS .bat' => 'dos',
          'Delphi' => 'delphi',
          'Django' => 'django',
          'Erlang' => 'erlang',
          'Erlang REPL' => 'erlang-repl',
          'F#' => 'fsharp',
          'FIX' => 'fix',
          'GLSL' => 'glsl',
          'Go' => 'go',
          'Haml' => 'haml',
          'Handlebars' => 'handlebars',
          'Haskell' => 'haskell',
          'Lasso' => 'lasso',
          'Lisp' => 'lisp',
          'LiveCode server, revIgniter' => 'livecodeserver',
          'Lua' => 'lua',
          'MEL' => 'mel',
          'Mathematica' => 'mathematica',
          'Matlab' => 'matlab',
          'Mizar' => 'mizar',
          'OCaml' => 'ocaml',
          'Oracle Rules Language' => 'ruleslanguage',
          'Oxygene' => 'oxygene',
          'Parser3' => 'parser3',
          'Python profile' => 'profile',
          'R' => 'r',
          'RenderMan RIB' => 'rib',
          'RenderMan RSL' => 'rsl',
          'Rust' => 'rust',
          'SCSS' => 'scss',
          'Scala' => 'scala',
          'Scilab' => 'scilab',
          'Smalltalk' => 'smalltalk',
          'TeX' => 'tex',
          'VB.NET' => 'vbnet',
          'VBScript' => 'vbscript',
          'VHDL' => 'vhdl',
          'Vala' => 'vala'
      );

      ?>
      <?php foreach(Mecha::eat($languages)->order('ASC')->vomit() as $language_name => $language_key): ?>
      <?php if(File::exist(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight' . DS . 'sword' . DS . 'languages' . DS . $language_key . '.js')): ?>
      <div class="grid span-2"><label><input name="languages[]" type="checkbox" value="<?php echo $language_key; ?>"<?php echo in_array($language_key, $states['languages']) ? ' checked' : ""; ?>> <span><?php echo $language_name; ?></span></label></div>
      <?php endif; ?>
      <?php endforeach; ?>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_style_config; ?></legend>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_skin; ?></span>
      <span class="grid span-5">
        <?php

        $skins = array(
            'Default' => 'default',
            'Dark' => 'dark',
            'FAR' => 'far',
            'IDEA' => 'idea',
            'Sunburst' => 'sunburst',
            'Zenburn' => 'zenburn',
            'Visual Studio' => 'vs',
            'Ascetic' => 'ascetic',
            'Magula' => 'magula',
            'GitHub' => 'github',
            'Google Code' => 'googlecode',
            'Brown Paper' => 'brown_paper',
            'School Book' => 'school_book',
            'IR Black' => 'ir_black',
            'Solarized &ndash; Dark' => 'solarized_dark',
            'Solarized &ndash; Light' => 'solarized_light',
            'Arta' => 'arta',
            'Monokai' => 'monokai',
            'Monokai Sublime' => 'monokai_sublime',
            'XCode' => 'xcode',
            'Pojoaque' => 'pojoaque',
            'Rainbow' => 'rainbow',
            'Tomorrow' => 'tomorrow',
            'Tomorrow Night' => 'tomorrow-night',
            'Tomorrow Night Bright' => 'tomorrow-night-bright',
            'Tomorrow Night Blue' => 'tomorrow-night-blue',
            'Tomorrow Night Eighties' => 'tomorrow-night-eighties',
            'Railscasts' => 'railscasts',
            'Obsidian' => 'obsidian',
            'Docco' => 'docco',
            'Mono Blue' => 'mono-blue',
            'Foundation' => 'foundation',
            'Atelier Dun &ndash; Dark' => 'atelier-dune.dark',
            'Atelier Dun &ndash; Light' => 'atelier-dune.light',
            'Atelier Forest &ndash; Dark' => 'atelier-forest.dark',
            'Atelier Forest &ndash; Light' => 'atelier-forest.light',
            'Atelier Heath &ndash; Dark' => 'atelier-heath.dark',
            'Atelier Heath &ndash; Light' => 'atelier-heath.light',
            'Atelier Lakeside &ndash; Dark' => 'atelier-lakeside.dark',
            'Atelier Lakeside &ndash; Light' => 'atelier-lakeside.light',
            'Atelier Seaside &ndash; Dark' => 'atelier-seaside.dark',
            'Atelier Seaside &ndash; Light' => 'atelier-seaside.light',
            'Para&#237;so &ndash; Dark' => 'paraiso.dark',
            'Para&#237;so &ndash; Light' => 'paraiso.light'
        );

        ?>
        <select name="skin" class="input-block" data-home-url="<?php echo $config->url; ?>">
          <?php foreach(Mecha::eat($skins)->order('ASC')->vomit() as $skin_name => $skin_key): ?>
          <?php if(File::exist(PLUGIN . DS . 'syntax-highlighter' . DS . 'highlight' . DS . 'shell' . DS . $skin_key . '.css')): ?>
          <option value="<?php echo $skin_key; ?>"<?php echo $states['skin'] == $skin_key ? ' selected' : ""; ?>><?php echo $skin_name; ?></option>
          <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <div class="p highlighter-preview">
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
    <span class="hljs-tag">&lt;<span class="hljs-title">title</span>&gt;</span>Test Title<span class="hljs-tag">&lt;/<span class="hljs-title">title</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">head</span>&gt;</span>
  <span class="hljs-tag">&lt;<span class="hljs-title">body</span>&gt;</span>
    <span class="hljs-tag">&lt;<span class="hljs-title">div</span> <span class="hljs-attribute">id</span>=<span class="hljs-value">"container"</span> <span class="hljs-attribute">class</span>=<span class="hljs-value">"cf"</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">h1</span>&gt;</span>Lorem Ipsum<span class="hljs-tag">&lt;/<span class="hljs-title">h1</span>&gt;</span>
      <span class="hljs-tag">&lt;<span class="hljs-title">p</span>&gt;</span>Lorem ipsum dolor sit amet.<span class="hljs-tag">&lt;/<span class="hljs-title">p</span>&gt;</span>
    <span class="hljs-tag">&lt;/<span class="hljs-title">div</span>&gt;</span>
  <span class="hljs-tag">&lt;/<span class="hljs-title">body</span>&gt;</span>
<span class="hljs-tag">&lt;/<span class="hljs-title">html</span>&gt;</span></code></pre>
            </div>
            <div class="tab-content hidden" id="tab-content-1-2">
<pre class="hljs-block"><code class="css">* <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">margin</span>:<span class="hljs-value"><span class="hljs-number">0</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">padding</span>:<span class="hljs-value"><span class="hljs-number">0</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">-webkit-box-sizing</span>:<span class="hljs-value">border-box</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">-moz-box-sizing</span>:<span class="hljs-value">border-box</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">box-sizing</span>:<span class="hljs-value">border-box</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">body</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">font</span>:<span class="hljs-value">normal normal <span class="hljs-number">13</span>px/<span class="hljs-number">1.4</span> Helmet,FreeSans,Sans-Serif</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">background-color</span>:<span class="hljs-value"><span class="hljs-hexcolor">#3f3f3f</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">color</span>:<span class="hljs-value">white</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-id">#container</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">background</span>:<span class="hljs-value"><span class="hljs-hexcolor">#fff</span> <span class="hljs-function">url(<span class="hljs-string">'img/bg.png'</span>)</span> repeat-x <span class="hljs-number">0</span> <span class="hljs-number">0</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">float</span>:<span class="hljs-value">left</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">width</span>:<span class="hljs-value"><span class="hljs-number">600</span>px</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">margin</span>:<span class="hljs-value"><span class="hljs-number">0</span> auto</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-class">.cf</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">display</span>:<span class="hljs-value">block</span></span>;
  <span class="hljs-rule">*<span class="hljs-attribute">zoom</span>:<span class="hljs-value"><span class="hljs-number">1</span></span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-class">.cf</span><span class="hljs-pseudo">:before</span>,
<span class="hljs-class">.cf</span><span class="hljs-pseudo">:after</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">content</span>:<span class="hljs-value"><span class="hljs-string">" "</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">display</span>:<span class="hljs-value">table</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">clear</span>:<span class="hljs-value">both</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">input</span><span class="hljs-attr_selector">[type="text"]</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">display</span>:<span class="hljs-value">inline-block</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">width</span>:<span class="hljs-value"><span class="hljs-number">200</span>px</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">input</span><span class="hljs-attr_selector">[type="text"]</span><span class="hljs-pseudo">:focus</span> <span class="hljs-rules">{<span class="hljs-rule"><span class="hljs-attribute">background-color</span>:<span class="hljs-value"><span class="hljs-hexcolor">#ffa</span></span></span></span>}</code></pre>
            </div>
            <div class="tab-content hidden" id="tab-content-1-3">
<pre class="hljs-block"><code class="javascript">(<span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">($)</span> {</span>
    <span class="hljs-keyword">var</span> $document = $(document),
        $view = $(<span class="hljs-string">'html, body'</span>);
    $view.on(<span class="hljs-string">"click"</span>, <span class="hljs-function"><span class="hljs-keyword">function</span><span class="hljs-params">()</span> {</span>
        <span class="hljs-keyword">if</span> (!$(<span class="hljs-keyword">this</span>).hasClass(<span class="hljs-string">'foo'</span>)) {
            window.alert(<span class="hljs-string">'OK!'</span>);
            <span class="hljs-keyword">return</span> <span class="hljs-literal">false</span>;
        }
    });
})(Zepto);</code></pre>
            </div>
          </div>
        </div>
      </span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_class_prefix; ?></span>
      <span class="grid span-5"><input name="class_prefix" type="text" class="input-block" value="<?php echo $states['class_prefix']; ?>" placeholder="hljs-"></span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_css_extra; ?></span>
      <span class="grid span-5"><textarea name="css" class="input-block code"><?php echo $states['css']; ?></textarea></span>
    </label>
  </fieldset>
  <p><button class="btn btn-primary btn-update" type="submit"><i class="fa fa-check-circle"></i> <?php echo $speak->update; ?></button></p>
</form>