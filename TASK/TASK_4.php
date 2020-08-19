<?php
function truncateString($string, $length, $etc="...", $break_words=false, $middle=false ){
	if(!$break_words)
   {
$string = mb_substr($string, 0, $length,'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
$position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
$string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции

       if($etc){ echo $string.=$etc;}
       else {echo $string.="...";}
   }
   elseif($break_words)
   { 
    if($middle)
	{
        $len = mb_strlen($string);
       
        if ($len % 2 == 0) {
            
            $string = substr_replace(mb_substr($string, 0, $len/2-$length/2),"",($len/2-$length/2)-1, 1) . substr_replace(mb_substr($string, $len/2 + $length/2), $etc, 0, 2);
        } 
		else {
            $len--;
            $string = mb_substr($string, 0, ($len/2-($length/2+1)), 'UTF-8') . substr_replace(mb_substr($string, $len/2 + ($length/2+1)), $etc, 0, 1);
        }
        echo $string;
		
		
	}
	elseif(!$middle) 
	{
        $string = mb_substr($string, 0, $length,'UTF-8');
		$len = mb_strlen($string);
		$len_etc = mb_strlen($etc);
		$string = substr_replace($string, $etc, $len-$len_etc, $len_etc);
		echo $string;
	   
	}  
   }
}
$text = 'Two Sisters Reunite after Eighteen Years at Checkout Counter.';
echo truncateString($text, 30, " ")."<br>";
echo truncateString($text, 30,"===")."<br>"; 
echo truncateString($text, 30)."<br>";
echo truncateString($text, 30, "", true)."<br>";
echo truncateString($text, 30, "...", true)."<br>";
echo truncateString($text, 30, "..", true, true)."<br>";



?>
