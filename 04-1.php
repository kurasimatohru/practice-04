<?php

function sum($max){
    
    $result = 0;
    
    for($i = 1; $i <= $max * 2;$i++ ){
       $result = $i;
    }
    return $result;
    
}

 echo sum(5);
 