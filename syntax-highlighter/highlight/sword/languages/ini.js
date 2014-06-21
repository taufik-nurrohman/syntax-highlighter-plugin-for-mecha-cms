/*!
Language: Ini
*/
hljs.registerLanguage("ini",function(a){return{case_insensitive:true,illegal:/\S/,contains:[{className:"comment",begin:";",end:"$"},{className:"title",begin:"^\\[",end:"\\]"},{className:"setting",begin:"^[a-z0-9\\[\\]_-]+[ \\t]*=[ \\t]*",end:"$",contains:[{className:"value",endsWithParent:true,keywords:"on off true false yes no",contains:[a.QUOTE_STRING_MODE,a.NUMBER_MODE],relevance:0}]}]}});