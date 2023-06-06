<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$planetas = array(
    "Sol",
    "Mercurio",
    "Venus",
    "Tierra",
    "Marte",
    "Jupiter",
    "Saturno",
    "Urano",
    "Neptuno"
);
$reversedPlanets = array_reverse($planetas);
echo "<pre>";
echo "<h3>Planetas</h3>";
print_r($planetas);
echo "<h3>Planetas invertidos</h3>";
print_r($reversedPlanets);
echo "</pre>";
?>