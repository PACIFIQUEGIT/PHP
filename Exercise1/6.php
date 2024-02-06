<?php
$number = 2;
$n = 1;
echo "<h5>Multiplication table of 2:</h5>";
function mult1($number,$n){return $number*$n;}
while($n<10){
echo $number."*".$n."=".mult1($number,$n)."<br>";$n++;}
echo"Wow!!";

?>