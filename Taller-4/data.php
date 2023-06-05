<?php
echo <<<HTML
    <a href="index.html" target="_self">Volver</a><br/>
    HTML;
function gravedadAprox ($gravity){
    return $gravity * 9.8 . " m/s²";
}
$gravedadRelativa = array(
    "Mercurio"=>0.38,
    "Venus" => 0.91,
    "Marte" => 0.38,
    "Jupiter" => 2.53,
    "Saturno"=> 1.07,
    "Urano" => 0.92,
    "Neptuno" => 1.19,
);
$gravedadAprox = array_map("gravedadAprox",$gravedadRelativa);
echo "<pre>";
echo "<h3>Gravedad Relativa</h3>";
print_r($gravedadRelativa);
echo "<h3>Gravedad Aproximada</h3>";
print_r($gravedadAprox);
echo "</pre>";
?>