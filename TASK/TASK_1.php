<?php 
$n=array("s","a","e","c","f");
function mysort ($n)
{

for($j=0; $j < count($n)-1; $j++) {
	$i=0;
while ($i < count($n)-1)  {
if( $n[$i+1] > $n[$i]) {
    $c=$n[$i];
	$n[$i]=$n[$i+1];
	$n[$i+1]=$c;
   }
++$i;
 } 
}
echo implode(", ", $n);
}
mysort($n);
?>
