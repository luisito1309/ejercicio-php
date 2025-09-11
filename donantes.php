<?php

$grupo = $_GET["grupo"];
$puedeDonar = "";
$recibe = "";

switch($grupo){
    case "A":
        $puedeDonar = "A+, AB+";
        $recibe = "A+, A-, O+, O-";
        break;
    case "A-":
        $puedeDonar = "A+,A-, AB+, AB-";
        $recibe = "A-, O-";
        break;
    case "AB":
        break;
    case "AB-":
        break;
    default:
        break;
}

echo "Puede donar a: " . $puedeDonar;
echo "<br>Recibe de: " . $recibe;

?>