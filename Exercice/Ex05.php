<?php

for ($ua = 0, $ub = 1, $n = 0; $n < 50; $n++){
  echo "$ua\n";
  $ua = $ua + $ub;
  echo "$ub\n";
  $ub = $ua + $ub;
}

 ?>
