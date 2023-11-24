<?php
  function hasSecurityLong($pass) {
     return strlen($pass) >= 8;  
  }

  function hasUpperLetter($pass) {
    $arrayPass = str_split($pass);

    foreach ($arrayPass as $letter) {
      if (ctype_upper($letter)) {
        return true;
      }
    }
    return false;
    
  }

    function hasNumber($pass) {
    $arrayPass = str_split($pass);

    foreach ($arrayPass as $character) {
        if (is_numeric($character)) {
            return true;
        }
    }
    return false;
  }
?>