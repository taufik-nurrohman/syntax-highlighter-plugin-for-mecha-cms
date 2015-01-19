/*
Language: D
Author: Aleksandar Ruzicic <aleksandar@ruzicic.info>
Description: D is a language with C-like syntax and static typing. It pragmatically combines efficiency, control, and modeling power, with safety and programmer productivity.
Version: 1.0a
Date: 2012-04-08
*/
function(e){var a={keyword:"abstract alias align asm assert auto body break byte case cast catch class const continue debug default delete deprecated do else enum export extern final finally for foreach foreach_reverse|10 goto if immutable import in inout int interface invariant is lazy macro mixin module new nothrow out override package pragma private protected public pure ref return scope shared static struct super switch synchronized template this throw try typedef typeid typeof union unittest version void volatile while with __FILE__ __LINE__ __gshared|10 __thread __traits __DATE__ __EOF__ __TIME__ __TIMESTAMP__ __VENDOR__ __VERSION__",built_in:"bool cdouble cent cfloat char creal dchar delegate double dstring float function idouble ifloat ireal long real short string ubyte ucent uint ulong ushort wchar wstring",literal:"false null true"},n="(0|[1-9][\\d_]*)",t="(0|[1-9][\\d_]*|\\d[\\d_]*|[\\d_]+?\\d)",r="0[bB][01_]+",i="([\\da-fA-F][\\da-fA-F_]*|_[\\da-fA-F][\\da-fA-F_]*)",s="0[xX]"+i,l="([eE][+-]?"+t+")",c="("+t+"(\\.\\d*|"+l+")|\\d+\\."+t+t+"|\\."+n+l+"?)",_="(0[xX]("+i+"\\."+i+"|\\.?"+i+")[pP][+-]?"+t+")",d="("+n+"|"+r+"|"+s+")",o="("+_+"|"+c+")",u="\\\\(['\"\\?\\\\abfnrtv]|u[\\dA-Fa-f]{4}|[0-7]{1,3}|x[\\dA-Fa-f]{2}|U[\\dA-Fa-f]{8})|&[a-zA-Z\\d]{2,};",b={className:"number",begin:"\\b"+d+"(L|u|U|Lu|LU|uL|UL)?",relevance:0},g={className:"number",begin:"\\b("+o+"([fF]|L|i|[fF]i|Li)?|"+d+"(i|[fF]i|Li))",relevance:0},f={className:"string",begin:"'("+u+"|.)",end:"'",illegal:"."},m={begin:u,relevance:0},N={className:"string",begin:'"',contains:[m],end:'"[cwd]?'},h={className:"string",begin:'[rq]"',end:'"[cwd]?',relevance:5},p={className:"string",begin:"`",end:"`[cwd]?"},E={className:"string",begin:'x"[\\da-fA-F\\s\\n\\r]*"[cwd]?',relevance:10},v={className:"string",begin:'q"\\{',end:'\\}"'},w={className:"shebang",begin:"^#!",end:"$",relevance:5},y={className:"preprocessor",begin:"#(line)",end:"$",relevance:5},A={className:"keyword",begin:"@[a-zA-Z_][a-zA-Z_\\d]*"},F={className:"comment",begin:"\\/\\+",contains:["self"],end:"\\+\\/",relevance:10};return{lexemes:e.UNDERSCORE_IDENT_RE,keywords:a,contains:[e.C_LINE_COMMENT_MODE,e.C_BLOCK_COMMENT_MODE,F,E,N,h,p,v,g,b,f,w,y,A]}}