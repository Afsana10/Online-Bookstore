<!DOCTYPE html>
<html>
<head>
<script>
function showHint(str) {
     if (str.length == 0) {
         document.getElementById("txtHint").innerHTML = "";
         return;
     } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                 document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
             }
         }
         xmlhttp.open("GET", "gethint.php?q="+str, true);
         xmlhttp.send();
     }
}
</script>
<title>search</title>
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
    <th style="font-size:40px">ONLINE BOOKSTORE !</th>
  </tr>
   
</table>
</div>

<div class="mainmenu">
<ul>
<li><a href="webpage1.php">Home</a></li>
<li><a href="booklist.php">Boook List</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>

<br>
<br>
<br>
<br>
<br>

<div class="content">
<br>
<br>
<br>
<br>
<br>
<p><b>Start typing a name in the input field below:</b><br><br></p>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<br><p>Suggestions: <span id="txtHint"></span></p>

</div>
</div>
</body>
</html>