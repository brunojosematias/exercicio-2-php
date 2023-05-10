<?php

$n = readline();

for ($i = 1; $i <= $n; $i++) {
    $placar1 = readline();
    $placar2 = readline();

    $m1 = intval(explode(' x ', $placar1)[0]);
    $v1 = intval(explode(' x ', $placar1)[1]);
    $m2 = intval(explode(' x ', $placar2)[0]);
    $v2 = intval(explode(' x ', $placar2)[1]);

    $total_gols_time1 = $m1 + $v2;
    $total_gols_time2 = $v1 + $m2;

    $saldo_gols_time1 = $total_gols_time1 - $total_gols_time2;
    $saldo_gols_time2 = $total_gols_time2 - $total_gols_time1;

    if ($total_gols_time1 > $total_gols_time2) {
        echo "Time 1\n";
    } elseif ($total_gols_time2 > $total_gols_time1) {
        echo "Time 2\n";
    } elseif ($saldo_gols_time1 > $saldo_gols_time2) {
        echo "Time 1\n";
    } elseif ($saldo_gols_time2 > $saldo_gols_time1) {
        echo "Time 2\n";
    } elseif ($v1 > $v2) {
        echo "Time 2\n";
    } elseif ($v2 > $v1) {
        echo "Time 1\n";
    } else {
        echo "Penaltis\n";
    }
}