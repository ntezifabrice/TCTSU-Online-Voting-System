<style type="text/css">
.candidate{
    width:40%;
	height:90%;
    padding:30px;
    margin:0px auto;
    background: #FFF;
    border-radius: 5px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 34px 0px 50px rgba(0, 0, 255, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 255, 0, 0.13);
    -webkit-box-shadow: 34px 0px 10px rgba(0, 255, 0, 0.13);
}
.candidate .inner{
    padding: 5px;
    background: #F8F8F8;
    border-radius: 2px;
    margin-bottom: 5px;
}
.candidate h2{
    background: #2A88AD;
    padding: 0px 10px 0px 80px;
    margin: -30px -30px 5px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.candidate h2 > span{
    display: block;
    margin-top: 0px;
    font: 11px Arial, Helvetica, sans-serif;
}
.candidate label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 1px;
}
.candidate input[type="text"],
.candidate input[type="date"],
.candidate input[type="datetime"],
.candidate input[type="email"],
.candidate input[type="number"],
.candidate input[type="search"],
.candidate input[type="time"],
.candidate input[type="url"],
.candidate input[type="password"],
.candidate textarea,
.candidate select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 80%;
    padding: 5px;
    border-radius: 3px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 1px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.candidate .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 1px;
}
.candidate .section span {
    background: #2A88AD;
    padding: 2px 10px 2px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -40px;
    color: #fff;
    margin-top: -3px;
}
.candidate input[type="button"],
.candidate input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.candidate input[type="button"]:hover,
.candidate input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.candidate .privacy{
    float: left;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 5px;
    text-align: center;
}
</style>
<div class="candidate">
<?php
include "connect.php";
if(isset($_POST['sub'])){
$reg_no=$_POST['reg_no'];
    try{
	$connect->beginTransaction();
	foreach($connect->query("SELECT DISTINCT posts FROM posts") as $row){
		$posts[]=$row['posts'];
	}
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
}
        
    }  catch (PDOException $e){$e->getMessage();}	

 ?>
<h2>TCTSU Candidate Application Form</h2>
<form action="" method="POST">
    <div class="section"><span>1</span>Candidate info</div>
    <div class="inner">
        <label>Reg.No :<input type="text" style="background-color:#cccccc" value="<?php echo $reg_no; ?>" name="reg_no" placeholder="Ex: TC2015000" readonly></label>
        <label>First name :<input type="text" style="background-color:#cccccc" value="<?php echo $first_name; ?>" name="first_name" readonly></label>
        <label>Last name :<input type="text" style="background-color:#cccccc" value="<?php echo $last_name ?>" name="last_name" readonly></label>
		<label>Department : <select style="background-color:#cccccc" name="department" disabled>
		<option>Select department</option>
  <option value="<?php echo $department; ?>" selected><?php echo $department; ?></option>
</select></label>
    </div>
    <div class="section"><span>2</span>Post &amp; Contact</div>
    <div class="inner">
        <label>Telephone : <input type="text" name="telephone" /></label>
		<label>Gender :<br> <br>
		<font size="3em"><input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female</font>
		</label>
        
<label>Post :
<select name="post"><option value="">Select your post</option>
<?php for($i=0;$i<count($posts);$i++){
	if($posts[$i]=='guildpresident'){$post="GUILD PRESIDENT";}
	elseif($posts[$i]=='viceguild'){$post="VICE PRESIDENT";}
	elseif($posts[$i]=='secretary'){$post="SECRETARY";}
	elseif($posts[$i]=='treasure'){$post="TREASURE";}
	elseif($posts[$i]=='gender'){$post="GENDER";}
	elseif($posts[$i]=='ot'){$post="ORDINARY TREASURE";}
	elseif($posts[$i]=='information'){$post="INFORMATION";}
	elseif($posts[$i]=='production'){$post="PLANNING AND PRODUCTION";}
	elseif($posts[$i]=='social'){$post="SOCIAL AFFAIRS";}
	elseif($posts[$i]=='protocol'){$post="PROTOCOL";}
	elseif($posts[$i]=='sports'){$post="SPORTS AND CULTURE";}
	elseif($posts[$i]=='security'){$post="SECURITY";}
	elseif($posts[$i]=='hod'){$post="HEAD OF DEPARTMENT";}
	elseif($posts[$i]=='arbitration'){$post="ARBITRATION COMMITTEE";}
	elseif($posts[$i]=='speaker'){$post="SPEAKER OF STUDENTS";}
	else{$post=$posts[$i];}
	
	if($i%3==0){echo "<optgroup label=''>";}
	echo "<option value=".$posts[$i].">".($i+1).". ".$post."</option>";
	if($i%3==2){echo "</optgroup>";}
	}echo "</select></label>";
 ?> 
    </div>

    <div class="section"><span>3</span>Login info</div>
        <div class="inner">
        <label>Password : <input type="text" name="password" /></label>
        <label>Confirm Password : <input type="password" name="ppassword" /></label>
    </div>
    <div class="button-section">
     <span class="privacy">
     <input type="checkbox" name="agree"><font color="red"><b>I agree with TCTSU conditions.</b></font>
     </span>
	      <input type="submit" name="candidate_sub" value="Register as Candidate"/>

    </div>
</form>
</div>
<?php
}
if(isset($_POST['candidate_sub'])){
    $reg_no=$_POST['reg_no'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
	$telephone=$_POST['telephone'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
    $department=$_POST['department'];
	$post=$_POST['post'];
    $ppassword=$_POST['ppassword'];
    include 'connect.php';
    	try{
	//$connect->beginTransaction();
	$insert = $connect->exec("insert into candidates(reg_no, first_name, last_name, telephone, gender, password, department, post, marks, allowed) values ('$reg_no', '$first_name', '$last_name', '$telephone', '$gender', '$password', '$department', '$post', 0, 'no')");
	$insert = $connect->exec("insert into students(reg_no, first_name, last_name, department, password) values ('$reg_no', '$first_name', '$last_name', '$department', '$password')");
	
	$connect=null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}
}
?>