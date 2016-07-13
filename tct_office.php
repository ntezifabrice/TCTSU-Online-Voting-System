<form action="" method="POST" enctype="multipart-formdata">
    Take a file : <input type="file" name="file1">
    <input type="submit" name="sub">
</form>
<?php
mysql_connect("localhost", "root", "");
    	mysql_select_db("demo");
		if (isset($_POST['sub'])) {

	    $handle = fopen($_FILES['file1']['tmp_name'], "r");

	 //$f="select reg_no fr";
	    while (($data = fgetcsv($handle, ",")) !== FALSE) {
		$import="INSERT into tablename(item1,item2,item3,item4,item5) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
	 	        mysql_query($import) or die(mysql_error());
	    }echo "Thanks";

	    fclose($handle);

}

?>