<?php 
    echo "Enter a number";
    $n = (int)fgets(STDIN);
    $isPrime = true; 
    for ($i=2; $i <$n/2 ; $i++) { 
     if($n %$i == 0){
       $isPrime = false;
       break;
     }
    }

    if ($isPrime && $n> 1) {
      echo "YES\n";
  } else {
      echo "NO\n";
  }
?>