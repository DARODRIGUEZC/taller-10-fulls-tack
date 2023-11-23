<?php

 $number = 0;
 $i = 0;

 echo " Digite el número a multiplicar: \n";
 $number = readline();

 while($i <= 30) {
  $result = $number + $i;
  echo $number . "x" . $i . "=" . $result . "\n";
  $i++;
 }
?>