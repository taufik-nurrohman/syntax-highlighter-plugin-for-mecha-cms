/*
Language: Brainfuck
Author: Evgeny Stepanischev <imbolk@gmail.com>
*/
function(){var e={className:"literal",begin:"[\\+\\-]",relevance:0};return{aliases:["bf"],contains:[{className:"comment",begin:"[^\\[\\]\\.,\\+\\-<> \r\n]",returnEnd:!0,end:"[\\[\\]\\.,\\+\\-<> \r\n]",relevance:0},{className:"title",begin:"[\\[\\]]",relevance:0},{className:"string",begin:"[\\.,]",relevance:0},{begin:/\+\+|\-\-/,returnBegin:!0,contains:[e]},e]}}