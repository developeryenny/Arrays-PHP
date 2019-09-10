<?php
echo "--- Ejercicios con arrays: --- <br><br>";
echo "******** Primera manera ******** <br>";
$semana[]="lunes";
$semana[]="martes";
$semana[]="miércoles";
echo $semana[2];
echo "<br>";
echo "******* Segunda manera *******<br>";
$semana[0]="lunes";
$semana[1]="martes";
$semana[2]="miércoles";
echo $semana[2]."<br>";

echo "******* Tercera manera ******* <br>";
$serie= array(1,2,3,4,5,6,7);
echo $serie[4]."<br>";
echo "******* Cuarta manera ******* <br>";
$semana= array("lunes", "martes", "miercoles", "jueves", "viernes");
echo $semana[2]. "<br>";

//array asociativo.
echo "******* Array asociativo ******* <br>";
$datos=array("Nombre"=>"Juan", "Apellidos" =>"Gomez", "Sexo"=>"H");
echo $datos["Apellidos"];