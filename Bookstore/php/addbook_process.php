<html>
<head>

<title>added_book</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="main">
<table>
<colgroup>  
<col>
<col>
</colgroup>  
  <tr>
    <th> <img src ="images/old-book1.jpg"height="40"width="40"></th>
    <th style="font-size:20px">Hi Admin !</th>
  </tr>
   
</table>


<?php
include "database.php";

$subject=$_POST['subject'];
$name=$_POST['name'];
$writer=$_POST['writer'];
$price=$_POST['price'];

echo "file inserted successfully";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

/*if  ($_FILES['image']['size']  ==  0)
{

die("ERROR:  Zero  byte  file  upload");

}



$allowedFileTypes  =  array("image/gif",  "image/jpeg",  "image/pjpeg", "mage/png");

if  (!in_array($_FILES['image']['type'],  $allowedFileTypes)) 
{

die("ERROR:  File  type  not  permitted");

} 

if  (!is_uploaded_file($_FILES['image']['tmp_name']))
{

die("ERROR:  Not  a  valid  file  upload"); 

}
$uploadDir  =  "../upload/"; //  copy  the  uploaded  file  to  the  directory
move_uploaded_file($_FILES['image']['tmp_name'],  $uploadDir  .  $_FILES['image']['name'])  or  die("Cannot  copy  uploaded  file"); //  display  success  message
$image= "http://localhost/php/upload/".$_FILES["image"]["name"];
//echo  "File  successfully  uploaded  to  "  .  $uploadDir  .$_FILES['image']['name']; */

$sql= "INSERT INTO `book_info` VALUES('','$subject','$name','$writer','$price') ";
mysql_query($sql);

 $sql = "SELECT * FROM `book_info`";
    $result=mysql_query($sql);
	echo "<table id='results'>";
    while ($row=mysql_fetch_array($result)) {
      $id=$row['id'];
      echo "<tr>
	  
         <td valign='top'><b>".$row['name']."</b><br>
		                      Subject : ".$row['subject']."<br>
							  Writer : ".$row['writer']."<br>
		                      Price : ".$row['price']."<br><br><br></td>
							  
							  </tr>"; 
							 
	
							  
        }

     echo "</table>";

   ?>
   </body>
   </html>
   
   