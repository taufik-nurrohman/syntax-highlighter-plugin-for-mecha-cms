/*!
Language: Brainfuck
Author: Evgeny Stepanischev <imbolk@gmail.com>
*/
hljs.registerLanguage("brainfuck",function(b){var a={className:"literal",begin:"[\\+\\-]",relevance:0};return{contains:[{className:"comment",begin:"[^\\[\\]\\.,\\+\\-<> \r\n]",returnEnd:true,end:"[\\[\\]\\.,\\+\\-<> \r\n]",relevance:0},{className:"title",begin:"[\\[\\]]",relevance:0},{className:"string",begin:"[\\.,]",relevance:0},{begin:/\+\+|\-\-/,returnBegin:true,contains:[a]},a]}});