<?php
$id=$_GET[id];
include "../../config/db_mysql.php";
$sql="delete from `goods` where id='".$id."'";
mysql_query($sql);

mysql_close();
?>