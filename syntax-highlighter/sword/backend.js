(function($, base) {
    var $head = $(document.getElementsByTagName('head')[0]),
        $form = $('.form-plugin'),
        $skin = $('select[name="skin"]'),
        $prefix = $('input[name="class_prefix"]'),
        $extra = $('textarea[name="css"]'),
        $check = $('#btn-check-all'),
        $uncheck = $('#btn-uncheck-all');
    $skin.on("change", function() {
        $('#sh-css, #sh-css-inline').remove();
        $('<link id="sh-css" href="' + $(this).data('urlHome') + '/cabinet/plugins/' + $(this).data('urlDir') + '/cargo/shell/' + this.value + '.css?v=' + (new Date()).getTime() + '" rel="stylesheet">').appendTo($head);
        $('<style id="sh-css-inline">' + $extra.val().replace(new RegExp('.' + $prefix.val(), 'g'), '.hljs-') + '</style>').appendTo($head);
    }).trigger("change");
    $extra.on("keyup", function() {
        $('#sh-css-inline').html(this.value.replace(new RegExp($prefix.val(), 'g'), 'hljs-'));
    });
    $check.on("click", function() {
        $form.find('input[type="checkbox"]').prop('checked', true).trigger("change");
        return false;
    });
    $uncheck.on("click", function() {
        $form.find('input[type="checkbox"]').prop('checked', false).trigger("change");
        return false;
    });
    new MTE($extra[0], {
        tabSize: base.tab_size,
        toolbar: false
    });
})(Zepto, DASHBOARD);