<?php
@session_start();
include "../Connection/connect.php";
$id=$_GET["id"];
$sql="select * from `goods` where id=$id";
$result=mysql_query($sql);
 $arrn=mysql_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>����Ϣ</title>
<link href="../files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="../files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<style type="text/css">
#ct{
	width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 138px;
	margin-bottom: auto;
	background-color: #000;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	font-size: 17px;
	font-family: "������";
}
#body{
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
#left{
	width:300px;
	height:280px;
	background-color: #FFF;
	float:left;
	padding:5px;
}
#center{
	margin-left:310px;
	margin-top:0px;
	margin-right:200px;
	height:250px;
	background-color: #FFF;
	padding:10px;
}
#right{
	width:238px;
	height:290px;
	background-color: #FFF;
	float: right;
	padding:0px;
	margin-right:0px;
	margin-top:5px;
	border: thin solid #CCC;
	border-right-style: none;
	font-size: 15px;
}
#top{
	width:1100px;
	height:300px;
	background-color: #FFF;
}
#bottom{
	width:1100px;
	background-color: #FFF;
	height: auto;
}
img{
	border: thin solid #CCC;
}
.ys02 {
	text-align: center;
	font-size: 25px;
	font-family: "΢���ź�";
	font-weight: normal;
}

span {
	float:left; 
	display:block;
	width:219px; 
	height:250px;
	text-align: center;
	padding-top:20px;
	padding-bottom:20px;
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
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='goods/login.php'>��¼</a>&nbsp;<a href='goods/register.php'>ע��</a>";} else echo $_SESSION['name']."�ѵ�¼" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='goods/quit.php'>[�˳�]</a>" ?></td>
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
         <div id="top">
            <div id="left"><img src="<?php echo"../$arrn[photo1]";?>"  width="295" height="280"></div>
            <div id="right">
                        <table border="0" width="100%" height="290" cellpadding="3" cellspacing="0">
                                 <tr>
                                      <td height="30" colspan="3" bgcolor="#E9E9E9">��������Ϣ</td>   
                                 </tr> 
                                 <tr>
                                      <td height="150" colspan="2" align="center" valign="middle"><img src="<?php echo"../$arrn[photo]";?>"  width="148" height="136"></td>   
                                 </tr>
                                 <tr>
                                      <td height="20" width="70">���ƣ�</td> 
                                      <td colspan="2"><?php echo"$arrn[username]";?></td>  
                                 </tr>
                                 <tr>
                                      <td height="20">tel��</td> 
                                      <td height=""><?php echo"$arrn[tel]";?></td>  
                                 </tr>
                                 <tr>
                                      <td height="20">Email��</td> 
                                      <td height=""><?php echo"$arrn[email]";?></td>  
                                 </tr>
                            </table>
            </div>
            <div id="center">
                   <table border="0" width="530" height="275">
                            <tr>
                                   <td height="40" colspan="2"><?php echo"$arrn[title]";?></td>   
                            </tr>
                            <tr>
                                   <td height="30" width="50">��  ��:</td>
                                   <td><font color=red size=5 face=����><?php echo"$arrn[price]";?></font>Ԫ</td>
                            </tr>
                            <tr>
                                   <td height="30" width="90">��������:</td>
                                   <td><?php echo"$arrn[fabutime]";?></td>
                            </tr>
                            <tr>
                                   <td height="30" width="90">��Ʒ����:</td>
                                   <td><?php echo"$arrn[type3]";?></td>
                            </tr>
                            <tr>
                                  <td height="30" width="90">���׷�ʽ:</td>
                                   <td><?php echo"$arrn[pattern]";?></td>
                            </tr>
                            <tr>
                                   <td height="30" width="90">������:</td>
                                   <td><?php echo"$arrn[username]";?></td>
                            </tr>
                            <tr>
                                   <td height="30" width="90">��ַ:</td>
                                   <td><?php echo"$arrn[place]";?></td>
                            </tr>
                   </table>
            </div>
         </div>
         <div id="bottom">
                   <table border="0" width="1100">
                           <tr height="30">
                                      <td bgcolor="#E9E9E9">��Ʒ��ϸ��Ϣ</td>
                           </tr>
   
                           <tr>
                                      <td>
                                      <a href="<?php echo"../$arrn[photo1]";?>"><img src="<?php echo"../$arrn[photo1]";?>" width="200"height="200"></a>
                                      <a href="<?php echo"../$arrn[photo2]";?>"><img src="<?php echo"../$arrn[photo2]";?>" width="200"height="200"></a>
                                      <a href="<?php echo"../$arrn[photo3]";?>"><img src="<?php echo"../$arrn[photo3]";?>" width="200"height="200"></a></td>
                           </tr>
                   </table>
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
