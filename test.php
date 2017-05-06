<?php

$Date = $_GET["value"];
$Date .= "\n";

$fp = fopen('schedule.txt', 'a');
fwrite($fp, $Date);
fclose($fp);


?>