<?php 
session_start();
include "../../Connection/connect.php";
$username=trim($_POST[username]);
$sql="select `username` from user where username='".$username."'";
$rs=mysql_query($sql); //�ж�ָ�����û����Ƿ����
$info=mysql_fetch_array($rs);
if($info!=false)
 {
  echo"$sql";
  echo "<script language='javascript'>alert('�Բ��𣬸��ǳ��ѱ������û�ʹ��!');history.back();</script>"; 
  exit; 
 }
 
$jym=trim($_POST[jym]);   //ȥ���������߿ո�
$num=$_POST[num];          //���ձ���ֵ
if(strval($jym)!=strval($num))
 {
  echo "<script>alert('��֤���������!');history.back();</script>";
  exit;
 }
$truepwd=trim($_POST[userpwd1]);           //��ȡ��ʵ����
$pwd=md5($truepwd);                   //���м���
//$username=trim($_POST[username]);
$email=trim($_POST[email]);
$sex=$_POST[sex];
$tel=trim($_POST[tel]);
$yb=trim($_POST[yb]);
$question=trim($_POST[question]);
$answer=trim($_POST[answer]);
$usertype=0;


$uptypes=array('image/jpg', //�ϴ��ļ������б�
'image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','application/x-shockwave-flash','image/x-png');
$max_file_size=5000000;   //�ϴ��ļ���С����, ��λBYTE

$destination_folder="../../files/images/touxiang/"; //�ϴ��ļ�·��
$newdestination="files/images/touxiang/";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (is_uploaded_file($_FILES["photo"][tmp_name]))//�Ƿ�����ļ�
     {
	 
    $file = $_FILES["photo"];
	if($max_file_size < $file["size"])//����ļ���С
	 {echo "<font color='red'>�ļ�̫��</font>";
	  exit;
	 }
	if(!in_array($file["type"], $uptypes))//����ļ�����
	{echo "<font color='red'>ֻ���ϴ�ͼ���ļ���Flash��</font>";exit;}
	if(!file_exists($destination_folder))
	   mkdir($destination_folder);
	$filename=$file["tmp_name"];
	$image_size = getimagesize($filename);
	$pinfo=pathinfo($file["name"]);
	$ftype=$pinfo[extension];
	$destination = $destination_folder.time().".".$ftype;
	if (file_exists($destination) && $overwrite != true){ 
         echo "<font color='red'>ͬ���ļ��Ѿ������ˣ�</a>";     
		 exit;}
    if(!move_uploaded_file ($filename, $destination)){  
       	 echo "<font color='red'>�ƶ��ļ�����</a>";     exit;}
	$pinfo=pathinfo($destination);
	$fname=$pinfo[basename];
	$photo=$newdestination.$fname;
	}
}


$sql="INSERT INTO `shop`.`user` (`username` ,`pwd` ,`sex` ,`email` ,`tel` ,`photo` ,`question` ,`answer` ,`truepwd` ,`usertype` )
       VALUES ('$username','$pwd','$sex','$email','$tel','$photo','$question','$answer','$truepwd','$usertype')";
$rs=mysql_query($sql);
//echo"$sql";
if($rs)
{
  $_SESSION["unc"]=$username;  
  echo "<script>alert('ע��ɹ�!');
           location.href='../../index.php'
  </script>";
}else{
  echo "<script language='javascript'>alert('�Բ���,ע��ʧ��!');</script>"; 
  exit;
}
//history.back();  window.location.href='index.php';
?>