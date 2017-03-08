<?php
session_start();

?>
<html>
<head>
<script type="text/javascript">
  function showUser(str) {
     //alert(str);
    if (str == "") {
        document.getElementById("").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("nov_order_tab").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","order_process.php?q="+str,true);
        xmlhttp.send();
    }
}

</script>
<title>bookstore</title>
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
    <th style="font-size:40px">WELCOME TO ONLINE BOOKSTORE !</th>
  </tr>
   
</table>
</div>

<div class="mainmenu">
<ul>
<li><a href="webpage1.php">Home</a></li>
<li><a href="booklist.php">Boook List</a></li>
<li><a href="contact.php">Contact</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<h4>To order books, first log in. Or you can directly contact with us.<h4>
<br>
<div class="order">
<div class="nov_description">
<?php
include "database.php";
 $sql = "SELECT * FROM `book_info` WHERE `subject` = 'novel'";
    $result=mysql_query($sql);
	echo "<table id='results'>";
    while ($row=mysql_fetch_array($result)) {
	
	
	
      $id=$row['id'];
   echo "<tr>
	  
         <td valign='top'><b>".$row['name']."</b><br>
		                      Subject : ".$row['subject']."<br>
							  Writer : ".$row['writer']."<br>
		                      Price : ".$row['price']."<br></a></td>
							  
							  </tr>";
							  echo "</table>";
					
					?>
		 <?php	if (isset($_SESSION['id']))	{	?>					  
 <button  name="nov_order_button" onclick="showUser(this.value)" value="<?php echo $row['id']; ?>">order</button><br><br><br><br>
			
        <?php
		}
		}

    ?>	
</div>
   
   <div class="order_tab" id="nov_order_tab"style="height:auto;width:300px">
   </div>
   
   
   
   
   </div>
   </div>
   
   
</body>
</html>