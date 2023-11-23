<?php

 $name = "";
 $age = "";

 echo "Digite su nombre completo por favor \n";
 $name = readline();

 echo "Digite su edad: \n";
 $age = readline();

 if ($age >= 18) {
      echo "Hola " . $name. " eres mayor de edad.";
  } else {
       echo "Hola " . $name. " eres menor de edad.";
  }

?>