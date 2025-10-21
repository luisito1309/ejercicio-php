<?php

/**
 * @author		Miguel Angel Macias Burgos
 * @company 	WBT
 * @copyright 	2025
 * @version     1.0
 */

require_once "data.inc";

// add elem al final del array
$listaTipo[] = "Locales comerciales";

$total = count($listaTipo);
$items = "";
$c = 0;
/*for($i=0; $i < $total; $i++ ){
    $c++;
    $items .= "<option value='". $c ."'>". $listaTipo[$i] ."</option>";
}*/

foreach($listaTipo as $elem){
    $c++;
    $items .= "<option value='". $c ."'>". $elem ."</option>";
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
        <form action='request.php' method='POST'>
            <div class='x-1'>
                <input type='text' name='datos' placeholder='Datos personales' />
            </div>
            <div class='x-1'>
                <select name='tipo' >
                    <?php echo $items ?>
                </select>
            </div>
            
            <div class='x-1'>
                <input type='submit' value='Calcular' />
            </div>
            <div class='clear'></div>
        </form>
    </div>
</div>

</body>
</html>