<?php
@header('Content-type:text/html;charset=UTF-8');
require "include/db.php";
require "include/config.php";

function addReply($input){
	return insert('reply',(logid,userid,reply,addtime),(global $logid,global $usesrid,$input,date('Y-m-d H:i:s') ),'rows');
}
function delReply($replyid){
	return delete('reply','id={$replyid}','rows');
}
function getReply($replyid){
	return select('reply','*','id={$replyid}','allrow');
}

?>