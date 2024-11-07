<?php 
  echo "Enter a number" ;
  $number = fgets(STDIN);
  for  ($i = 1; $i <= $number; $i++) {
    echo "{$i}\n" ;
  }

?>