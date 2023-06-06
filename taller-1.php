<?php
echo <<<HTML
        <a href="index.html" target="_self">Volver</a><br/>
    HTML;
$sistemaSolar = array("Sol"=>1,"Mercurio"=>2,"Venus"=>3,"Tierra"=>4,"Marte"=>5,"Jupiter"=>6,"Saturno"=>7,"Urano"=>8,"Neptuno"=>9);
$sistemaSolarR=array_flip($sistemaSolar);
$numero = $_POST["nPlaneta"];
echo "<h1>El planeta número $numero es: $sistemaSolarR[$numero]</h1>";
?>