<?php

$naissance = 2.7;
$mort = 1.9;
$var = $naisance - $mort;
$minute = $var * 60;
echo "la variation de la population est de $minute par minute\n";
$heure = $minute * 60;
echo "la variation de la population est de $heure par heure\n";
$jour = $heure * 24;
echo "la variation de la population est de $jour par jour\n";
$an = $jour * 365;
echo "la variation de la population est de $an par an\n";
?>
