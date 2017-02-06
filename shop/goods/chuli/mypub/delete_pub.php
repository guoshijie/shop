<?php
  $id=$_GET[id];
  include "../../../connection/connect.php";
  $sql="delete from `goods` where id='".$id."'";
  $rs=mysql_query($sql);
  if($rs){
  echo"<script>alert('É¾³ý³É¹¦!');history.back();</script>";
  }else{
  echo"<script>alert('É¾³ýÊ§°Ü...');history.back();</script>";
  }

?>