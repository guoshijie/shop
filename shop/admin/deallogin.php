<?php
    session_start();
    include "../config/db_mysql.php";
    include "../config/function.php";
    $name=$_POST[username];
    $pass=$_POST[password];

    $sql="select * from `user` where username='$name' and truepwd='$pass'";

    $result=mysql_query($sql);

    $num=mysql_num_rows($result);

    if($num>=1)
    {
      //登录成功
      $_SESSION["admin"]=$name;
      redirect("main.php","登录成功，请稍后...");
    }
    else
    {
      //登录失败
      redirect("login.php","用户名与密码不匹配，请仔细核对后重新登录...");
    }

?>
