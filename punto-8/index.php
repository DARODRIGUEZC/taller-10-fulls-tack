<?php
  const TICKET_PRICE = 25000;
  $membershipType = "";
  $personNumber = 0;

  // Proceso
  echo "Digite el numero de personas que entraran a la bolera: \n";
  $personNumber = readline();

  echo "Digite el tipo de membresia: \n";
  $membershipType = strtoupper(readline());

  $totalPay = $personNumber * TICKET_PRICE;

  switch($membershipType) {
    case "A":
    $totalPay = $totalPay * 0.7;
    break;
    case "B":
    $totalPay = $totalPay * 0.75;
    break;
    case "C":
    $totalPay = $totalPay * 0.9;
    break;
    case "D":
    $totalPay = $totalPay * 0.95;
    break;
    default:
    echo "Usted no cuenta con membresia para descuento \n";
}

 echo "El valor a pagar es de $" . $totalPay;

?>