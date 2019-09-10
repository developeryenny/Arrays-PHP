<?php

//array asociativo.
echo "------- Array asociativo ------- <br>";
$alumno=array("Nombre"=>"Pep", "Apellidos" =>"Toro", "Sexo"=>"H");
echo $alumno["Apellidos"] ."<br>";
echo "------- Comprobar si es un array ------- <br>";

if(is_array($alumno)){
    echo "Es un array <br>";
}else{
    echo "no es un array <br>";
}
//es una variable
$alumno="Margarita";

if(is_array($alumno)){
    echo "Es un array <br>";
}else{
    echo "no es un array <br>";
}

?>