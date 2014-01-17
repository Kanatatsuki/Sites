<?php 
//** chromephp BEGIN**
	/*
	include 'ChromePhp.php';
    ChromePhp::log('Hello console!');
    ChromePhp::log($_SERVER);
    ChromePhp::warn('something went wrong!');
    */
//** chromephp END

// Header
    include_once 'php_methods.php';
    include_once 'php_objects.php';

	error_reporting(0);
    // error_reporting(E_ALL);

// Main 
	$a = new User('li');
	$b = new User_Student('liu', '03551');

	echo User::$user_number; echo '<br />';
	echo User_Student::$user_number; echo '<br />';

	print_r($a); echo '<br />';
	print_r($b); echo '<br />';

	$a->show();
	$b->show();
	

	

?>
