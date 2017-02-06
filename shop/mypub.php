<?php
@session_start();
include "Connection/connect.php";

 if (!$_SESSION['name'])
 {
echo "<script language=javascript>alert('请先登录');location.href='goods/login.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我的发布</title>
<link href="files/css/shop1.css" rel="stylesheet" type="text/css" />


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
	text-align:left;
	font-size: 24px;
	height: 500px;
}

#main #ct  table tr td {
	border-bottom-width: thin;
	border-right-width: thin;
	border-bottom-style: solid;
	border-right-style: solid;
	border-bottom-color: #DDD;
	border-right-color: #DDD;
	font-size: 24px;
	font-family: "微软雅黑";
}



.zt1 {
	font-size: 18px;
	font-style: normal;
	color: #000;
	font-family: "幼圆";
}
.zt2 {
	font-family: "微软雅黑";
	font-size: 24px;
	list-style-type:none;
}
.zt3 {
	font-family: "微软雅黑";
	font-size: 18px;
	list-style-type:none;
}
#zt4 {
	font-family: "微软雅黑";
	font-size: 9px;
	line-height: 40px;
	color: #000;
	padding-left: 10px;
}
#touxiang1 {
	height: 170px;
}
#name {
	font-size: 18px;
	color: #00F;
	text-align: center;
}


#touxiang {
	float: left;
	height: 200px;
	width: 200px;
	border: 1px solid #CCC;
}
#caidan {
	float: left;
	height: 280px;
	width: 200px;
	border: 1px solid #CCC;
}
#kongbai {
	height: 8px;
	width: 200px;
	float: left;
}

#xinxi {
	float: right;
	height: 500px;
	width: 890px;
	border: 1px solid #CCC;
	text-align: center;
}
#apDiv1 {
	position:absolute;
	left:142px;
	top:168px;
	width:170px;
	height:135px;
	z-index:1;
	color: #0F0;
	background-color: #D6D6D6;
	visibility: visible;
}
</style>
</head>

<body>

<?php 
                      $username=$_SESSION['name'];
                      $sqll="select * from user where username='".$username."'";
                      $resultt=mysql_query($sqll);
                      $arrnn=mysql_fetch_array($resultt);
?>
<div id="apDiv1"><img src="<?php echo $arrnn['photo']?>" width="170" height="135" /></div>
<div id="main">
<header>
      <div id="logo" style="float:left">
      
      </div>
    <div id="logo1" style="float:right; color: #FFF;">
        <table width="150" height="90" border="0" cellspacing="0" cellpadding="0">
         <tr>
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='goods/login.php'>登录</a>&nbsp;<a href='goods/register.php'>注册</a>";} else echo $_SESSION['name']."已登录" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='goods/quit.php'>[退出]</a>" ?></td>
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
          <td align="center" ><a href="index.php">网站首页</a></td>
          <td align="center"><a href="sale.php">出售信息</a></td>
          <td align="center"><a href="buy.php">求购信息</a></td>
          <td align="center"><a href="pubgoods.php">免费发布</a></td>
          <td align="center"><a href="mypub.php">我的发布</a></td>
          <td align="center"><a href="goods/message.php">留言系统</a></td>
        </tr>
    </table> 
  </nav>
  <div id="ct">
    
    <div id="touxiang">
      <div id="touxiang1"></div>
      <div id="name"><?php echo "欢迎您:".$_SESSION['name']?></div>
    </div> 
    <div id="xinxi">
	<script language="javascript" type="text/javascript"> 
function dyniframesize(down) { 
var pTar = null; 
if (document.getElementById){ 
pTar = document.getElementById(down); 
} 
else{ 
eval('pTar = ' + down + ';'); 
} 
if (pTar && !window.opera){ 
//begin resizing iframe 
pTar.style.display="block" 
if (pTar.contentDocument && pTar.contentDocument.body.offsetHeight){ 
//ns6 syntax 
pTar.height = pTar.contentDocument.body.offsetHeight +20; 
pTar.width = pTar.contentDocument.body.scrollWidth+20; 
} 
else if (pTar.Document && pTar.Document.body.scrollHeight){ 
//ie5+ syntax 
pTar.height = pTar.Document.body.scrollHeight; 
pTar.width = pTar.Document.body.scrollWidth; 
} 
} 
} 
</script> 

      <iframe id="iframe1" src="goods/chuli/mypub/pub.php" name="main" width="886" height="492" marginwidth="10" marginheight="10" align="right" frameborder="0"  scrolling="no"onload="javascript:dyniframesize('ifm');" width="100%" >
      
      </iframe>
    
    </div>
    <div id="kongbai"></div>
    <div id="caidan">
<li class="zt2">
                   <table width="200" height="30" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td height="30" align="center" valign="top" bgcolor="#E9E9E9"><a href="goods/chuli/mypub/pub.php?name=$_SESSION['name']" target="main">我的发布</a></td>
                     </tr>
                   </table>
      </li>
         <li class="zt3">
<table width="200" height="70" border="0" cellspacing="0" cellpadding="0" >
                     <tr>
                       <td height="30" align="right" valign="top" ><a href="goods/chuli/mypub/have.php" target="main">已批准</a></td>
                     </tr>
                     <tr>
                       <td height="30" align="right" valign="top" ><a href="goods/chuli/mypub/no.php" target="main">未批准</a></td>
                     </tr>
                   </table>
         </li>
    </div>
  </div>
  <div id="wlink"></div>

  <footer>
  <table width="800" height="30" border="0" align="center" valign="center" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle">Copyright &copy; J-steven | guoshijie_hi@yeah.net</td>
  </tr>
  </table>

  </footer>

</div>
</body>
</html>
