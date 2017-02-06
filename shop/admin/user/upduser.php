<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改用户</title>
</head>
<body>
<center>
<h1>修改用户</h1>
<?php 
     date_default_timezone_set("prc");
     $id=$_GET["id"];

     include "../../config/db_mysql.php";
     $sql="select * from user where id='".$id."'";
     $result=mysql_query($sql);
	 $arrn=mysql_fetch_array($result);
?>
<form id="form1" name="form1" method="post" action="dealupduser.php" onSubmit="return checkinput(this)">
  <table width="247" height="132" border="0">
    <tr>
      <th width="68" height="41" scope="row">用户名:</th>
      <th width="169" align="left" scope="col">
      <input name="username" type="text" id="username" size="24" value="<?php  echo $arrn["username"]; ?>"/></th>
	  <td><input name="id" type="hidden" id="id" value="<?php echo $arrn["id"];?>"/></td>
    </tr>
    <tr>
      <th width="68" height="41" scope="row">密&nbsp;&nbsp;码:</th>
      <td align="left">
      <input name="userpwd" type="password" id="userpwd" size="24"/></td>
    </tr>
    <tr>
      <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="修改" />
        &nbsp;&nbsp;&nbsp;
      <input type="button" name="button2" id="button2" value="取消" onclick="window.location.href='dealuser.php'"/></th>
    </tr>
  </table>
</form></center>
</body>
</html>

