/*
Language: JSON
Author: Ivan Sagalaev <maniac@softwaremaniacs.org>
Category: common, protocols
*/
function(e){var n={literal:"true false null"},l=[e.QUOTE_STRING_MODE,e.C_NUMBER_MODE],a={className:"value",end:",",endsWithParent:!0,excludeEnd:!0,contains:l,keywords:n},s={begin:"{",end:"}",contains:[{className:"attribute",begin:'\\s*"',end:'"\\s*:\\s*',excludeBegin:!0,excludeEnd:!0,contains:[e.BACKSLASH_ESCAPE],illegal:"\\n",starts:a}],illegal:"\\S"},i={begin:"\\[",end:"\\]",contains:[e.inherit(a,{className:null})],illegal:"\\S"};return l.splice(l.length,0,s,i),{contains:l,keywords:n,illegal:"\\S"}}