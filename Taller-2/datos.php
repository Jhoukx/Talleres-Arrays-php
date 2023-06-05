<?php
echo <<<HTML
        <a href="index.html" target="_self" >Volver</a><br/>
    HTML;
    $numPlanetas = $_POST["nPlanetas"];
    $sistemaSolar = array_fill(1,$numPlanetas,"Deshabitado");
    echo "<pre>";
    var_dump($sistemaSolar);
    echo "</pre>";
?>