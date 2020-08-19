<?php
function countones($number)
{
 $binar = decbin($number);
 echo substr_count($binar, "1")."<br>";
}
echo countones(12);
echo countones(8);
echo countones(30);
?> 





















