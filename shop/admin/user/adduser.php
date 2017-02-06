<?php
 include"../safe/safe.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>添加管理员</title>
</head>
<body><center>
<h1>添加管理员</h1>
<form id="form1" name="form1" method="post" action="dealadduser.php">
  <table width="308" height="132" border="0">
    <tr>
      <th width="68" height="41" scope="row">用户:</th>
      <th width="169" align="left" scope="col">
      <input type="text" name="username" id="username" /></th>
    </tr>
    <tr>
      <th width="68" height="41" scope="row">密码:</th>
      <td align="left">
      <input type="password" name="userpwd" id="userpwd" /></td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="添加">
       &nbsp;&nbsp;&nbsp;
      <input type="reset" name="button2" id="button2" value="重置" /></th>
      <th scope="row">&nbsp;</th>
    </tr>
  </table>
</form></center>
</body>
</html>

