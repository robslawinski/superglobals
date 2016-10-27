<?php
function testGlobals()
{
	$foo = "local variable";
	
	echo 'foo in current scope: '. $GLOBALS . ["foo"] ."\n";
	echo 'foo in global scope' . $foo . "\n";
	
	
}

$foo = "An example";
testGlobals();

?>