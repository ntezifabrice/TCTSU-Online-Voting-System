<?php
//$db = mysql_connect("localhost", "root", "") or die("Could not connect.");
//if(!mysql_select_db("demo",$db)) die("No database selected.");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

	<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

	<title>Upload page</title>

	</head>

	<body>

	<div id="container">

	<div id="form">
	<?php
error_reporting(0);
	 include "connect.php";
	 $it=array();
	 try{
	 $se="SELECT item1 FROM tablename;";
		foreach($connect->query($se) as $i){
			$it[]=$i[0];
		}	 for($x=0;$x<count($it);$x++){echo $it[$x];echo "<br>";}

	//include "connection.php"; //Connect to Database
}catch(Exception $e){echo "hi";}
	 

	//$deleterecords = "TRUNCATE TABLE tablename"; //empty the table of its current records
		//$records = "select item1 from tablename";
	//mysql_query($deleterecords);

	 

	//Upload File

	if (isset($_POST['submit'])) {
/*
	    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {

	        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";

	        echo "<h2>Displaying contents:</h2>";

	        readfile($_FILES['filename']['tmp_name']);

	    }
		*/

	 

	    //Import uploaded file to Database

	    $handle = fopen($_FILES['filename']['tmp_name'], "r");

	 
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		$import="INSERT into tablename(item1,item2,item3,item4,item5) values('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]')";
	 	        
				if(! in_array($data[0], $it)){
				
				$connect->exec($import);
				//mysql_query($import) or die(mysql_error());
				}elseif(in_array($data[0], $it)){echo substr($data[0], 0, 4)." ? no<br>"; continue;}
	    }

	 

	    fclose($handle);

	 
	    print "Import done";

	 

    //view upload form

	}else {

	 
	    print "Upload new csv by browsing to file and clicking on Upload<br />\n";

 

	    print "<form enctype='multipart/form-data' action='' method='post'>";
	 

	    print "File name to import:<br />\n";

	 

	    print "<input size='50' type='file' name='filename'><br />\n";

	 

	    print "<input type='submit' name='submit' value='Upload'></form>";

	 

	}


	?>

	 

	</div>

	</div>

	</body>

	</html>