<?php

$tab1 = [1, 2, 4, 6, 8];
$tab2 = [1, 2, 4, 6, 8];
for ($n = 0; $n < 8; $n++){
  if ($tab1[$n] != $tab2[$n]){
    echo "les 2 tableaux sont différents\n";
    exit;
  }
  elseif ($n = 8 && $tab1[$n] == $tab2[$n]){
    echo "les 2 tableaux sont identique\n";
    exit;
  }
}

 ?>
