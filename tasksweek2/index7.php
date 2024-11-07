<?php
// first way
  $N = 39;
  $strN = (string)$N;
  $firstDigit = (int)$strN[0]; 
  $secondDigit = (int)$strN[1];
  if (($firstDigit != 0 && $secondDigit % $firstDigit == 0) || 
    ($secondDigit != 0 && $firstDigit % $secondDigit == 0)) {
    echo "YES";
}else {
  echo "NO";
}
// second way
echo '<br>';
$N = 64;
$firstDigit = (int)($N / 10); // الرقم الأول (العشرات)
$secondDigit = $N % 10; 
if (($firstDigit != 0 && $secondDigit % $firstDigit == 0) || 
  ($secondDigit != 0 && $firstDigit % $secondDigit == 0)) {
  echo "YES";
} else {
  echo "NO";
}
?>
