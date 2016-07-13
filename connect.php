<?php
$hostname='localhost';
$username='root';
$passwd='';
try{
	$connect=new pdo("mysql:host=$hostname; dbname=tctsu", $username, $passwd);
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>