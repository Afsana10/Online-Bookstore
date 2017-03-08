<?php
session_start();

if(isset($_COOKIE['id'])) 
{
	$_SESSION['id'] = $_COOKIE['id'];
	header('Location:webpage1.php');
}


if (isset($_SESSION['id']))
{
	header('Location:webpage1.php');
}


if(isset($_POST['submit']))
{
include "database.php";
$name=$_POST['name'];
$password=$_POST['password'];
echo $name;
echo $password;
$sql="SELECT * FROM user_info where name='$name' AND password='$password'";
$result=mysql_query($sql);
$row=mysql_num_rows($result);
if($row == 1)
{
			$_SESSION['id']=$name;
			if(isset($_POST['checkbox']))
			{
			setcookie('id',$name,time()+3600);
			}

	        header('Location:webpage1.php');
		    die();
			
}
else
{
   header('Location:login_err.php');
}
}


?>
<html>
<head>
<script>
function validate_form(thisform)
{
var x = document.forms["myform"]["name"].value;
if (x == null || x == "") {
alert("Name must be filled out");
return false;
}
var z = document.forms["myform"]["password"].value;
if (z == null || z == "") {
alert("password must be filled out");
return false;
}
}
</script>
<title>login</title>
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
    <th style="font-size:20px">WELCOME TO ONLINE BOOKSTORE !</th>
  </tr>
   
</table>
<div class="main">

<div class="mainmenu">
<ul>
<li><a href="webpage1.php">Home</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="booklist">Boook List</a></li>
<li><a href="contact">Contact</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<h2>Login as User</h2>
<br>
<br>
<form name="myform" action="user_login.php" method="post" onsubmit="return validate_form(this);">
Name:<input type="text" name="name" placeholder="Enter username"/><br><br>
Password:<input type="password" name="password" placeholder="Enter password"/><br><br>
Remember me:<input type="checkbox" name="checkbox" style="padding:10px 45px" />
<input type="submit" name="submit" value="Login">

 </form>


<br>
<br>
<br>
 <div class="maincontent">
<div class="content">
<h3>About :</h3>
<br>
<br>
<br>
<p>This is an online bookstore. There is a large collection of famous writers. Different types of books are available here. You can easily find and order desired books.</p>
</div>
<div class="sidebar">
<h3>Subjects</h3><br>
<ul>
<li><a href="novel.php">Novel</a></li>
<li><a href="poem.php">Poem</a></li>
<li><a href="history.php">History</a></li>
<li><a href="story.php">Story</a></li>
<li><a href="science">Science Fiction</a></li>
<li><a href="child.php">Books for Children</a></li>

</ul>
</div>

</body>
</html>
