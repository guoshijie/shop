<?php
@session_start();
include "Connection/connect.php";
/*
if (!$_SESSION['name'])
{
	echo "<script language=javascript>alert('���ȵ�¼');location.href='login.php';</script>";
}*/


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>������Ϣ</title>
<link href="files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<style type="text/css">
#ct{
	width: 1100px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 138px;
	margin-bottom: auto;
	background-color: #FFF;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	font-size: 20px;
	font-family: "��Բ";
}
#typee{
	width: 1100px;
	
	background-color: #FFF;	
}
img{
	border: thin solid #CCC;
}

#typee div{
	padding-left: 15px;
	padding-top: 3px;
	padding-bottom: 3px;
	background-color: #FFF;
	border-bottom-width: thin;
	border-bottom-style: dotted;
	border-bottom-color: #999;
	font-family: "������";
	font-weight: normal;
	font-size: 17px;
	word-spacing: 30px;
}

#typee div a:link{
	color:#00F;
	font-size: 16px;
}
#typee div a:visited{
	color:#00F;
	font-size: 16px;
}

#typee div a:hover{
	color:#C00;
	font-size: 16px;
	text-decoration:underline;
}

#typee div a:active{
	color:#060 !important;
	font-size: 16px;
	padding: 0px !important;
	margin: 0px !important;
	text-decoration:underline;
}

#details{
	width: 1100px;
	height: 862px;
	background-color: #FFF;
	
}


#recommend{
	width: 210px;
	height: 860px;
	background-color: #FFF;
	float: left;
	border: thin solid #CCC;
	text-align:center;
	
}
#recommend a:link{
	color:#0559C0;
}
#recommend a:visited{
	color:#0559C0;
}
#recommend a:hover{
	color:#C00;
}
#recommend a:active{
	color:#00F;
}

#showdetails{
	width: 870px;
	height: 850px;
	background-color: #FFF;
	float: right;
	border: thin solid #CCC;
	padding: 5px;
	position: relative;
}
#showdetails a:link{
	color:#0559C0;
}
#showdetails a:visited{
	color:#0559C0;
}
#showdetails a:hover{
	color:#C00;
}
#showdetails a:active{
	color:#00F;
}

.ys02 {
	text-align: center;
	font-size: 25px;
	font-family: "΢���ź�";
	font-weight: normal;
}

span {
	float:left; 
	display:block;
	width:213px; 
	height:250px;
	text-align: center;
	padding-top:10px;
	padding-bottom:10px;
	padding:2px;
	
}

#rmtj{
	width:210px; 
	height:30px ;
	background-color: #E9E9E9;
	text-align:left;
	vertical-align: middle;
	font-family: "΢���ź�";
	padding:0px;
}
#rmtj1{
	width:200px; 
	height:262px ;
	background-color: #FFF;
	text-align:center;
	vertical-align: middle;
	font-family: "΢���ź�";
	padding:5px;
}
#rmtj2{
	width:205px; 
	height:262px ;
	background-color: #FFF;
	text-align:center;
	vertical-align: middle;
	font-family: "΢���ź�";
	padding:2px;
}
#title{
	width:200px; 
	height:17px ;
	background-color: #FFF;
	text-align:left;
	vertical-align: middle;
	font-family: "������";
	padding:2px;
	font-size:17px;
	color:#0559C0;
}
#price{
	width:200px; 
	height:27px ;
	background-color: #FFF;
	text-align:left;
	vertical-align: middle;
	padding:2px;
}
#time{
	width:200px; 
	height:20px ;
	background-color: #FFF;
	text-align:left;
	vertical-align: middle;
	font-family: "������";
	padding:1px;
	font-size:16px;
}

#paixu{
	width:876px;
	height:25px;
	top:0px;
	left:0px;
	background-color: #E9E9E9;
	position: absolute;
	text-align: left;
	font-family: "������";
	font-size: 17px;
}

