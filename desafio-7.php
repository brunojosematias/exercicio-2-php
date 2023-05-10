<?php

$aposta = explode(" ", fgets(STDIN));
$sorteio = explode(" ", fgets(STDIN));

$pontos = 0;

for($i = 0; $i < count($aposta); $i++) {
    foreach($sorteio as $sorteado) {
        if ($aposta[$i] == $sorteado) {
            $pontos += 1;
        }
    }
}

foreach($sorteio as $sorteado) {
    if  ($sorteado < 1 || $sorteado > 99) {
        break;
    } else {
        if ($pontos === 3) {
            echo "terno \n";
        } else if ($pontos === 4) {
            echo "quadra \n";
        } else if ($pontos === 5) {
            echo "quina \n";
        } else if ($pontos === 6) {
            echo "sena \n";
        } else {
            echo "azar \n";
        }

        break;
    }
}   