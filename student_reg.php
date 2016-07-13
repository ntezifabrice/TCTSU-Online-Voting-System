<?php
session_start();
 include "connect.php";
error_reporting(0);
?>
<style type="text/css">
.tctsu_vote{
    max-width: 40%;
	height: 98%;
    padding: 5px 10px;
    background: #f4f7f8;
    margin: 5px auto;
    padding: 5px;
    background: #f4f7f8;
    border-radius: 8px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.tctsu_vote fieldset{
    border: none;
}
.tctsu_vote legend {
    font-size: 1.4em;
    margin-bottom: 10px;
}
.tctsu_vote label {
    display: block;
    margin-bottom: 8px;
}
.tctsu_vote input[type="text"],
.tctsu_vote input[type="date"],
.tctsu_vote input[type="datetime"],
.tctsu_vote input[type="email"],
.tctsu_vote input[type="number"],
.tctsu_vote input[type="search"],
.tctsu_vote input[type="time"],
.tctsu_vote input[type="url"],
.tctsu_vote input[type="password"],
.tctsu_vote textarea,
.tctsu_vote select {
    font-family: Georgia, "Times New Roman", Times, serif;
    background: rgba(255,255,255,.1);
    border: none;
    border-radius: 4px;
    font-size: 16px;
    margin: 0 0 0 27px;
    outline: 0;
    padding: 7px;
    width: 80%;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    background-color: #f0f0f0;
    color:#8a97a0;
    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    margin-bottom: 10px;
   
}
.tctsu_vote input[type="text"]:focus,
.tctsu_vote input[type="date"]:focus,
.tctsu_vote input[type="datetime"]:focus,
.tctsu_vote input[type="email"]:focus,
.tctsu_vote input[type="number"]:focus,
.tctsu_vote input[type="search"]:focus,
.tctsu_vote input[type="time"]:focus,
.tctsu_vote input[type="url"]:focus,
.tctsu_vote textarea:focus,
.tctsu_vote select:focus{
    background: #d2d9dd;
}
.tctsu_vote input[type="password"]:focus{
    background: #ffcccc;

}
.tctsu_vote select{
    -webkit-appearance: menulist-button;
    height:35px;
}
.tctsu_vote .number1{
    background: #1a009c;
    color: #fff;
    height: 50px;
    width: 400px;
    display: inline-block;
    font-size: 1.2em;
    margin-right: 4px;
    line-height: 40px;
    text-align: center;
    text-shadow: 5px 5px 5px rgba(255,255,255,0.2);
    border-radius: 40px 40px 0px 0px;
}
.tctsu_vote .number {
    background: #1abc9c;
    color: #fff;
    height: 30px;
    width: 180px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}
.tctsu_vote .number2 {
    background: #ff0000;
    color: #fff;
    height: 30px;
    width: 180px;
    display: inline-block;
    font-size: 0.8em;
    margin-right: 4px;
    line-height: 30px;
    text-align: center;
    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
    border-radius: 15px 15px 15px 0px;
}
.tctsu_vote input[type="submit"],
.tctsu_vote input[type="button"]
{
    position: relative;
    display: relative;
    padding: 5px 5px 5px 10px;
    color: #FFF;
    margin: 0 0 0 50%;
    background: #1abc9c;
    font-size: 20px;
    text-align: center;
    font-style: normal;
    width: 35%;
    border: 1px solid #16a085;
    border-width: 3px 1px;
    margin-bottom: 4px;
}
.tctsu_vote input[type="submit"]:hover,
.tctsu_vote input[type="button"]:hover
{
    background: #109177;
}
</style>
<div class="tctsu_vote">
<?php
if(isset($_REQUEST['sub'])){
    $reg_no=mysql_real_escape_string($_REQUEST['reg_no']);
    try{
        $select="SELECT reg_no, first_name, last_name, department, class_level FROM students WHERE reg_no='".$reg_no."';";
        $query=$connect->query($select);
       if($query){
                 foreach ($query as $row){
            $reg_no_db=$row['reg_no'];
            $first_name=$row['first_name'];
            $last_name=$row['last_name'];
            $department=$row['department'];
            $class_level=$row['class_level'];
        }
		if($reg_no_db=="" || empty($reg_no_db)){header("location: new_student.php?x=1");}
		//echo $first_name;
}else{header("location: new_student.php");}
        
    }  catch (PDOException $e){$e->getMessage();}
	?>
<form action="" method="POST">
<fieldset>
<legend><span class="number1"> TCT Student Registration</span></legend>
<legend><span class="number"> Student Info</span></legend>

Reg no:<br><input type="text" name="reg_no" placeholder="Reg.No : *" value="<?php echo $reg_no; ?>" readonly>
<br>First name:<br><input type="text" name="first_name" placeholder="First Name : *" value="<?php echo $first_name; ?>" readonly>
<br>Last name:<br><input type="text" name="last_name" placeholder="Last Name : *" value="<?php echo $last_name; ?>" readonly>

<br>Department:<br><select id="department" name="department" disabled>
  <option>Department:<br></option>
  <option value="<?php echo $department; ?>" selected><?php echo $department; ?></option>
</select>
<br>Class:<br><select id="department" name="class_level" disabled>
  <option>Class Level</option>
  <option value="<?php echo $class_level; ?>" selected><?php echo $class_level; ?></option>
</select>  
<legend><span class="number2"> Create new password</span></legend>   
<input type="password" name="password" placeholder="Password *" required><br>
<?php if(!empty($_REQUEST['error'])){echo "<font color='red' style='padding-left:10%'><b>".$_REQUEST['error']." !</b></font><br>";} ?>
<input type="password" name="ppassword" placeholder="Confirm Password *" required>
</fieldset>
<input type="submit" name="student_sub" value="Register here" />
</form>
</div>	
	<?php
}

if(isset($_POST['student_sub'])){
    $reg_no=$_POST['reg_no'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $department=$_POST['department'];
    $password=$_POST['password'];
    $ppassword=$_POST['ppassword'];    
    	try{
	$insert = $connect->exec("UPDATE students SET password='".$password."' WHERE reg_no='$reg_no';");
	$connect=null;
	$_SESSION['student']==$reg_no;
	
	header("location: login_student.php?reg_no=$reg_no");

}
catch(PDOException $e)
{
echo $e->getMessage();
}
}
 ?>
