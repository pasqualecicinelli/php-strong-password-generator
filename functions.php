<?php

function generate_password($chars, $lung_pass)
{

    $chars_lung = strlen($chars) - 1;

    for ($i = 0; $i < $lung_pass; $i++) {
        $random = rand(0, $chars_lung);
        $pass[] = $chars[$random];
    }

    //controllo

    $maiuscola = false;
    $minuscola = false;
    $numero = false;
    $car_speciale = false;

    foreach ($pass as $char_control) {
        if (ctype_upper($char_control)) {
            $maiuscola = true;
        } elseif (ctype_lower($char_control)) {
            $minuscola = true;
        } elseif (is_numeric($char_control)) {
            $numero = true;
        } else {
            $car_speciale = true;
        }
    }

    if ($maiuscola && $minuscola && $numero && $car_speciale) {
        return (implode($pass));
    }

}

?>