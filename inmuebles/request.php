<?php

/**
 * @author		Miguel Angel Macias Burgos
 * @company 	WBT
 * @copyright 	2025
 * @version     1.0
 */

require_once "data.inc";

$datosPersonales = $_POST["datos"];
$op = $_POST["tipo"];

$cards = "";
/*for($i=0; $i < count($listaInmuebles); $i++){
    if ( $listaInmuebles[$i]["id"] == $op ){
        //echo "<br>" . $listaInmuebles[$i][1] . ", precio: " . $listaInmuebles[$i][2];
        $cards .= "<div class='card'>
            <div class='card-title'>". $listaInmuebles[$i]["direccion"] ."</div>
            <div class='card-subtitle'>". $listaInmuebles[$i]["precio"] ."</div>
        </div>";
    }
}*/

foreach($listaInmuebles as $elem){
    if ( $elem["id"] == $op ){
        $cards .= "<div class='card'>
            <div class='card-title'>". $elem["direccion"] ."</div>
            <div class='card-subtitle'>". $elem["precio"] ."</div>
            <a href= 'tel:".$elem["telefono"]."'> <div class='card-subtitle'>". $elem["telefono"] ."</div></a>
            
        </div>";
    }
}

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv='content-type' content='text/html' charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' />
    
	<title>Formulario</title>
        
    <!-- CSS -->
    <link rel='stylesheet' href='css/main.css' />        
</head>

<body>

<!-- Main Page -->
<div class='ctn-form'>
    <!-- Header -->
    <div class='form-header'>
        <div class='ctn-icon'><div class='icon'></div></div>
        <div class='form-title'>App 1</div>
        <div class='form-subtitle'>Calculadora Interés Simple</div>
        <div class='bar'><div class='step'></div></div>
        <!--
        <a href='../'><div class='btn-back'></div></a>
        -->
    </div>
    <!-- Body -->
    <div class='form-content'>
        <?php echo $cards ?>
    </div>
</div>

</body>
</html>