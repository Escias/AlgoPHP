<?php

$yearINPUT = trim(fgets(STDIN));
if ($yearINPUT % 4 == 0){
  if ($yearINPUT % 100 == 0 && $yearINPUT % 400 == 0){
    echo "$yearINPUT est une année bissextile\n";
  }
  elseif ($yearINPUT % 100 == 0 || $yearINPUT % 400 != 0){
    echo "$yearINPUT n'est pas une année bissextile\n";
  }
}
elseif ($yearINPUT % 4 != 0){
  echo "$yearINPUT n'est pas une année bissextile\n";
}

 ?>
