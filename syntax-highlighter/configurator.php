<?php

$sh_config = File::open(__DIR__ . DS . 'states' . DS . 'config.txt')->unserialize();

$sword = array(
    'apache' => 'Apache',
    'bash' => 'Bash',
    'cs' => 'C#',
    'cpp' => 'C++',
    'css' => 'CSS',
    'coffeescript' => 'CoffeeScript',
    'diff' => 'Diff',
    'xml' => 'HTML, XML',
    'http' => 'HTTP',
    'ini' => 'Ini',
    'json' => 'JSON',
    'java' => 'Java',
    'javascript' => 'JavaScript',
    'makefile' => 'Makefile',
    'markdown' => 'Markdown',
    'nginx' => 'Nginx',
    'objectivec' => 'Objective C',
    'php' => 'PHP',
    'perl' => 'Perl',
    'python' => 'Python',
    'ruby' => 'Ruby',
    'sql' => 'SQL'
);

$shell = array(
    'agate' => 'Agate',
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
  <?php echo Form::hidden('token', $token); ?>
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_languages; ?> (<?php echo $lang_checked . ' ' . strtolower($speak->of) . ' ' . $lang_all; ?>)</legend>
    <p><?php echo Jot::button('action.small:check-circle', $speak->plugin_sh_title_check, null, null, array(
        'id' => 'btn-check-all'
    )) . ' ' . Jot::button('action.small:times-circle', $speak->plugin_sh_title_uncheck, null, null, array(
        'id' => 'btn-uncheck-all'
    )); ?></p>
    <div class="grid-group no-gap">
    <?php $swords = glob(__DIR__ . DS . 'assets' . DS . 'lot' . DS . 'sword' . DS . 'languages' . DS . '*.js'); ?>
    <?php foreach($swords as $v): ?>
    <div class="grid span-2"><?php $k = File::N($v); echo Form::checkbox('languages[]', $k, Mecha::walk($lang)->has($k), isset($sword[$k]) ? $sword[$k] : $k . '.js'); ?></div>
    <?php endforeach; ?>
    </div>
  </fieldset>
  <fieldset>
    <legend><?php echo $speak->plugin_sh_title_style_config; ?></legend>
    <div class="p sh-preview">
      <div class="tab-area">
        <div class="tab-button-area">
          <a class="tab-button active" href="#tab-content-1-1"><?php echo $speak->plugin_sh_tab->html; ?></a>
          <a class="tab-button" href="#tab-content-1-2"><?php echo $speak->plugin_sh_tab->css; ?></a>
          <a class="tab-button" href="#tab-content-1-3"><?php echo $speak->plugin_sh_tab->js; ?></a>
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
  <span class="hljs-rule"><span class="hljs-attribute">font</span>: <span class="hljs-value">normal normal <span class="hljs-number">13px</span>/<span class="hljs-number">1.4</span> Helmet,FreeSans,Sans-Serif</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">background-color</span>: <span class="hljs-value"><span class="hljs-hexcolor">#3f3f3f</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">color</span>: <span class="hljs-value">white</span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-id">#container</span> <span class="hljs-rules">{
  <span class="hljs-rule"><span class="hljs-attribute">background</span>: <span class="hljs-value"><span class="hljs-hexcolor">#fff</span> <span class="hljs-function">url(<span class="hljs-string">'img/bg.png'</span>)</span> repeat-x <span class="hljs-number">0</span> <span class="hljs-number">0</span></span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">float</span>: <span class="hljs-value">left</span></span>;
  <span class="hljs-rule"><span class="hljs-attribute">width</span>: <span class="hljs-value"><span class="hljs-number">600px</span></span></span>;
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
  <span class="hljs-rule"><span class="hljs-attribute">width</span>: <span class="hljs-value"><span class="hljs-number">200px</span></span></span>;
<span class="hljs-rule">}</span></span>
<span class="hljs-tag">input</span><span class="hljs-attr_selector">[type="text"]</span><span class="hljs-pseudo">:focus</span> <span class="hljs-rules">{<span class="hljs-rule"><span class="hljs-attribute">background-color</span>: <span class="hljs-value"><span class="hljs-hexcolor">#ffa</span></span></span></span>}</code></pre>
          </div>
          <div class="tab-content hidden" id="tab-content-1-3">
<pre class="hljs-block"><code class="hljs-javascript"><span class="hljs-comment">/**
 * Example Comment
 * ---------------
 */</span>
<span class="hljs-function"><span class="hljs-keyword">function</span> <span class="hljs-title">doStuff</span><span class="hljs-params">(a, b, c)</span> {</span>
    <span class="hljs-keyword">var</span> location = <span class="hljs-string">'N/A'</span>;
    <span class="hljs-keyword">var</span> data = {
        <span class="hljs-string">'title'</span>: <span class="hljs-string">'Test Page'</span>,
        <span class="hljs-string">'total'</span>: <span class="hljs-number">400</span>,
        <span class="hljs-string">'average'</span>: <span class="hljs-number">.5</span>
    };
    location.replace(<span class="hljs-regexp">/\/\*([\s\S]+?)\*\//g</span>, <span class="hljs-string">""</span>);
    alert(<span class="hljs-string">'&lt;br&gt;'</span> + location + (data.average * <span class="hljs-number">4</span>));
}

<span class="hljs-comment">// Run!</span>
doStuff();</code></pre>
          </div>
        </div>
      </div>
    </div>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_skin; ?></span>
      <span class="grid span-5">
      <?php

      $shells = glob(__DIR__ . DS . 'assets' . DS . 'lot' . DS . 'shell' . DS . '*.css');

      $options = array();
      foreach($shells as $v) {
          $k = File::N($v);
          $options[$k] = isset($shell[$k]) ? $shell[$k] : $k . '.css';
      }
      echo Form::select('skin', $options, $sh_config['skin'], array(
          'class' => 'select-block',
          'data' => array(
              'url' => File::url(__DIR__ . DS . 'assets' . DS . 'lot' . DS . 'shell') . '/'
          )
      ));

      ?>
      </span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_class_prefix; ?></span>
      <span class="grid span-5"><?php echo Form::text('class_prefix', $sh_config['class_prefix'], 'hljs-', array('class' => 'input-block')); ?></span>
    </label>
    <label class="grid-group">
      <span class="grid span-1 form-label"><?php echo $speak->plugin_sh_title_css_edit; ?></span>
      <span class="grid span-5"><?php echo Form::textarea('css', $sh_config['css'], null, array('class' => array('textarea-block', 'textarea-expand', 'code'))); ?></span>
    </label>
  </fieldset>
  <p><?php echo Jot::button('action', $speak->update); ?></p>
</form>