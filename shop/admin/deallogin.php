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
      //��¼�ɹ�
      $_SESSION["admin"]=$name;
      redirect("main.php","��¼�ɹ������Ժ�...");
    }
    else
    {
      //��¼ʧ��
      redirect("login.php","�û��������벻ƥ�䣬����ϸ�˶Ժ����µ�¼...");
    }

?>
