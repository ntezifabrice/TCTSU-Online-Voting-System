<?php
include '../connect.php';
  $class_id=array();$class_level=array();$department=array();$level_number=array();
    	try{
		$select="SELECT class_id, class_level, department, level_number FROM classes;";
		foreach($connect->query($select) as $row){
		$class_id[]=$row['class_id'];
		$class_level[]=$row['class_level'];
		$department[]=$row['department'];
		$level_number[]=$row['level_number'];
		}
		$connect=null;
		}catch(PDOException $e)
{
echo $e->getMessage();
}
if(isset($_POST['add_to_classes'])){
include '../connect.php';

	$cl=$_POST['class_level'];
	$dp=$_POST['department'];
	$ln=$_POST['level_number'];
	    	try{
		$select=$connect->exec("UPDATE classes SET class_id='".$cl."_".$dp."_".$ln."' WHERE class_level='$cl' AND department='$dp' AND level_number='$ln'");
$connect=null;
		}
		catch(PDOException $e)
{
echo $e->getMessage();
}
}
?>
<body>
<h2>Add new Class</h2>
<form action="" method="POST"><table border="0" align="left">
<tr><td>Class Level</td><td>
<select id="class_level" name="class_level">
  <option>Select Level</option>
  <?php foreach($class_level as $class_level_db){
  echo "<option value='".$class_level_db."'>".$class_level_db."</option>";
  }?>
</select> </td></tr>
<tr><td>Department</td><td>
<select id="department" name="department">
  <option>Select Department</option>
  <?php foreach($department as $dept_db){
  echo "<option value='".$dept_db."'>".$dept_db."</option>";
  }?>
</select> </td></tr>
<tr><td>Level Number</td><td>
<select id="level_number" name="level_number">
  <option>Select Level number</option>
  <?php foreach($level_number as $level_number_db){
  echo "<option value='".$level_number_db."'>".$level_number_db."</option>";
  }?>
</select> </td></tr>

<tr><td></td><td><input type="submit" value="Create this class" name="add_to_classes"></td></tr></table>
</form>