<?php
// Example one
  function factorial($num){
    // base case
    if($num==0 || $num == 1){
      return 1;

    }
    else{
      return $num * factorial($num-1);
    }
  }
  /*
  5*factorial(4)
         |
   4*factorial(3)
         |
    3*factorial(2)
         |
     2*factorial(1)
         |
         1
  


  */
  echo factorial(5);
  echo "<br>";
  // 0 1 2 3 4 5 6 7  8  9 ........

  // 0 1 1 2 3 5 8 13 21 34 .......

  function fibonacci($n) {
    if ($n == 0 || $n == 1){
      return $n ;
    }
    else {
      return fibonacci($n -1) + fibonacci($n -2);
    }

  }
  echo fibonacci(3);
 ?>