<?php
 
  $firstNumber  = 0;
  $secondNumber = 0;
  $option = 0;
  $result = 0;


echo "Digite el primer número a operar: \n";
 $firstNumber = readline ();

 echo"Digite el segundo número operar: \n";
 $secondNumber = readline ();

echo "Seleccione la operacion que desea hacer: \n";
echo "1 - SUMAR \n";
echo "2 - RESTAR \n";
echo "3 - MULTIPLICAR \n";
echo "4 - DIVIDIR \n";

$option = readline();

switch ($option) {
  case 1:
     $result = $firstNumber + $secondNumber;
    break;
  case 2:
   $result = $firstNumber - $secondNumber;
    break;
  case 3:
   $result = $firstNumber * $secondNumber;
    break;
  case 4: 
    $result = $firstNumber / $secondNumber;
    break;
  default: 
    echo "Digito una opción incorrecta \n";
}

echo "El resultado de la operación es: " . $result .;

  ?>