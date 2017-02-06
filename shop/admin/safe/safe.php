<?php
  session_start();
  if( !isset( $_SESSION["admin"]) )
  { 
	echo "<SCRIPT language=javascript>alert(\"гКох╣гб╫ё║\");</SCRIPT>";
	echo "<script>window.location.href='../login.php';</script>";
	exit();
  }

?>