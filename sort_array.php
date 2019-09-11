<?php

$serie=array(7,1,3,2,4,6,5);
sort($serie);
for($i=0; $i<count($serie); $i++){
    echo $serie[$i] . "<br>";
}
echo "<br>";
$serieLetras=array("z","a","x","b","c","e","d");
sort($serieLetras);
for($i=0; $i<count($serieLetras); $i++){
    echo $serieLetras[$i] . "<br>";
}