<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
	margin:5% auto;
	width:100%;
}
table a:link {
	color: #666;
	font-weight: bold;
	text-decoration:none;
}
table a:visited {
	color: #999999;
	font-weight:bold;
	text-decoration:none;
}
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:18px;
	text-shadow: 0px 0px 0px #fff;
	background:#eaebec;
	margin:2px 2px 1px 10%;
	border:#ccc 1px solid;

	-moz-border-radius:1px;
	-webkit-border-radius:1px;
	border-radius:1px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:0px 0px 0px 0px;
	border-top:5px solid #fafafa;
	border-bottom:5px solid #e0e0e0;
	font-size:15px;
	background: #56ff5d;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child{
	text-align: left;
	padding-left:0px;
}
table tr:first-child th:first-child{
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child{
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr{
	text-align: center;
	padding-left:0px;
}
table tr td:first-child{
	text-align: left;
	padding-left:0px;
	border-left: 0;
}
table tr td {
	padding:0px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td{
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td{
	border-bottom:0;
}
table tr:last-child td:first-child{
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child{
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td{
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}
</style>
</head>
<?php
error_reporting(0);
$std_dept="ET";
$reg_no_db=""; $first_name_db=""; $last_name_db=""; $department_db=""; $post_db=""; $marks_db="";$oya_db="";$imfabusa_db="";
	include 'connect.php';
$allData=array();
$reg_no=array();
$first_name=array();
$last_name=array();
$department=array();
$post=array();
$marks=array();
$oya=array();
$imfabusa=array();

$col1gp=array();
$col2gp=array();
$col3gp=array();
$col4gp=array();
$col5gp=array();
$col6gp=array();
$col7gp=array();
$col8gp=array();
    $col1vgp=array();
    $col2vgp=array();
    $col3vgp=array();
    $col4vgp=array();
    $col5vgp=array();
    $col6vgp=array();
    $col7vgp=array();
    $col8vgp=array();
            $col1secre=array();
            $col2secre=array();
            $col3secre=array();
            $col4secre=array();
            $col5secre=array();
            $col6secre=array();
			$col7secre=array();
            $col8secre=array();
                    $col1tre=array();
                    $col2tre=array();
                    $col3tre=array();
                    $col4tre=array();
                    $col5tre=array();
                    $col6tre=array();
					$col7tre=array();
                    $col8tre=array();
                            $col1gen=array();
                            $col2gen=array();
                            $col3gen=array();
                            $col4gen=array();
                            $col5gen=array();
                            $col6gen=array();
							$col7gen=array();
                            $col8gen=array();
                                    $col1ot=array();
                                    $col2ot=array();
                                    $col3ot=array();
                                    $col4ot=array();
                                    $col5ot=array();
                                    $col6ot=array();
                                    $col7ot=array();
                                    $col8ot=array();
                                            $col1info=array();
                                            $col2info=array();
                                            $col3info=array();
                                            $col4info=array();
                                            $col5info=array();
                                            $col6info=array();
                                            $col7info=array();
                                            $col8info=array();
                                                    $col1prod=array();
                                                    $col2prod=array();
                                                    $col3prod=array();
                                                    $col4prod=array();
                                                    $col5prod=array();
                                                    $col6prod=array();
                                                    $col7prod=array();
                                                    $col8prod=array();
                                            $col1soc=array();
                                            $col2soc=array();
                                            $col3soc=array();
                                            $col4soc=array();
                                            $col5soc=array();
                                            $col6soc=array();
                                            $col7soc=array();
                                            $col8soc=array();
                                    $col1prot=array();
                                    $col2prot=array();
                                    $col3prot=array();
                                    $col4prot=array();
                                    $col5prot=array();
                                    $col6prot=array();
									$col7prot=array();
                                    $col8prot=array();
                            $col1spo=array();
                            $col2spo=array();
                            $col3spo=array();
                            $col4spo=array();
                            $col5spo=array();
                            $col6spo=array();
                            $col7spo=array();
                            $col8spo=array();
                    $col1secu=array();
                    $col2secu=array();
                    $col3secu=array();
                    $col4secu=array();
                    $col5secu=array();
                    $col6secu=array();
                    $col7secu=array();
                    $col8secu=array();
                $col1hod=array();
                $col2hod=array();
                $col3hod=array();
                $col4hod=array();
                $col5hod=array();
                $col6hod=array();
				$col7hod=array();
                $col8hod=array();
$col1arbit=array();
$col2arbit=array();
$col3arbit=array();
$col4arbit=array();
$col5arbit=array();
$col6arbit=array();
$col7arbit=array();
$col8arbit=array();
try{
	$connect->beginTransaction();
	$select="SELECT reg_no, first_name, last_name, department, post, marks, oya, imfabusa from candidates WHERE allowed='yes';";
	//$select_2="SELECT reg_no,department,post FROM candidates WHERE post='hod' and department='ET';";	
	
		foreach($connect->query($select) as $row){
	$reg_no_db=$row['reg_no'];
	$first_name_db=$row['first_name'];
	$last_name_db=$row['last_name'];
	$department_db=$row['department'];
	$post_db=$row['post'];
	$marks_db=$row['marks'];
	$oya_db=$row['oya'];
    $imfabusa_db=$row['imfabusa'];


	$allData[]=$reg_no_db;
	$allData[]=$first_name_db;
	$allData[]=$last_name_db;
	$allData[]=$department_db;
	$allData[]=$post_db;
	$allData[]=$marks_db;
	$allData[]=$oya_db;
    $allData[]=$imfabusa_db;
}
}
catch(PDOException $e)
{
echo $e->getMessage();
$connect->rollback();
}
for($i=0; $i<count($allData); $i=$i+8){
$reg_no[]=$allData[$i];
$first_name[]=$allData[$i+1];
$last_name[]=$allData[$i+2];
$department[]=$allData[$i+3];
$post[]=$allData[$i+4];
$marks[]=$allData[$i+5];
$oya[]=$allData[$i+6];
$imfabusa[]=$allData[$i+7];
}
for($i=0; $i<count($post); $i++){
        if($post[$i]=="guildpresident"){
                $col1gp[]=$reg_no[$i];
                $col2gp[]=$first_name[$i];
                $col3gp[]=$last_name[$i];
                $col4gp[]=$department[$i];
                $col5gp[]=$post[$i];
                $col6gp[]=$marks[$i];
				$col7gp[]=$oya[$i];
                $col8gp[]=$imfabusa[$i];
        }
        if($post[$i]==("viceguild")){
                $col1vgp[]=$reg_no[$i];
                $col2vgp[]=$first_name[$i];
                $col3vgp[]=$last_name[$i];
                $col4vgp[]=$department[$i];
                $col5vgp[]=$post[$i];
                $col6vgp[]=$marks[$i];
                $col7vgp[]=$oya[$i];
                $col8vgp[]=$imfabusa[$i];
        }
        if($post[$i]==("secretary")){
                $col1secre[]=$reg_no[$i];
                $col2secre[]=$first_name[$i];
                $col3secre[]=$last_name[$i];
                $col4secre[]=$department[$i];
                $col5secre[]=$post[$i];
                $col6secre[]=$marks[$i];	
                $col7secre[]=$oya[$i];	
                $col8secre[]=$imfabusa[$i];

        }
        if($post[$i]==("treasure")){
                $col1tre[]=$reg_no[$i];
                $col2tre[]=$first_name[$i];
                $col3tre[]=$last_name[$i];
                $col4tre[]=$department[$i];
                $col5tre[]=$post[$i];
                $col6tre[]=$marks[$i];
                $col7tre[]=$oya[$i];
                $col8tre[]=$imfabusa[$i];
        }
        if($post[$i]==("gender")){
                $col1gen[]=$reg_no[$i];
                $col2gen[]=$first_name[$i];
                $col3gen[]=$last_name[$i];
                $col4gen[]=$department[$i];
                $col5gen[]=$post[$i];
                $col6gen[]=$marks[$i];
                $col7gen[]=$oya[$i];
                $col8gen[]=$imfabusa[$i];
        }
        if($post[$i]==("ot")){
                $col1ot[]=$reg_no[$i];
                $col2ot[]=$first_name[$i];
                $col3ot[]=$last_name[$i];
                $col4ot[]=$department[$i];
                $col5ot[]=$post[$i];
                $col6ot[]=$marks[$i];
                $col7ot[]=$oya[$i];
                $col8ot[]=$imfabusa[$i];
        }
        if($post[$i]==("information")){
                $col1info[]=$reg_no[$i];
                $col2info[]=$first_name[$i];
                $col3info[]=$last_name[$i];
                $col4info[]=$department[$i];
                $col5info[]=$post[$i];
                $col6info[]=$marks[$i];	
                $col7info[]=$oya[$i];
                $col8info[]=$imfabusa[$i];
        }
        if($post[$i]==("production")){
                $col1prod[]=$reg_no[$i];
                $col2prod[]=$first_name[$i];
                $col3prod[]=$last_name[$i];
                $col4prod[]=$department[$i];
                $col5prod[]=$post[$i];
                $col6prod[]=$marks[$i];
                $col7prod[]=$oya[$i];	
                $col8prod[]=$imfabusa[$i];
        }
        if($post[$i]==("social")){
                $col1soc[]=$reg_no[$i];
                $col2soc[]=$first_name[$i];
                $col3soc[]=$last_name[$i];
                $col4soc[]=$department[$i];
                $col5soc[]=$post[$i];
                $col6soc[]=$marks[$i];
                $col7soc[]=$oya[$i];
                $col8soc[]=$imfabusa[$i];
        }
        if($post[$i]==("protocol")){
                $col1prot[]=$reg_no[$i];
                $col2prot[]=$first_name[$i];
                $col3prot[]=$last_name[$i];
                $col4prot[]=$department[$i];
                $col5prot[]=$post[$i];
                $col6prot[]=$marks[$i];
                $col7prot[]=$oya[$i];	
                $col8prot[]=$imfabusa[$i];
        }
        if($post[$i]==("sports")){
                $col1spo[]=$reg_no[$i];
                $col2spo[]=$first_name[$i];
                $col3spo[]=$last_name[$i];
                $col4spo[]=$department[$i];
                $col5spo[]=$post[$i];
                $col6spo[]=$marks[$i];
                $col7spo[]=$oya[$i];
                $col8spo[]=$imfabusa[$i];
        }
        if($post[$i]==("security")){
                $col1secu[]=$reg_no[$i];
                $col2secu[]=$first_name[$i];
                $col3secu[]=$last_name[$i];
                $col4secu[]=$department[$i];
                $col5secu[]=$post[$i];
                $col6secu[]=$marks[$i];
                $col7secu[]=$oya[$i];	
                $col8secu[]=$imfabusa[$i];
        }
        if($post[$i]==("hod")){
                $col1hod[]=$reg_no[$i];
                $col2hod[]=$first_name[$i];
                $col3hod[]=$last_name[$i];
                $col4hod[]=$department[$i];
                $col5hod[]=$post[$i];
                $col6hod[]=$marks[$i];
                $col7hod[]=$oya[$i];
                $col8hod[]=$imfabusa[$i];
        }
        if($post[$i]==("arbitration")){
                $col1arbit[]=$reg_no[$i];
                $col2arbit[]=$first_name[$i];
                $col3arbit[]=$last_name[$i];
                $col4arbit[]=$department[$i];
                $col5arbit[]=$post[$i];
                $col6arbit[]=$marks[$i];
                $col7arbit[]=$oya[$i];
                $col8arbit[]=$imfabusa[$i];
        }
        if($post[$i]==("speaker")){
                $col1sp[]=$reg_no[$i];
                $col2sp[]=$first_name[$i];
                $col3sp[]=$last_name[$i];
                $col4sp[]=$department[$i];
                $col5sp[]=$post[$i];
                $col6sp[]=$marks[$i];
                $col7sp[]=$oya[$i];
                $col8sp[]=$imfabusa[$i];
        }
}
for($i=0;$i<count($col1hod);$i++){
    if($col4hod[$i]=='IT'){
        $hod_it_1[]=$col1hod[$i];
        $hod_it_2[]=$col2hod[$i];
        $hod_it_3[]=$col3hod[$i];
        $hod_it_4[]=$col4hod[$i];
        $hod_it_5[]=$col5hod[$i];
        $hod_it_6[]=$col6hod[$i];
        $hod_it_7[]=$col7hod[$i];
        $hod_it_8[]=$col8hod[$i];
    }
    elseif($col4hod[$i]=='ET'){
        $hod_et_1[]=$col1hod[$i];
        $hod_et_2[]=$col2hod[$i];
        $hod_et_3[]=$col3hod[$i];
        $hod_et_4[]=$col4hod[$i];
        $hod_et_5[]=$col5hod[$i];
        $hod_et_6[]=$col6hod[$i];
        $hod_et_7[]=$col7hod[$i];
        $hod_et_8[]=$col8hod[$i];
        
    }
    elseif($col4hod[$i]=='AE'){
        $hod_ae_1[]=$col1hod[$i];
        $hod_ae_2[]=$col2hod[$i];
        $hod_ae_3[]=$col3hod[$i];
        $hod_ae_4[]=$col4hod[$i];
        $hod_ae_5[]=$col5hod[$i];
        $hod_ae_6[]=$col6hod[$i];
        $hod_ae_7[]=$col7hod[$i];
        $hod_ae_8[]=$col8hod[$i];
    }
 else {
        $hod_new_1[]=$col1hod[$i];
        $hod_new_2[]=$col2hod[$i];
        $hod_new_3[]=$col3hod[$i];
        $hod_new_4[]=$col4hod[$i];
        $hod_new_5[]=$col5hod[$i];
        $hod_new_6[]=$col6hod[$i];
        $hod_new_7[]=$col7hod[$i];
        $hod_new_8[]=$col8hod[$i];
 }
    }
    
$arbit_1=array();$arbit_2=array();$arbit_3=array();$arbit_4=array();$arbit_5=array();

arsort($col6arbit);$arbit_sorted=array(); $arbit_cand=0;$arbit_all=array();				
						foreach($col6arbit as $arbit_mark){++$arbit_cand; if($arbit_cand>5){break;}$arbit_sorted[]=$arbit_mark;}
							asort($arbit_sorted);
							$arbit_m_1=$arbit_sorted[0];
							$arbit_m_2=$arbit_sorted[1];
							$arbit_m_3=$arbit_sorted[2];
							$arbit_m_4=$arbit_sorted[3];
							$arbit_m_5=$arbit_sorted[4];							
								for($m=0; $m<count($col6arbit);$m++){
										if($col6arbit[$m]==$arbit_m_1){$arbit_1[]=$col1arbit[$m];}
										elseif($col6arbit[$m]==$arbit_m_2){$arbit_2[]=$col1arbit[$m];}
										elseif($col6arbit[$m]==$arbit_m_3){$arbit_3[]=$col1arbit[$m];}
										elseif($col6arbit[$m]==$arbit_m_4){$arbit_4[]=$col1arbit[$m];}
										elseif($col6arbit[$m]==$arbit_m_5){$arbit_5[]=$col1arbit[$m];}
										}				  
$sp_1=array();$sp_2=array();$sp_3=array();
arsort($col6sp);$sp_sorted=array(); $sp_cand=0;$sp_all=array();				
						foreach($col6sp as $sp_mark){++$sp_cand; if($sp_cand>3){break;}$sp_sorted[]=$sp_mark;}
							asort($sp_sorted);
							$sp_m_1=$sp_sorted[0];
							$sp_m_2=$sp_sorted[1];
							$sp_m_3=$sp_sorted[2];							
								for($m=0; $m<count($col6sp);$m++){
										    if($col6sp[$m]==$sp_m_1){$sp_1[]=$col1sp[$m];}
										elseif($col6sp[$m]==$sp_m_2){$sp_2[]=$col1sp[$m];}
										elseif($col6sp[$m]==$sp_m_3){$sp_3[]=$col1sp[$m];}
										}
$gp_1=array();
for($i=0; $i<count($col6gp); $i++){if($col6gp[$i]==max($col6gp)){$gp_1[]=$col1gp[$i];}}	
$vgp_1=array();
for($i=0; $i<count($col6vgp); $i++){if($col6vgp[$i]==max($col6vgp)){$vgp_1[]=$col1vgp[$i];}}			
$secre_1=array();
for($i=0; $i<count($col6secre); $i++){if($col6secre[$i]==max($col6secre)){$secre_1[]=$col1secre[$i];}}													
$tre_1=array();
for($i=0; $i<count($col6tre); $i++){if($col6tre[$i]==max($col6tre)){$tre_1[]=$col1tre[$i];}}													
$gen_1=array();
for($i=0; $i<count($col6gen); $i++){if($col6gen[$i]==max($col6gen)){$gen_1[]=$col1gen[$i];}}													
$ot_1=array();
for($i=0; $i<count($col6ot); $i++){if($col6ot[$i]==max($col6ot)){$ot_1[]=$col1ot[$i];}}													
$info_1=array();
for($i=0; $i<count($col6info); $i++){if($col6info[$i]==max($col6info)){$info_1[]=$col1info[$i];}}													
$prod_1=array();
for($i=0; $i<count($col6prod); $i++){if($col6prod[$i]==max($col6prod)){$prod_1[]=$col1prod[$i];}}													
$soc_1=array();
for($i=0; $i<count($col6soc); $i++){if($col6soc[$i]==max($col6soc)){$soc_1[]=$col1soc[$i];}}															
$prot_1=array();
for($i=0; $i<count($col6prot); $i++){if($col6prot[$i]==max($col6prot)){$prot_1[]=$col1prot[$i];}}	
$spo_1=array();
for($i=0; $i<count($col6spo); $i++){if($col6spo[$i]==max($col6spo)){$spo_1[]=$col1spo[$i];}}												
$secu_1=array();
for($i=0; $i<count($col6secu); $i++){if($col6secu[$i]==max($col6secu)){$secu_1[]=$col1secu[$i];}}
$it_1=array();
for($i=0; $i<count($hod_it_6); $i++){if($hod_it_6[$i]==max($hod_it_6)){$it_1[]=$hod_it_1[$i];}}
$et_1=array();
for($i=0; $i<count($hod_et_6); $i++){if($hod_et_6[$i]==max($hod_et_6)){$et_1[]=$hod_et_1[$i];}}
$ae_1=array();
for($i=0; $i<count($hod_ae_6); $i++){if($hod_ae_6[$i]==max($hod_ae_6)){$ae_1[]=$hod_ae_1[$i];}}
$new_1=array();
for($i=0; $i<count($hod_new_6); $i++){if($hod_new_6[$i]==max($hod_new_6)){$new_1[]=$hod_new_1[$i];}}

function show_grade($col1_max, $col6_Si, $col6_marks, $col8_imfabusa, $array_oya, $col5_gp_Si ){
	$sum_1=array_sum($col6_marks)+max($array_oya)+max($col8_imfabusa);
	$sum_2=array_sum($col6_marks)+max($col8_imfabusa);
	
	if(count($col6_marks)==1 ){echo round(($col6_Si/$sum_1)*100,2)." %</td><td width='10%'>";}
	
    if(count($col6_marks)>1){echo round(($col6_Si/$sum_2)*100,2)." %</td><td width='10%'>";}
		
        if(count($col1_max)==1){
            if(count($col6_marks)==1){
                $grade=($col6_Si==max($col6_marks) && $col6_Si>max($array_oya) && $col6_Si>max($col8_imfabusa))? "<font color=blue>Pass</font>":"Fail";
                $grade=($col6_Si==max($col6_marks) && $col6_Si>max($array_oya) && $col6_Si>max($col8_imfabusa))? "<font color=blue>Pass</font>":"Fail";
				$grade=($col5_gp_Si=='guildpresident' && ($col6_Si/$sum_1)*100<50 && $col6_Si==max($col6_marks) && $col6_Si>max($array_oya) && $col6_Si>max($col8_imfabusa))? "<font color=red>Repeat</font>":$grade;
            }           
            if(count($col1_max)==1 && ($col6_Si==max($col6_marks) && ($col6_Si==max($array_oya) || $col6_Si==max($col8_imfabusa)))){
            $grade="<font color=red>Repeat</font>";}
            if(count($col6_marks)>1){
                $grade=($col6_Si==max($col6_marks) && $col6_Si>max($col8_imfabusa))? "<font color=blue>Pass</font>":"Fail";  
				$grade=($col5_gp_Si=='guildpresident' && ($col6_Si/$sum_1)*100<50 && $col6_Si==max($col6_marks) && $col6_Si>max($col8_imfabusa))? "<font color=red>Repeat</font>":$grade;				
            }   
            if(count($col6_marks)>1 && $col6_Si==max($col6_marks) && $col6_Si==max($col8_imfabusa)){
            $grade="<font color=red>Repeat</font>";}
        }
	if(count($col1_max)>1){
            $grade=($col6_Si==max($col6_marks) && $col6_Si>=max($col8_imfabusa))? "<font color=red>Repeat</font>":"Fail";          
        }
					echo $grade."</td></TR>";					
}
function show_oya($col6_marks, $col8_imfabusa, $col7_oya){
	if(count($col6_marks)==1){
	echo "<tr><td colspan='3'><font color='red'>Oya</td><td>".max($col7_oya)."</td><td>".round((max($col7_oya))*100/(array_sum($col6_marks)+max($col7_oya)+max($col8_imfabusa)),2)." %</td><td width='10%'>";
	if(max($col7_oya)>max($col6_marks) && max($col7_oya)>max($col8_imfabusa)){echo "<font color=blue>Pass</font></td></tr>";}else{echo "Fail</td></tr>";}
	}
}
function show_imfabusa($col6_marks, $col8_imfabusa, $col7_oya){
    if(count($col6_marks)==1){
    echo "<tr><td colspan='3'><font color='red'>Imfabusa</td><td>".max($col8_imfabusa)."</td><td>".round((max($col8_imfabusa))*100/(array_sum($col6_marks)+max($col7_oya)+max($col8_imfabusa)),2)." %</td><td width='10%'>";
if(max($col8_imfabusa)>max($col6_marks) && max($col8_imfabusa)>max($col7_oya)){echo "<font color=blue>Pass</font></td></tr>";}else{echo "Fail</td></tr>";}
    }
        if(count($col6_marks)>1){
    echo "<tr><td colspan='3'><font color='red'>Imfabusa</td><td>".max($col8_imfabusa)."</td><td>".round((max($col8_imfabusa))*100/(array_sum($col6_marks)+max($col8_imfabusa)),2)." %</td><td width='10%'>";
if(max($col8_imfabusa)>max($col6_marks)){echo "<font color=blue>Pass</font></td></tr>";}else{echo "Fail</td></tr>";}
    }
}

echo "<form action='voting_page3.php' method='POST'><h2 style='color:red; margin-left: -15%' align='center'>TCTSU VOTING RESULTS</H2><table border='1' width=70%'>";
echo "<tr><th width='25%'><B>FAMILY NAME</TH><TH width='20%'>SURNAME</TH><th width='25%'>POST</th><TH width='10%'>#VOTES</TH><TH width='10%'>%MARKS</TH><TH width='10%'>GRADE</B></TH></TR>";
for($i=0; $i<count($col1gp); $i++){
    echo "<tr><td width='25%'>".$col2gp[$i]."</td><td width='20%'>".$col3gp[$i]."</td><td width='25%'>"."Guild President"."</td><td width='10%'>".$col6gp[$i]."</td><td width='10%'>";
					show_grade($gp_1, $col6gp[$i], $col6gp, $col8gp, $col7gp, $col5gp[$i]);
                                        show_oya($col6gp, $col8gp, $col7gp);
                  }show_imfabusa($col6gp, $col8gp, $col7gp);		  
        echo "</table><br><table border='1' width=70%'>";					   
    for($i=0; $i<count($col1vgp); $i++){
    echo "<tr width='25%'><td>".$col2vgp[$i]."</td><td width='20%'>".$col3vgp[$i]."</td><td width='25%'>"."Vice President"."</td><td width='10%'>".$col6vgp[$i]."</td><td width='10%'>";
						  
    show_grade($vgp_1, $col6vgp[$i], $col6vgp, $col8vgp, $col7vgp);
						  show_oya($col6vgp, $col8vgp, $col7vgp);
                  }show_imfabusa($col6vgp, $col8vgp, $col7vgp);

    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1secre); $i++){
    echo "<tr width='25%'><td>".$col2secre[$i]."</td><td width='20%'>".$col3secre[$i]."</td><td width='25%'>"."Secretary"."</td><td width='10%'>".$col6secre[$i]."</td><td width='10%'>";
    show_grade($secre_1, $col6secre[$i], $col6secre, $col8secre, $col7secre);
    show_oya($col6secre, $col8secre, $col7secre);
                  }show_imfabusa($col6secre, $col8secre, $col7secre);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1tre); $i++){
    echo "<tr width='25%'><td>".$col2tre[$i]."</td><td width='20%'>".$col3tre[$i]."</td><td width='25%'>"."Treasure"."</td><td width='10%'>".$col6tre[$i]."</td><td width='10%'>";
    show_grade($tre_1, $col6tre[$i], $col6tre, $col8tre, $col7tre);
    show_oya($col6tre, $col8tre, $col7tre);
                  }show_imfabusa($col6tre, $col8tre, $col7tre);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1gen); $i++){
    echo "<tr width='25%'><td>".$col2gen[$i]."</td><td width='20%'>".$col3gen[$i]."</td><td width='25%'>"."Minister of Gender"."</td><td width='10%'>".$col6gen[$i]."</td><td width='10%'>";
    show_grade($gen_1, $col6gen[$i], $col6gen, $col8gen, $col7gen);
    show_oya($col6gen, $col8gen, $col7gen);
                  }show_imfabusa($col6gen, $col8gen, $col7gen);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1ot); $i++){
    echo "<tr width='25%'><td>".$col2ot[$i]."</td><td width='20%'>".$col3ot[$i]."</td><td width='25%'>"."Ordinary Treasure"."</td><td width='10%'>".$col6ot[$i]."</td><td width='10%'>";
    show_grade($ot_1, $col6ot[$i], $col6ot, $col8ot, $col7ot);
    show_oya($col6ot, $col8ot, $col7ot);
                  }show_imfabusa($col6ot, $col8ot, $col7ot);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1info); $i++){
    echo "<tr width='25%'><td>".$col2info[$i]."</td><td width='20%'>".$col3info[$i]."</td><td width='25%'>"."Minister of Information"."</td><td width='10%'>".$col6info[$i]."</td><td width='10%'>";
    show_grade($info_1, $col6info[$i], $col6info, $col8info, $col7info);
    show_oya($col6info, $col8info, $col7info);
                  }show_imfabusa($col6info, $col8info, $col7info);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1prod); $i++){
    echo "<tr width='25%'><td>".$col2prod[$i]."</td><td width='20%'>".$col3prod[$i]."</td><td width='25%'>"."Planning and Production"."</td><td width='10%'>".$col6prod[$i]."</td><td width='10%'>";
    show_grade($prod_1, $col6prod[$i], $col6prod, $col8prod, $col7prod);
    show_oya($col6prod, $col8prod, $col7prod);
                }show_imfabusa($col6prod, $col8prod, $col7prod);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1soc); $i++){
    echo "<tr width='25%'><td>".$col2soc[$i]."</td><td width='20%'>".$col3soc[$i]."</td><td width='25%'>"."Social Affairs"."</td><td width='10%'>".$col6soc[$i]."</td><td width='10%'>";
    show_grade($soc_1, $col6soc[$i], $col6soc, $col8soc, $col7soc);
    show_oya($col6soc, $col8soc, $col7soc);
                  }show_imfabusa($col6soc, $col8soc, $col7soc);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1prot); $i++){
    echo "<tr width='25%'><td>".$col2prot[$i]."</td><td width='20%'>".$col3prot[$i]."</td><td width='25%'>"." Minister of Protocol"."</td><td width='10%'>".$col6prot[$i]."</td><td width='10%'>";
    show_grade($prot_1, $col6prot[$i], $col6prot, $col8prot, $col7prot);
    show_oya($col6prot, $col8prot, $col7prot);
                  }show_imfabusa($col6prot, $col8prot, $col7prot);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1spo); $i++){
    echo "<tr width='25%'><td>".$col2spo[$i]."</td><td width='20%'>".$col3spo[$i]."</td><td width='25%'>"."Sports and Culture"."</td><td width='10%'>".$col6spo[$i]."</td><td width='10%'>";
    show_grade($spo_1, $col6spo[$i], $col6spo, $col8spo, $col7spo);
    show_oya($col6spo, $col8spo, $col7spo);
                  }show_imfabusa($col6spo, $col8spo, $col7spo);
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1secu); $i++){
    echo "<tr width='25%'><td>".$col2secu[$i]."</td><td width='20%'>".$col3secu[$i]."</td><td width='25%'>"."Minister of Security"."</td><td width='10%'>".$col6secu[$i]."</td><td width='10%'>";
    show_grade($secu_1, $col6secu[$i], $col6secu, $col8secu, $col7secu);
    show_oya($col6secu, $col8secu, $col7secu);
                  }show_imfabusa($col6secu, $col8secu, $col7secu);
    echo "</table><br><table border='1' width=70%'>";
	
		for($i=0; $i<count($hod_it_1); $i++){
    echo "<tr width='25%'><td>".$hod_it_2[$i]."</td><td width='20%'>".$hod_it_3[$i]."</td><td width='25%'>"."Head Of Department"." (".$hod_it_4[$i].")</td><td width='10%'>".$hod_it_6[$i]."</td><td width='10%'>";
						  
    show_grade($it_1, $hod_it_6[$i], $hod_it_6, $hod_it_8, $hod_it_7);
						  show_oya($hod_it_6, $hod_it_8, $hod_it_7);
                  }show_imfabusa($hod_it_6, $hod_it_8, $hod_it_7);

    echo "</table><br><table border='1' width=70%'>";
	
	for($i=0; $i<count($hod_et_1); $i++){
    echo "<tr width='25%'><td>".$hod_et_2[$i]."</td><td width='20%'>".$hod_et_3[$i]."</td><td width='25%'>"."Head Of Department"." (".$hod_et_4[$i].")</td><td width='10%'>".$hod_et_6[$i]."</td><td width='10%'>";
						  
    show_grade($et_1, $hod_et_6[$i], $hod_et_6, $hod_et_8, $hod_et_7);
						  show_oya($hod_et_6, $hod_et_8, $hod_et_7);
                  }show_imfabusa($hod_et_6, $hod_et_8, $hod_et_7);

    echo "</table><br><table border='1' width=70%'>";
    
   	for($i=0; $i<count($hod_ae_1); $i++){
    echo "<tr width='25%'><td>".$hod_ae_2[$i]."</td><td width='20%'>".$hod_ae_3[$i]."</td><td width='25%'>"."Head Of Department"." (".$hod_ae_4[$i].")</td><td width='10%'>".$hod_ae_6[$i]."</td><td width='10%'>";
						  
    show_grade($ae_1, $hod_ae_6[$i], $hod_ae_6, $hod_ae_8, $hod_ae_7);
						  show_oya($hod_ae_6, $hod_ae_8, $hod_ae_7);
                  }show_imfabusa($hod_ae_6, $hod_ae_8, $hod_ae_7);

    echo "</table><br><table border='1' width=70%'>"; 
    if(count($hod_new_1)>0){
	for($i=0; $i<count($hod_new_1); $i++){
    echo "<tr width='25%'><td>".$hod_new_2[$i]."</td><td width='20%'>".$hod_new_3[$i]."</td><td width='25%'>"."Head Of Department"." (".$hod_new_4[$i].")</td><td width='10%'>".$hod_new_6[$i]."</td><td width='10%'>";
						  
    show_grade($new_1, $hod_new_6[$i], $hod_new_6, $hod_new_8, $hod_new_7);
						  show_oya($hod_new_6, $hod_new_8, $hod_new_7);
                  }show_imfabusa($hod_new_6, $hod_new_8, $hod_new_7);

    echo "</table><br><table border='1' width=70%'>"; 
	}
    for($i=0; $i<count($col1arbit); $i++){
    echo "<tr width='25%'><td>".$col2arbit[$i]."</td><td width='20%'>".$col3arbit[$i]."</td><td width='25%'>"."Arbitration Committee"."</td><td width='10%'>".$col6arbit[$i]."</td><td width='10%'>";
	if($col6arbit[$i]==max($col6arbit)){echo round(($col6arbit[$i])*100/(array_sum($col6arbit)),2)." %</td><td width='10%'>";}else{echo round(($col6arbit[$i])*100/(array_sum($col6arbit)),2)." %</td><td width='10%'>";}
	if((count($arbit_1)==1 && count($arbit_2)==1 && count($arbit_3)==1 && count($arbit_4)==1 && count($arbit_5)==1) && $col6arbit[$i] != 0){$grade=($col6arbit[$i]==$arbit_m_1 || $col6arbit[$i]==$arbit_m_2 || $col6arbit[$i]==$arbit_m_3 || $col6arbit[$i]==$arbit_m_4 || $col6arbit[$i]==$arbit_m_5)? "<font color=blue>Pass</font>":"Fail";	
		}elseif((count($arbit_1)>1 || count($arbit_2)>1 || count($arbit_3)>1 || count($arbit_4)>1 || count($arbit_5)>1) && $col6arbit[$i] != 0){$grade=($col6arbit[$i]==$arbit_m_1 || $col6arbit[$i]==$arbit_m_2 || $col6arbit[$i]==$arbit_m_3 || $col6arbit[$i]==$arbit_m_4 || $col6arbit[$i]==$arbit_m_5)? "Repeat":"Fail";
		if(count($arbit_1)>1){if($col6arbit[$i]==$arbit_m_1){$grade='<font color=red>Repeat</font>';}}
		if(count($arbit_2)>1){if($col6arbit[$i]==$arbit_m_2){$grade='<font color=red>Repeat</font>';}}
		if(count($arbit_3)>1){if($col6arbit[$i]==$arbit_m_3){$grade='<font color=red>Repeat</font>';}}
		if(count($arbit_4)>1){if($col6arbit[$i]==$arbit_m_4){$grade='<font color=red>Repeat</font>';}}
		if(count($arbit_5)>1){if($col6arbit[$i]==$arbit_m_5){$grade='<font color=red>Repeat</font>';}}
		}
elseif(count($arbit_1)==0 || count($arbit_2)==0 || count($arbit_3)==0 || count($arbit_4)==0 || count($arbit_5)==0){$grade=($col6arbit[$i]==$arbit_m_1 || $col6arbit[$i]==$arbit_m_2 || $col6arbit[$i]==$arbit_m_3 || $col6arbit[$i]==$arbit_m_4 || $col6arbit[$i]==$arbit_m_5)? "<font color='red'>Not Yet</font>":"Fail";
			}echo $grade."</td></tr>";
			  }
    echo "</table><br><table border='1' width=70%'>";
    for($i=0; $i<count($col1sp); $i++){
    echo "<tr width='25%'><td>".$col2sp[$i]."</td><td width='20%'>".$col3sp[$i]."</td><td width='25%'>".$col5sp[$i]."</td><td width='10%'>".$col6sp[$i]."</td><td width='10%'>";
	if($col6sp[$i]==max($col6sp)){echo round(($col6sp[$i])*100/(array_sum($col6sp)),2)." %</td><td width='10%'>";}else{echo round(($col6sp[$i])*100/(array_sum($col6sp)),2)." %</td><td width='10%'>";}
	if(count($sp_1)==1 && count($sp_2)==1 && count($sp_3)==1){$grade=(($col6sp[$i]==$sp_m_1 || $col6sp[$i]==$sp_m_2 || $col6sp[$i]==$sp_m_3 || $col6sp[$i]==$sp_m_4 || $col6sp[$i]==$sp_m_5) && ($col6sp != 0))? "<font color=blue>Pass</font>":"Fail";	
		}elseif(count($sp_1)>1 || count($sp_2)>1 || count($sp_3)>1){$grade=($col6sp[$i]==$sp_m_1 || $col6sp[$i]==$sp_m_2 || $col6sp[$i]==$sp_m_3)? "<font color='red'>Repeat</font>":"Fail";
		}
if(count($sp_1)==0 || count($sp_2)==0 || count($sp_3)==0){$grade=($col6sp[$i]==max($col6sp))? "<font color='red'>Not Yet</font>":"Fail";
	}
			echo $grade."</td></tr>";
                  }
					    echo "</form></table>";			
						  ?>