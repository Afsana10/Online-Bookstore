<html>
<head>
<script>
function validate_email(field,alerttxt)
{
with (field)
  {
  apos=value.indexOf("@");
  dotpos=value.lastIndexOf(".");
  if (apos<1||dotpos-apos<2)
    {alert(alerttxt);return false;}
  else {return true;}
  }
}

function validate_form(thisform)
{
var x = document.forms["myform"]["username"].value;
if (x == null || x == "") {
alert("Name must be filled out");
return false;
}
var y = document.forms["myform"]["email"].value;
if (y == null || y == "") {
alert("email must be filled out");
return false;
}
var z = document.forms["myform"]["password"].value;
if (z == null || z == "") {
alert("password must be filled out");
return false;
}
with (thisform)
  {
  if (validate_email(email,"Not a valid e-mail address!")==false)
    {email.focus();return false;}
  }
}

</script>
<title>register</title>
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
<li><a href="booklist">Boook List</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="contact">Contact</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>


</ul>
</div>
<br>
<br>
<br>
<br>
<h2>Register<h2>
<br>
<br>
<form name="myform" action="register_process.php" method="post" onsubmit="return validate_form(this);" >

Name:<input type="text" name="username" placeholder="Enter username"/><br><br>
Email:<input type="text" name="email" placeholder="Enter email address"/><br><br>
Password:<input type="password" name="password" placeholder="Enter password"/><br><br><br>
<input type="submit" name="submit" value="Register">
</form>
<br>
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