
<?php
include "../../../connection/connect.php";
date_default_timezone_set("prc");
$id=$_POST["id"];
$type1=$_POST["type1"];
$type2=$_POST["type2"];
if($type2==("图书软件"))$type3=$_POST["type31"];
if($type2==("文体乐器"))$type3=$_POST["type32"];
if($type2==("数码产品"))$type3=$_POST["type33"];
if($type2==("生活用品"))$type3=$_POST["type34"];
if($type2==("服装箱包"))$type3=$_POST["type35"];
if($type2==("二手手机"))$type3=$_POST["type36"];
$title=$_POST["title"];
$content=$_POST["content1"];
$place=trim($_POST[place]);
$condition=trim($_POST[condition]);
$price=trim($_POST[price]);
$pattern=trim($_POST[pattern]);
$tel=trim($_POST[tel]);
$name=trim($_POST[name]);
$type=0;

$uptypes=array('image/jpg', //上传文件类型列表
'image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','application/x-shockwave-flash','image/x-png');
$max_file_size=5000000;   //上传文件大小限制, 单位BYTE
$destination_folder="../../../files/images/photos/"; //上传文件路径
$newdestination="files/images/photos/";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (is_uploaded_file($_FILES["photo1"][tmp_name]))//是否存在文件
     {
	 
    $file = $_FILES["photo1"];
	if($max_file_size < $file["size"])//检查文件大小
	 {echo "<font color='red'>文件太大！</font>";
	  exit;
	 }
	if(!in_array($file["type"], $uptypes))//检查文件类型
	{echo "<font color='red'>只能上传图像文件或Flash！</font>";exit;}
	if(!file_exists($destination_folder))
	   mkdir($destination_folder);
	$filename=$file["tmp_name"];
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
	$photo1=$newdestination.$fname;
	
	}
	
	if (is_uploaded_file($_FILES["photo2"][tmp_name]))//是否存在文件
     {
	 
    $file2 = $_FILES["photo2"];
	if($max_file_size < $file2["size"])//检查文件大小
	 {echo "<font color='blue'>文件太大！</font>";
	  exit;
	 }
	if(!in_array($file2["type"], $uptypes))//检查文件类型
	{echo "<font color='blue'>只能上传图像文件或Flash！</font>";exit;}
	$filename2=$file2["tmp_name"];
	$pinfo2=pathinfo($file2["name"]);
	$ftype2=$pinfo2[extension];
	$time2=time()+1;
	$destination2 = $destination_folder.$time2.".".$ftype2;
	if (file_exists($destination2) && $overwrite != true){ 
         echo "<font color='blue'>同名文件已经存在了！</a>";     
		 exit;}
    if(!move_uploaded_file ($filename2, $destination2)){  
       	 echo "<font color='blue'>移动文件出错！</a>";     exit;}
	$pinfo2=pathinfo($destination2);
	$fname2=$pinfo2[basename];
	$photo2=$newdestination.$fname2;
	}
	if (is_uploaded_file($_FILES["photo3"][tmp_name]))//是否存在文件
     {
	 
    $file3 = $_FILES["photo3"];
	if($max_file_size < $file3["size"])//检查文件大小
	 {echo "<font color='green'>文件太大！</font>";
	  exit;
	 }
	if(!in_array($file3["type"], $uptypes))//检查文件类型
	{echo "<font color='green'>只能上传图像文件或Flash！</font>";exit;}
	$filename3=$file3["tmp_name"];
	$pinfo3=pathinfo($file3["name"]);
	$ftype3=$pinfo3[extension];
	$time3=time()+2;
	$destination3 = $destination_folder.$time3.".".$ftype3;
	if (file_exists($destination3) && $overwrite != true){ 
         echo "<font color='green'>同名文件已经存在了！</a>";     
		 exit;}
    if(!move_uploaded_file ($filename3, $destination3)){  
       	 echo "<font color='green'>移动文件出错！</a>";     exit;}
	$pinfo3=pathinfo($destination3);
	$fname3=$pinfo3[basename];
	$photo3=$newdestination.$fname3;
	}
}


$sql="UPDATE `shop`.`goods` SET `type1` = '$type1',`type2` = '$type2',`type3` = '$type3',`photo1` = '$photo1',`photo2` = '$photo2',`photo3` = '$photo3',
      `title` = '$title',`content` = '$content',`place` = '$place',`condition` = '$condition',`price` = '$price',`pattern` = '$pattern',`tel` = '$tel',
       `name` = '$name',`type` = '$type' WHERE `goods`.`id` ='$id' ";

$rs=mysql_query($sql);
if($rs) {

   echo "<script>alert('修改发布成功！');window.location.href ='pub.php';</script>";
   
 
}else{
 
 echo "<script>alert('修改发布失败！');</script>";
}

?>