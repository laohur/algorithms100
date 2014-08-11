<?php
@header('Content-type:text/html;charset=UTF-8');

$IP=getIP();
if(isCookie($IP))
	exit("Access Denied!");

?>
