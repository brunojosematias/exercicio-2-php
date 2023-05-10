<?php

class Camiseta {
    public $nome;
    public $cor;
    public $tamanho;

    public function __construct($nome, $cor, $tamanho) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->tamanho = $tamanho;
    }
}

while (true) {
    $N = intval(fgets(STDIN));

    if ($N == 0) {
        break;
    }

     $camisetas = array();
    for ($i = 0; $i < $N; $i++) {
        $nome = trim(fgets(STDIN));
        $detalhes = explode(" ", trim(fgets(STDIN)));
        $cor = $detalhes[0];
        $tamanho = $detalhes[1];
        $camisetas[] = new Camiseta($nome, $cor, $tamanho);
    }

      usort($camisetas, function ($a, $b) {
           if ($a->cor != $b->cor) {
            return $a->cor <=> $b->cor;
        }

              if ($a->tamanho != $b->tamanho) {
            return $b->tamanho <=> $a->tamanho;
        }

              return $a->nome <=> $b->nome;
    });

    foreach ($camisetas as $camiseta) {
        echo $camiseta->cor . " " . $camiseta->tamanho . " " . $camiseta->nome . "\n";
    }

   
    echo "\n";
}