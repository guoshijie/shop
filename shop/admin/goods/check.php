<?php
include "../../connection/connect.php";
if($_GET[id]!=""){
  $id=$_GET[id];
  $type=1;
  $sql="UPDATE `shop`.`goods` SET `type` = '$type' WHERE `goods`.`id` ='$id' ";
  echo"$sql";
  $result=mysql_query($sql);
  if($result){
     echo "<script>alert('��׼�ɹ�!'); window.location.href='listgoods.php';</script>";
  }
  
} 
 if($_POST[conn_id]!=""){			//�ж�POST�����д��ݵ������Ƿ�Ϊ��
	foreach($_POST[conn_id] as $key=>$value){  //��POST�����е�������ѭ�����������ֵ
	    $sql="UPDATE `shop`.`goods` SET `type` =1 WHERE `goods`.`id` ='".$value."' ";
		echo"$sql<br>";
		$result=mysql_query($sql);		//ִ��ɾ������
	} 
	if($result){
		echo "<script>alert('��׼�ɹ�!'); window.location.href='listgoods.php';</script>";
	}
}
?>