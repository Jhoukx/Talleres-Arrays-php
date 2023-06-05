<?php
echo <<<HTML
        <a href="index.html" target="_self">Volver</a><br/>
    HTML;
$naves = array (
    "Cyclops"=>14,
    "Vulture"=>36,
    "Cóndor"=>8,
    "Falcon"=> 22,
    "Hornet"=>20
);
$pesoFlota = array_sum($naves);
echo "<pre>";
echo "<h3>Naves con su masa: <h3>";
print_r($naves) ."<br/>";
echo "<h3>La masa total en la flota es de $pesoFlota Ton </h3>"

?>