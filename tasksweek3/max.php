<?php
  echo "Enter the number of values: ";
  $number = (int)fgets(STDIN);
  $values = [];
  for ($i=1; $i <=$number ; $i++) { 
    echo "Enter value $i: ";
    $value = (int)fgets(STDIN); 
    array_push($values, $value);
  }
  $max = $values[0];
  for ($i=1; $i <count($values) ; $i++) {
    if ($values[$i] > $max) {
      $max = $values[$i];
    }
    
  }
  echo "Max is: {$max}";
 
?>