<?php

echo "entrer les valeurs du tableau\n";
echo "enter FIN pour arrêter la saisie du tableau\n";
$tab = [];
while(true){
  $enter = trim(fgets(STDIN));
  if ($enter == "FIN"){
    break;
  }
  $tab[] = floatval($enter);
}

$n = count($tab);
$s = 0;
foreach ($tab as $var){
  $s = $s + $var;
}
$moy = $s / $n;
$moy = round($moy, 2);
echo "le tableau contient $n valeurs et une moyenne de $moy\n";

 ?>
