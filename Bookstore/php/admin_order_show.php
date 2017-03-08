<html>
<head>
<title>show_order</title>
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="main">
<div class="banner">
<table>
<colgroup>  
<col>
<col>
</colgroup>  
  <tr>
    <th> <img src ="images/old-book1.jpg"height="60"width="60"></th>
    <th style="font-size:40px">Hi Admin !</th>
  </tr>
   
</table>
</div>
<br><br><br><br><br><br><br><br>
<?php
session_start();
include "database.php";

//echo $user_id;
echo '<h3 >'.' Ordered Items'.'</h3>'.'<br>';
 
 




$sql3="SELECT * FROM `admin_order` ";
 $result5 = mysql_query($sql3);

 while($row = mysql_fetch_assoc($result5)) {
//echo '<hr/>';
 $book_name=$row['book_name'];
  echo '<p style="padding-left:7px;">'.'Book Name: '.$row['book_name'].'</p>';
        
      
       $book_price=$row['book_price'];
      echo '<p style="padding-left:7px;">'.'Book Price: '.$row['book_price'].'<br>';
	  echo '<p style="padding-left:7px;">'.'Book Writer: '.$row['book_writer'].'</p>';
	   echo '<p style="padding-left:7px;">'.'Customer Name: '.$row['user_name'].'</p>';
	   echo '<p style="padding-left:7px;">'.'Customer Name: '.$row['user_email'].'</p>'.'<br><br>';
    
    
}




?>
</div>
</body>
</html>