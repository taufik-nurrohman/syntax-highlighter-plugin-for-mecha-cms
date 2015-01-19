/*
Language: F#
Author: Jonas Follesø <jonas@follesoe.no>
Contributors: Troy Kershaw <hello@troykershaw.com>, Henrik Feldt <henrik@haf.se>
Category: functional
*/
function(e){var n={begin:"<",end:">",contains:[e.inherit(e.TITLE_MODE,{begin:/'[a-zA-Z0-9_]+/})]};return{aliases:["fs"],keywords:"yield! return! let! do!abstract and as assert base begin class default delegate do done downcast downto elif else end exception extern false finally for fun function global if in inherit inline interface internal lazy let match member module mutable namespace new null of open or override private public rec return sig static struct then to true try type upcast use val void when while with yield",contains:[{className:"string",begin:'@"',end:'"',contains:[{begin:'""'}]},{className:"string",begin:'"""',end:'"""'},{className:"comment",begin:"\\(\\*",end:"\\*\\)"},{className:"class",beginKeywords:"type",end:"\\(|=|$",excludeEnd:!0,contains:[e.UNDERSCORE_TITLE_MODE,n]},{className:"annotation",begin:"\\[<",end:">\\]",relevance:10},{className:"attribute",begin:"\\B('[A-Za-z])\\b",contains:[e.BACKSLASH_ESCAPE]},e.C_LINE_COMMENT_MODE,e.inherit(e.QUOTE_STRING_MODE,{illegal:null}),e.C_NUMBER_MODE]}}