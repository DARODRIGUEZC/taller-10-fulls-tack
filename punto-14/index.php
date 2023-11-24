<?php
    include "./passwordCheck.php";

    $user = "";
    $password = "";

    echo "Digite su usuario:\n";
    $user = readline();

    echo "Digite su contraseña:\n";
    $password = readline();

    if (hasSecurityLong($password)) {
    echo "Tiene una longitud válida \n";

    if (hasUpperLetter($password)) {
        echo "Tiene una letra mayúscula \n";

    if (hasNumber($password)) {
            echo "Tiene al menos un número \n";
        
    } else {
            echo "No contiene tiene un número \n";
    }

    } else {
        echo "No tiene una letra mayúscula \n";
    }

    } else {
    echo "No tiene una longitud válida \n";
    }
?>