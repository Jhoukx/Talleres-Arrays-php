<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$planetas1 = array(
    "Alpha Centaurus",
    "Alphabetrium",
    "Neptuno",
    "Tierra",
    "Biggum",
    "Marte"
);
$planetas2 = array(
    "Glapflap",
    "Gramuflack",
    "Neptune",
    "Tierra",
    "Marte",
    "Neptuno"
);
echo "<pre>";
echo "<h3>Planeta 1</h3>";
print_r($planetas1);
echo "<h3>Planeta 2</h3>";
print_r($planetas2);
echo "<h3>Planetas en comun</h3>";
print_r(array_intersect($planetas1,$planetas2));
echo "</pre>";
?>