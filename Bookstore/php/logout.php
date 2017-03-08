<?php
ob_start();

session_start();
include "database.php";
$sql="DELETE FROM `user_order_tab`";
mysql_query($sql);

if(session_destroy())
{
setcookie('id',"",time()-3600);
header('Location:login.php');
}

?>