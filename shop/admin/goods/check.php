<?php
include "../../connection/connect.php";
if($_GET[id]!=""){
  $id=$_GET[id];
  $type=1;
  $sql="UPDATE `shop`.`goods` SET `type` = '$type' WHERE `goods`.`id` ='$id' ";
  echo"$sql";
  $result=mysql_query($sql);
  if($result){
     echo "<script>alert('批准成功!'); window.location.href='listgoods.php';</script>";
  }
  
} 
 if($_POST[conn_id]!=""){			//判断POST方法中传递的数据是否为空
	foreach($_POST[conn_id] as $key=>$value){  //以POST方法中的数组做循环，输出键和值
	    $sql="UPDATE `shop`.`goods` SET `type` =1 WHERE `goods`.`id` ='".$value."' ";
		echo"$sql<br>";
		$result=mysql_query($sql);		//执行删除操作
	} 
	if($result){
		echo "<script>alert('批准成功!'); window.location.href='listgoods.php';</script>";
	}
}
?>