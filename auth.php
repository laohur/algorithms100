<?php
header('Content-type:text/html;charset=UTF-8');
if(exists($_COOKIE['IP']) && getIP()==$_COOKIE['IP'] )
{
	echo "欢迎!<br>welcome!";
}else{
	echo "未登录!<br>NOT LOGIN! ";
	header(ROOT);
	exit();
}

?>