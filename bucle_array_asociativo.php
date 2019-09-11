<?php


//array asociativo.
echo "------- Array asociativo ------- <br>";
$alumno=array("Nombre"=>"Pep", "Apellidos" =>"Toro", "Sexo"=>"H");
echo $alumno["Apellidos"] ."<br>";

//agregar un valor a un array asociativo
$alumno["Edad"] = 37;

echo "------- Recorrer un array ------- <br>";
foreach($alumno as $clave=>$valor){
    echo "Su Key es:  $clave  y su valor es:  $valor <br>";
}



?>