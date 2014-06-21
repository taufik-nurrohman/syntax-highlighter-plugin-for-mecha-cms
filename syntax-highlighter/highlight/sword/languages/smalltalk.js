/*!
Language: Smalltalk
Author: Vladimir Gubarkov <xonixx@gmail.com>
*/
hljs.registerLanguage("smalltalk",function(a){var b="[a-z][a-zA-Z0-9_]*";var d={className:"char",begin:"\\$.{1}"};var c={className:"symbol",begin:"#"+a.UNDERSCORE_IDENT_RE};return{keywords:"self super nil true false thisContext",contains:[{className:"comment",begin:'"',end:'"'},a.APOS_STRING_MODE,{className:"class",begin:"\\b[A-Z][A-Za-z0-9_]*",relevance:0},{className:"method",begin:b+":",relevance:0},a.C_NUMBER_MODE,c,d,{className:"localvars",begin:"\\|[ ]*"+b+"([ ]+"+b+")*[ ]*\\|",returnBegin:true,end:/\|/,illegal:/\S/,contains:[{begin:"(\\|[ ]*)?"+b}]},{className:"array",begin:"\\#\\(",end:"\\)",contains:[a.APOS_STRING_MODE,d,a.C_NUMBER_MODE,c]}]}});