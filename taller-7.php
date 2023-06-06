<?php
echo <<<HTML
<a href="index.html" target="_self">Volver</a><br/>
HTML;

$spaceships = array(
    "Cyclops",
    "Vulture",
    "Cóndor",
    "Falcon",
    "Hornet"
); 
$ship = $_POST["planet"];
if (in_array($ship,$spaceships)){
    echo "<h2>La nave $ship existe en la nave</h2>";
}else{
    echo "<h2>La nave $ship NO existe en la nave</h2>";
}

?>