#fy{
	width:860px;
	height:30px;
	bottom:5px;
	background-color: #FFF;
	position: absolute;
	text-align: center;
	font-family: "������";
	font-size: 17px;
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
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='goods/login.php'>��¼</a>&nbsp;<a href='goods/register.php'>ע��</a>";} else echo $_SESSION['name']."�ѵ�¼" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='goods/quit.php'>[�˳�]</a>" ?></td>
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
          <td align="center" ><a href="index.php">��վ��ҳ</a></td>
          <td align="center"><a href="sale.php">������Ϣ</a></td>
          <td align="center"><a href="buy.php">����Ϣ</a></td>
          <td align="center"><a href="pubgoods.php">��ѷ���</a></td>
          <td align="center"><a href="mypub.php">�ҵķ���</a></td>
          <td align="center"><a href="goods/message.php">����ϵͳ</a></td>
        </tr>
    </table> 
  </nav>
   <div id="ct">
         <div id="typee">
              <div>ͼ����� <a href='sale.php?type=ͼ����ǲ'>ͼ����ǲ</a> <a href='sale.php?type=�̲�����'>�̲�����</a> <a href='sale.php?type=��ϰ����'>��ϰ����</a> <a href='sale.php?type=��Ϸװ��'>��Ϸװ��</a> <a href='sale.php?type=����1'>����</a></div>
           <div>�������� <a href='sale.php?type=ѧϰ��Ʒ'>ѧϰ��Ʒ</a> <a href='sale.php?type=������Ʒ'>������Ʒ</a> <a href='sale.php?type=�˶�װ��'>�˶�װ��</a> <a href='sale.php?type=��������'>��������</a> <a href='sale.php?type=��������'>��������</a> <a href='sale.php?type=����'>����</a> <a href='sale.php?type=����2'>����</a></div>
           <div>�����Ʒ <a href='sale.php?type=����'>����</a> <a href='sale.php?type=�������'>�������</a> <a href='sale.php?type=U��'>U��</a> <a href='sale.php?type=MP3 MP4'>MP3/MP4</a> <a href='sale.php?type=�ƶ�Ӳ��'>�ƶ�Ӳ��</a> <a href='sale.php?type=���ܳ�'>���ܳ�</a> <a href='sale.php?type=������'>������</a> <a href='sale.php?type=����3'>����</a></div>
           <div>������Ʒ <a href='sale.php?type=��������'>��������</a> <a href='sale.php?type=ë������'>ë������</a> <a href='sale.php?type=���'>���</a> <a href='sale.php?type=̨��'>̨��</a> <a href='sale.php?type=����Ʒ'>����Ʒ</a> <a href='sale.php?type=���г�'>���г�</a> <a href='sale.php?type=����4'>����</a></div>
           <div>��װ��� <a href='sale.php?type=���'>���</a> <a href='sale.php?type=��ЬŮЬ'>��ЬŮЬ</a> <a href='sale.php?type=����'>����</a> <a href='sale.php?type=�·�'>�·�</a> <a href='sale.php?type=����ȹ'>����ȹ</a> <a href='sale.php?type=��Ʒ'>��Ʒ</a> <a href='sale.php?type=��ױƷ'>��ױƷ</a> <a href='sale.php?type=����5'>����</a></div>
           <div>�����ֻ� <a href='sale.php?type=С��'>С��</a> <a href='sale.php?type=ƻ��'>ƻ��</a> <a href='sale.php?type=����'>����</a> <a href='sale.php?type=HTC'>HTC</a> <a href='sale.php?type=����'>����</a> <a href='sale.php?type=����6'>����</a></div>
         </div>
         <div id="details">
                   <div id="recommend">
                      <span id="rmtj">&nbsp;�����Ƽ�</span>
                        <?php 
                        $first=1;
                        if(isset($_GET['type'])){
                        	$type=$_GET['type'];
                        }
                        else{
                        	$type = 'U��';
                        }
                        if(isset($_GET['method'])){
                        	$method=$_GET['method'];
                        }
                        else{
                        	$method = 'price';
                        }
                        $sql="select * from `goods` where type1='��������' order by title desc limit 3";
                        
                       $result=mysql_query($sql);
                       
                       while($arrn=mysql_fetch_array($result))
                       {
                       	if(strlen($arrn[fabutime])>10){
                       		$time=substr($arrn[fabutime],0,10);
                       	}else{
                       		$time=$arrn[fabutime];
                       	}
                       	if(strlen($arrn[title])>20){
                       		$title=substr($arrn[title],0,20);
                       	}else{
                       		$title=$arrn[title];
                       	}
                       	echo "
                                          <span id='rmtj2'>
		                                               <a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'><img src='".$arrn[photo1]."' width='180' height='180' /></a>
			                                           <span id='title'><a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>".$title."</a></span>
			                                           <span id='price'><font color=red size=5 face=����>��".$arrn[price]."</font></span>
			                                           <span id='time'>".$time."</span></span>
                            ";}
                       ?>
                 </div>
                 <div id="showdetails">
                       <span id="paixu">
                               ����ʽ��<?php echo"
		                                     <a href='sale.php?page=".$first."&type=".$type."&method=title'>Ĭ��</a>
		                                     <a href='sale.php?page=".$first."&type=".$type."&method=price ASC'>�۸��</a>
		                                     <a href='sale.php?page=".$first."&type=".$type."&method=price DESC'>�۸��</a>"; ?>
                       </span><br />
                 
                      <?php 
                     
                      $pagesize=12;
                      $rs=mysql_query("select count(*) from `goods` where type3='".$type."'");
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
                     
                      
                      $sql="select * from `goods` where type3='".$type."'&&type1='��������' order by ".$method." limit $offset,$pagesize ";
                     
                      $result=mysql_query($sql);
                      
                       while($arrn=mysql_fetch_array($result))
                       {

                       	if(strlen($arrn[fabutime])>10){
                       		$time=substr($arrn[fabutime],0,10);
                       	}else{
                       		$time=$arrn[fabutime];
                       	}
                       	echo "
                                          <span>
		                                              <a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'><img src='".$arrn[photo1]."' width='200' height='180'/></a>
			                                           <span id='title'><a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>".$arrn[title]."</a></span>
			                                           <span id='price'><font color=red size=5 face=����>��".$arrn[price]."</font></span>
			                                           <span id='time'>".$time."</span></span>
                            ";}
                       ?>
                 
                        <div id="fy"> <?php 
                      
                       $pre=$page-1;
                       $next=$page+1;
                       $last=$pages;
     
                      echo "��".$pages."ҳ(".$page."/".$pages.")&nbsp;";
	                  if($page>1){
	                  echo "<a href='sale.php?page=".$first."&type=".$type."'>��ҳ</a>";
	  	              echo "&nbsp;<a href='sale.php?page=".$pre."&type=".$type."'>��һҳ</a>";
	                  }
	  
	                 for($i=1;$i<$page;$i++)
	  	             echo "<a href='sale.php?page=".$i."'>[".$i."]</a>";
	                 echo "<font color='red'>[".$page."]</font>";
	                 for($i=$page+1;$i<=$pages;$i++)
	  	            echo "<a href='sale.php?page=".$i."'>[".$i."]</a>";  
	  
	                if($page<$pages){
	  	                   echo "<a href='sale.php?page=".$next."&type=".$type."'>��һҳ</a>";
	  	                   echo "<a href='sale.php?page=".$last."&type=".$type."'>&nbsp;βҳ</a>";
	                }
	  
	
	                  ?></div>
                 </div>
         </div>
   </div>
   <div id="wlink">
     <table width="1100" height="40" border="0" cellspacing="0" cellpadding="0">
       <tr>
         <td width="169" align="center">�������ӣ�</td>
         <td width="206" align="center"><a href="http://www.nuc.edu.cn/">�б���ѧ</a></td>
         <td width="201" align="center"><a href="http://www.ncit.edu.cn/jwc/">�б���ѧ����</a></td>
         <td width="212" align="center"><a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html">��������ѯ</a></td>
         <td width="163" align="center"><a href="http://tieba.baidu.com/f?kw=%BA%AE%C8%AA&amp;fr=ala0&amp;pstbala=1">��Ȫ��</a></td>
         <td width="135" align="center"><a href="http://www.baidu.com/">�ٶ�</a></td>
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