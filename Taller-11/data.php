<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$sistemaSolar1 = array(
    "Alpha Centaurus",
    "Alphabetrium",
    "Neptuno",
    "Tierra",
    "Biggum",
    "Marte"
);
$sistemaSolar2 = array(
    "Glapflap",
    "Gramuflack",
    "Neptune",
    "Tierra",
    "Marte",
    "Neptuno"
);
$uniquePlaneta1 = array_diff($sistemaSolar1,$sistemaSolar2);
$uniquePlaneta2 = array_diff($sistemaSolar2,$sistemaSolar1);
echo "<pre>";
echo "<h3>Planeta 1</h3>";
print_r($sistemaSolar1);
echo "<h3>Planetas únicos del sistema solar 1</h3>";
print_r($uniquePlaneta1);
echo "<h3>Planeta 2</h3>";
print_r($sistemaSolar2);
echo "<h3>Planetas únicos del sistema solar 2</h3>";
print_r($uniquePlaneta2);
echo "</pre>";
?>