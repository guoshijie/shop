<?php
$username=$_POST[username];
$userpwd=$_POST[userpwd];
include "../../config/db_mysql.php";
$sql="insert into `user` (username,pwd,usertype) values ('$username','$userpwd','1')";
$result=mysql_query($sql);
if($result){
  echo "<script>alert('��ӳɹ�!');</script>";

}else{
  echo "<script>alert('���ʧ�ܣ��û��������Ѵ���!');history.back();</script>";
}
?>