<?php
@header('Content-type:text/html;charset=UTF-8');
$pdo=new PDO("mysql:host=localhost;dbname=log;charset=utf8","root","root",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING))or die(print_r($pdo->errorInfo(),true));
?>
