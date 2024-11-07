<?php 
/*

*
**
***
****

*/
echo "Enter the number" ;
$n = (int)fgets(STDIN);
for ($i=1; $i <=$n ; $i++) { 
  for ($j=1; $j <= $i ; $j++) { 
    echo "*" ;
  }
  echo "\n";
}


/*

****
***
**
*

*/

echo "Enter the number" ;
$n = (int)fgets(STDIN);
for ($i=$n; $i >=1 ; $i--) { 
  for ($j=1; $j <= $i ; $j++) { 
    echo "*" ;
  }
  echo "\n";
}


?>