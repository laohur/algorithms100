<?php
@header('Content-type:text/html;charset=UTF-8');
//	if (!defined("ACCESS"))
//	exit("Access Denied!");
	
require "db.php";//$pdo
/* db()函数,简化了数据库操作.insert update select count delete ,视情况添加max,avg,min 适于自己包装
$table=table name,$method=db action (crud,count(*),max/min/avg/($field)) , $field=column name or (array)names, $value=field value or (array)values ,$where=where clause, +orderby,+limit,it is optional.
last,use native $sql=sql sentence;
*/	
function db($table='',$method='',$field='',$value='',$where='',$return='',$sql='')
{
	global $pdo;var_dump($where);
		if($where==''){$tail='';}else{$tail='where '.$where;var_dump($tail);}//若是不带where的小尾巴,就写(id>0)+tail
	switch($method)
	{
		case "insert": //db($table,$field,$value) insert into $table ($fields) values ($values)
			$sql="insert into {$table} {$field} values {$value}";break; 
		case "update": //db($table,field,$value) update $table set ($fields) values ($values) where ($where)
			$sql="update {$table} set {$field} values {$value} {$tail}";break;  
		case "select": //db($table,$field,$where) select ($fields) from $table where ($where)
			$sql="select {$field} from {$table} {$tail}";break;  
		case "count": //db($table,$where) select count(*) from $table where ($where)
			$sql="select count(*) from {$table} {$tail}";break;  
		case "delete": //db($table,$where) delete from $table where ($where)
			$sql="delete from {$table} $tail";break;  
		default: // db($table,$method,$where) $method=(count(*),max/min/avg/($field)) $method="count(*)" select count(*) from $table where id<10
			$sql="select {$method} ({$field}) from {$table} {$tial}";break; //you can change sql to $sql="select {$method} from {$table} $tail"  to get more free
	}

	$db=$pdo->prepare($sql);
	$db->execute();

	switch($return)
	{
		case "id":$return=$db->lastInsertId;break; //返回最后影响id
		case "rows":$return=$db->rowCount();break; //返回影响行数
		case "row":$return=$db->fetch();break;  //返回行记录
		case "allrow":$return=$db->fetchAll();break;  //返回所有行记录
		default:break;		
	}
	var_dump($sql); //you can change it to $return['sql']=$sql;
	var_dump($return);
	return
		$return;
}
/*用例
$array=db("user","select","username",'',"userid<10","allrow");
print_r($array);

	it is short for:
$sql="select usrname from user where userid<10";
$db=$pdo->prepare($sql);
$db->execute();
return $db->fetchAll();

*/

//简洁独立函数

function insert($table,$field='',$value='',$return=''){return db($table,"insert",$field,$value,'',$return);}  //db->insert($table,$field,$value,$return)
function update($table,$field='',$value='',$where='',$return='') {return db($table,"update",$field,$value,$where,$return);}
//function countRows($table,$field='*',$where='',$return='rows') {return db($table,'count',$field,'',$where,$return);} 跟php count()冲突
function select($table,$field='',$where='',$return='') {return db($table,"select",$field,'',$where,$return);}  //db->select($table,$field,$where='')
function delete($table,$where,$return='') {return db($table,"delete",'','',$where,$return);}  //db->delete($table,$where)
function execute($sql,$return='') {return db('','','','','',$return,$sql);}  //$db->prepare($sql,$return)

$array=select('user','username','userid<10','allrow');
var_dump($array);
?>