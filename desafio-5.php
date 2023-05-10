<?php

$qNum = readline("Quantos algarismos terá o seu número? (entre 1 e 10): "); 

$num = readline("Qual é o seu número?: "); 

if (strlen($num) > $qNum || $qNum > 10 || $qNum < 1) {
  echo "[ERRO] Valores inseridos inválidos.";
} else {
  $str_num = (string) $num; 
  $digitos = str_split($str_num); 
  
  $soma = 0;
  
  foreach ($digitos as $digito) {
    $soma += (int) $digito; 
  }

  echo "A soma dos algarismos de $num é $soma.\n";

  if ($soma % 3 == 0) {
    echo "Seu número é divisível por 3!\n";
  } else {
    echo "Seu número não é divisível por 3.\n";
  }
}