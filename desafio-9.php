<?php

$caso = readline();

$j = 0;

while ($caso > $j) {
    $saida = "";

    $palavra = readline();

    $palavra = str_split($palavra);

    $palavra = array_reverse($palavra);

    for($i = 0; $i < count($palavra); $i++) {

        if(ctype_lower($palavra[$i])) {
            $saida .= "$palavra[$i]";
        }

    }
    
    echo $saida . "\n";
    $caso--;
}


