<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>国内新闻</title>
<style type="text/css">
#fenye {
	position:absolute;
	left:50px;
	top:450px;
	width:702px;
	height:52px;
	z-index:2;
	visibility: visible;
	font-family: "微软雅黑";
	font-style: normal;
}

#fenye table .zt1 td {
	font-size: 24px;

}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
.zt2 {
	font-size: 20px;
	font-family: "微软雅黑";
}
</style>
</head>

<body>

<?php
@session_start();
include "../../../connection/connect.php";
 if (!$_SESSION['name'])
 {
echo "<script language=javascript>alert('请先登录');location.href='../../../goods/login.php';</script>";
}
?>

<div id="fenye">
<table width="830">
<tr class="zt1">
<td colspan='2' align='center'>
<?php
if(isset($_GET['ns'])){
	$ns=intval($_GET['ns']);//设置页数
}
else{
	$ns=0;//设置页数
}

$pagesize=8;
$username=$_SESSION['name'];
$sql="select count(*) from `goods` where username='".$username."'&&type=2";
$rs=mysql_query($sql);
$myrow=mysql_fetch_array($rs);
$numrows=$myrow[0]; //算出总记录数;
$pages=intval($numrows/$pagesize);
if($numrows%$pagesize) $pages++;//计算页总数;
if(isset($_GET['page'])){
	$page=intval($_GET['page']);//设置页数
}
else{
	$page=1;//设置页数
}
$offset=$pagesize*($page - 1);//计算记录偏移量


    $first=1;
    $pre=$page-1;
    $next=$page+1;
    $last=$pages;
    $newstype = $_POST['newstype'];

    echo "共".$pages."页(".$page."/".$pages.")&nbsp;";
	  if($page>1){
	  	echo "<a href='no.php?page=".$first."&ns=".$ns."'>首页</a>";
	  	echo "<a href='no.php?page=".$pre."&ns=".$ns."'>&nbsp;上一页</a>";
	  }
	  
	  for($i=1;$i<$page;$i++)
	  	  echo "<a href='no.php?page=".$i."&ns=".$ns."'>[".$i."]</a>";
	      echo "<font color='red'>[".$page."]</font>";
	  for($i=$page+1;$i<=$pages;$i++)
	  	 echo "<a href='no.php?page=".$i."&ns=".$ns."'>[".$i."]</a>";  
	  
	  if($page<$pages){
	  	echo "<a href='no.php?page=".$next."&ns=".$ns."'>下一页</a>";
	  	echo "<a href='no.php?page=".$last."&ns=".$ns."'>&nbsp;尾页</a>";
	  }
	  
	
	?></td>
      </tr>

</table>
</div>
<table width="100%" height="81" border="0" cellspacing="20" class='zt2' >
   

     
        <?php
		    function my_substr($str, $str_len, $str_append = '……')
             {
              if (strlen($str) > $str_len) {
              //$str_len -= strlen($str_append);
              for ($i = $str_len, $j = 0; $i >= 0, ord($str[$i - 1]) > 128; $i--, $j++);;
              $str = ($j % 2 != 0)? substr($str, 0, $str_len - 1).' ': substr($str, 0, $str_len);
              $str .= $str_append;
              } //end if
       return $str;
     }

           $sql="select * from `goods` where username='".$username."'&&type=2 order by fabutime desc limit $offset,$pagesize ";
		   $result=mysql_query($sql);
                  while($arrn=mysql_fetch_array($result))
				   {
				   	       
							if(strlen($arrn[title])>32){
	                           $s=my_substr($arrn[title],32);
	                        }else{
	                           $s=$arrn[title];
	                        }  
				        	if(strlen($arrn[fabutime])>10){
				        		$time=substr($arrn[fabutime],0,10);
				        	}else{
				   		         $time=$arrn[fabutime];
				        	}
                            echo "<tr>						      
                                  <td width='500' align='left'><a href='update_pub.php?id=$arrn[id]' title='$arrn[title]'><font color='navy'>$s</font></a></td>
                                  <td width='150' align='center'>$time</td> 
								  <td width='150' align='center' ><a href='update_pub.php?id=$arrn[id]'><font color='blue'>[修改]</font></a>&nbsp;
                                  <a href='delete_pub.php?id=$arrn[id]'><font color='red'>[删除]</font></a></td>
                                  </tr>";
						   
	                  
                   }
		?>
    
   
 </table>

</body>
</html>