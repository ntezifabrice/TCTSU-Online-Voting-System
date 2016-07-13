<?php
error_reporting(0);
include 'connect.php';

$regs_1=array();$marks_1=array();$regs_2=array();$oya_2=array();$regs_3=array();$imfabusa_3=array();
$up_1=array(); $up_2=array(); $up_3=array();

function values($input, $hidden){
 if((substr($input, 0, 4)=="TC20") || (substr($input, 0, 3)=="GS1") || (substr($input, 0, 4)=="tc20") || (substr($input, 0, 3)=="gs1")){
	      global $up_1;
		$up_1[]=$input;
		}
if(substr($input, 0, 4)=="Oya_"){
    global $up_2;
		$up_2[]=substr($input, 4);
}if($input==null || $input=="" || empty($input)){
    global $up_3;
		$up_3[]=$_POST[$hidden];
}
}
$gp_h=$_POST['gp_h'];
$vgp_h=$_POST['vgp_h'];
$secre_h=$_POST['secre_h'];
$tre_h=$_POST['tre_h'];
$gen_h=$_POST['gen_h'];
$ot_h=$_POST['ot_h'];
$info_h=$_POST['info_h'];
$prod_h=$_POST['prod_h'];
$soc_h=$_POST['soc_h'];
$prot_h=$_POST['prot_h'];
$spo_h=$_POST['spo_h'];
$secu_h=$_POST['secu_h'];
$hod_h=$_POST['hod_h'];
$arbit_h=$_POST['arbit_h'];
$sp_h=$_POST['sp_h'];

$gp=$_POST['gp'];
    values($gp, "gp_h");
$vgp=$_POST['vgp'];
    values($vgp,"vgp_h");
$secre=$_POST['secre'];
    values($secre, "secre_h");
$tre=$_POST['tre'];
    values($tre, "tre_h");
$gen=$_POST['gen'];
    values($gen, "gen_h");
$ot=$_POST['ot'];
    values($ot, "ot_h");
$info=$_POST['info'];
    values($info, "info_h");
$prod=$_POST['prod'];
    values($prod, "prod_h");
$soc=$_POST['soc'];
    values($soc, "soc_h");
$prot=$_POST['prot'];
    values($prot, "prot_h");
$spo=$_POST['spo'];
    values($spo, "spo_h");
$secu=$_POST['secu'];
    values($secu, "secu_h");
$hod=$_POST['hod'];
    values($hod, "hod_h");
$arbit=$_POST['arbit'];
    values($arbit, "arbit_h");
$sp=$_POST['sp'];
values($sp, "sp_h");

$select_1="SELECT reg_no, marks FROM candidates WHERE reg_no IN (";
$select_2="SELECT reg_no, oya FROM candidates WHERE reg_no IN (";
$select_3="SELECT reg_no, imfabusa FROM candidates WHERE allowed='yes' AND post IN (";
for($i=0; $i<(count($up_1)-1); $i++){
    $select_1=$select_1."'".$up_1[$i]."', ";
}
$select_1=$select_1."'".$up_1[count($up_1)-1]."');";

for($i=0; $i<(count($up_2)-1); $i++){
    $select_2=$select_2."'".$up_2[$i]."', ";
}
$select_2=$select_2."'".$up_2[count($up_2)-1]."');";

for($i=0; $i<(count($up_3)-1); $i++){
    $select_3=$select_3."'".$up_3[$i]."', ";
}
$select_3=$select_3."'".$up_3[count($up_3)-1]."');";

try{
$connect->beginTransaction();
$s1=$connect->query($select_1);
foreach($s1 as $row_1){
$regs_1[]=$row_1['reg_no'];
$marks_1[]=$row_1['marks'];
}
$s2=$connect->query($select_2);
foreach($s2 as $row_2){
$regs_2[]=$row_2['reg_no'];
$oya_2[]=$row_2['oya'];
}
$s3=$connect->query($select_3);
foreach($s3 as $row_3){
$regs_3[]=$row_3['reg_no'];
$imfabusa_3[]=$row_3['imfabusa'];
}
	$stmt_1=$connect->prepare("UPDATE candidates SET marks=? WHERE reg_no=?");
	for($i=0; $i<count($regs_1); $i++){
	$stmt_1->execute(array(++$marks_1[$i], $regs_1[$i]));
	}
        
	$stmt_2=$connect->prepare("UPDATE candidates SET oya=? WHERE reg_no=?");
	for($i=0; $i<count($regs_2); $i++){
	$stmt_2->execute(array(++$oya_2[$i], $regs_2[$i]));
	}
	
        $stmt_3=$connect->prepare("UPDATE candidates SET imfabusa=? WHERE reg_no=?");
	for($i=0; $i<count($regs_3); $i++){
	$stmt_3->execute(array(++$imfabusa_3[$i], $regs_3[$i]));
	}
        	$connect->commit();
$connect=null;
echo "Okay<br>";
}
 catch(PDOException $e)
{
$connect->rollback();
echo $e->getMessage();
}
	
echo $select_1."<br>";echo $select_2."<br>";echo $select_3."<br>";	

		?>