/*
Language: FIX
Author: Brent Bradbury <brent@brentium.com>
*/
function(){return{contains:[{begin:/[^\u2401\u0001]+/,end:/[\u2401\u0001]/,excludeEnd:!0,returnBegin:!0,returnEnd:!1,contains:[{begin:/([^\u2401\u0001=]+)/,end:/=([^\u2401\u0001=]+)/,returnEnd:!0,returnBegin:!1,className:"attribute"},{begin:/=/,end:/([\u2401\u0001])/,excludeEnd:!0,excludeBegin:!0,className:"string"}]}],case_insensitive:!0}}