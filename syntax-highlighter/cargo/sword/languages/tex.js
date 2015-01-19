/*
Language: TeX
Author: Vladimir Moskva <vladmos@gmail.com>
Website: http://fulc.ru/
*/
function(){var e={className:"command",begin:"\\\\[a-zA-Zа-яА-я]+[\\*]?"},n={className:"command",begin:"\\\\[^a-zA-Zа-яА-я0-9]"},a={className:"special",begin:"[{}\\[\\]\\&#~]",relevance:0};return{contains:[{begin:"\\\\[a-zA-Zа-яА-я]+[\\*]? *= *-?\\d*\\.?\\d+(pt|pc|mm|cm|in|dd|cc|ex|em)?",returnBegin:!0,contains:[e,n,{className:"number",begin:" *=",end:"-?\\d*\\.?\\d+(pt|pc|mm|cm|in|dd|cc|ex|em)?",excludeBegin:!0}],relevance:10},e,n,a,{className:"formula",begin:"\\$\\$",end:"\\$\\$",contains:[e,n,a],relevance:0},{className:"formula",begin:"\\$",end:"\\$",contains:[e,n,a],relevance:0},{className:"comment",begin:"%",end:"$",relevance:0}]}}