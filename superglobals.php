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
	echo '<p>'. 'Hello ' . htmlspecialchars($_GET["name"]) . '.' .'</p>';
}

test_Get();

function test_Post()
{
	echo '<p>' . 'Hello '. htmlspecialchars($_POST["name"]) .'</p>';
}
test_Post();

function test_Files(array $_files, $top = TRUE)
{
	$files = array();
	foreach($_files as $name => $files)
	{
		if($top) $sub_name = $files['name'];
		else $sub_name = $name;
		
		if(is_array($sub_name))
		{
			foreach(array_keys($sub_name) as $key)
			{
				$files[$name][$key] = array(
						'name' => $file['name'][$key],
						'type'     => $file['type'][$key],
						'tmp_name' => $file['tmp_name'][$key],
						'error'    => $file['error'][$key],
						'size'     => $file['size'][$key],
				);
				$files[$name] = test_Files($files[name], FALSE);
			}
		}
		else
		{
			$files[$name] = $file;
		}
	}
	return files;
}

$files = test_Files($_FILES);
print_r($files);

function test_Cookie()
{
	if(isset($_COOKIE['firstname']))
	{
		echo 'You are' . $_COOKIE['firstname'];
	}
	else
	{
		echo 'Please put in your first name';
	}
}
print_r(test_Cookie());

function test_Session()
{
	$_SESSION['favcolor'] = "red";
	$_SESSION['favanimal'] = "otter";
	$_SESSION['favgame'] = "Monopoly";
	
	echo 'favorite animal is' .$_SESSION['favanimal'].'<br/>';
	echo 'favorite game is' .$_SESSION['favgame']. '<br/>';
	echo 'favorit color is' .$_SESSION['favcolor']. '<br/>';
}
print_r(test_Session());
?>