<style type="text/css">
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:17px;
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
	padding-left:5px;
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
	padding-left:20px;
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
<?php
error_reporting(0);
include 'connect.php';

$reg_no_db=""; $first_name_db=""; $last_name_db=""; $gender_db=""; $department_db=""; $post_db="";$oya_db="";$imfabusa_db="";$class_level_db="";

$allData=array();

$reg_no=array();
$first_name=array();
$last_name=array();
$gender=array();
$department=array();
$post=array();
$oya=array();
$imfabusa=array();
$class_level=array();


$col1gp=array();
$col2gp=array();
$col3gp=array();
$col4gp=array();
$col5gp=array();
$col6gp=array();
$col7gp=array();
$col8gp=array();
$col9gp=array();
    $col1vgp=array();
    $col2vgp=array();
    $col3vgp=array();
    $col4vgp=array();
    $col5vgp=array();
    $col6vgp=array();
    $col7vgp=array();
    $col8vgp=array();
    $col9vgp=array();
            $col1secre=array();
            $col2secre=array();
            $col3secre=array();
            $col4secre=array();
            $col5secre=array();
            $col6secre=array();
            $col7secre=array();
            $col8secre=array();
            $col9secre=array();
                    $col1tre=array();
                    $col2tre=array();
                    $col3tre=array();
                    $col4tre=array();
                    $col5tre=array();
                    $col6tre=array();
                    $col7tre=array();
                    $col8tre=array();
                    $col9tre=array();
                            $col1gen=array();
                            $col2gen=array();
                            $col3gen=array();
                            $col4gen=array();
                            $col5gen=array();
                            $col6gen=array();
                            $col7gen=array();
                            $col8gen=array();
                            $col9gen=array();
                                    $col1ot=array();
                                    $col2ot=array();
                                    $col3ot=array();
                                    $col4ot=array();
                                    $col5ot=array();
                                    $col6ot=array();
                                    $col7ot=array();
                                    $col8ot=array();
                                    $col9ot=array();
                                            $col1info=array();
                                            $col2info=array();
                                            $col3info=array();
                                            $col4info=array();
                                            $col5info=array();
                                            $col6info=array();
                                            $col7info=array();
                                            $col8info=array();
                                            $col9info=array();
                                                    $col1prod=array();
                                                    $col2prod=array();
                                                    $col3prod=array();
                                                    $col4prod=array();
                                                    $col5prod=array();
                                                    $col6prod=array();
                                                    $col7prod=array();
                                                    $col8prod=array();
                                                    $col9prod=array();
                                            $col1soc=array();
                                            $col2soc=array();
                                            $col3soc=array();
                                            $col4soc=array();
                                            $col5soc=array();
                                            $col6soc=array();
                                            $col7soc=array();
                                            $col8soc=array();
                                            $col9soc=array();
                                    $col1prot=array();
                                    $col2prot=array();
                                    $col3prot=array();
                                    $col4prot=array();
                                    $col5prot=array();
                                    $col6prot=array();
                                    $col7prot=array();
                                    $col8prot=array();
                                    $col9prot=array();
                            $col1spo=array();
                            $col2spo=array();
                            $col3spo=array();
                            $col4spo=array();
                            $col5spo=array();
                            $col6spo=array();
                            $col7spo=array();
                            $col8spo=array();
                            $col9spo=array();
                    $col1secu=array();
                    $col2secu=array();
                    $col3secu=array();
                    $col4secu=array();
                    $col5secu=array();
                    $col6secu=array();
                    $col7secu=array();
                    $col8secu=array();
                    $col9secu=array();
                $col1hod=array();
                $col2hod=array();
                $col3hod=array();
                $col4hod=array();
                $col5hod=array();
                $col6hod=array();
                $col7hod=array();
                $col8hod=array();
                $col9hod=array();
