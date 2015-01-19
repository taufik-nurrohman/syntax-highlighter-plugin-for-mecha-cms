/*
Language: AutoHotkey
Author: Seongwon Lee <dlimpid@gmail.com>
Description: AutoHotkey language definition
Category: scripting
*/
function(e){var n={className:"escape",begin:"`[\\s\\S]"},a={className:"comment",begin:";",end:"$",relevance:0},i=[{className:"built_in",begin:"A_[a-zA-Z0-9]+"},{className:"built_in",beginKeywords:"ComSpec Clipboard ClipboardAll ErrorLevel"}];return{case_insensitive:!0,keywords:{keyword:"Break Continue Else Gosub If Loop Return While",literal:"A true false NOT AND OR"},contains:i.concat([n,e.inherit(e.QUOTE_STRING_MODE,{contains:[n]}),a,{className:"number",begin:e.NUMBER_RE,relevance:0},{className:"var_expand",begin:"%",end:"%",illegal:"\\n",contains:[n]},{className:"label",contains:[n],variants:[{begin:'^[^\\n";]+::(?!=)'},{begin:'^[^\\n";]+:(?!=)',relevance:0}]},{begin:",\\s*,",relevance:10}])}}