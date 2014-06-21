(function($, base) {

    var head = $(document.documentElement),
        skin = $('select[name="skin"]'),
        prefix = $('input[name="class_prefix"]'),
        extra = $('textarea[name="css"]');

    skin.on("change", function() {
        $('#sh-css, #sh-css-inline').remove();
        $('<link id="sh-css" href="' + $(this).data('homeUrl') + '/cabinet/plugins/syntax-highlighter/highlight/shell/' + this.value + '.css" rel="stylesheet">').appendTo(head);
        $('<style id="sh-css-inline">' + extra.val().replace(new RegExp(prefix.val(), 'g'), 'hljs-') + '</style>').appendTo(head);
    }).trigger("change");

    extra.on("keyup", function() {
        $('#sh-css-inline').html(this.value.replace(new RegExp(prefix.val(), 'g'), 'hljs-'));
    });

    new MTE(extra[0], {
        tabSize: '  ',
        toolbar: false
    });

})(Zepto, DASHBOARD);