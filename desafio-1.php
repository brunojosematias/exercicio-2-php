<?php

list($A, $B, $C) = fscanf(STDIN, "%f %f %f");

$delta = ($B * $B) - ((4 * $A) * $C);

$resul1 = (-$B + sqrt($delta)) / (2 * $A);
$resul2 = (-$B - sqrt($delta)) / (2 * $A);

if ($delta > 0 && $A != 0) {
    echo "R1 = " . number_format($resul1, 5) . "\n";
    echo "R2 = " . number_format($resul2, 5) . "\n";
 }

else {
    echo "Impossivel calcular\n";
}