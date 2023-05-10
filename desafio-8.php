<?php

function countPalindromeLetters($sequence) {
    $frequency = array_count_values(str_split($sequence)); 
    $oddCount = 0; 

    foreach ($frequency as $count) {
        if ($count % 2 !== 0) {
            $oddCount++;
        }
    }

    
    if ($oddCount === 0 || $oddCount === 1) {
        return 0;
    }

    
    return $oddCount - 1;
}


while ($sequence = trim(fgets(STDIN))) {
    $lettersToAdd = countPalindromeLetters($sequence);
    echo $lettersToAdd . "\n";
}