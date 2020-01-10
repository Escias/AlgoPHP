<?php
$debut = microtime(true);
//Initialisation du tableau
$coord = array ("          PLAYER       |      ENNEMY        ",
                "                       |                    ",
                "\  1 2 3 4 5 6 7 8 9 10| 1 2 3 4 5 6 7 8 9 10",
                "A  * * * * * * * * * * | * * * * * * * * * *",
                "B  * * * * * * * * * * | * * * * * * * * * *",
                "C  * * * * * * * * * * | * * * * * * * * * *",
                "D  * * * * * * * * * * | * * * * * * * * * *",
                "E  * * * * * * * * * * | * * * * * * * * * *",
                "F  * * * * * * * * * * | * * * * * * * * * *",
                "G  * * * * * * * * * * | * * * * * * * * * *",
                "H  * * * * * * * * * * | * * * * * * * * * *",
                "I  * * * * * * * * * * | * * * * * * * * * *",
                "J  * * * * * * * * * * | * * * * * * * * * *");


//Affichage du tableau
foreach ($coord as $elements) {
  echo $elements.PHP_EOL;
}
$i = 0;
$nbrCases= 1;
//On positionne les différents bateaux jusqu'à ce qu'il n'en reste plus
while ($i < 5) {
  $listeBateaux = ["Torpilleur (2cases)", "Sous-marin (3 cases)", "Contre-torpilleur (3 cases)", "Croiseur (4 cases)", "Porte-avions (5 cases)"];
  echo "Placez le $listeBateaux[$i]. Entrez une coordonnée de départ (Lettre/Chiffre) : ".PHP_EOL;
  $placement = trim(fgets(STDIN));
  switch ($placement[0]) {
    case "A":
      $coordonnéesL = [3];
      break;
    case "B":
      $coordonnéesL = [4];
      break;
    case "C":
      $coordonnéesL = [5];
      break;
    case "D":
      $coordonnéesL = [6];
      break;
    case "E":
      $coordonnéesL = [7];
      break;
    case "F":
      $coordonnéesL = [8];
      break;
    case "G":
      $coordonnéesL = [9];
      break;
    case "H":
      $coordonnéesL = [10];
      break;
    case "I":
      $coordonnéesL = [11];
      break;
    case "J":
      $coordonnéesL = [12];
      break;
    }
    switch ($placement[1]) {
      case "1":
        $coordonnéesC = [3];
        break;
      case "2":
        $coordonnéesC = [5];
        break;
      case "3":
        $coordonnéesC = [7];
        break;
      case "4":
        $coordonnéesC = [9];
        break;
      case "5":
        $coordonnéesC = [11];
        break;
      case "6":
        $coordonnéesC = [13];
        break;
      case "7":
        $coordonnéesC = [15];
        break;
      case "8":
        $coordonnéesC = [17];
        break;
      case "9":
        $coordonnéesC = [19];
        break;
      case "0":
        $coordonnéesC = [21];
        break;
    }
    $coord[$coordonnéesL[0]][$coordonnéesC[0]] = "O";
    foreach ($coord as $elements) {
      echo $elements.PHP_EOL;
    }
    //On choisi le sens du bateau
    echo "Vers quelle direction voulez vous tourner votre bateau ? Tapez G pour gauche, D pour droite, H pour haut et B pour bas.".PHP_EOL;
    $direction = trim(fgets(STDIN));
    switch ($direction) {
      case "G" :
        if ($coordonnéesC[0] - ($nbrCases * 2) > 1) {
          $coord[$coordonnéesL[0]][$coordonnéesC[0]-(2)] = "O";
          if ($nbrCases > 1) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]-(4)] = "O";
          }
          if ($nbrCases > 3) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]-(6)] = "O";
          }
          if ($nbrCases > 4) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]-(8)] = "O";
          }
        } else {
          echo "Ca marche pas".PHP_EOL;
        }
        break;
      case "D" :
        if ($coordonnéesC[0] + ($nbrCases * 2) < 21) {
          $coord[$coordonnéesL[0]][$coordonnéesC[0]+(2)] = "O";
          if ($nbrCases > 1) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]+(4)] = "O";
          }
          if ($nbrCases > 3) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]+(6)] = "O";
          }
          if ($nbrCases > 4) {
            $coord[$coordonnéesL[0]][$coordonnéesC[0]+(8)] = "O";
          }
        } else {
          echo "Ca marche pas".PHP_EOL;
        }
        break;
      case "H" :
        if ($coordonnéesL[0] - $nbrCases > 2) {
          $coord[$coordonnéesL[0]-1][$coordonnéesC[0]] = "O";
          if ($nbrCases > 1) {
            $coord[$coordonnéesL[0]-2][$coordonnéesC[0]] = "O";
          }
          if ($nbrCases > 3) {
            $coord[$coordonnéesL[0]-3][$coordonnéesC[0]] = "O";
          }
          if ($nbrCases > 4) {
            $coord[$coordonnéesL[0]-4][$coordonnéesC[0]] = "O";
          }
        } else {
          echo "Ca marche pas".PHP_EOL;
        }
        break;
      case "B" :
        if ($coordonnéesL[0] + $nbrCases < 13) {
          $coord[$coordonnéesL[0]+1][$coordonnéesC[0]] = "O";
          if ($nbrCases > 1) {
            $coord[$coordonnéesL[0]+2][$coordonnéesC[0]] = "O";
          }
          if ($nbrCases > 3) {
            $coord[$coordonnéesL[0]+3][$coordonnéesC[0]] = "O";
          }
          if ($nbrCases > 4) {
            $coord[$coordonnéesL[0]+4][$coordonnéesC[0]] = "O";
          }
        } else {
          echo "Ca marche pas".PHP_EOL;
        }
        break;
      }
    foreach ($coord as $elements) {
      echo $elements.PHP_EOL;
    }
    $i++;
    $nbrCases++;
}

