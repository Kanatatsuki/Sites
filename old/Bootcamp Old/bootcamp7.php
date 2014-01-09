<?php
    
    //  set random's seed 
    function seed()
    {
        list($msec, $sec) = explode(' ', microtime());
        return (float) $sec;
    }
    srand(seed());
    
    try{
        //  input test
        if( (preg_match("/^[1-9][0-9]*$/",$_GET["drawTimes"])) ){
        
            //  data preparetion
            $count = (int)$_GET["drawTimes"];
        
            $items = array("Driland", "Clinoppe", "Fishing Star",
                       "Cerberus Age", "Animal Days", "Kingdom Age",
                       "MONPLA SMASH", "Pirates Age", "Dragon Collection",
                       "Dragon Ark");

            $len = count($items);

            //  draws
            for( $i=0; $i<$count; $i++ ){
                $ind = rand(0, $len-1);
                echo "Draw NO.", $i+1, ": ", $items[$ind], "<br>";
            }
            
            
        }
        else
            throw new Exception("Invalid Input! Please Try Ag!<br>");
    }catch( Exception $e ){
        echo $e->getMessage(), "<br>";
    }
    
?>