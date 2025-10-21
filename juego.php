<?php

$op = $_GET["opcion"];
$maquina= rand(1,3);

switch($maquina){
    case 1: 
        $op2= "piedra";
        break;
    case 2:
        $op2= "papel";
        break;
    case 3:
        $op2= "tijera";
        break;
}
echo $op2. "<br>";

switch($op){
    case "piedra":
        if ($op == $op2){
            echo "empate";        
        }
        else if($op2 == "tijera"){
            echo "ganador";
        }else{
            echo "pierde";
        }
        break;
    case "papel":
        switch($op2){
            case "piedra":
                echo "ganador";break;
            case "papel":
                echo "empatado";break;
            case "tijera":
                echo "pierde";break;
        }
        break;
    case "tijera":
        switch($op2){
            case "papel":
                echo "gana";break;
            case "piedra":
                echo "pierde";break;
            case "tijera":
                echo "empatado";break;
        }

        break;

}

?>