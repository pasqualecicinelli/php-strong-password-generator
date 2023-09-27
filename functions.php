<?php

function generate_password($chars, $lung_pass)
{

    $chars_lung = strlen($chars) - 1;

    for ($i = 0; $i < $lung_pass; $i++) {
        $random = rand(0, $chars_lung);
        $pass[] = $chars[$random];
    }

    return (implode($pass));
}

?>