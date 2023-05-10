<?php

function calcularMinasExplosivas($tabuleiro) {
    $n = count($tabuleiro);
    $minasExplosivas = array_fill(0, $n, 0);

    for ($i = 0; $i < $n; $i++) {
        if ($tabuleiro[$i] == 1) {
            $minasExplosivas[$i]++;
            if ($i > 0) {
                $minasExplosivas[$i - 1]++;
            }
            if ($i < $n - 1) {
                $minasExplosivas[$i + 1]++;
            }
        }
    }

    return $minasExplosivas;
}

$n = intval(fgets(STDIN));

$tabuleiro = [];
for ($i = 0; $i < $n; $i++) {
    $celula = intval(fgets(STDIN));
    array_push($tabuleiro, $celula);
}

$minasArredores = calcularMinasExplosivas($tabuleiro);

foreach ($minasArredores as $minas) {
    echo $minas . "\n";
}