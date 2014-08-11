<?php
@header('Content-type:text/html;charset=UTF-8');
	$time=date('Y-m-d H:i:s');
	$fields=(usernaem,password,server_password,tel,email,ip,profile,addtime);
	$values=($username,$password,$server_password,$tel,$email,$ip,$profile,$time);
//$fields 字段数组
//$values 值数组
function addUser($values){
	$fields=(usernaem,password,server_password,tel,email,ip,profile,addtime);
//	$values=($username,$password,$server_password,$tel,$email,$ip,$profile,date('Y-m-d H:i:s'));
	return insert('user',$fields,$values,'rows');
}
function setUser($inputs){
	return update('user',$fields,$values,'userid={$userid}','rows');
}
function getUser($userid){
	return select('user','*',id={$userid}','allrow');
}

?>