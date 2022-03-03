<?php
    header('Access-Control-Allow-Origin: *');

    define("Gravedad", (float) 9.807);
    define("Gravedad2", (string) "9.807 m/s²");
    $Gravedad = (float)  9.807;
    $Gravedad2 = (string) "9.807 m/s²";

    echo $Gravedad;
    echo "<br>";
    echo Gravedad2;
    echo "<hr>";
    echo Gravedad;
    echo "<br>";
    echo $Gravedad2;

    // echo <<<FIN
    // " ' $ \\  ${!${''} = Gravedad}
    // FIN;
?>