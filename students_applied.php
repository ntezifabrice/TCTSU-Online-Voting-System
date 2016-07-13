<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Manage TCTSU Candidates</title>
<script type="text/javascript">
checked=false;
function checkedAll (frm1) {var aa= document.getElementById('frm1'); if (checked == false){
checked = true}
else{
checked = false
}for (var i =0; i < aa.elements.length; i++){ aa.elements[i].checked = checked;}}
</script>
<style type="text/css">
body{
	font-family:Arial, Helvetica, sans-serif;
	margin:5% auto;
	width:90%;
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
	font-size:12px;
	text-shadow: 0px 0px 0px #fff;
	background:#eaebec;
	margin:0px;
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
<body>
<?php
error_reporting(0);
$table_style=" class='even'";
$addToVote=1;

include 'connect.php';
    	try{
		$select="SELECT reg_no, first_name, last_name, department FROM students WHERE allowed='no';";
		echo "<H1>LISTS OF APPLIED STUDENTS</H1><form action='manage_students.php' method='POST' id='frm1'><table width='80%' border='0'>";
		echo "<tr><th>Reg. no</th><th>First name</th><th>Last Name</th><th>Department</th><td></td></tr>";
		foreach($connect->query($select) as $row){
$reg_no=$row['reg_no'];
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$department=$row['department'];
		echo "<tr";
		if(addToVote%2==0){out.print($table_style);
		}
echo "><td>".$reg_no."</td><td>".$first_name."</td><td>".$last_name."</td><td>".$department."</td><td><input type='checkbox' name='addToVote[]' value='".$reg_no."'>Add(".$addToVote.")</td></tr>";
$reg_no="";$first_name="";$last_name="";$department="";$addToVote++;
}
echo "<tr><td> </td><td> </td><td> </td><td> </td><td><input type='checkbox'  name='checkall' onclick='checkedAll(frm1);'><b style='color:red; font-size:18px'>Add All</b></td></tr></table><button name='student_sub' style='font-size:17px;color:blue' type='submit'>Add to Allowed Students</button></form>";
$connect=null;
}
catch(PDOException $e)
{
echo $e->getMessage();
}
?>
</body>
</html>