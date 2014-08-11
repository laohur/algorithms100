<?
header('Content-type:text/html;charset=UTF-8');
/*获取客户端IP 用法 $ip=getIP()*/
function getIP() 
{ 
  if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) 
  $IP = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
  else if (@$_SERVER["HTTP_CLIENT_IP"]) 
  $IP = $_SERVER["HTTP_CLIENT_IP"]; 
  else if (@$_SERVER["REMOTE_ADDR"]) 
  $IP = $_SERVER["REMOTE_ADDR"]; 
  else if (@getenv("HTTP_X_FORWARDED_FOR"))
  $IP = getenv("HTTP_X_FORWARDED_FOR"); 
  else if (@getenv("HTTP_CLIENT_IP")) 
  $IP = getenv("HTTP_CLIENT_IP"); 
  else if (@getenv("REMOTE_ADDR")) 
  $IP = getenv("REMOTE_ADDR"); 
  else 
  $IP = 0; 
  return $IP; 
}

//verify IP ,for IP login way.if IPv6 not changed,login
function verifyIP($ip=,$username=$_COOKIE['username'])
{
	$ip=getIP();
	$IP=db("user","select","ipv6","{$username}=username","rows");
return
	if($ip==$IP);
}

function isCookie($a){
	if(isset($_COOKIE[$a]) && !empty($_COOKIE[$a]))
		rerturn $_COOKIE[$a];
}

function exists($a){
	if(isset($a) && !empty($a))
		rerturn $a;
}

?>