<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$planetas = array(
    "Mercurio",
    "Venus",
    "la Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano",
    "Neptuno");
$randIndex = array_rand($planetas,1);
echo "<h1>El planeta a explorar es  $planetas[$randIndex]!</h1>";
?>