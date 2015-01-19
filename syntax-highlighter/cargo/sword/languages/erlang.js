/*
Language: Erlang
Description: Erlang is a general-purpose functional language, with strict evaluation, single assignment, and dynamic typing.
Author: Nikolay Zakharov <nikolay.desh@gmail.com>, Dmitry Kovega <arhibot@gmail.com>
Category: functional
*/
function(e){var n="[a-z'][a-zA-Z0-9_']*",a="("+n+":"+n+"|"+n+")",i={keyword:"after and andalso|10 band begin bnot bor bsl bzr bxor case catch cond div end fun if let not of orelse|10 query receive rem try when xor",literal:"false true"},r={className:"comment",begin:"%",end:"$"},s={className:"number",begin:"\\b(\\d+#[a-fA-F0-9]+|\\d+(\\.\\d+)?([eE][-+]?\\d+)?)",relevance:0},c={begin:"fun\\s+"+n+"/\\d+"},l={begin:a+"\\(",end:"\\)",returnBegin:!0,relevance:0,contains:[{className:"function_name",begin:a,relevance:0},{begin:"\\(",end:"\\)",endsWithParent:!0,returnEnd:!0,relevance:0}]},o={className:"tuple",begin:"{",end:"}",relevance:0},d={className:"variable",begin:"\\b_([A-Z][A-Za-z0-9_]*)?",relevance:0},t={className:"variable",begin:"[A-Z][a-zA-Z0-9_]*",relevance:0},b={begin:"#"+e.UNDERSCORE_IDENT_RE,relevance:0,returnBegin:!0,contains:[{className:"record_name",begin:"#"+e.UNDERSCORE_IDENT_RE,relevance:0},{begin:"{",end:"}",relevance:0}]},g={beginKeywords:"fun receive if try case",end:"end",keywords:i};g.contains=[r,c,e.inherit(e.APOS_STRING_MODE,{className:""}),g,l,e.QUOTE_STRING_MODE,s,o,d,t,b];var u=[r,c,g,l,e.QUOTE_STRING_MODE,s,o,d,t,b];l.contains[1].contains=u,o.contains=u,b.contains[1].contains=u;var m={className:"params",begin:"\\(",end:"\\)",contains:u};return{aliases:["erl"],keywords:i,illegal:"(</|\\*=|\\+=|-=|/\\*|\\*/|\\(\\*|\\*\\))",contains:[{className:"function",begin:"^"+n+"\\s*\\(",end:"->",returnBegin:!0,illegal:"\\(|#|//|/\\*|\\\\|:|;",contains:[m,e.inherit(e.TITLE_MODE,{begin:n})],starts:{end:";|\\.",keywords:i,contains:u}},r,{className:"pp",begin:"^-",end:"\\.",relevance:0,excludeEnd:!0,returnBegin:!0,lexemes:"-"+e.IDENT_RE,keywords:"-module -record -undef -export -ifdef -ifndef -author -copyright -doc -vsn -import -include -include_lib -compile -define -else -endif -file -behaviour -behavior -spec",contains:[m]},s,e.QUOTE_STRING_MODE,b,d,t,o,{begin:/\.$/}]}}