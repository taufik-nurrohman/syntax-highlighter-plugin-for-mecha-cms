/*!
Language: AutoHotkey
Author: Seongwon Lee <dlimpid@gmail.com>
Description: AutoHotkey language definition
*/
hljs.registerLanguage("autohotkey",function(b){var d={className:"escape",begin:"`[\\s\\S]"};var c={className:"comment",begin:";",end:"$",relevance:0};var a=[{className:"built_in",begin:"A_[a-zA-Z0-9]+"},{className:"built_in",beginKeywords:"ComSpec Clipboard ClipboardAll ErrorLevel"}];return{case_insensitive:true,keywords:{keyword:"Break Continue Else Gosub If Loop Return While",literal:"A true false NOT AND OR"},contains:a.concat([d,b.inherit(b.QUOTE_STRING_MODE,{contains:[d]}),c,{className:"number",begin:b.NUMBER_RE,relevance:0},{className:"var_expand",begin:"%",end:"%",illegal:"\\n",contains:[d]},{className:"label",contains:[d],variants:[{begin:'^[^\\n";]+::(?!=)'},{begin:'^[^\\n";]+:(?!=)',relevance:0}]},{begin:",\\s*,",relevance:10}])}});