<?php
function testGlobals()
{
	$foo = "local variable";
	
	echo '<p>'. 'foo in current scope: '. $GLOBALS . ["foo"] .'</p>';
	echo '<p>'.'foo in global scope' . $foo . '</p>';
	
	
}

$foo = "An example";
testGlobals();

function test_Server()
{
	$path = print_r('<p>'. $_SERVER['PHP_SELF'].'</p>');
	
}

test_Server();

function test_Get()
{
	echo '<p>'. $_GET['title'] . '</p>';
}

test_Get();
?>