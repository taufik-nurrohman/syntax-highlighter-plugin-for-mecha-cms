/*
Language: Nix
Author: Domen Kožar <domen@dev.si>
Description: Nix functional language. See http://nixos.org/nix
*/
function(n){var e={keyword:"rec with let in inherit assert if else then",constant:"true false or and null",built_in:"import abort baseNameOf dirOf isNull builtins map removeAttrs throw toString derivation"},s={className:"subst",begin:/\$\{/,end:/\}/,keywords:e},i={className:"variable",begin:/[a-zA-Z0-9-_]+(\s*=)/},a={className:"string",begin:"''",end:"''",contains:[s]},t={className:"string",begin:'"',end:'"',contains:[s]},r=[n.NUMBER_MODE,n.HASH_COMMENT_MODE,n.C_BLOCK_COMMENT_MODE,a,t,i];return s.contains=r,{aliases:["nixos"],keywords:e,contains:r}}