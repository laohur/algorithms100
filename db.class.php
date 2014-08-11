<?php
	@header('Content-type:text/html;charset=UTF-8');
//	if (!defined("ACCESS"))
//	exit("Access Denied!");
/*
require "db.function.php";
class db{
	
	global $pdo;
	$table;
	$field;
	$value;
	$return;
	$sql;

	function __construct($table='',$field='',$value='',$where='',$return='',$sql='')
	{
		$this->table=$table;
		$this->field=$field;
		$this->value=$value;
		$this->return=$return;
		$this->where=$where;
		$this->sql=$sql;	
	}
	
	function insert($table,$field='',$value='',$return=''){$db($table,"insert",$field,$value,'',$return);}  //$db->insert($table,$field,$value,$return)
	function update($table,$filed='',$value='',$where,$return='') {$db($table,"update",'',$value,$return);}
	function select($table,$filed='',$where='',$return='') {$db($table,"select",'',$value,$return);}  //$db->select($table,$field,$where='')
	function count($table,$where='',$return='') {$db($table,"count",','$value,$return);}  //$db->count($table,$field,$where='')
	function delete($table,$where,$return='') {$db($table,"delete",'',$value,$return);}  //$db->delete($table,$where)
	function prepare($sql,$return='') {$db('','','','','',$return,$sql);}  //$db->prepare($sql,$return)
}

/*$metadb=new db($pdo);
$array=db("user","select","name",'',"userid<10","allrow");
print_r($array);
*/
*/

?>