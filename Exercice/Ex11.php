<?php

$nombre = trim(fgets(STDIN));
if(QP($nombre)){
  echo "$nombre est un nombre premier\n";
}
else{
  echo "$nombre n'est pas un nombre premier\n";
}
for($lim = 0, $a = 1; $lim < 100; $a++){
  if(QP($a)){
    echo "$a, ";
    $lim++;
    if($lim == 100){
      echo "\n";
    }
  }
}

function QP($nombre){
  if($nombre == 1 || $nombre == 2){
    return true;
  }
  elseif($nombre % 2 == 0 || is_int($racine)){
    return false;
  }
  for($u = 3; $u < sqrt($nombre); $u = $u + 2){
    if($nombre % $u == 0){
      break;
    }
  }
  return true;
}

 ?>