$col1arbit=array();
$col2arbit=array();
$col3arbit=array();
$col4arbit=array();
$col5arbit=array();
$col6arbit=array();
$col7arbit=array();
$col8arbit=array();
$col9arbit=array();
    	try{
	$connect->beginTransaction();
   $select="SELECT reg_no, first_name, last_name, gender, department, post, oya, imfabusa, class_level from candidates where allowed='yes';";		
	foreach($connect->query($select) as $row){

$reg_no_db=$row['reg_no'];
$first_name_db=$row['first_name'];
$last_name_db=$row['last_name'];
$gender_db=$row['gender'];
$department_db=$row['department'];
$post_db=$row['post'];
$oya_db=$row['oya'];
$imfabusa_db=$row['imfabusa'];
$class_level_db=$row['class_level'];

$allData[]=$reg_no_db;
$allData[]=$first_name_db;
$allData[]=$last_name_db;
$allData[]=$gender_db;
$allData[]=$department_db;
$allData[]=$post_db;
$allData[]=$oya_db;
$allData[]=$imfabusa_db;
$allData[]=$class_level_db;
}
}
        
 catch(PDOException $e)
{
echo $e->getMessage();
}
for($i=0; $i<count($allData); $i=$i+9){
$reg_no[]=$allData[$i];
$first_name[]=$allData[$i+1];
$last_name[]=$allData[$i+2];
$gender[]=$allData[$i+3];
$department[]=$allData[$i+4];
$post[]=$allData[$i+5];
$oya[]=$allData[$i+6];
$imfabusa[]=$allData[$i+7];
$class_level[]=$allData[$i+8];
}

