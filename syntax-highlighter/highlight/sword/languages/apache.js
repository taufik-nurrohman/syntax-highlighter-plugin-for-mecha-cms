/*!
Language: Apache
Author: Ruslan Keba <rukeba@gmail.com>
Contributors: Ivan Sagalaev <maniac@softwaremaniacs.org>
Website: http://rukeba.com
Description: language definition for Apache configuration files (httpd.conf & .htaccess)
*/
hljs.registerLanguage("apache",function(a){var b={className:"number",begin:"[\\$%]\\d+"};return{case_insensitive:true,contains:[a.HASH_COMMENT_MODE,{className:"tag",begin:"</?",end:">"},{className:"keyword",begin:/\w+/,relevance:0,keywords:{common:"order deny allow setenv rewriterule rewriteengine rewritecond documentroot sethandler errordocument loadmodule options header listen serverroot servername"},starts:{end:/$/,relevance:0,keywords:{literal:"on off all"},contains:[{className:"sqbracket",begin:"\\s\\[",end:"\\]$"},{className:"cbracket",begin:"[\\$%]\\{",end:"\\}",contains:["self",b]},b,a.QUOTE_STRING_MODE]}}],illegal:/\S/}});