<?php
  include "./operationUtils.php";

  $number1 = 0;
  $number2 = 0;
  $option= "";
  $result = 0;


  $number1 = getNumber();
  $number2 = getNumber();

  $option = showMenu();

  $result = operate($number1, $number2, $option);
  
  echo "El resultado es:" . $result;

?>