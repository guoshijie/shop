<?php
@session_start();
include "../Connection/connect.php";

if (!$_SESSION['name'])
{
	echo "<script language=javascript>alert('���ȵ�¼');location.href='login.php';</script>";
}

$title = $_POST['title'];
$content = $_POST['content'];
$time = $_POST['time'];
$name = $_POST['name'];
$photo = $_POST['photo'];
if(!empty($title)){
	
	if(mysqli_connect_errno()){
		echo "db connect failed <br>\n";
		echo mysqli_connect_error();
		exit;
	}

	$sql="INSERT INTO message (title,content,name,time,photo)VALUES";
	$sql .="('$title','$content','$name','$time','$photo')";
	$rs =  mysql_query($sql);
	if(!$rs){
		
		echo '���ݼ�¼����ʧ�ܣ�';
		exit;
	}
	else{
		echo $db->error;
	}

	echo "<script language=javascript> alert('��ϲ���Գɹ���');location.href='message.php';</script>";
	 
	
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����ϵͳ</title>
<link href="../files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="../files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script language='javascript'>
        <!--
           function doCheck()
           {
               var title = document.form1.title.value;
               var content = document.form1.content.value;
               
               
               if(title ==''){
               	   alert('���������ű��⣡'); return false;
               	}
               if(content ==''){
               	   alert('�������������ݣ�'); return false;
               	}
              
               	
               	return true;
           	
           }
        -->	
</script>

<style type="text/css">
#ct{
	width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 138px;
	margin-bottom: auto;
	background-color: #FFF;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	background-image: url(images/pattern.png);	
}
.ys02 {
	text-align: center;
	font-size: 25px;
	font-family: "΢���ź�";
	font-weight: normal;
}
#mg{
	width: 1100px;
	height: 110px;
}
#main #ct #fabu #fabu1 table {
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: solid;
	border-bottom-color: #000;
	border-left-color: #000;
}
#main #ct #mg table {
	border-top-width: thin;
	border-left-width: thin;
	border-top-style: none;
	border-left-style: solid;
	border-top-color: #000;
	border-left-color: #000;
}
#main #ct #mg table tr td table tr td {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#main #ct #mg table tr td table {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}

#title {
	height: 25px;
}
#neirong {
	height: 120px;
}
#main #ct #fabu #fabu1 table tr td #nr {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#main #ct #fabu #fabu1 table tr td #nr tr td {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#main #ct #fabu #fabu1 table tr td {
	border-top-width: thin;
	border-right-width: thin;
	border-bottom-width: thin;
	border-left-width: thin;
	border-top-style: solid;
	border-right-style: solid;
	border-top-color: #000;
	border-right-color: #000;
}
#main #ct #mg table tr td {
	border-right-width: thin;
	border-bottom-width: thin;
	border-right-style: solid;
	border-bottom-style: solid;
	border-right-color: #000;
	border-bottom-color: #000;
}
#ct1{
	width: 1095px;
	height: 30px;
	background-color: #CCF;
	font-family: "΢���ź�";
	font-size: 21px;
	padding-left:5px;
	border-bottom-width: thin;
	border-bottom-style: solid;
	border-bottom-color: #000;
}
#fabu{
	width: 1100px;
	height: 230px;
	font-family: "΢���ź�";
	font-size: 21px;
	padding-left:0px;
}

#fenye{
	width: 1100px;
	height: 30px;
	background-color: #CCF;
	font-family: "΢���ź�";
	font-size: 21px;
	text-align: center;	
}
#fabu1{
	width: 1100px;
	height: 200px;
	font-family: "΢���ź�";
	font-size: 21px;
	padding-left:0px;
}
</style>
</head>

<body>
<div id="main">
   <header>
      <div id="logo" style="float:left">
      
      </div>
       <div id="logo1" style="float:right; color: #FFF;">
        <table width="150" height="90" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='login.php'>��¼</a>&nbsp;<a href='register.php'>ע��</a>";} else echo $_SESSION['name']."�ѵ�¼" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='quit.php'>[�˳�]</a>" ?></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
        
     </div>
  </header>
    <nav>
       <table width="100%" height="41" border="0" cellpadding="0" cellspacing="0">
         <tr class="ys02">
          <td align="center" valign="middle"><a href="../index.php">��վ��ҳ</a></td>
          <td align="center"><a href="../sale.php">������Ϣ</a></td>
          <td align="center"><a href="../buy.php">����Ϣ</a></td>
          <td align="center"><a href="../pubgoods.php">��ѷ���</a></td>
          <td align="center"><a href="../mypub.php">�ҵķ���</a></td>
          <td align="center"><a href="message.php">����ϵͳ</a></td>
        </tr>
    </table> 
  </nav>
  <div id="ct">
     <div id="ct1">���԰�</div>
  <?php
       $pagesize=4;
       $rs=mysql_query("select count(*) from `message`");
       $myrow=mysql_fetch_array($rs);
       $numrows=$myrow[0]; //����ܼ�¼��;
       $pages=intval($numrows/$pagesize);
       if($numrows%$pagesize) $pages++;//����ҳ����;
       if(isset($_GET['page'])){
       	$page=intval($_GET['page']);//����ҳ��
       }
       else{
       	$page=1;//����ҳ��
       }
       $offset=$pagesize*($page - 1);//�����¼ƫ����
       $sql="select * from `message`  order by id desc limit $offset,$pagesize ";
        
       $result=mysql_query($sql);
       while($arrn=mysql_fetch_array($result))
       {
       	echo "  <div id='mg'>
         <table width='1100' height='110' border='0' cellspacing='0' cellpadding='0'>
           <tr>
              <td width='110' rowspan='2' align='center' valign='middle'><img src='../".$arrn[photo]."' width='105' height='107' /></td>
              <td height='15' align='left'>
                  <table height='15' width='990' border='0' cellspacing='0' cellpadding='0'>
                     <tr height='15'>
                         <td width='71' align='center'>�û�����</td>
                         <td width='245'>".$arrn[name]."</td>
                         <td width='118' align='center'>����ʱ�䣺</td>
                       <td width='473'>".$arrn[time]."</td>
                         <td width='83' align='center' valign='middle'>".$arrn[id]."¥</td>
                     </tr>
                  </table>
              </td>
           </tr>
          <tr>
              <td valign='top'>&nbsp;&nbsp;".$arrn[content]."</td>
          </tr>
        </table>
    </div> ";
       }
   ?>
    
    
