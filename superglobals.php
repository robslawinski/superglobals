<?php
function testGlobals()
{
	$foo = "local variable";
	
	echo '<p>'. 'foo in current scope: '. $GLOBALS . ["foo"] .'</p>';
	echo 'foo in global scope' . $foo . "\n";
	
	
}

$foo = "An example";
testGlobals();

function test_Server()
{
	echo $_SERVER[''];
}
?>