/*
Language: Python profile
Description: Python profiler results
Author: Brian Beck <exogen@gmail.com>
*/
function(e){return{contains:[e.C_NUMBER_MODE,{className:"built_in",begin:"{",end:"}$",excludeBegin:!0,excludeEnd:!0,contains:[e.APOS_STRING_MODE,e.QUOTE_STRING_MODE],relevance:0},{className:"filename",begin:"[a-zA-Z_][\\da-zA-Z_]+\\.[\\da-zA-Z_]{1,3}",end:":",excludeEnd:!0},{className:"header",begin:"(ncalls|tottime|cumtime)",end:"$",keywords:"ncalls tottime|10 cumtime|10 filename",relevance:10},{className:"summary",begin:"function calls",end:"$",contains:[e.C_NUMBER_MODE],relevance:10},e.APOS_STRING_MODE,e.QUOTE_STRING_MODE,{className:"function",begin:"\\(",end:"\\)$",contains:[e.UNDERSCORE_TITLE_MODE],relevance:0}]}}