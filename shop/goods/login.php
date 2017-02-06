<?php 
@session_start();
include "../Connection/connect.php";

$name = $_POST['username'];
$password = $_POST['password'];

$db = @new mysqli("127.0.0.1:3307","root","","shop");
if(mysqli_connect_errno()){
	echo "db connect failed <br>\n";
	echo mysqli_connect_error();
	exit;
}
 
$sql="SELECT * FROM `user`  WHERE username = '$name' ";

$result=mysql_query($sql);
$arrn=mysql_fetch_array($result);
$url=$_SERVER['HTTP_REFERER'];
if(!$result){
   		$db->close();
   		echo "<script language=javascript> alert('username error'); history.back();</script>";
   		exit;
   	}
   	else{
   		echo $db->error;
   	}
   	if($arrn["truepwd"]!=$password&&$password!="")
   	{
   		echo "<script language=javascript> alert('username or pwd error');  history.back();</script>";
     	exit;
   	}
   	else if($arrn["truepwd"]==$password&&$password!="")
   	{
        $_SESSION['name'] = $name;
        echo "<script language=javascript>location.href='../index.php';</script>";
   	}

   
   	 
   	$db->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>中北二手交易平台</title>
<link href="../files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="../files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script type="text/javascript">
function check() 
{ 
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;
    if(name==""){
         alert('用户名不许为空');
	       return false;
	       }
    else if(password==""){
       alert('密码不许为空');
	       return false;
    }
}
</script>
<style type="text/css">
#ct{
	width: 1100px;
	height: 500px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 138px;
	margin-bottom: auto;
	background-color: #E9E9E9;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	position:relative;
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
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='login.php'>登录</a>&nbsp;<a href='register.php'>注册</a>";} else echo $_SESSION['name']."已登录" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='quit.php'>[退出]</a>" ?></td>
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
          <td align="center" valign="middle"><a href="../index.php">网站首页</a></td>
          <td align="center"><a href="../sale.php">出售信息</a></td>
          <td align="center"><a href="../buy.php">求购信息</a></td>
          <td align="center"><a href="../pubgoods.php">免费发布</a></td>
          <td align="center"><a href="../mypub.php">我的发布</a></td>
          <td align="center"><a href="message.php">留言系统</a></td>
        </tr>
    </table> 
  </nav>
  <div id="ct">
         <div id="loginDiv" >
   <form id="form1" name="form1" action="login.php" method="post" onsubmit="return check();" >
   <table width="400" height="250" border="0" cellspacing="0" cellpadding="0">
      <tr>
         <td height="30" colspan="2" align="right" valign="top" bgcolor="#1F53A0" class="close"><a href="javascript:hideLogin()"/></a></td>
      </tr>
      <tr>
         <td height="55" colspan="2" align="center" valign="middle" bgcolor="#1F53A0" class="logn">欢 迎 登 录</td>
      </tr>
      <tr>
         <td width="37%" height="45" align="right" valign="bottom"> 用户名：</td>
        <td width="63%" align="left" valign="bottom"><input type="text" name="username" id="username" /></td>
     </tr>
     <tr>
         <td height="40" align="right">密码：&nbsp;&nbsp;</td>
         <td height="50" align="left"><input type="password" name="password" id="password" /></td>
     </tr>
     <tr>
         <td height="40" colspan="2" align="center">
             <table width="300" border="0" cellspacing="0" cellpadding="0">
                <tr>
                   <td width="155" align="right"><input type="submit" name="submit" id="submit" value="登录" /></td>
                   <td width="32">&nbsp;</td>
                  <td width="113" align="left"><input type="reset" name="reset" id="reset" value="重置" /></td>
               </tr>
             </table></td>
      </tr>
    <tr height="30">
    <td colspan="2" align="right" class="zhuce"><a href="register.php">注册新帐号</a>|<a href="message.php">意见反馈</a></td>
  </tr>
</table>
</form>
</div>
<div id="fade" class="black_overlay"> </div>
      
  </div>
  <div id="wlink">
     <table width="1100" height="40" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="169" align="center">友情链接：</td>
         <td width="206" align="center"><a href="http://www.nuc.edu.cn/">中北大学</a></td>
         <td width="201" align="center"><a href="http://www.ncit.edu.cn/jwc/">中北大学教务处</a></td>
         <td width="212" align="center"><a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html">本科生查询</a></td>
         <td width="163" align="center"><a href="http://tieba.baidu.com/f?kw=%BA%AE%C8%AA&amp;fr=ala0&amp;pstbala=1">寒泉吧</a></td>
         <td width="135" align="center"><a href="http://www.baidu.com/">百度</a></td>
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
