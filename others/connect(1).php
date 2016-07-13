<?php
$hostname='localhost';
$username='root';
$passwd='';
try{
	$connect=new pdo("mysql:host=$hostname; dbname=test_stockout", $username, $passwd);
	foreach($connect->query("select cell_id from user_profile") as $row){
		$cell_id[]=$row['cell_id'];
	}
if (class_exists('PDO')){echo "PDO Exists<br>";}
$max_cell=max($cell_id);
	$j=0;
for($i=0; $i>=0;$i++){
if($max_cell>=2147){break;}
else{
	$j++;
	$k=$i+10;
	if($j<=6){
++$max_cell;	
	echo "NULL, 3, kiosk $k, RET-K$k, NULL, NULL, ".$max_cell."<br>";
	/*
	$connect->exec("INSERT INTO user_profile Values
		(NULL, '3', 'kiosk $i', 'RET-K$i', NULL, NULL, $max_cell)");*/
		
	}
	if(($i+1)%5==0 && $i!=0){$max_cell=$max_cell+5; $j=0; echo "<br>";}

	
}

}
$connect=null;
}catch(PDOException $e){echo $e->getMessage;}

?>
