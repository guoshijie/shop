<?php
 include"../safe/safe.php"
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<script language="javascript" src="js/reg.js"></script>
<style type="text/css">
#fenye {
	position:absolute;
	left:178px;
	top:95px;
	width:702px;
	height:52px;
	z-index:2;
	font-family: "΢���ź�";
	font-style: normal;
	visibility: visible;
}
#fenye table .zt1 td {
	font-size: 20px;
}
a:link {
	text-decoration: none;
}
#form1 #zt2 tr td{
	border: thin solid #CCC;
	border-top-style: solid;
	border-right-style: solid;
	border-top-color: #CCC;
	border-right-color: #CCC;
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
	font-size: 17px;
	font-family: "΢���ź�";
	border: thin solid #999;
}

</style>
</head>

<body>
<h1 align="center">��Ʒ�б�
</h1>
<hr />
<br><br>
<div id="fenye">
<table width="830">
<tr class="zt1">
<td colspan='2' align='center'>
<?php
if(isset($_GET['ns'])){
	$ns=intval($_GET['ns']);//����ҳ��
}
else{
	$ns=0;//����ҳ��
}

$pagesize=6;
$username=$_SESSION['name'];
include "../../connection/connect.php";
$sql="select count(*) from `goods` where type=0";
$rs=mysql_query($sql);
$myrow=mysql_fetch_array($rs);
$numrows=$myrow[0]; //����ܼ�¼��;
$pages=intval($numrows/$pagesize);
if($numrows%$pagesize) $pages++;//����ҳ����;
if(isset($_GET['page'])){
	$page=intval($_GET['page']);//����ҳ��
}
else{
	$page=1;//����ҳ��
}
$offset=$pagesize*($page - 1);//�����¼ƫ����


    $first=1;
    $pre=$page-1;
    $next=$page+1;
    $last=$pages;
    $newstype = $_POST['newstype'];

    echo "��".$pages."ҳ(".$page."/".$pages.")&nbsp;";
	  if($page>1){
	  	echo "<a href='listgoods.php?page=".$first."&ns=".$ns."'>��ҳ</a>";
	  	echo "&nbsp;<a href='listgoods.php?page=".$pre."&ns=".$ns."'>��һҳ</a>";
	  }
	  
	  for($i=1;$i<$page;$i++)
	  	  echo "<a href='listgoods.php?page=".$i."&ns=".$ns."'>[".$i."]</a>";
	      echo "<font color='red'>[".$page."]</font>";
	  for($i=$page+1;$i<=$pages;$i++)
	  	 echo "<a href='listgoods.php?page=".$i."&ns=".$ns."'>[".$i."]</a>";  
	  
	  if($page<$pages){
	  	echo "<a href='listgoods.php?page=".$next."&ns=".$ns."'>��һҳ</a>";
	  	echo "<a href='listgoods.php?page=".$last."&ns=".$ns."'>&nbsp;βҳ</a>";
	  }
	  
	
	?></td>
    </tr>

</table>
</div>
<div align="center">
<form method="post" name="form1" id="form1" action="check.php">
  <table width="848" height="28" border="0" cellspacing="0" class='zt2'id="zt2">
    <tr> 
	  <td width=40 align=center>���</td>
      <td width=40 align=center>���</td>
      <td width=150 align=center>����</td>
      <td width=250 align=center>����</td>
      <td width=150 align=center>ʱ��</td>
      
      <td width=50 align=center></td>
      <td width=50 align=center></td>
      
    </tr>
    <?php
		    function my_substr($str, $str_len, $str_append = '����')
             {
              if (strlen($str) > $str_len) {
              //$str_len -= strlen($str_append);
              for ($i = $str_len, $j = 0; $i >= 0, ord($str[$i - 1]) > 128; $i--, $j++);;
              $str = ($j % 2 != 0)? substr($str, 0, $str_len - 1).' ': substr($str, 0, $str_len);
              $str .= $str_append;
              } //end if
       return $str;
     }
	 
   $result=mysql_query("select * from goods where type=0 order by fabutime asc limit $offset,$pagesize"); //����ǰ��ļ������ʼ�ļ�¼�ͼ�¼��
    
     while($arrn=mysql_fetch_array($result))
     {  
	    if(strlen($arrn[title])>10){
	        $t=my_substr($arrn[title],10);
	    }else{
	        $t=$arrn[title];
	    }  
		if(strlen($arrn[content])>50){
	        $c=my_substr($arrn[content],50);
	    }else{
	        $c=$arrn[content];
	    }  
				        	
        echo "<tr>
		        <td align=center><input name='conn_id[]' type='checkbox' id='conn_id[]' value='$arrn[id]' /></td>
                <td align=center>$arrn[id]</td>
                <td align=left><a title='$arrn[title]'>$t</a></td>
                <td align=left><a content='$arrn[content]'>$c</a></td>
                <td align=center>$arrn[fabutime]</td>
                
                <td align=center><a href='check.php?id=$arrn[id]'><font color='blue'>��׼</font></a></td>
                <td align=center><a href='check2.php?id=$arrn[id]'><font color='red'>��ֹ</font></a></td>
                
              </tr>";  
     }

     ?> 
  </table>
  <input type="button" name="button" id="button" value="ȫѡ"  onclick="checkAll(form1,status)"/>
  <input type="button" name="button2" id="button2" value="��ѡ" onclick="switchAll(form1,status)" />
  <input type="button" name="button3" id="button3" value="��ѡ" onclick="uncheckAll(form1,status)" />
  <input type="submit" name="button4" id="button4" value="��׼" />
</form>
</div>
<p align="center">&nbsp;</p>
</body>
</html>
