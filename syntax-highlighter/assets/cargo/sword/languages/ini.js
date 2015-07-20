/*
Language: Ini
Category: common, config
*/
function(e){return{case_insensitive:!0,illegal:/\S/,contains:[{className:"comment",begin:";",end:"$"},{className:"title",begin:"^\\[",end:"\\]"},{className:"setting",begin:"^[a-z0-9\\[\\]_-]+[ \\t]*=[ \\t]*",end:"$",contains:[{className:"value",endsWithParent:!0,keywords:"on off true false yes no",contains:[e.QUOTE_STRING_MODE,e.NUMBER_MODE],relevance:0}]}]}}