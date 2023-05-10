<?php

while (true) {
    $input = readline();
    $values = explode(" ", $input);

    $Q = intval($values[0]);
    $D = intval($values[1]);
    $P = intval($values[2]);

    if ($Q == 0) {
        break;
    }

    $dias_normal = $P * $D;
    $dias_aumentados = ($Q - 5) * (16 - $D);
    $total_paginas = ($dias_normal + $dias_aumentados) / ($Q - 5);

    echo intval($total_paginas) . " paginas." ;
}