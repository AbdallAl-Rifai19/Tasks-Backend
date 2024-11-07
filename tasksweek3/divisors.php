<?php 
    echo "Enter a number" ;
    $n = fgets(STDIN);
    for ($i=1; $i <=$n ; $i++) { 
      if($n % $i == 0){
        echo "{$i} \n";
      }
    }
?>