<?php
$jour = date('d');
$mois = date('m');
$year = date('Y');
echo "jour de naissance (JJ)\n";
$jourINPUT = trim(fgets(STDIN));
echo "mois de naissance (MM)\n";
$moisINPUT = trim(fgets(STDIN));
echo "année de naissance (AAAA)\n";
$anneeINPUT = trim(fgets(STDIN));
if ($anneeINPUT > $year){
  while ($anneeINPUT > $year){
    echo "Entrer une année de naissance valide (inférieur ou égale à $year)\n";
    $anneeINPUT = trim(fgets(STDIN));
  }
}
if ($anneeINPUT <= $year){
  if ($moisINPUT > $mois){
    while ($moisINPUT > $mois){
      echo "Entrer un mois de naissance valide (inférieur ou égale à $mois (si année = $year))\n";
      $moisINPUT = trim(fgets(STDIN));
    }
    if ($jourINPUT > $jour){
      while ($jourINPUT > $jour){
        echo "Entrer un un jour de naissance valide (inférieur pour égale à $jour (si année = $year et mois = $mois))";
        $jourINPUT = trim(fgets(STDIN));
      }
    }
  }
}
if ($moisINPUT > 12){
  echo "Entrer un mois valide (inférieur ou égale à 12)\n";
  $moisINPUT = trim(fgets(STDIN));
}
if ($moisINPUT <= 7){
  if ($moisINPUT % 2 == 0){
    if ($jour > 30){
      echo "Entrer un jour valide (inférieur pour égale 30)";
      $jourINPUT = trim(fgets(STDIN));
    }
  }
  else {
    if ($jour > 31){
      echo "Entrer un jour valide (inférieur pour égale 31)";
      $jourINPUT = trim(fgets(STDIN));
    }
  }
}
elseif ($moisINPUT >= 8){
  if ($moisINPUT % 2 != 0){
    if ($jour > 30){
      echo "Entrer un jour valide (inférieur pour égale 30)";
      $jourINPUT = trim(fgets(STDIN));
    }
  }
  else {
    if ($jour > 31){
      echo "Entrer un jour valide (inférieur pour égale 31)";
      $jourINPUT = trim(fgets(STDIN));
    }
  }
}
echo "date de naissance $jourINPUT/$moisINPUT/$anneeINPUT\n";
$ageA = $year - $anneeINPUT;
if ($anneeINPUT == $year){
  $ageM = $mois - $moisINPUT;
  if ($moisINPUT == $jour){
    $ageJ = $jour - $jourINPUT;
  }
  else {
    if ($moisINPUT <= 7){
      if ($moisINPUT % 2 == 0){
        $ageJ = 29 - $jourINPUT + $jour;
      }
      else {
        $ageJ = 30 - $jourINPUT + $jour;
      }
    }
    elseif ($moisINPUT >= 8){
      if ($moisINPUT % 2 != 0){
        $ageJ = 29 - $jourINPUT + $jour;
      }
      else {
        $ageJ = 30 - $jourINPUT + $jour;
      }
    }
  }
}
else {
  $ageM = $mois - $moisINPUT;
  if ($moisINPUT <= 7){
    if ($moisINPUT % 2 == 0){
      $ageJ = 29 - $jourINPUT + $jour;
    }
    else {
      $ageJ = 30 - $jourINPUT + $jour;
    }
  }
  elseif ($moisINPUT >= 8){
    if ($moisINPUT % 2 != 0){
      $ageJ = 29 - $jourINPUT + $jour;
    }
    else {
      $ageJ = 30 - $jourINPUT + $jour;
    }
  }
}
echo "tu as $ageA an(s), $ageM mois et $ageJ jour(s)\n";
 ?>
