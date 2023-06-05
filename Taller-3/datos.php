<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$planetas = array(
    "Mercurio"=>false,
    "Venus"=>false,
    "Tierra"=>true,
    "Marte"=>true,
    "Jupiter"=>false,
    "Saturno"=>true,
    "Urano"=>false,
    "Neptuno"=>true);

echo "Planetas habitables:";
$habitables = array_filter($planetas,fn($planeta)=> $planeta === true);
$habitablesP = array_keys($habitables);
echo "<pre>";
foreach($habitablesP as $planeta){
    echo "El planeta ".$planeta." es habitable <br/>";
}
?>