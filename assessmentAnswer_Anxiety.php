<?php

$q_array = array();
$q_array = array_fill(0, 37, '');
$sum = 0;
for($i=1;$i<=36;$i++)
{
    $q_array[$i] = $_GET["q".$i];
    $sum += $q_array[$i];
}

echo $sum;
//echo "Your result is : ";
//echo $q1." ".$q2." ".$q3." ";
//echo "You need specialist help.";

//echo '<br>Please <a href="login.html">login</a> or <a href="signup.html">signup</a>';

?>