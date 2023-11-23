<?php

  $number = 0; 

  echo "Digite el número a multiplicar: \n";
  $number = readline();

  for ($i = 0; $i <= 30; $i++) {
    $result = $number * $i;
  
  echo $number . " x " . $i . " = " . $result . "\n";
 }
?>