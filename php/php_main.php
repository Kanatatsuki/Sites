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

	//error_reporting(0);
    error_reporting(E_ALL);

// Main 
    // $a = new User('li');
    // $a->show();

    // $a->set_user_info('a', 'aaa');
   	// $a->set_user_info('c', 'ccc');
   	// $a->set_user_info('b', 'bbb');

   	// $a->show_user_info();
   	
   	// sort($a->user_info, SORT_STRING);
   	// $a->show_user_info();

   	// shuffle($a->user_info);
   	// $a->show_user_info();

    // $a->set_intro("I was a good man.");
    // $a->split_intro();   
   		
    // $a->user_compact();
    // $a->user_extract();
    // echo '<pre>';
    //   $a = sprintf("<font color='#%X%X%X'>", 200, 180, 32);
    //   $a .= sprintf("test %s,\n %d, %X", 'Simom', 33, 33);
    //   $a .= sprintf("</font>");

    //   echo $a;
    // echo '</pre>';

  if(!$_FILES['filename']['error']){
    $name = $_FILES['filename']['name'];
    
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);

    echo '<pre>';
      echo "<img src='$name' /> \n";
      print_r($_FILES);
    echo '</pre>';

  }

?>
