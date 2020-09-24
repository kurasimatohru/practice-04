<?php

$arr = array(1,3,5,7,9);
  
  function multiplay($arr){
  $result = 1;
  
  foreach($arr as $a){
      $result *= $a;
  }
return $result;

}

echo multiplay($arr);
