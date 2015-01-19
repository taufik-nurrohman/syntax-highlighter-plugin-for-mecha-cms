/*
Language: Handlebars
Requires: xml.js
Author: Robin Ward <robin.ward@gmail.com>
Description: Matcher for Handlebars as well as EmberJS additions.
Category: template
*/
function(){var e="each in with if else unless bindattr action collection debugger log outlet template unbound view yield";return{aliases:["hbs","html.hbs","html.handlebars"],case_insensitive:!0,subLanguage:"xml",subLanguageMode:"continuous",contains:[{className:"expression",begin:"{{",end:"}}",contains:[{className:"begin-block",begin:"#[a-zA-Z- .]+",keywords:e},{className:"string",begin:'"',end:'"'},{className:"end-block",begin:"\\/[a-zA-Z- .]+",keywords:e},{className:"variable",begin:"[a-zA-Z-.]+",keywords:e}]}]}}