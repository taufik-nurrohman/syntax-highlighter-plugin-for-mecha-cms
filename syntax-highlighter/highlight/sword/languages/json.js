/*!
Language: JSON
Author: Ivan Sagalaev <maniac@softwaremaniacs.org>
*/
hljs.registerLanguage("json",function(a){var e={literal:"true false null"};var d=[a.QUOTE_STRING_MODE,a.C_NUMBER_MODE];var c={className:"value",end:",",endsWithParent:true,excludeEnd:true,contains:d,keywords:e};var b={begin:"{",end:"}",contains:[{className:"attribute",begin:'\\s*"',end:'"\\s*:\\s*',excludeBegin:true,excludeEnd:true,contains:[a.BACKSLASH_ESCAPE],illegal:"\\n",starts:c}],illegal:"\\S"};var f={begin:"\\[",end:"\\]",contains:[a.inherit(c,{className:null})],illegal:"\\S"};d.splice(d.length,0,b,f);return{contains:d,keywords:e,illegal:"\\S"}});