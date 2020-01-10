<?php

$yearA = date('Y');
for ($year = 2010, $compte = 0; $year <= $yearA; $year ++){
  for ($mois = 1; $mois <=12; $mois ++){
    $compte = $compte + 100;
  }
  $compte = $compte * 1.02;
}
$compte = round($compte, 2);
echo "solde actuel = $compte\n"

 ?>
