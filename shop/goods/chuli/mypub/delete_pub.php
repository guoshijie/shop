<?php
  $id=$_GET[id];
  include "../../../connection/connect.php";
  $sql="delete from `goods` where id='".$id."'";
  $rs=mysql_query($sql);
  if($rs){
  echo"<script>alert('ɾ���ɹ�!');history.back();</script>";
  }else{
  echo"<script>alert('ɾ��ʧ��...');history.back();</script>";
  }

?>