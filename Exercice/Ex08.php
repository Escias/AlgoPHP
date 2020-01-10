<?php

$tab = [];
for ($ua = 0, $ub = 1, $n = 0; $n < 50; $n++){
  $tab[] = floatval($ua);
  $tab[] = floatval($ub);
  $ua = $ua + $ub;
  $ub = $ua + $ub;
}
foreach ($tab as $v1){
  echo "$v1 ,";
}

 ?>
