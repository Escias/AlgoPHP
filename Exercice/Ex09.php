<?php

$chaine = trim(fgets(STDIN));
nvoy($chaine);

function voyelle($voy){
  return $voy=='a' || $voy=='e' || $voy=='i' || $voy=='o' || $voy=='u' || $voy=='y'
  ||$voy=='A' || $voy=='E' || $voy=='I' || $voy=='O' || $voy=='U' || $voy=='Y';
}

function nvoy($chaine){
  $n = 0;
  for ($u = 0; $u < strlen($chaine); $u++){
    if (voyelle($chaine[$u])){
      $n++;
    }
  }
  echo "$n\n";
}

 ?>
