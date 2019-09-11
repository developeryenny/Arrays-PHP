<?php
echo "Array de dos dimensiones <br>";

$ropa = array("verano" => array("Mujer" => "falda",
                                "sombreros" => "paja",
                                "zapatos" => "zapatillas"),
                "otoño" => array("Mujer" => "falda de otoño",
                                    "zapatos" => "zapatos de otoño",
                                    "chaqueta" => "chaqueta de otoño"),
                "invierno" => array("Hombre" => "pantalón de pana",
                            "zapatos" => "zapatos con forrado de lana",
                            "chaqueta" => "chaqueta de plumas de oca"));

echo $ropa["invierno"]["chaqueta"];

foreach($ropa as $clave_estaciones=>$ropaHM){
    
    echo "$clave_estaciones : <br>";
    //función list mientras tenga elementos en la lista.
    while(list($clave, $valor)= each($ropaHM)){
        echo "$clave=$valor<br>";
    }
    echo "<br>";
}
echo "<br>";
echo "lo mismo convar_dump";
echo var_dump($ropa);

?>