<div id="fabu">
        <div id="fenye">
             <?php 
                       $first=1;
                       $pre=$page-1;
                       $next=$page+1;
                       $last=$pages;
     
                      echo "��".$pages."ҳ(".$page."/".$pages.")&nbsp;";
	                  if($page>1){
	                  echo "<a href='message.php?page=".$first."'>��ҳ</a>";
	  	              echo "<a href='message.php?page=".$pre."'>&nbsp;��һҳ</a>";
	                  }
	  
	                 for($i=1;$i<$page;$i++)
	  	             echo "<a href='message.php?page=".$i."'>[".$i."]</a>";
	                 echo "<font color='red'>[".$page."]</font>";
	                 for($i=$page+1;$i<=$pages;$i++)
	  	            echo "<a href='message.php?page=".$i."'>[".$i."]</a>";  
	  
	                if($page<$pages){
	  	                   echo "<a href='message.php?page=".$next."'>��һҳ</a>";
	  	                   echo "<a href='message.php?page=".$last."'>&nbsp;βҳ</a>";
	                }
	  
	
	?>
        
        </div>
      <div id="fabu1">
         <form id="form1" name="form1" action="" method="post" onsubmit="return doCheck();">
         <table width="1100" height="200" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="30" colspan="2">�������ԣ�</td>
          </tr>
          <tr>
            <td width="120" height="40" align="right">���⣺</td>
            <td>
              <input type="text" name="title" id="title" />
              <input name="time" type="hidden" id="time" value="<?php date_default_timezone_set("PRC"); echo date("Y-m-d H:i:s");?>" />
              <input name="name" type="hidden" id="name" value="<?php echo $_SESSION['name']?>" />
             <?php 
                      $username=$_SESSION['name'];
                      $sqll="select `photo` from user where username='".$username."'";
                      $resultt=mysql_query($sqll);
                      $arrnn=mysql_fetch_array($resultt);
             
             ?>
              <input name="photo" type="hidden"  id="photo" value="<?php echo $arrnn['photo']?>" />
              </td>
          </td>
         </tr>
          <tr>
            <td align="right" valign="middle">���ݣ�</td>
            <td>
            
            <table width="500" border="0" cellspacing="0" cellpadding="0" id="nr">
              <tr>
                <td width="350" height="30" rowspan="3"><textarea name="content" cols="45" rows="5"></textarea></td>
                <td height="60">&nbsp;</td>
              </tr>
              <tr>
                <td height="30" align="center"><input type="reset" name="reset" id="reset" value="��������" /></td>
              </tr>
              <tr>
                <td height="30" align="center"><input type="submit" name="submit" id="submit" value="��������" /></td>
              </tr>
            </table></td>
         </tr>
      </table></form>
      </div>
      
     </div>
      
  </div>
  <div id="wlink">
     <table width="1100" height="40" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="169" align="center">�������ӣ�</td>
         <td width="206" align="center"><a href="http://www.nuc.edu.cn/">�б���ѧ</a></td>
         <td width="201" align="center"><a href="http://www.ncit.edu.cn/jwc/">�б���ѧ����</a></td>
         <td width="212" align="center"><a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html">��������ѯ</a></td>
         <td width="163" align="center"><a href="http://tieba.baidu.com/f?kw=%BA%AE%C8%AA&amp;fr=ala0&amp;pstbala=1">��Ȫ��</a></td>
         <td width="135" align="center"><a href="http://www.baidu.com/">�ٶ�</a></td>
      </tr>
    </table>

  </div>

  <footer>
  <table width="800" height="30" border="0" align="center" valign="center" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="center">Copyright &copy; J-steven | guoshijie_hi@yeah.net</td>
  </tr>
  </table>

  </footer>

</div>

</body>
</html>
