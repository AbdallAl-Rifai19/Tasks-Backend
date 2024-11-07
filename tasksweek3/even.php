<?php
   echo "Enter a number" ;
   $n = fgets(STDIN);
   $foundEven = false;
   for ($i=1; $i <=$n ; $i++) { 
      if ($i % 2 == 0){
         echo "{$i}\n";
         $foundEven = true ;
      }

   }
   if (!$foundEven) {
      echo "-1\n";
   }
?>