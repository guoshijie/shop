<?php
header('Content-Type:text/html;charset=gb2312');
$id=$_POST["id"];
$userpwd=$_POST[userpwd];

 include "../../config/db_mysql.php";
$sql="UPDATE `shop`.`user` SET `username` = '$username',`pwd` = '$userpwd' WHERE `user`.`id` ='$id' ";
$rs=mysql_query($sql);
if($rs) {

   echo "<script>alert('�޸��û��ɹ���');</script>";
}else{
 
 echo "<script>alert('�޸��û�ʧ��');</script>";

}
 mysql_close();
?>