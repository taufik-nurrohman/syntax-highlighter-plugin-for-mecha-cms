/*
Language: Gherkin
Author: Sam Pikesley (@pikesley) <sam.pikesley@theodi.org>
Description: Gherkin (Cucumber etc)
*/
function(e){return{aliases:["feature"],keywords:"Feature Background Ability Business Need Scenario Scenarios Scenario Outline Scenario Template Examples Given And Then But When",contains:[{className:"keyword",begin:"\\*"},{className:"comment",begin:"@[^@\r\n	 ]+",end:"$"},{className:"string",begin:"\\|",end:"\\$"},{className:"variable",begin:"<",end:">"},e.HASH_COMMENT_MODE,{className:"string",begin:'"""',end:'"""'},e.QUOTE_STRING_MODE]}}