for($i=0; $i<count($post); $i++){
        if($post[$i]=="guildpresident"){
                $col1gp[]=$reg_no[$i];
                $col2gp[]=$first_name[$i];
                $col3gp[]=$last_name[$i];
                $col4gp[]=$gender[$i];
                $col5gp[]=$department[$i];
                $col6gp[]=$post[$i];
                $col7gp[]=$oya[$i];
                $col8gp[]=$imfabusa[$i];
                $col9gp[]=$class_level[$i];
        }
        if($post[$i]==("viceguild")){
                $col1vgp[]=$reg_no[$i];
                $col2vgp[]=$first_name[$i];
                $col3vgp[]=$last_name[$i];
                $col4vgp[]=$gender[$i];
                $col5vgp[]=$department[$i];
                $col6vgp[]=$post[$i];
                $col7vgp[]=$oya[$i];
                $col8vgp[]=$imfabusa[$i];
                $col9vgp[]=$class_level[$i];
        }
        if($post[$i]==("secretary")){
                $col1secre[]=$reg_no[$i];
                $col2secre[]=$first_name[$i];
                $col3secre[]=$last_name[$i];
                $col4secre[]=$gender[$i];
                $col5secre[]=$department[$i];
                $col6secre[]=$post[$i];	
                $col7secre[]=$oya[$i];
                $col8secre[]=$imfabusa[$i];
                $col9secre[]=$class_level[$i];	
        }
        if($post[$i]==("treasure")){
                $col1tre[]=$reg_no[$i];
                $col2tre[]=$first_name[$i];
                $col3tre[]=$last_name[$i];
                $col4tre[]=$gender[$i];
                $col5tre[]=$department[$i];
                $col6tre[]=$post[$i];
                $col7tre[]=$oya[$i];
                $col8tre[]=$imfabusa[$i];
                $col9tre[]=$class_level[$i];
        }
        if($post[$i]==("gender")){
                $col1gen[]=$reg_no[$i];
                $col2gen[]=$first_name[$i];
                $col3gen[]=$last_name[$i];
                $col4gen[]=$gender[$i];
                $col5gen[]=$department[$i];
                $col6gen[]=$post[$i];
                $col7gen[]=$oya[$i];
                $col8gen[]=$imfabusa[$i];
                $col9gen[]=$class_level[$i];
        }
        if($post[$i]==("ot")){
                $col1ot[]=$reg_no[$i];
                $col2ot[]=$first_name[$i];
                $col3ot[]=$last_name[$i];
                $col4ot[]=$gender[$i];
                $col5ot[]=$department[$i];
                $col6ot[]=$post[$i];
                $col7ot[]=$oya[$i];
                $col8ot[]=$imfabusa[$i];
                $col9ot[]=$class_level[$i];
        }
        if($post[$i]==("information")){
                $col1info[]=$reg_no[$i];
                $col2info[]=$first_name[$i];
                $col3info[]=$last_name[$i];
                $col4info[]=$gender[$i];
                $col5info[]=$department[$i];
                $col6info[]=$post[$i];
                $col7info[]=$oya[$i];
                $col8info[]=$imfabusa[$i];
                $col9info[]=$class_level[$i];
        }
        if($post[$i]==("production")){
                $col1prod[]=$reg_no[$i];
                $col2prod[]=$first_name[$i];
                $col3prod[]=$last_name[$i];
                $col4prod[]=$gender[$i];
                $col5prod[]=$department[$i];
                $col6prod[]=$post[$i];	
                $col7prod[]=$oya[$i];
                $col8prod[]=$imfabusa[$i];
                $col9prod[]=$class_level[$i];	
        }
        if($post[$i]==("social")){
                $col1soc[]=$reg_no[$i];
                $col2soc[]=$first_name[$i];
                $col3soc[]=$last_name[$i];
                $col4soc[]=$gender[$i];
                $col5soc[]=$department[$i];
                $col6soc[]=$post[$i];
                $col7soc[]=$oya[$i];
                $col8soc[]=$imfabusa[$i];
                $col9soc[]=$class_level[$i];
        }
        if($post[$i]==("protocol")){
                $col1prot[]=$reg_no[$i];
                $col2prot[]=$first_name[$i];
                $col3prot[]=$last_name[$i];
                $col4prot[]=$gender[$i];
                $col5prot[]=$department[$i];
                $col6prot[]=$post[$i];
                $col7prot[]=$oya[$i];
                $col8prot[]=$imfabusa[$i];
                $col9prot[]=$class_level[$i];
        }
        if($post[$i]==("sports")){
                $col1spo[]=$reg_no[$i];
                $col2spo[]=$first_name[$i];
                $col3spo[]=$last_name[$i];
                $col4spo[]=$gender[$i];
                $col5spo[]=$department[$i];
                $col6spo[]=$post[$i];
                $col7spo[]=$oya[$i];
                $col8spo[]=$imfabusa[$i];
                $col9spo[]=$class_level[$i];
        }
        if($post[$i]==("security")){
                $col1secu[]=$reg_no[$i];
                $col2secu[]=$first_name[$i];
                $col3secu[]=$last_name[$i];
                $col4secu[]=$gender[$i];
                $col5secu[]=$department[$i];
                $col6secu[]=$post[$i];
                $col7secu[]=$oya[$i];
                $col8secu[]=$imfabusa[$i];
                $col9secu[]=$class_level[$i];
        }
        if($post[$i]==("hod")){
                $col1hod[]=$reg_no[$i];
                $col2hod[]=$first_name[$i];
                $col3hod[]=$last_name[$i];
                $col4hod[]=$gender[$i];
                $col5hod[]=$department[$i];
                $col6hod[]=$post[$i];
                $col7hod[]=$oya[$i];
                $col8hod[]=$imfabusa[$i];
                $col9hod[]=$class_level[$i];
        }
        if($post[$i]==("arbitration")){
                $col1arbit[]=$reg_no[$i];
                $col2arbit[]=$first_name[$i];
                $col3arbit[]=$last_name[$i];
                $col4arbit[]=$gender[$i];
                $col5arbit[]=$department[$i];
                $col6arbit[]=$post[$i];
                $col7arbit[]=$oya[$i];
                $col8arbit[]=$imfabusa[$i];
                $col9arbit[]=$class_level[$i];
        }
        if($post[$i]==("speaker")){
                $col1sp[]=$reg_no[$i];
                $col2sp[]=$first_name[$i];
                $col3sp[]=$last_name[$i];
                $col4sp[]=$gender[$i];
                $col5sp[]=$department[$i];
                $col6sp[]=$post[$i];	
                $col7sp[]=$oya[$i];
                $col8sp[]=$imfabusa[$i];
                $col9sp[]=$class_level[$i];	
        }
}
function show_oya($input, $col1_Si){
	    echo "<tr><td colspan='2'><b><font color=red>Oya</font></b></td><td><input type='radio' name='$input' value='Oya_".$col1_Si."'>Vote</td></tr>";
}
function imfabusa($input, $col6_Si){
	    echo "<tr style='display:none'><td colspan='2'><b><font color=red>Imfabusa(".$col6_Si.")</font></b></td><td><input type='radio' name='$input' value='".$col6_Si."' checked>Vote</td></tr>";
}

    ?>
	<!doctype html>
