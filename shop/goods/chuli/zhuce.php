<?php 
session_start();
include "../../Connection/connect.php";
$username=trim($_POST[username]);
$sql="select `username` from user where username='".$username."'";
$rs=mysql_query($sql); //判断指定的用户名是否存在
$info=mysql_fetch_array($rs);
if($info!=false)
 {
  echo"$sql";
  echo "<script language='javascript'>alert('对不起，该昵称已被其他用户使用!');history.back();</script>"; 
  exit; 
 }
 
$jym=trim($_POST[jym]);   //去除变量两边空格
$num=$_POST[num];          //接收变量值
if(strval($jym)!=strval($num))
 {
  echo "<script>alert('验证码输入错误!');history.back();</script>";
  exit;
 }
$truepwd=trim($_POST[userpwd1]);           //获取真实密码
$pwd=md5($truepwd);                   //进行加密
//$username=trim($_POST[username]);
$email=trim($_POST[email]);
$sex=$_POST[sex];
$tel=trim($_POST[tel]);
$yb=trim($_POST[yb]);
$question=trim($_POST[question]);
$answer=trim($_POST[answer]);
$usertype=0;


$uptypes=array('image/jpg', //上传文件类型列表
'image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','application/x-shockwave-flash','image/x-png');
$max_file_size=5000000;   //上传文件大小限制, 单位BYTE

$destination_folder="../../files/images/touxiang/"; //上传文件路径
$newdestination="files/images/touxiang/";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (is_uploaded_file($_FILES["photo"][tmp_name]))//是否存在文件
     {
	 
    $file = $_FILES["photo"];
	if($max_file_size < $file["size"])//检查文件大小
	 {echo "<font color='red'>文件太大！</font>";
	  exit;
	 }
	if(!in_array($file["type"], $uptypes))//检查文件类型
	{echo "<font color='red'>只能上传图像文件或Flash！</font>";exit;}
	if(!file_exists($destination_folder))
	   mkdir($destination_folder);
	$filename=$file["tmp_name"];
	$image_size = getimagesize($filename);
	$pinfo=pathinfo($file["name"]);
	$ftype=$pinfo[extension];
	$destination = $destination_folder.time().".".$ftype;
	if (file_exists($destination) && $overwrite != true){ 
         echo "<font color='red'>同名文件已经存在了！</a>";     
		 exit;}
    if(!move_uploaded_file ($filename, $destination)){  
       	 echo "<font color='red'>移动文件出错！</a>";     exit;}
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
  echo "<script>alert('注册成功!');
           location.href='../../index.php'
  </script>";
}else{
  echo "<script language='javascript'>alert('对不起,注册失败!');</script>"; 
  exit;
}
//history.back();  window.location.href='index.php';
?>