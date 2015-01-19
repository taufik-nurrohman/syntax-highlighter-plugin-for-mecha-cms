/*
Language: Twig
Requires: xml.js
Author: Luke Holder <lukemh@gmail.com>
Description: Twig is a templating language for PHP
Category: template
*/
function(){var e={className:"params",begin:"\\(",end:"\\)"},a="attribute block constant cycle date dump include max min parent random range source template_from_string",n={className:"function",beginKeywords:a,relevance:0,contains:[e]},s={className:"filter",begin:/\|[A-Za-z]+\:?/,keywords:"abs batch capitalize convert_encoding date date_modify default escape first format join json_encode keys last length lower merge nl2br number_format raw replace reverse round slice sort split striptags title trim upper url_encode",contains:[n]},t="autoescape block do embed extends filter flush for if import include macro sandbox set spaceless use verbatim";return t=t+" "+t.split(" ").map(function(e){return"end"+e}).join(" "),{aliases:["craftcms"],case_insensitive:!0,subLanguage:"xml",subLanguageMode:"continuous",contains:[{className:"comment",begin:/\{#/,end:/#}/},{className:"template_tag",begin:/\{%/,end:/%}/,keywords:t,contains:[s,n]},{className:"variable",begin:/\{\{/,end:/}}/,contains:[s,n]}]}}