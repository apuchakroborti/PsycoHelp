<?php

$Date = $_GET["value"];
$Date .= "\n";

$fp = fopen('appointment.txt', 'a');
fwrite($fp, $Date);
fclose($fp);


?>