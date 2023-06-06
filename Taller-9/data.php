<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;
$aliens = array(
    "Forerunner",
    "Flood",
    "Sangheili",
    "Jiralhanae",
    "Unggoy",
    "T'vaoan",
    "Unggoy",
    "Huragok",
    "T'vaoan",
    "Forerunner",
    "Forerunner"
);
$noRepeatAliens = array_unique($aliens);
echo "<pre>";
echo "<h2>Aliens sin eliminar</h2>";
print_r($aliens);
echo "<h2>Aliens sin duplicados</h2>";
print_r($noRepeatAliens);
echo "</pre>";
?>