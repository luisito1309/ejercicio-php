<?php

$lim = $_GET["total"];
$raza = $_GET["raza"];
/*for($i=1; $i <= $lim; $i++){
    echo "<br>E-".$i;
}*/
$i = 1;
while($i <= $lim){
    echo "<br>". $raza ."-".$i;
    $i++;
}

?>