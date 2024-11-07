<?php 
  // Array to string
  $array = ["apple", "banana", "cherry"];
  $string = "";
  foreach ($array as $value) {
      $string .= $value . " "; // إضافة فاصلة بعد كل عنصر
  }
  echo $string;
?>