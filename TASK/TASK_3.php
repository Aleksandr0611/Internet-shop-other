<?php
$val = "<div><p align='left' onclick='alert(1)'>sample <b><i>text</i></b> <script>alert(2);</script></p></div>";
$allowed = '<b><p>';
function Sanitize ($val, $allowed)
{
	$new_html = strip_tags($val,$allowed);
	echo htmlspecialchars($new_html);
}
Sanitize($val,$allowed);
?>
