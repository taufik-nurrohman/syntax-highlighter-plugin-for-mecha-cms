/*!
Language: F#
Author: Jonas Follesø <jonas@follesoe.no>
Contributors: Troy Kershaw <hello@troykershaw.com>
Description: F# language definition.
*/
hljs.registerLanguage("fsharp",function(a){return{keywords:"abstract and as assert base begin class default delegate do done downcast downto elif else end exception extern false finally for fun function global if in inherit inline interface internal lazy let match member module mutable namespace new null of open or override private public rec return sig static struct then to true try type upcast use val void when while with yield",contains:[{className:"string",begin:'@"',end:'"',contains:[{begin:'""'}]},{className:"string",begin:'"""',end:'"""'},{className:"comment",begin:"\\(\\*",end:"\\*\\)"},{className:"class",beginKeywords:"type",end:"\\(|=|$",contains:[a.UNDERSCORE_TITLE_MODE]},{className:"annotation",begin:"\\[<",end:">\\]"},{className:"attribute",begin:"\\B('[A-Za-z])\\b",contains:[a.BACKSLASH_ESCAPE]},a.C_LINE_COMMENT_MODE,a.inherit(a.QUOTE_STRING_MODE,{illegal:null}),a.C_NUMBER_MODE]}});