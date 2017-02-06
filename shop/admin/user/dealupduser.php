<?php
header('Content-Type:text/html;charset=gb2312');
$id=$_POST["id"];
$userpwd=$_POST[userpwd];

 include "../../config/db_mysql.php";
$sql="UPDATE `shop`.`user` SET `username` = '$username',`pwd` = '$userpwd' WHERE `user`.`id` ='$id' ";
$rs=mysql_query($sql);
if($rs) {

   echo "<script>alert('修改用户成功！');</script>";
}else{
 
 echo "<script>alert('修改用户失败');</script>";

}
 mysql_close();
?>