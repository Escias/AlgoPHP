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

function tri($n, $tab){
  for ($i = 0; $i < $n; $i++){
    for ($k = $i + 1; $k < $n; $k++){
      if ($tab[$i] > $tab[$k]){
        $copy=$tab[$i];
        $tab[$i]=$tab[$k];
        $tab[$k]=$copy;
      }
    }
  }
  foreach ($tab as $v1){
    echo "$v1 ,";
  }
}
tri($n, $tab);

 ?>
