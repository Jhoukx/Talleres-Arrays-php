<?php
echo <<<HTML
<a href="index.html" target="_self">Volver</a><br/>
HTML;
$planetas = array("Sol",
"Mercurio",
"Venus",
"Tierra",
"Marte",
"Jupiter",
"Saturno",
"Urano",
"Neptuno");
$planet = $_POST["planet"];
if (in_array($planet,$planetas)){
    echo "<h3>El planeta $planet existe</h3>";
}else{
    echo "<h3>El planeta $planet NO existe</h3>";
}
?>