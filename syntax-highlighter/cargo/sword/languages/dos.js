/*
Language: DOS .bat
Author: Alexander Makarov <sam@rmcreative.ru>
Contributors: Anton Kochkov <anton.kochkov@gmail.com>
*/
function(e){var a={className:"comment",begin:/@?rem\b/,end:/$/,relevance:10},r={className:"label",begin:"^\\s*[A-Za-z._?][A-Za-z0-9_$#@~.?]*(:|\\s+label)",relevance:0};return{aliases:["bat","cmd"],case_insensitive:!0,keywords:{flow:"if else goto for in do call exit not exist errorlevel defined",operator:"equ neq lss leq gtr geq",keyword:"shift cd dir echo setlocal endlocal set pause copy",stream:"prn nul lpt3 lpt2 lpt1 con com4 com3 com2 com1 aux",winutils:"ping net ipconfig taskkill xcopy ren del",built_in:"append assoc at attrib break cacls cd chcp chdir chkdsk chkntfs cls cmd color comp compact convert date dir diskcomp diskcopy doskey erase fs find findstr format ftype graftabl help keyb label md mkdir mode more move path pause print popd pushd promt rd recover rem rename replace restore rmdir shiftsort start subst time title tree type ver verify vol"},contains:[{className:"envvar",begin:/%%[^ ]|%[^ ]+?%|![^ ]+?!/},{className:"function",begin:r.begin,end:"goto:eof",contains:[e.inherit(e.TITLE_MODE,{begin:"([_a-zA-Z]\\w*\\.)*([_a-zA-Z]\\w*:)?[_a-zA-Z]\\w*"}),a]},{className:"number",begin:"\\b\\d+",relevance:0},a]}}