/*!
Language: TeX
Author: Vladimir Moskva <vladmos@gmail.com>
Website: http://fulc.ru
*/
hljs.registerLanguage("tex",function(a){var d={className:"command",begin:"\\\\[a-zA-Zа-яА-я]+[\\*]?"};var c={className:"command",begin:"\\\\[^a-zA-Zа-яА-я0-9]"};var b={className:"special",begin:"[{}\\[\\]\\&#~]",relevance:0};return{contains:[{begin:"\\\\[a-zA-Zа-яА-я]+[\\*]? *= *-?\\d*\\.?\\d+(pt|pc|mm|cm|in|dd|cc|ex|em)?",returnBegin:true,contains:[d,c,{className:"number",begin:" *=",end:"-?\\d*\\.?\\d+(pt|pc|mm|cm|in|dd|cc|ex|em)?",excludeBegin:true}],relevance:10},d,c,b,{className:"formula",begin:"\\$\\$",end:"\\$\\$",contains:[d,c,b],relevance:0},{className:"formula",begin:"\\$",end:"\\$",contains:[d,c,b],relevance:0},{className:"comment",begin:"%",end:"$",relevance:0}]}});