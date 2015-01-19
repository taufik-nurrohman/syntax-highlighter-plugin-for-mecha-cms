/*
Language: Roboconf
Author: Vincent Zurczak <vzurczak@linagora.com>
Website: http://roboconf.net
Description: Syntax highlighting for Roboconf's DSL
Category: config
*/
function(e){var n="[a-zA-Z-_][^\n{\r\n]+\\{";return{aliases:["graph","instances"],case_insensitive:!0,keywords:"import",contains:[{className:"facet",begin:"^facet "+n,end:"}",keywords:"facet installer exports children extends",contains:[e.HASH_COMMENT_MODE]},{className:"instance-of",begin:"^instance of "+n,end:"}",keywords:"name count channels instance-data instance-state instance of",contains:[{className:"keyword",begin:"[a-zA-Z-_]+( |	)*:"},e.HASH_COMMENT_MODE]},{className:"component",begin:"^"+n,end:"}",lexemes:"\\(?[a-zA-Z]+\\)?",keywords:"installer exports children extends imports facets alias (optional)",contains:[{className:"string",begin:"\\.[a-zA-Z-_]+",end:"\\s|,|;",excludeEnd:!0},e.HASH_COMMENT_MODE]},e.HASH_COMMENT_MODE]}}