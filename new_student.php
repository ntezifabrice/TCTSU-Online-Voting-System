
<?php
error_reporting(0);
include "connect.php";
if($_GET['x']=='1'){echo "<font color=red>Incorect Registration</font><br>";}
if(isset($_POST['sub'])){
    $reg_no=$_POST['reg_no'];
    try{
        $select="SELECT reg_no, first_name, last_name, department, class_level FROM students WHERE reg_no='".$reg_no."';";
        $query=$connect->query($select);
       if($query){
                 foreach ($query as $row){
            $reg_no=$row['reg_no'];
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $department=$row['department'];
            $class_level=$row['class_level'];
        }
		echo $first_name;
}else{header("location: new_student.php");}
        
    }  catch (PDOException $e){$e->getMessage();}
}else{
?>
<form action="candidate_reg.php" method="post">
    <u>Registration number</u><br><br> <input type="text" name="reg_no" /><br><br>
<input type="submit" value="Continue" name="sub"/>
<?php } ?>