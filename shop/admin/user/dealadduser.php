<?php
$username=$_POST[username];
$userpwd=$_POST[userpwd];
include "../../config/db_mysql.php";
$sql="insert into `user` (username,pwd,usertype) values ('$username','$userpwd','1')";
$result=mysql_query($sql);
if($result){
  echo "<script>alert('添加成功!');</script>";

}else{
  echo "<script>alert('添加失败，用户名可能已存在!');history.back();</script>";
}
?>