<html>
  <head>

    <meta charset="utf-8" />
    <style>
      html {
        width: 100%;
        height: 100%;
        font-family: Times;
        font-size: 16px;
        overflow: hidden;
      }

      body {
        cursor: pointer;
        width: 100%;
        height: 100%;
        background: #012717; /* Old browsers */
        background: -moz-radial-gradient(center, ellipse cover,  #012717 0%, #143 100%); /* FF3.6+ */
        background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#012717), color-stop(100%,#143)); /* Chrome,Safari4+ */
        background: -webkit-radial-gradient(center, ellipse cover,  #012717 0%,#143 100%); /* Chrome10+,Safari5.1+ */
        background: -o-radial-gradient(center, ellipse cover,  #012717 0%,#143 100%); /* Opera 12+ */
        background: -ms-radial-gradient(center, ellipse cover,  #012717 0%,#143 100%); /* IE10+ */
        background: radial-gradient(ellipse at center,  #012717 0%,#143 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#012717', endColorstr='#143',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        -webkit-perspective: 800px;
        -moz-perspective: 800px;
        -ms-perspective: 800px;
        -o-perspective: 800px;
        perspective: 800px;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
      }

      #myBook {
        left: 45%;
        top: 0.5em;
        -webkit-transform: rotate3d(-1.8, -1.0, 0.6, 20deg);
        -moz-transform: rotate3d(-1.8, -1.0, 0.6, 20deg);
        -ms-transform: rotate3d(-1.8, -1.0, 0.6, 20deg);
        -o-transform: rotate3d(-1.8, -1.0, 0.6, 20deg);
        transform: rotate3d(-1.8, -1.0, 0.6, 0deg);
        text-align: center;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: absolute;
      }

      #myBook .book > div:first-child {
        -webkit-transform: rotateY(-150deg);
        -moz-transform: rotateY(-150deg);
        -ms-transform: rotateY(-150deg);
        -o-transform: rotateY(-150deg);
        transform: rotateY(-150deg);
      }

      .book, .book > div {
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        -o-transform-style: preserve-3d;
        transform-style: preserve-3d;
        position: absolute;
      }

      .book > div {
        -webkit-transition: 1s ease-in-out;
        -moz-transition: 1s ease-in-out;
        -ms-transition: 1s ease-in-out;
        -o-transition: 1s ease-in-out;
        transition: 1s ease-in-out;
      }

      /* Front of a page */
      .book > div > div:first-child {
background: #ffffff; /* Old browsers */
background: -moz-linear-gradient(-45deg,  #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* IE10+ */
background: linear-gradient(135deg,  #ffffff 0%,#e5e5e5 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        width: 400px;
        height: 600px;
        position: absolute;
        overflow: hidden;
        -webkit-transform: translate3d(0px, 0px, 0.02px);
        -moz-transform: translate3d(0px, 0px, 0.02px);
        -ms-transform: translate3d(0px, 0px, 0.02px);
        -o-transform: translate3d(0px, 0px, 0.02px);
        transform: translate3d(0px, 0px, 0.02px);
        padding: 30px;
        padding-left: 40px;
        padding-bottom: 80px;
        border-left: 2px solid #000;
      }

      /* Back of a page */
      .book > div > div:last-child {
        background-color: white;
        background: #ffffff; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #ffffff 0%, #e5e5e5 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(-45deg,  #ffffff 0%,#e5e5e5 100%); /* IE10+ */
        background: linear-gradient(135deg,  #ffffff 0%,#e5e5e5 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        width: 400px;
        height: 600px;
        position: absolute;
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -ms-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
        overflow: hidden;
        padding: 30px;
        padding-right: 40px;
        padding-bottom: 80px;
        border-right: 2px solid #000;
      }

      /* covers */
      .book > div:first-child > div:first-child, .book > div:last-child > div:last-child {
        background: #ffffff; /* Old browsers */
        background: -moz-linear-gradient(-45deg,  #8C9CCC 0%, #080f40 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#8C9CCC), color-stop(100%,#080f40)); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(-45deg,  #8C9CCC 0%,#080f40 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(-45deg,  #8C9CCC 0%,#080f40 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(-45deg,  #8C9CCC 0%,#080f40 100%); /* IE10+ */
        background: linear-gradient(135deg,  #8C9CCC 0%,#080f40 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8C9CCC', endColorstr='#080f40',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        color: #000;
        border: 2px solid #000;
        margin-left: -1px;
        margin-top: -1px;
      }

      h1 {
        margin-top: 200px;
        font-family: Cochin, sans-serif;
      }

      .book-pages p {
        text-align: left;
      }
    </style>

  </head>
  <body>

    <div id="myBook">
      <div class="book">

        <div>
          <div>
            <h1>A DESCENT INTO THE MAELSTRÖM</h1>
          </div>
          <div>
            <h1>By Edgar Allan Poe</h1>
          </div>
        </div>
        
        <div>
          <div>
            <h1>2012 Bogus HTML Hipster Publishing Inc.</h1>
            <h2>Copy-pasted from <a href="http://www.gutenberg.org/ebooks/2148">Project Gutenberg</a></h2>
          </div>
          <div>
            <p>This page intentionally left blank.</p>
          </div>
        </div>

        <div>
          <div class="book-pages">
<?php

echo "<form action='voting_page2.php' method='POST'><h2 style='color:red'>TCTSU VOTING PAPER</H2><table border='1' width='90%'>";
echo "<TR><th colspan='3'><h4>GUILD PRESIDENT</H4></TR><tr><th>FAMILY NAME</TH><TH>SURNAME</TH><TH>VOTE</TH></TR>";


for($i=0; $i<count($col1gp); $i++){
    echo "<tr><td width='40%'>".$col2gp[$i]."</td><td width='40%'>".$col3gp[$i]."</td><td><input type='radio' name='gp' value='".$col1gp[$i]."'>Vote</td></tr>";
	if(count($col1gp)==1){
	show_oya("gp", $col1gp[$i]);
	}					

                    }	imfabusa("gp_h", $col6gp[0]);

    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>VICE GUILD-PRESIDENT</H4></tr>";
    for($i=0; $i<count($col1vgp); $i++){
    echo "<tr><td width='40%'>".$col2vgp[$i]."</td><td width='40%'>".$col3vgp[$i]."</td><td><input type='radio' name='vgp' value='".$col1vgp[$i]."'>Vote</td></tr>";
 	if(count($col1vgp)==1){
	show_oya("vgp", $col1vgp[$i]);
	}                  
				   }imfabusa("vgp_h", $col6vgp[0]);	
    echo "</table><br>";
	
?>
</div>
<div class="book-pages">



</div>
</div>
<div>
<div class="book-pages">
<?php
echo "<table border='1' width='90%'><TR><th colspan='3'><h4>SECRETARY</H4></tr>";
    for($i=0; $i<count($col1secre); $i++){
    echo "<tr><td width='40%'>".$col2secre[$i]."</td><td width='40%'>".$col3secre[$i]."</td><td><input type='radio' name='secre' value='".$col1secre[$i]."'>Vote</td></tr>";
 	if(count($col1secre)==1){
	show_oya("secre", $col1secre[$i]);
	}                   
					}imfabusa("secre_h", $col6secre[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>TREASURE</H4></tr>";
    for($i=0; $i<count($col1tre); $i++){
    echo "<tr><td width='40%'>".$col2tre[$i]."</td><td width='40%'>".$col3tre[$i]."</td><td><input type='radio' name='tre' value='".$col1tre[$i]."'>Vote</td></tr>";
  	if(count($col1tre)==1){
	show_oya("tre", $col1tre[$i]);
	}                  
					}imfabusa("tre_h", $col6tre[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>GENDER</H4></tr>";
    for($i=0; $i<count($col1gen); $i++){
    echo "<tr><td width='40%'>".$col2gen[$i]."</td><td width='40%'>".$col3gen[$i]."</td><td><input type='radio' name='gen' value='".$col1gen[$i]."'>Vote</td></tr>";
     	if(count($col1gen)==1){
	show_oya("gen", $col1gen[$i]);
	}              
				   }imfabusa("gen_h", $col6gen[0]);
    echo "</table><br>";
?>
</div>
<div class="book-pages">





</div>
</div>
<div>
<div class="book-pages">
<?php 
echo "<table border='1' width='90%'><TR><th colspan='3'><h4>ORDINARY TREASURE</H4></tr>";
    for($i=0; $i<count($col1ot); $i++){
    echo "<tr><td width='40%'>".$col2ot[$i]."</td><td width='40%'>".$col3ot[$i]."</td><td><input type='radio' name='ot' value='".$col1ot[$i]."'>Vote</td></tr>";
     	if(count($col1ot)==1){
	show_oya("ot", $col1ot[$i]);
	}               
					}imfabusa("ot_h", $col6ot[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>MINISTER OF INFORMATION</H4></tr>";
    for($i=0; $i<count($col1info); $i++){
    echo "<tr><td width='40%'>".$col2info[$i]."</td><td width='40%'>".$col3info[$i]."</td><td><input type='radio' name='info' value='".$col1info[$i]."'>Vote</td></tr>";
   	if(count($col1info)==1){
	show_oya("info", $col1info[$i]);
	}                 
					}imfabusa("info_h", $col6info[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>PLANNING AND PRODUCTION</H4></tr>";
    for($i=0; $i<count($col1prod); $i++){
    echo "<tr><td width='40%'>".$col2prod[$i]."</td><td width='40%'>".$col3prod[$i]."</td><td><input type='radio' name='prod' value='".$col1prod[$i]."'>Vote</td></tr>";
   	if(count($col1prod)==1){
	show_oya("prod", $col1prod[$i]);
	}
		}imfabusa("prod_h", $col6prod[0]);             
    echo "</table><br>";
?>


</div>
<div class="book-pages">





</div>
</div>
<div>
<div class="book-pages">
<?php
	echo "<table border='1' width='90%'><TR><th colspan='3'><h4>SOCIAL AFFAIRS</H4></tr>";
    for($i=0; $i<count($col1soc); $i++){
    echo "<tr><td width='40%'>".$col2soc[$i]."</td><td width='40%'>".$col3soc[$i]."</td><td><input type='radio' name='soc' value='".$col1soc[$i]."'>Vote</td></tr>";
     	if(count($col1soc)==1){
	show_oya("soc", $col1soc[$i]);
	}               
					}imfabusa("soc_h", $col6soc[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>PROTOCOL</H4></tr>";
    for($i=0; $i<count($col1prot); $i++){
    echo "<tr><td width='40%'>".$col2prot[$i]."</td><td width='40%'>".$col3prot[$i]."</td><td><input type='radio' name='prot' value='".$col1prot[$i]."'>Vote</td></tr>";
      	if(count($col1prot)==1){
	show_oya("prot", $col1prot[$i]);
	}              
					}imfabusa("prot_h", $col6prot[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>SPORTS AND CULTURE</H4></tr>";
    for($i=0; $i<count($col1spo); $i++){
    echo "<tr><td width='40%'>".$col2spo[$i]."</td><td width='40%'>".$col3spo[$i]."</td><td><input type='radio' name='spo' value='".$col1spo[$i]."'>Vote</td></tr>";
     	if(count($col1spo)==1){
	show_oya("spo", $col1spo[$i]);
	}               
					}imfabusa("spo_h", $col6spo[0]);
    echo "</table><br>";

?>


</div>
<div class="book-pages">



</div>
</div>
<div>
<div class="book-pages">
<?php
	echo "<table border='1' width='90%'><TR><th colspan='3'><h4>MINISTER OF SECURITY</H4></tr>";
    for($i=0; $i<count($col1secu); $i++){
    echo "<tr><td width='40%'>".$col2secu[$i]."</td><td width='40%'>".$col3secu[$i]."</td><td><input type='radio' name='secu' value='".$col1secu[$i]."'>Vote</td></tr>";
     	if(count($col1secu)==1){
	show_oya("secu", $col1secu[$i]);
	}              
				   }imfabusa("secu_h", $col6secu[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>HEAD OF DEPARTMENT</H4></tr>";
    for($i=0; $i<count($col1hod); $i++){
    echo "<tr><td width='40%'>".$col2hod[$i]."</td><td width='40%'>".$col3hod[$i]."</td><td><input type='radio' name='hod' value='".$col1hod[$i]."'>Vote</td></tr>";
       	if(count($col1hod)==1){
	show_oya("hod", $col1hod[$i]);
	}             
					}imfabusa("hod_h", $col6hod[0]);
    echo "</table><br>";

?>
</div>
<div class="book-pages">


</div>
</div>
<div>
<div class="book-pages">
<?php
echo "<table border='1' width='90%'><TR><th colspan='3'><h4>ARBITRATION COMMITTEE</H4></tr>";
    for($i=0; $i<count($col1arbit); $i++){
    echo "<tr><td width='40%'>".$col2arbit[$i]."</td><td width='40%'>".$col3arbit[$i]."</td><td><input type='radio' name='arbit' value='".$col1arbit[$i]."'>Vote</td></tr>";
      	if(count($col1arbit)==1){
	show_oya("arbit", $col1arbit[$i]);
	}              
					}imfabusa("arbit_h", $col6arbit[0]);
    echo "</table><br><table border='1' width='90%'><TR><th colspan='3'><h4>SPEAKER OF STUDENTS</H4></tr>";
    for($i=0; $i<count($col1sp); $i++){
    echo "<tr><td width='40%'>".$col2sp[$i]."</td><td width='40%'>".$col3sp[$i]."</td><td><input type='radio' name='sp' value='".$col1sp[$i]."'>Vote</td></tr>";
     	if(count($col1sp)==1){
	show_oya("sp", $col1sp[$i]);
	}               
					}imfabusa("sp_h", $col6sp[0]);
					    echo "<tr><td width='40%'></td><td colspan='2'><button type='submit' name='vote' style='font-size:15px'>Submit Your Votes</button></td></tr></table></form>";
?>
</div>
<div class="book-pages">



</div>
</div>
<div>
<div class="book-pages">



</div>
<div class="book-pages">


</div>
</div>
<div>
<div class="book-pages">


</div>
</div>
<div>
<div class="book-pages">



</div>
<div class="book-pages">
<h1>To be continued...</h1>
</div>
</div>

      </div>
    </div>


    <script type="text/javascript" src="book.js">
    </script>

  </body>
</html>
