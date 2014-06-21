/*!
Language: D
Author: Aleksandar Ruzicic <aleksandar@ruzicic.info>
Description: D is a language with C-like syntax and static typing. It pragmatically combines efficiency, control, and modeling power, with safety and programmer productivity.
Version: 1.0a
Date: 2012-04-08
*/
/*!
 * Known issues:
 *
 * - invalid hex string literals will be recognized as a double quoted strings
 *   but 'x' at the beginning of string will not be matched
 *
 * - delimited string literals are not checked for matching end delimiter
 *   (not possible to do with js regexp)
 *
 * - content of token string is colored as a string (i.e. no keyword coloring inside a token string)
 *   also, content of token string is not validated to contain only valid D tokens
 *
 * - special token sequence rule is not strictly following D grammar (anything following #line
 *   up to the end of line is matched as special token sequence)
 */
hljs.registerLanguage("d",function(x){var b={keyword:"abstract alias align asm assert auto body break byte case cast catch class const continue debug default delete deprecated do else enum export extern final finally for foreach foreach_reverse|10 goto if immutable import in inout int interface invariant is lazy macro mixin module new nothrow out override package pragma private protected public pure ref return scope shared static struct super switch synchronized template this throw try typedef typeid typeof union unittest version void volatile while with __FILE__ __LINE__ __gshared|10 __thread __traits __DATE__ __EOF__ __TIME__ __TIMESTAMP__ __VENDOR__ __VERSION__",built_in:"bool cdouble cent cfloat char creal dchar delegate double dstring float function idouble ifloat ireal long real short string ubyte ucent uint ulong ushort wchar wstring",literal:"false null true"};var c="(0|[1-9][\\d_]*)",q="(0|[1-9][\\d_]*|\\d[\\d_]*|[\\d_]+?\\d)",h="0[bB][01_]+",v="([\\da-fA-F][\\da-fA-F_]*|_[\\da-fA-F][\\da-fA-F_]*)",y="0[xX]"+v,p="([eE][+-]?"+q+")",o="("+q+"(\\.\\d*|"+p+")|\\d+\\."+q+q+"|\\."+c+p+"?)",k="(0[xX]("+v+"\\."+v+"|\\.?"+v+")[pP][+-]?"+q+")",l="("+c+"|"+h+"|"+y+")",n="("+k+"|"+o+")";var z="\\\\(['\"\\?\\\\abfnrtv]|u[\\dA-Fa-f]{4}|[0-7]{1,3}|x[\\dA-Fa-f]{2}|U[\\dA-Fa-f]{8})|&[a-zA-Z\\d]{2,};";var m={className:"number",begin:"\\b"+l+"(L|u|U|Lu|LU|uL|UL)?",relevance:0};var j={className:"number",begin:"\\b("+n+"([fF]|L|i|[fF]i|Li)?|"+l+"(i|[fF]i|Li))",relevance:0};var s={className:"string",begin:"'("+z+"|.)",end:"'",illegal:"."};var r={begin:z,relevance:0};var w={className:"string",begin:'"',contains:[r],end:'"[cwd]?'};var f={className:"string",begin:'[rq]"',end:'"[cwd]?',relevance:5};var u={className:"string",begin:"`",end:"`[cwd]?"};var i={className:"string",begin:'x"[\\da-fA-F\\s\\n\\r]*"[cwd]?',relevance:10};var t={className:"string",begin:'q"\\{',end:'\\}"'};var e={className:"shebang",begin:"^#!",end:"$",relevance:5};var g={className:"preprocessor",begin:"#(line)",end:"$",relevance:5};var d={className:"keyword",begin:"@[a-zA-Z_][a-zA-Z_\\d]*"};var a={className:"comment",begin:"\\/\\+",contains:["self"],end:"\\+\\/",relevance:10};return{lexemes:x.UNDERSCORE_IDENT_RE,keywords:b,contains:[x.C_LINE_COMMENT_MODE,x.C_BLOCK_COMMENT_MODE,a,i,w,f,u,t,j,m,s,e,g,d]}});