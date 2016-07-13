<?php
echo $_SERVER['DOCUMENT_ROOT'].dirname($_SERVER['SCRIPT_NAME'])."/";
$reg_no="GS11111";
if(isset($_POST['upload'])){
    if(is_uploaded_file($_FILES['file1']['tmp_name'])){
        $imgfp=fopen($_FILES['file1']['tmp_name'], 'rb');
        include 'connect.php';
        $stmt=$connect->prepare("update candidates set photo=? where reg_no=$reg_no");
        $stmt->bindParam(1, $imgfp, PDO::PARAM_LOB);
        $stmt->execute();
		ECHO $imgfp;
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file1" /><br>
<input type="submit" value="Upload" name="upload" />
</form>