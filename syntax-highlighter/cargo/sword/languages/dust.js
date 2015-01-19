/*
Language: Dust
Requires: xml.js
Author: Michael Allen <michael.allen@benefitfocus.com>
Description: Matcher for dust.js templates.
Category: template
*/
function(){var e="if eq ne lt lte gt gte select default math sep";return{aliases:["dst"],case_insensitive:!0,subLanguage:"xml",subLanguageMode:"continuous",contains:[{className:"expression",begin:"{",end:"}",relevance:0,contains:[{className:"begin-block",begin:"#[a-zA-Z- .]+",keywords:e},{className:"string",begin:'"',end:'"'},{className:"end-block",begin:"\\/[a-zA-Z- .]+",keywords:e},{className:"variable",begin:"[a-zA-Z-.]+",keywords:e,relevance:0}]}]}}