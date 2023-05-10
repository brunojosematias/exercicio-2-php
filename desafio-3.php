<?php 
  
 while (true) { 
     $n = intval(trim(fgets(STDIN))); 
  
     if ($n == 0) { 
         break; 
     } 
  
     $results = array_map('intval', explode(' ', trim(fgets(STDIN)))); 
  
     $maryWins = 0; 
     $johnWins = 0; 
  
     foreach ($results as $result) { 
         if ($result == 0) { 
             $maryWins++; 
         } elseif ($result == 1) { 
             $johnWins++; 
         } 
     } 
  
     echo "Mary won $maryWins times and John won $johnWins times\n"; 
 } 