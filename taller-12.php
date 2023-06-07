<?php
echo <<<HTML
<a href="index.html" target="_self" >Volver</a><br/>
HTML;

if(($_POST["planeta"] !== "") || ($_POST["satelite"] !== "")){
    //Crear satelites de la tierra 
    $satelitesTierra = array(
        "Sputnik 1",
        "Explorer 1",
    );
    
    //Crear satelites de Marte
    $satelitesMarte = array(
        "Astérix",
        "Osumi"
    );

    //Crear satelites de Jupiter
    $satelitesJupiter = array(
        "Dong Fang Hong I",
        "Omid"
    );

    //Mostrar todos los satelites
    echo "<pre>";
    echo "<h2>Satelites de la tierra</h2>";
    print_r($satelitesTierra);
    echo "<h2>Satelites de Marte</h2>";
    print_r($satelitesMarte);
    echo "<h2>Satelites de Jupiter</h2>";
    print_r($satelitesJupiter);
    echo "</pre>";

    switch($_POST["planeta"]){
        case "Tierra":
            array_push($satelitesTierra,$_POST["satelite"]);
            echo "<h2>Satelites de la Tierra actualizados</h2>";
            echo "<pre>";
            print_r($satelitesTierra);
            echo "</pre>";
            break;
        case "Marte":
            array_push($satelitesMarte,$_POST["satelite"]);
            echo "<h2>Satelites de Marte actualizados</h2>";
            echo "<pre>";
            print_r($satelitesMarte);
            echo "</pre>";
            break;
        case "Jupiter":
            array_push($satelitesJupiter,$_POST["satelite"]);
            echo "<h2>Satelites de Jupiter actualizados</h2>";
            echo "<pre>";
            print_r($satelitesJupiter);
            echo "</pre>";
            break;
    }
}else{
    echo "<h2>Por favor, llene todos los campos</h2>";
}


?>