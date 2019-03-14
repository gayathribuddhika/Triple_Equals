<?php
$num1 = "12";
$num2 = 12;

if($num1 == $num2){
	echo "Equal";
}else{
	echo "Not Equal";
}
echo "<br>";

if($num1 === $num2){ // This also a comparison equator.
	echo "Equal";
}else{
	echo "Not Equal";// Because num1 is a string value.num2 is an integer.
}
?>