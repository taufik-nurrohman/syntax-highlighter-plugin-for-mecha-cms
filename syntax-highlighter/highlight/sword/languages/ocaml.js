/*!
Language: OCaml
Author: Mehdi Dogguy <mehdi@dogguy.org>
Contributors: Nicolas Braud-Santoni <nicolas.braud-santoni@ens-cachan.fr>
Description: OCaml language definition.
*/
hljs.registerLanguage("ocaml",function(a){return{keywords:{keyword:"and as assert asr begin class constraint do done downto else end exception external false for fun function functor if in include inherit initializer land lazy let lor lsl lsr lxor match method mod module mutable new object of open or private rec ref sig struct then to true try type val virtual when while with parser value",built_in:"bool char float int list unit array exn option int32 int64 nativeint format4 format6 lazy_t in_channel out_channel string"},illegal:/\/\//,contains:[{className:"string",begin:'"""',end:'"""'},{className:"comment",begin:"\\(\\*",end:"\\*\\)",contains:["self"]},{className:"class",beginKeywords:"type",end:"\\(|=|$",contains:[a.UNDERSCORE_TITLE_MODE]},{className:"annotation",begin:"\\[<",end:">\\]"},a.C_BLOCK_COMMENT_MODE,a.inherit(a.APOS_STRING_MODE,{illegal:null}),a.inherit(a.QUOTE_STRING_MODE,{illegal:null}),a.C_NUMBER_MODE]}});