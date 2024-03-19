<?php
$x = 2;
$y = 2;
function sum1($x,$y) {return $x+$y;}
function sub2($x,$y) {return $x-$y;}
function mult3($x,$y) {return $x*$y;}
function div4($x,$y) {return $x/$y;}
echo "Sum of (" . $x . "," . $y . ") is " . sum1($x, $y) . "<br>";
echo "Difference of (" . $x . "," . $y . ") is " . sub2($x, $y) . "<br>";
echo "Multiplication of (" . $x . "," . $y . ") is " . mult3($x, $y) . "<br>";
echo "Division of (" . $x . "," . $y . ") is " . div4($x, $y) . "<br>";

?> 