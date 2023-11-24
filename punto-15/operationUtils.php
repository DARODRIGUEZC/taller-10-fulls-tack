<?php
function getNumber() {
    echo "Digite un número:\n";
    return readline();
}

function showMenu() {
    echo "Seleccione la operación que desea hacer: \n";
    echo "1 - SUMAR \n";
    echo "2 - RESTAR \n";
    echo "3 - MULTIPLICAR \n";
    echo "4 - DIVIDIR \n";
    return readline();
}

function operate($x, $y, $option) {
    switch ($option) {
        case 1:
            return add($x, $y);
        case 2:
            return sub($x, $y);
        case 3:
            return multiply($x, $y);
        case 4:
            return divide($x, $y);
        default:
            echo "Opción no válida\n";
            return 0;
    }
}

function add($x, $y) {
    return $x + $y;
}

function sub($x, $y) {
    return $x - $y;
}

function multiply($x, $y) {
    return $x * $y;
}

function divide($x, $y) {
    if ($y != 0) {
        return $x / $y;
    } else {
        echo "No se puede dividir por cero.\n";
        return 0;
    }
}
?>