<?php

	for($count = 1; $count <= 100; $count++){
		echo"count: $count";
		
		if( ($count % 3) == 0){
			if( ($count % 5) == 0 ){
				echo " FizzBuzz<br>";
			}
			else
					echo " Fizz<br>";
		}

		else if( ($count % 5) == 0){
			echo "Buzz<br>";
		}
		
		else 
			echo "<br>";
	}
	
?>