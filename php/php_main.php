<?php 
//** chromephp BEGIN**
	include 'ChromePhp.php';
    ChromePhp::log('Hello console!');
    ChromePhp::log($_SERVER);
    ChromePhp::warn('something went wrong!');
//** chromephp END**

    $a =  2;
	do {
		echo $a."<br/>";
	} while(++$a<3);
?>