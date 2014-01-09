<?php

$link = mysql_connect("localhost","root","123") or die("can not connect mysql server:

 

".mysql_error() );

 

echo " success connecton !";

 

mysql_close($link);

?>