<?php

$tab = array ("          PLAYER       |      ENNEMY        ",
              "                       |                    ",
              "\  A B C D E F G H I J | A B C D E F G H I J",
              "1  * * * * * * * * * * | * * * * * * * * * *",
              "2  * * * * * * * * * * | * * * * * * * * * *",
              "3  * * * * * * * * * * | * * * * * * * * * *",
              "4  * * * * * * * * * * | * * * * * * * * * *",
              "5  * * * * * * * * * * | * * * * * * * * * *",
              "6  * * * * * * * * * * | * * * * * * * * * *",
              "7  * * * * * * * * * * | * * * * * * * * * *",
              "8  * * * * * * * * * * | * * * * * * * * * *",
              "9  * * * * * * * * * * | * * * * * * * * * *",
              "10 * * * * * * * * * * | * * * * * * * * * *");

affiche($tab);

function affiche($tab){
  foreach($tab as $int){
    echo $int.PHP_EOL;
  }
}

for($nav = 1; $nav < 5; $nav++){
  placerNavire($nav, $tab);
}

function plcol($placement, $tab){
  switch ($placement = [0]){
    case "A":
      $coordL = [4];
      break;
    case "B":
      $coordL = [6];
      break;
    case "C":
      $coordL = [8];
      break;
    case "D":
      $coordL = [10];
      break;
    case "E":
      $coordL = [12];
      break;
    case "F":
      $coordL = [14];
      break;
    case "G":
      $coordL = [16];
      break;
    case "H":
      $coordL = [18];
      break;
    case "I":
      $coordL = [20];
      break;
    case "J":
      $coordL = [22];
      break;
  }
  switch ($placement = [1]){
    case "1":
      $coordC = [4];
      break;
    case "2":
      $coordC = [5];
      break;
    case "3":
      $coordC = [6];
      break;
    case "4":
      $coordC = [7];
      break;
    case "5":
      $coordC = [8];
      break;
    case "6":
      $coordC = [9];
      break;
    case "7":
      $coordC = [10];
      break;
    case "8":
      $coordC = [11];
      break;
    case "9":
      $coordC = [12];
      break;
    case "10":
      $coordC = [13];
      break;
  }
  $tab[$coordL[0]][$coordC[0]] = "V";
  foreach ($tab as $elements) {
    echo $elements.PHP_EOL;
  }
}

function placerNavire($nav, $tab){
  if($nav==1){
    $placement = trim(fgets(STDIN));
    plcol($placement, $tab);
  }
}

 ?>
