<?php
$nom="Aliou";
$note1=14;
$note2=10;
$note3=16;
$absence=2;//nombre d'absences

$somme=$note1+$note2+$note3;
$moyenne=$somme/3;
$moyenne=number_format($moyenne, 2,",", " ");



echo "$moyenne de $nom: $moyenne/20<br>";