<?php
$number = 11;
echo "<h5>Numbers between 10 and 50; and are divisible by 6:</h5>";
while($number>10 && $number<50){
if(is_int($number/6)){
echo $number."<br>" ;}$number++;}
?>