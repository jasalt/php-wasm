<?php // {"autorun":true, "persist":true, "single-expression": true, "render-as": "text"}

// Only "single" expressions can return strings directly
// So wrap the commands in an IFFE.

(function() {
	global $persist;

	fwrite(fopen('php://stdout', 'w'), "standard output!" . PHP_EOL);
	fwrite(fopen('php://stdout', 'w'), sprintf(
		"Ran %d times!\n", ++$persist
	));
	fwrite(fopen('php://stderr', 'w'), 'standard error!' . PHP_EOL);

	return 'return value';
})();
