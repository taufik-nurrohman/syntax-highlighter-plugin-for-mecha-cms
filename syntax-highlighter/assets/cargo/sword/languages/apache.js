/*
Language: Apache
Author: Ruslan Keba <rukeba@gmail.com>
Contributors: Ivan Sagalaev <maniac@softwaremaniacs.org>
Website: http://rukeba.com/
Description: language definition for Apache configuration files (httpd.conf & .htaccess)
Category: common, config
*/
function(e){var n={className:"number",begin:"[\\$%]\\d+"};return{aliases:["apacheconf"],case_insensitive:!0,contains:[e.HASH_COMMENT_MODE,{className:"tag",begin:"</?",end:">"},{className:"keyword",begin:/\w+/,relevance:0,keywords:{common:"order deny allow setenv rewriterule rewriteengine rewritecond documentroot sethandler errordocument loadmodule options header listen serverroot servername"},starts:{end:/$/,relevance:0,keywords:{literal:"on off all"},contains:[{className:"sqbracket",begin:"\\s\\[",end:"\\]$"},{className:"cbracket",begin:"[\\$%]\\{",end:"\\}",contains:["self",n]},n,e.QUOTE_STRING_MODE]}}],illegal:/\S/}}