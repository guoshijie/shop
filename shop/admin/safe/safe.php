<?php
  session_start();
  if( !isset( $_SESSION["admin"]) )
  { 
	echo "<SCRIPT language=javascript>alert(\"���ȵ�½��\");</SCRIPT>";
	echo "<script>window.location.href='../login.php';</script>";
	exit();
  }

?>