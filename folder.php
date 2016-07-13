<?php include "connect.php";
      //$folder=mkdir("./Candidates/giy6", 0777, TRUE);
	  //if($folder){echo is_dir("./Candidates/giy6");}
	  $select="SELECT reg_no from candidates WHERE allowed='yes';";
		
		foreach($connect->query($select) as $row){mkdir("./Candidates/".$row['reg_no']."/", 0777, TRUE);}
?>