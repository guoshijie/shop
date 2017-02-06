<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>后台登陆</title>
</head>

<body><h1 align="center">后台登陆
</h1>
<form name="login" action="deallogin.php" method="post">
  <table align="center" border="0">
    <tr>
      <td><div align="center">用户名：</div></td>
      <td><label>
        <input type="text" name="username"/>
      </label></td>
    </tr>
    <tr>
      <td><div align="center">密码：</div></td>
      <td><label>
        <input type="password" name="password"/>
      </label></td>
     
    </tr>
    <tr>
      <td align="center" colspan="2"> <input  type="submit" value="登录">&nbsp;
      <input type="reset"  value="重置"> &nbsp;</td>
    </tr>  
  </table>
  <div align="center"></div>
</form>
</body>
</html>