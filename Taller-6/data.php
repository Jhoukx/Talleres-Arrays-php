<?php
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
    echo "<h3>El planeta existe</h3>";
}else{
    echo "<h3>El planeta NO existe</h3>";
}
?>