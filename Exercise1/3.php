<?php
$number = 245;
if(($number >= 100 && $number <= 1000) && (is_int($number/5) || is_int($number/15)))
{echo "Number: ".$number." is between 100 and 1000; and also divisible by 5 or 15.";}else{echo "Not included.";}
?> 