<?php

$total = $_GET["total"];

for($i=1; $i<= $total; $i++){
    $nro = rand(0, 9);
    echo "<br>".$nro;
}

?>