/*!
Language: Handlebars
Requires: xml.js
Author: Robin Ward <robin.ward@gmail.com>
Description: Matcher for Handlebars as well as EmberJS additions.
*/
hljs.registerLanguage("handlebars",function(b){var a="each in with if else unless bindattr action collection debugger log outlet template unbound view yield";return{case_insensitive:true,subLanguage:"xml",subLanguageMode:"continuous",contains:[{className:"expression",begin:"{{",end:"}}",contains:[{className:"begin-block",begin:"#[a-zA-Z- .]+",keywords:a},{className:"string",begin:'"',end:'"'},{className:"end-block",begin:"\\/[a-zA-Z- .]+",keywords:a},{className:"variable",begin:"[a-zA-Z-.]+",keywords:a}]}]}});