<?php 
  
 while (true) { 
     $line = readline(); 
     if ($line === false) { 
         break; 
     } 
     list($N, $R) = explode(' ', $line); 
     $returned = explode(' ', readline()); 
  
     $volunteers = array_fill(1, $N, true);  
  
     foreach ($returned as $id) { 
         $volunteers[$id] = false;  
     } 
  
     $missing = []; 
     for ($i = 1; $i <= $N; $i++) { 
         if ($volunteers[$i]) { 
             $missing[] = $i;  
         } 
     } 
  
     if (empty($missing)) { 
         echo "*\n";  
     } else { 
         echo implode(' ', $missing) . " \n";  
     } 
 }