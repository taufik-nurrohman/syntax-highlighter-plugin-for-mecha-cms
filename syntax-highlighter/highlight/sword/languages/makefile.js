/*!
Language: Makefile
Author: Ivan Sagalaev <maniac@softwaremaniacs.org>
*/
hljs.registerLanguage("makefile",function(a){var b={className:"variable",begin:/\$\(/,end:/\)/,contains:[a.BACKSLASH_ESCAPE]};return{contains:[a.HASH_COMMENT_MODE,{begin:/^\w+\s*\W*=/,returnBegin:true,relevance:0,starts:{className:"constant",end:/\s*\W*=/,excludeEnd:true,starts:{end:/$/,relevance:0,contains:[b]}}},{className:"title",begin:/^[\w]+:\s*$/},{className:"phony",begin:/^\.PHONY:/,end:/$/,keywords:".PHONY",lexemes:/[\.\w]+/},{begin:/^\t+/,end:/$/,contains:[a.QUOTE_STRING_MODE,b]}]}});