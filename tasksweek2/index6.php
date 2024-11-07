<?php
  $a = 15;
  $b = 7;
  $k = 3;

  $is_A_Divisible = ($a % $k == 0);
  $is_B_Divisible = ($b % $k == 0);
  if($is_A_Divisible && $is_B_Divisible){
    echo "Both";
  }else if( $is_A_Divisible){
    echo "Memo";
  }elseif ($$is_B_Divisible) {
    echo "Momo";
  }else{
    echo "No One";
  }
?>