//tir de l'IA
$u = 1;
$try = 0;
while($u<18){
  $a1 = rand(65, 74);
  $a2 = rand(48, 57);
  $lettre = chr($a1);
  $chiffre = chr($a2);
  $placement = "$lettre$chiffre";
  switch ($placement[0]) {
    case "A":
      $coordonnéesL = [3];
      break;
    case "B":
      $coordonnéesL = [4];
      break;
    case "C":
      $coordonnéesL = [5];
      break;
    case "D":
      $coordonnéesL = [6];
      break;
    case "E":
      $coordonnéesL = [7];
      break;
    case "F":
      $coordonnéesL = [8];
      break;
    case "G":
      $coordonnéesL = [9];
      break;
    case "H":
      $coordonnéesL = [10];
      break;
    case "I":
      $coordonnéesL = [11];
      break;
    case "J":
      $coordonnéesL = [12];
      break;
    }
    switch ($placement[1]) {
      case "1":
        $coordonnéesC = [3];
        break;
      case "2":
        $coordonnéesC = [5];
        break;
      case "3":
        $coordonnéesC = [7];
        break;
      case "4":
        $coordonnéesC = [9];
        break;
      case "5":
        $coordonnéesC = [11];
        break;
      case "6":
        $coordonnéesC = [13];
        break;
      case "7":
        $coordonnéesC = [15];
        break;
      case "8":
        $coordonnéesC = [17];
        break;
      case "9":
        $coordonnéesC = [19];
        break;
      case "0":
        $coordonnéesC = [21];
        break;
    }
  if($coord[$coordonnéesL[0]][$coordonnéesC[0]] = "O"){
    $coord[$coordonnéesL[0]][$coordonnéesC[0]] = "X";
    $u++;
  }
  else {
    $coord[$coordonnéesL[0]][$coordonnéesC[0]] = "N";
  }
  $try++;
  if($u == 18){
    echo "$try tirs".PHP_EOL;
    foreach ($coord as $elements) {
      echo $elements.PHP_EOL;
    }
  }
}

$fin = microtime(true);
$temps = round($fin - $debut);
echo "$temps.µs".PHP_EOL;

 ?>
