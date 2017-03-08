<html>
<head>
<script>
function validate_form(thisform)
{
var x = document.forms["myform"]["bookname"].value;
if (x == null || x == "") {
alert("book name must be filled out");
return false;
}
var y = document.forms["myform"]["writer"].value;
if (y == null || y == "") {
alert("writer's name must be filled out");
return false;
}
var z = document.forms["myform"]["price"].value;
if (z == null || z == "") {
alert("price must be filled out");
return false;
}
}
</script>
<title>addbook</title>
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
<div class="main">

<div class="mainmenu">
<ul>
<li><a href="webpage1.php">Home</a></li>
<li><a href="booklist.php">Boook List</a></li>
<li><a href="admin_order_show.php">Show Order</a></li>
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
<div class="maincontent">
<div class="content">
<h2>Add new book</h2>
<br>
<br>
<p>Complete all fields</p>
<br>
<br>
<br>
<form name="myform" action="addbook_process.php" method="post" onsubmit="return validate_form(this);">
Book Type:<input type="text" name="subject" placeholder="Enter book's type"/><br><br>
Book Name:<input type="text" name="name" placeholder="Enter book's name"/><br><br>
Writer's Name:<input type="text" name="writer" placeholder="Enter writer's name"/><br><br>
Price:<input type="text" name="price" placeholder="Enter price"/><br><br>

<input type="submit" value="Add">

 </form>
 </div>
 <div class="sidebar">
 <h3>Subjects</h3><br>
<ul>
<li><a href="novel.php">Novel</a></li>
<li><a href="poem.php">Poem</a></li>
<li><a href="history.php">History</a></li>
<li><a href="story.php">Story</a></li>
<li><a href="science.php">Science Fiction</a></li>
<li><a href="child.php">Books for Children</a></li>
</ul>
 </div>
<br>
<br>
<br>
 
</body>
</html>





