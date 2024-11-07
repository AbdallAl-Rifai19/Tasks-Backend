<?php 
 echo "Enter A Number" ;
  $num= fgets(STDIN);
  if ($num == strrev($num)) {
    echo "{$num}\n YES";
} else {
    echo "{$num}\n NO";
}


?>