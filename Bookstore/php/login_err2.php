<?php
session_start();
if (isset($_SESSION['id'])==true)
{
	header('Location:addbook.php');
}
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) 
{
	//$_SESSION['id'] = $_COOKIE['c'];
	header('Location:addbook.php');
}

?>
<html>
<head>
<script>

function validate(thisform)
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
<li><a href="">Boook List</a></li>
<li><a href="">Contact</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
<br>
<br>
<br>
<br>
<h4><p style="color:red">Your user id or password is not correct</p></h4>
<br>
<br><br>
<br>
<h2>Login as Admin</h2>
<br>
<br>
<form name="myform" action="admin_login_process.php" method="post" onsubmit="return validate(this);">
Name:<input type="text" name="name" placeholder="Enter username"/><br><br>
Password:<input type="password" name="password" placeholder="Enter password"/><br><br>
Remember me:<input type="checkbox" name="checkbox" style="padding:10px 45px" />
<input type="submit" value="Login">

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
<li><a href="">Novel</a></li>
<li><a href="">Poem</a></li>
<li><a href="">History</a></li>
<li><a href="">Story</a></li>
<li><a href="">Science Fiction</a></li>
<li><a href="">Books for Children</a></li>
</ul>
</div>

</body>
</html>
