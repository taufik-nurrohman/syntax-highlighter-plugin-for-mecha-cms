/*
Language: Smalltalk
Author: Vladimir Gubarkov <xonixx@gmail.com>
*/
function(e){var a="[a-z][a-zA-Z0-9_]*",s={className:"char",begin:"\\$.{1}"},n={className:"symbol",begin:"#"+e.UNDERSCORE_IDENT_RE};return{aliases:["st"],keywords:"self super nil true false thisContext",contains:[{className:"comment",begin:'"',end:'"'},e.APOS_STRING_MODE,{className:"class",begin:"\\b[A-Z][A-Za-z0-9_]*",relevance:0},{className:"method",begin:a+":",relevance:0},e.C_NUMBER_MODE,n,s,{className:"localvars",begin:"\\|[ ]*"+a+"([ ]+"+a+")*[ ]*\\|",returnBegin:!0,end:/\|/,illegal:/\S/,contains:[{begin:"(\\|[ ]*)?"+a}]},{className:"array",begin:"\\#\\(",end:"\\)",contains:[e.APOS_STRING_MODE,s,e.C_NUMBER_MODE,n]}]}}