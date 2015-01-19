/*
Language: Haml
Requires: ruby.js
Author: Dan Allen <dan.j.allen@gmail.com>
Website: http://google.com/profiles/dan.j.allen
Category: template
*/
function(){return{case_insensitive:!0,contains:[{className:"doctype",begin:"^!!!( (5|1\\.1|Strict|Frameset|Basic|Mobile|RDFa|XML\\b.*))?$",relevance:10},{className:"comment",begin:"^\\s*(!=#|=#|-#|/).*$",relevance:0},{begin:"^\\s*(-|=|!=)(?!#)",starts:{end:"\\n",subLanguage:"ruby"}},{className:"tag",begin:"^\\s*%",contains:[{className:"title",begin:"\\w+"},{className:"value",begin:"[#\\.]\\w+"},{begin:"{\\s*",end:"\\s*}",excludeEnd:!0,contains:[{begin:":\\w+\\s*=>",end:",\\s+",returnBegin:!0,endsWithParent:!0,contains:[{className:"symbol",begin:":\\w+"},{className:"string",begin:'"',end:'"'},{className:"string",begin:"'",end:"'"},{begin:"\\w+",relevance:0}]}]},{begin:"\\(\\s*",end:"\\s*\\)",excludeEnd:!0,contains:[{begin:"\\w+\\s*=",end:"\\s+",returnBegin:!0,endsWithParent:!0,contains:[{className:"attribute",begin:"\\w+",relevance:0},{className:"string",begin:'"',end:'"'},{className:"string",begin:"'",end:"'"},{begin:"\\w+",relevance:0}]}]}]},{className:"bullet",begin:"^\\s*[=~]\\s*",relevance:0},{begin:"#{",starts:{end:"}",subLanguage:"ruby"}}]}}