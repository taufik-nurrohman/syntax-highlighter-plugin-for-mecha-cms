/*
Language: HTTP
Description: HTTP request and response headers with automatic body highlighting
Author: Ivan Sagalaev <maniac@softwaremaniacs.org>
Category: common, protocols
*/
function(){return{illegal:"\\S",contains:[{className:"status",begin:"^HTTP/[0-9\\.]+",end:"$",contains:[{className:"number",begin:"\\b\\d{3}\\b"}]},{className:"request",begin:"^[A-Z]+ (.*?) HTTP/[0-9\\.]+$",returnBegin:!0,end:"$",contains:[{className:"string",begin:" ",end:" ",excludeBegin:!0,excludeEnd:!0}]},{className:"attribute",begin:"^\\w",end:": ",excludeEnd:!0,illegal:"\\n|\\s|=",starts:{className:"string",end:"$"}},{begin:"\\n\\n",starts:{subLanguage:"",endsWithParent:!0}}]}}