<?php
	//	Set up MySQL with Apache
	$host = "localhost";
	$usr = "root";
	$pw = "123";
	$db = "kanatatsuki_db";
	
	$link = mysql_connect($host, $usr, $pw) or die("can not connect mysql server:
	".mysql_error() );
	
//	echo " success connecton !";
	
	mysql_select_db($db);
	
	//	Queries
	$query = 
			"
			SELECT name, age FROM staff where age > 25;
			";

	$res = mysql_query($query);

	echo "<table border='1'>
	<tr>
	<th>name</th>
	<th>age</th>
	</tr>";

	while($row = mysql_fetch_array($res))
	  {
	  echo "<tr>";
	  echo "<td>" . $row['name'] . "</td>";
	  echo "<td>" . $row['age'] . "</td>";
	
	  echo "</tr>";
	  }
	echo "</table>";


//	if($res == TRUE)
//		echo "	Table Added";
//	else 
//		echo "	ERROR: Adding Table";
	
	mysql_close($link);
?>