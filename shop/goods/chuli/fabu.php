<?php 

include "../../Connection/connect.php";



$type1=trim($_POST[type1]);
$type2=trim($_POST[type2]);
$type3=trim($_POST[type3]);
$title=trim($_POST[title]);
$content=trim($_POST[content1]);
$place=trim($_POST[place]);
$condition=trim($_POST[condition]);
$price=trim($_POST[price]);
$pattern=trim($_POST[pattern]);
$tel=trim($_POST[tel]);
$name=trim($_POST[name]);
$photo=trim($_POST[photo]);
$email=trim($_POST[email]);
$username=trim($_POST[username]);
$type=0;
$fabutime=trim($_POST[fabutime]);
$uptypes=array('image/jpg', //�ϴ��ļ������б�
'image/jpeg','image/png','image/pjpeg','image/gif','image/bmp','application/x-shockwave-flash','image/x-png');
$max_file_size=5000000;   //�ϴ��ļ���С����, ��λBYTE
$destination_folder="../../files/images/photos/"; //�ϴ��ļ�·��
$newdestination="files/images/photos/";
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (is_uploaded_file($_FILES["photo1"][tmp_name]))//�Ƿ�����ļ�
     {
	 
    $file = $_FILES["photo1"];
	if($max_file_size < $file["size"])//����ļ���С
	 {echo "<font color='red'>�ļ�̫��</font>";
	  exit;
	 }
	if(!in_array($file["type"], $uptypes))//����ļ�����
	{echo "<font color='red'>ֻ���ϴ�ͼ���ļ���Flash��</font>";exit;}
	if(!file_exists($destination_folder))
	   mkdir($destination_folder);
	$filename=$file["tmp_name"];
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
	$photo1=$newdestination.$fname;
	}
	
	if (is_uploaded_file($_FILES["photo2"][tmp_name]))//�Ƿ�����ļ�
     {
	 
    $file2 = $_FILES["photo2"];
	if($max_file_size < $file2["size"])//����ļ���С
	 {echo "<font color='blue'>�ļ�̫��</font>";
	  exit;
	 }
	if(!in_array($file2["type"], $uptypes))//����ļ�����
	{echo "<font color='blue'>ֻ���ϴ�ͼ���ļ���Flash��</font>";exit;}
	$filename2=$file2["tmp_name"];
	$pinfo2=pathinfo($file2["name"]);
	$ftype2=$pinfo2[extension];
	$time2=time()+1;
	$destination2 = $destination_folder.$time2.".".$ftype2;
	if (file_exists($destination2) && $overwrite != true){ 
         echo "<font color='blue'>ͬ���ļ��Ѿ������ˣ�</a>";     
		 exit;}
    if(!move_uploaded_file ($filename2, $destination2)){  
       	 echo "<font color='blue'>�ƶ��ļ�����</a>";     exit;}
	$pinfo2=pathinfo($destination2);
	$fname2=$pinfo2[basename];
	$photo2=$newdestination.$fname2;
	}
	if (is_uploaded_file($_FILES["photo3"][tmp_name]))//�Ƿ�����ļ�
     {
	 
    $file3 = $_FILES["photo3"];
	if($max_file_size < $file3["size"])//����ļ���С
	 {echo "<font color='green'>�ļ�̫��</font>";
	  exit;
	 }
	if(!in_array($file3["type"], $uptypes))//����ļ�����
	{echo "<font color='green'>ֻ���ϴ�ͼ���ļ���Flash��</font>";exit;}
	$filename3=$file3["tmp_name"];
	$pinfo3=pathinfo($file3["name"]);
	$ftype3=$pinfo3[extension];
	$time3=time()+2;
	$destination3 = $destination_folder.$time3.".".$ftype3;
	if (file_exists($destination3) && $overwrite != true){ 
         echo "<font color='green'>ͬ���ļ��Ѿ������ˣ�</a>";     
		 exit;}
    if(!move_uploaded_file ($filename3, $destination3)){  
       	 echo "<font color='green'>�ƶ��ļ�����</a>";     exit;}
	$pinfo3=pathinfo($destination3);
	$fname3=$pinfo3[basename];
	$photo3=$newdestination.$fname3;
	}
}




$sql="INSERT INTO `shop`.`goods` (`type1` ,`type2` ,`type3` ,`title` ,`content` ,`photo1` ,`photo2` ,`photo3` ,`place` ,`condition` ,`price`,`pattern`,`tel`,`name`,`type`,`photo`,`username`,`fabutime`,`email`)
       VALUES ('$type1','$type2','$type3','$title','$content','$photo1','$photo2','$photo3','$place','$condition','$price','$pattern','$tel','$name','$type','$photo','$username','$fabutime','$email')";
$rs=mysql_query($sql);

if($rs)
{
  
  echo "<script>alert('�����ɹ�!');
    history.back();
  </script>";
}else{
  echo "<script language='javascript'>alert('�Բ���,����ʧ��!');window.location.href='index.php';</script>"; 
  exit;
}

?>