<?php

#Taille des bateaux :
#Porte-avions : 5 cases
#Croiseur : 4 cases
#Contre-torpilleur : 3 cases
#Sous-marin : 3 cases
#Torpilleur : 2 cases

for($nav = 1; $nav < 5; $nav++){
  placerNavire($nav);
}

function tablettre($lettre){
  if($lettre=='A' || $lettre=='B' || $lettre=='C' || $lettre=='D' || $lettre=='E' || $lettre=='F' || $lettre=='G' || $lettre=='H' || $lettre=='I' || $lettre=='J'
        || $lettre=='a' || $lettre=='b' || $lettre=='c' || $lettre=='d' || $lettre=='e' || $lettre=='f' || $lettre=='g' || $lettre=='h' || $lettre=='i' || $lettre=='j'){
          return true;
  }
  else {
    while($lettre!='A' || $lettre!='B' || $lettre!='C' || $lettre!='D' || $lettre!='E' || $lettre!='F' || $lettre!='G' || $lettre!='H' || $lettre!='I' || $lettre!='J'
          || $lettre!='a' || $lettre!='b' || $lettre!='c' || $lettre!='d' || $lettre!='e' || $lettre!='f' || $lettre!='g' || $lettre!='h' || $lettre!='i' || $lettre!='j'){
      echo "entrer une lettre valable";
      $lettre = trim(fgets(STDIN));
    }
  }
}

function tabchiffre($chiffre){
  if($chiffre=='1' || $chiffre=='2' || $chiffre=='3' || $chiffre=='4' || $chiffre=='5' || $chiffre=='6' || $chiffre=='7' || $chiffre=='7' || $chiffre=='9' || $chiffre=='10'){
    return true;
  }
  else{
    while($chiffre!='1' || $chiffre!='2' || $chiffre!='3' || $chiffre!='4' || $chiffre!='5' || $chiffre!='6' || $chiffre!='7' || $chiffre!='7' || $chiffre!='9' || $chiffre!='10'){
      echo "entrer une chiffre valable";
      $chiffre = trim(fgets(STDIN));
    }
  }
}

function placerNavire($nav){
  if($nav == 1){
    echo "place an aircraft (5 box)";
  }
  elseif($nav == 2){
    echo "place a cruiser (4 box)";
  }
  elseif($nav == 3){
    echo "place a destroyer (3 box)";
  }
  elseif($nav == 4){
    echo "place a submarine (3 box)";
  }
  elseif($nav == 5){
    echo "place a torpedo-boat (2 box)";
  }
}

 ?>
