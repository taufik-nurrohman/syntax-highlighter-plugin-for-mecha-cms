/*
Language: Makefile
Author: Ivan Sagalaev <maniac@softwaremaniacs.org>
Category: common
*/
function(e){var n={className:"variable",begin:/\$\(/,end:/\)/,contains:[e.BACKSLASH_ESCAPE]};return{aliases:["mk","mak"],contains:[e.HASH_COMMENT_MODE,{begin:/^\w+\s*\W*=/,returnBegin:!0,relevance:0,starts:{className:"constant",end:/\s*\W*=/,excludeEnd:!0,starts:{end:/$/,relevance:0,contains:[n]}}},{className:"title",begin:/^[\w]+:\s*$/},{className:"phony",begin:/^\.PHONY:/,end:/$/,keywords:".PHONY",lexemes:/[\.\w]+/},{begin:/^\t+/,end:/$/,relevance:0,contains:[e.QUOTE_STRING_MODE,n]}]}}