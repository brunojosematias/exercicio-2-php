<?php

// $caso = readline();

// $palavra = [];
// $saida = [];

// while($caso--) {
//     array_push($palavra, fgets(STDIN));

//     $tamanho = count($palavra);

//     $i = $tamanho - 1;
//     $j = 0;

//     while ($tamanho--) {

//         if(ctype_lower($palavra[$i])) {
//             $saida[$j++] = $palavra[$i--];
//         } else {
//             $i--;
//         }

//         foreach ($saida as $letra) {
//             $resultado .= "$letra";
//         }
    
//         echo $resultado;
//     }
// }


$caso = readline();

$j = 0;

while ($caso > $j) {
    $saida = "";

    $palavra = readline();

    $palavra = str_split($palavra);

    for($i = 0; $i < count($palavra); $i--) {

        if(ctype_lower($palavra[$i])) {
            $saida .= "$palavra[$i]";
        }

        echo $saida;
    }
    
    $caso--;
}


