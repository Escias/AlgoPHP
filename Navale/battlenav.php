<?php
//function bataillenavale($string, $int){
$coord = array ("          PLAYER       |      ENNEMY        ",
                "                       |                    ",
                "\  A B C D E F G H I J | A B C D E F G H I H",
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

//}

foreach ($coord as $elements) {
  echo $elements.PHP_EOL;
}

for($nav = 1, $i = 0; $nav < 6; $nav++){
  if($nav == 1){
    echo "Placez le torpilleur de 2 cases. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
    place($nav, $i, $coord);
  }
  elseif ($nav == 2){
    echo "Placez le sous-marin de 3 cases. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
    $i = $i +1;
    place($nav, $i, $coord);
  }
  elseif($nav == 3){
    echo "Placez le contre-torpilleur de 3 cases. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
    $i = $i +1;
    place($nav, $i, $coord);
  }
  elseif($nav == 4){
    echo "Placez le croiseur de 4 cases. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
    $i = $i +2;
    place($nav, $i, $coord);
  }
  elseif($nav == 5){
    echo "Placez le porte-avion de 5 cases. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
    $i = $i +3;
    place($nav, $i, $coord);
  }
}

function place($nav, $i, $coord){
  $placement = trim(fgets(STDIN));
  switch ($placement[0]) {
    case "A":
      $coordonnéesL = [3];
      break;
    case "B":
      $coordonnéesL = [5];
      break;
    case "C":
      $coordonnéesL = [7];
      break;
    case "D":
      $coordonnéesL = [9];
      break;
    case "E":
      $coordonnéesL = [11];
      break;
    case "F":
      $coordonnéesL = [13];
      break;
    case "G":
      $coordonnéesL = [15];
      break;
    case "H":
      $coordonnéesL = [17];
      break;
    case "I":
      $coordonnéesL = [19];
      break;
    case "J":
      $coordonnéesL = [21];
      break;
  }
  switch ($placement[1]) {
    case "1":
      $coordonnéesC = [3];
      break;
    case "2":
      $coordonnéesC = [4];
      break;
    case "3":
      $coordonnéesC = [5];
      break;
    case "4":
      $coordonnéesC = [6];
      break;
    case "5":
      $coordonnéesC = [7];
      break;
    case "6":
      $coordonnéesC = [8];
      break;
    case "7":
      $coordonnéesC = [9];
      break;
    case "8":
      $coordonnéesC = [10];
      break;
    case "9":
      $coordonnéesC = [11];
      break;
    case "0":
      $coordonnéesC = [12];
      break;
  }
  $coord[$coordonnéesC[0]][$coordonnéesL[0]] = "O";
  foreach ($coord as $elements) {
    echo $elements.PHP_EOL;
  }
  echo "Vers quelle direction voulez vous tourner votre bateau ? Tapez G pour gauche, D pour droite, H pour haut et B pour bas.".PHP_EOL;
  $direction = trim(fgets(STDIN));

  switch ($direction) {
    case "G" :
      if ($coordonnéesL[0] - 2> 1) {
        echo "Ca marche".PHP_EOL;
        $coord[$coordonnéesC[0]][$coordonnéesL[0]-2] = "O";
        if($nav > 1){
          $coord[$coordonnéesC[0]][$coordonnéesL[0]-4] = "O";
            if($nav > 3){
              $coord[$coordonnéesC[0]][$coordonnéesL[0]-6] = "O";
              if($nav > 4){
                $coord[$coordonnéesC[0]][$coordonnéesL[0]-8] = "O";
              }
            }
          }
        }

      else {
        echo "Ca marche pas".PHP_EOL;
      }
      break;
    case "D" :
      if ($coordonnéesL[0] + 2< 21) {
        echo "Ca marche".PHP_EOL;
        $coord[$coordonnéesC[0]][$coordonnéesL[0]+2] = "O";
        if($nav > 1){
          $coord[$coordonnéesC[0]][$coordonnéesL[0]+4] = "O";
            if($nav > 3){
              $coord[$coordonnéesC[0]][$coordonnéesL[0]+6] = "O";
              if($nav > 4){
                $coord[$coordonnéesC[0]][$coordonnéesL[0]+8] = "O";
              }
            }
          }
        }

      else {
        echo "Ca marche pas".PHP_EOL;
      }
      break;
    case "H" :
      if ($coordonnéesC[0] - 1 > 2) {
        echo "Ca marche".PHP_EOL;
        $coord[$coordonnéesL[0]-1][$coordonnéesC[0]] = "O";
        if($nav > 1){
          $coord[$coordonnéesL[0]-2][$coordonnéesC[0]] = "O";
            if($nav > 3){
              $coord[$coordonnéesL[0]-3][$coordonnéesC[0]] = "O";
              if($nav > 4){
                $coord[$coordonnéesL[0]-4][$coordonnéesC[0]] = "O";
              }
            }
          }
        }

      else {
        echo "Ca marche pas".PHP_EOL;
      }
      break;
    case "B" :
      if ($coordonnéesC[0] + 1 < 13) {
        echo "Ca marche".PHP_EOL;
        $coord[$coordonnéesL[0]+1][$coordonnéesC[0]] = "O";
        if($nav > 1){
          $coord[$coordonnéesL[0]+2][$coordonnéesC[0]] = "O";
            if($nav > 3){
              $coord[$coordonnéesL[0]+3][$coordonnéesC[0]] = "O";
              if($nav > 4){
                $coord[$coordonnéesL[0]+4][$coordonnéesC[0]] = "O";
              }
            }
          }
        }

      else {
        echo "Ca marche pas".PHP_EOL;
      }
      break;
    }

  foreach ($coord as $elements) {
    echo $elements.PHP_EOL;
  }
}

 ?>
