<?php
echo strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"mobile");
if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"mobile") > 0 && !isset($_GET['force']))
{
	header("Location:http://m.mudoven.co.in");
}
else
{
	header("Location:http://www.mudoven.co.in");
}
?>
