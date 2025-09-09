<?php

$numero = $_GET["numero"];
$aleatorio = rand(0,9);
echo "aleatorio:". $aleatorio."<br>";
if($numero == $aleatorio){
    echo "acertaste";
}else{
    echo "F";
}






?>