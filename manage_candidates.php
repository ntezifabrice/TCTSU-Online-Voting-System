<?php
error_reporting(0);

include 'connect.php';
if(isset($_POST['candidate_sub'])){
$addToVote=$_POST['addToVote'];
try{
$query="UPDATE candidates SET allowed='yes' WHERE reg_no in(";
$cond="";
for($i=0; $i<count($addToVote)-1; $i++){
			$cond=$cond."'".$addToVote[$i]."',";
		}
		$cond=$cond."'".$addToVote[count($addToVote)-1]."');";
		$query=$query.$cond;
		$insert = $connect->exec($query);
		$connect=null;
echo "Thanks";
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}
?>