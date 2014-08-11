<?php
@header('Content-type:text/html;charset=UTF-8');
require "include/db.php";
require "include/config.php";


function addLog($input){
	return insert('log',(userid,log,addtime),(global $usesrid,$input,date('Y-m-d H:i:s') ),'rows');
}

function delLog($logid){
	return delete('log','id={$logid}','rows');
}
function getLog($logid){
	return select('log','*','id={$logid}','allrow');
}

?>