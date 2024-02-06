<?php
$k=1;
while($k<6){
$n=1;
while($n<$k+1){echo"*";$n++;}; 
echo"<br>";
$k++;
}
?>

<?php
$k=1;$p=4;
while($k<6){
$s=1;$n=1;
while($s<=$p){echo"&nbsp;";$s++;} while($n<$k+1){echo"*";$n++;}
echo"<br>";
$k++;$p--;
}
?> 


