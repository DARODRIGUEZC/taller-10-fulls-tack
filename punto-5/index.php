<?php

  const TICKET_PRICE = 25000;
  $membershipType = "";
  $personNumber = 0;


  echo "Digite el tipo de membresia: \n";
  $membershipType = readline();

  echo "Digite el numero de personas que entraran a la bolera: \n";
  $personNumber = readline();

  $totalPay = $personNumber * TICKET_PRICE;

  if (strtoupper($membershipType) == "A"|| strtoupper($membershipType == "B") == "B"){
    $totalPay = $totalPay * 0.7;
  } 

 echo "El valor a pagar es de $" . number_format ($totalPay);

?>