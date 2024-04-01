<?php
$price = "50";
$num1 = 14;
$num2 = 1.34;
$first_name = "Jenny";
$last_name  = "Sam";
$value = true;
$next_val = false;
$price = 5 * "10 little piggies";
$start = "3 o ' clock";
var_dump($num1 * $num2);
var_dump($price);
var_dump( $value and $next_val);
echo $first_name . " " . $last_name ."\n";
echo 'This will not expand: \n a newline';
echo "\n This will not expand: \n a newline \v";
echo "this is carriage  \v";
echo " \r Hello $first_name";
