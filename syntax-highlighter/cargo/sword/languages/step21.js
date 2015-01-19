/*
Language: STEP Part 21 (ISO 10303-21)
Contributors: Adam Joseph Cook <adam.joseph.cook@gmail.com>
Description: Syntax highlighter for STEP Part 21 files (ISO 10303-21).
*/
function(e){var n="[A-Z_][A-Z0-9_.]*",l="END-ISO-10303-21;",s={literal:"",built_in:"",keyword:"HEADER ENDSEC DATA"},a={className:"preprocessor",begin:"ISO-10303-21;",relevance:10},i=[e.C_LINE_COMMENT_MODE,{className:"comment",begin:"/\\*\\*!",end:"\\*/",contains:[e.PHRASAL_WORDS_MODE]},e.C_BLOCK_COMMENT_MODE,e.C_NUMBER_MODE,e.inherit(e.APOS_STRING_MODE,{illegal:null}),e.inherit(e.QUOTE_STRING_MODE,{illegal:null}),{className:"string",begin:"'",end:"'"},{className:"label",variants:[{begin:"#",end:"\\d+",illegal:"\\W"}]}];return{aliases:["p21","step","stp"],case_insensitive:!0,lexemes:n,keywords:s,contains:[{className:"preprocessor",begin:l,relevance:10},a].concat(i)}}