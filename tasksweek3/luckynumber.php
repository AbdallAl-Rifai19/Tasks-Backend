<?php 
echo "Enter the first number: ";
$A = (int)fgets(STDIN);
echo "Enter the second number: ";
$B = (int)fgets(STDIN);
$luckyNumbers = []; 
for ($i = $A; $i <= $B; $i++) {
    $number = $i;
    $isLucky = true;
    while ($number != 0) {
        $digit = $number % 10;
        if ($digit != 4 && $digit != 7) {
            $isLucky = false;
            break;
        }
        $number = (int)($number / 10);
    }

    if ($isLucky) {
        $luckyNumbers[] = $i; 
    }
}
if (count($luckyNumbers) > 0) {
  foreach ($luckyNumbers as $number) {
      echo $number . " ";
  }
} else {
  echo -1; 
}

?>