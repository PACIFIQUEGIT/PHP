<?php

$leapyear = 1900 ;
if ((is_int($leapyear/4)&&!is_int($leapyear/100)) || is_int($leapyear/400)){
echo "Year ".$leapyear. " is leap.";}else{echo "Year ".$leapyear." is not leap.";}
?>