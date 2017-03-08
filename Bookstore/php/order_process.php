<?php
session_start();
include "database.php";

$q = intval($_GET['q']);
$sql2="SELECT * FROM `book_info`  WHERE id = '".$q."'";
$result1 = mysql_query($sql2);
if($result1 === FALSE) { 
    die(mysql_error()); // TODO: better error handling
}
if (mysql_num_rows($result1) > 0) {
while($row = mysql_fetch_assoc($result1)) {
   
 $book_name=$row['name'] ;
	 $book_writer=$row['writer'];
   
 $book_price=$row['price'];
    
   }
   }
  if(isset($_SESSION['id']))
$user_id=$_SESSION['id'];

echo '<h3 >'.' Ordered Items'.'</h3>'.'<br>';
$sqlinfo = " SELECT * FROM  `user_info`  WHERE name = '$user_id'" ;
$resultinfo = mysql_query($sqlinfo);
while($row = mysql_fetch_array($resultinfo))
{
    $user_name=$row['name'];
    $user_email=$row['email'];
}
 
 

$sql2="INSERT INTO `admin_order` (`admin_order_id`, `book_id`, `book_name`, `book_price`, `book_writer`, `user_id`, `user_name`, `user_email`) VALUES ('','$q','$book_name','$book_price','$book_writer','$user_id','$user_name','$user_email')";
mysql_query($sql2);


$sql1="INSERT INTO `user_order_tab`(`user_order_id`, `book_id`, `book_name`, `book_price`, `book_writer`, `user_id`, `user_name`, `user_email`) VALUES ('','$q','$book_name','$book_price','$book_writer','$user_id','$user_name','$user_email')";
mysql_query($sql1);


$sql3="SELECT * FROM `user_order_tab` WHERE user_name = '$user_id'";
 $result5 = mysql_query($sql3);

 while($row = mysql_fetch_assoc($result5)) {
//echo '<hr/>';
 $book_name=$row['book_name'];
      echo '<p style="padding-left:7px;">'.'Book Name: '.$row['book_name'].'</p>';
       $book_price=$row['book_price'];
      echo '<p style="padding-left:7px;">'.'Book Price: '.$row['book_price'].'<br>'.'<hr/>';
    
}




?>