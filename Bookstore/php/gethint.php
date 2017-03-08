<?php
include "database.php";
 $sql = "SELECT * FROM `book_info`";
    $result=mysql_query($sql);
	  while ($row=mysql_fetch_array($result)) {
      $id=$row['id'];
	  $a[] = $row['name'];
	  }
	  // get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?> 
	  