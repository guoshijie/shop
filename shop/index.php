<?php
@session_start();
include "Connection/connect.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�б����ֽ���ƽ̨</title>
<link href="files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script type="text/javascript" src="files/js/login.js"></script>
<style type="text/css">
.ys01 {
	font-size: 12px;
}
.ys02 {
	text-align: center;
	font-size: 25px;
	font-family: "΢���ź�";
	font-weight: normal;
}
.ys03 {
	font-family: "΢���ź�";
	font-size: 18px;
}
.ys04 {
	font-family: "΢���ź�";
	font-size: 24px;
}
.ys05 {
	font-family: "΢���ź�";
	font-size: 18px;
	color: #000;
}
img{
	border: thin solid #CCC;
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
          <td height="">&nbsp;</td>
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
  <div id="content">
 
  
     <div id="left">
          <div id="top">
              <ul>
                 <li class="ys04">
                   <table width="170" height="30" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td height="30" align="left" valign="top" bgcolor="#E9E9E9">��Ʒ����</td>
                     </tr>
                   </table>
                 </li>
                 <li><a href="#" class="ys03">ͼ�����</a>
                    <ul>
                       <li><a href='sale.php?type=ͼ����ǲ'>ͼ����ǲ</a></li>
                     <li><a href='sale.php?type=�̲�����'>�̲�����</a></li>
                       <li><a href='sale.php?type=��ϰ����'>��ϰ����</a></li>
                       <li><a href='sale.php?type=��Ϸװ��'>��Ϸװ��</a></li>
                       <li><a href='sale.php?type=����1'>����</a></li>
                   </ul>
                </li>
                 <li><a href="#" class="ys03">��������</a>
                    <ul>
                     <li><a href='sale.php?type=ѧϰ��Ʒ'>ѧϰ��Ʒ</a></li>
                       <li><a href='sale.php?type=������Ʒ'>������Ʒ</a></li>
                       <li><a href='sale.php?type=�˶�װ��'>�˶�װ��</a></li>
                       <li><a href='sale.php?type=��������'>��������</a></li>
                       <li><a href='sale.php?type=��������'>��������</a></li>
                       <li><a href='sale.php?type=����'>����</a></li>
                       <li><a href='sale.php?type=����2'>����</a></li>
                    </ul>
                 </li>
                 <li><a href="#" class="ys03">�����Ʒ</a>
                     <ul>
                         <li><a href='sale.php?type=����'>����</a></li>
                         <li><a href='sale.php?type=�������'>�������</a></li>
                         <li><a href='sale.php?type=U��'>U��</a></li>
                         <li><a href='sale.php?type=MP3 MP4'>MP3 MP4</a></li>
                         <li><a href='sale.php?type=�ƶ�Ӳ��'>�ƶ�Ӳ��</a></li>
                         <li><a href='sale.php?type=���ܳ�'>���ܳ�</a></li>
                         <li><a href='sale.php?type=������'>������</a></li>
                         <li><a href='sale.php?type=����3'>����</a></li>
                    </ul>
              </li>
                 <li><a href="#" class="ys03">������Ʒ</a>
                     <ul>
                         <li><a href='sale.php?type=��������'>��������</a></li>
                         <li><a href='sale.php?type=ë������'>ë������</a></li>
                         <li><a href='sale.php?type=���'>���</a></li>
                         <li><a href='sale.php?type=̨��'>̨��</a></li>
                         <li><a href='sale.php?type=����Ʒ'>����Ʒ</a></li>
                         <li><a href='sale.php?type=���г�'>���г�</a></li>
                         <li><a href='sale.php?type=����4'>����</a></li>
                    </ul>
              </li>
                 <li><a href="#" class="ys03">��װ���</a>
                 <ul>
                         <li><a href='sale.php?type=���'>���</a></li>
                         <li><a href='sale.php?type=��ЬŮЬ'>��ЬŮЬ</a></li>
                         <li><a href='sale.php?type=����'>����</a></li>
                         <li><a href='sale.php?type=�·�'>�·�</a></li>
                         <li><a href='sale.php?type=����ȹ'>����ȹ</a></li>
                         <li><a href='sale.php?type=��Ʒ'>��Ʒ</a></li>
                         <li><a href='sale.php?type=��װƷ'>��ױƷ</a></li>
                         <li><a href='sale.php?type=����5'>����</a></li>
                   </ul>
              </li>
                 <li><a href="#" class="ys03">�����ֻ�</a>
                    <ul>
                         <li><a href='sale.php?type=С��'>С��</a></li>
                         <li><a href='sale.php?type=ƻ��'>ƻ��</a></li>
                         <li><a href='sale.php?type=����'>����</a></li>
                         <li><a href='sale.php?type=HTC'>HTC</a></li>
                         <li><a href='sale.php?type=����'>����</a></li>
                         <li><a href='sale.php?type=����6'>����</a></li>
                    </ul>
              </li>
                  <li><table width="170" height="30" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td height="30" align="right" valign="bottom" class="ys03" id="type"><a href="sale.php">ȫ������&gt;&gt;</a></td>
                    </tr>
                </table></li>
              </ul>
       </div>
          <div id="bottom">
             <table width="100%" height="240" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100" height="35" bgcolor="#E9E9E9" class="ys04">֪ͨ����</td>
                    <td width="" height="35" align="right" valign="bottom" bgcolor="#E9E9E9"><a href="#">More>></a></td>
                </tr>
                <tr>
                    <td height="210" colspan="2">
                     <DIV id=rolllinkk style="OVERFLOW: hidden; WIDTH: 170px; HEIGHT: 205px"> 
                        <DIV id=rolllinkk1>

                         <!-- ��������Ҫ��ʾ������ --> 
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">

                          <tr> <td align="left">&nbsp;&nbsp;�鿴̫ԭ���ֽ�����Ϣ������鿴���ѯ��</td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;��ȫ���̫ԭ������Ϣ���ݿ⣬��Ч���˹����թ��Ϣ�� </td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;ע�ᣬ���Ϳ������ɿ�ݵķ���̫ԭ����ת����Ϣ�� </td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;�Ǽ����á�������Ʒ�����ƶ�</td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;��ɱ��ע���̼���ѿ�ͨ��Ա��</td> </tr>
                         
                          
                        </table> 
                       <!-- ��ʾ�����ݽ����� -->
                        </DIV> 
                        <DIV id=rolllinkk2> </DIV>
                    </DIV> 
<SCRIPT> 
  var rollspeed=50 
  rolllinkk2.innerHTML=rolllinkk1.innerHTML // 
  function Marquee1(){ 
  if(rolllinkk2.offsetTop-rolllinkk.scrollTop <=0) // 
       rolllinkk.scrollTop-=rolllinkk1.offsetHeight // 
  else{ 
       rolllinkk.scrollTop++ 
     } 
   } 
  var MyMar1=setInterval(Marquee1,rollspeed) // 
  rolllinkk.onmouseover=function() {clearInterval(MyMar1)}// 
  rolllinkk.onmouseout=function() {MyMar1=setInterval(Marquee1,rollspeed)}// 
</SCRIPT> 
                       
                    </td>
                </tr>
             </table>

          
            
          </div>
     </div>
     <div id="right">
          <div id="top1">
             <div   id=demo   style= 'overflow:hidden;height:200px;width:900px; '> 
              <table width="900" height=200   border=0   cellspacing=0   cellpadding=0> 
                <tr> 
                   <td   id=demo1> 
                      <!--   ��������Ҫ��ʾ������   --> 
                      <table   width=900 height=200 border=0> 
                          <tr> 
                              <?php
                                  
                                    $sql="select * from `goods` where type1='��������' order by fabutime DESC limit 6 ";
                                    $result=mysql_query($sql);
                                     while($arrn=mysql_fetch_array($result)){
                                     	if(strlen($arrn[title])>20){
	                                        $title=substr($arrn[title],0,20);
                                        }else{
	                                        $title=$arrn[title];
                                        }
                                       if(strlen($arrn[title])>20){
                                       	$title=substr($arrn[title],0,20);
                                       }else{
                                       	$title=$arrn[title];
                                       }
                                        echo"
		                                  <td width=180 height=190 align='center'valign='middle'>
                                 <a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'><img src='$arrn[photo1]' width='170' height='135'></a><br>
                                 <a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$title</a>
                                 <br><a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>�� ��<font color=red size=5 face=����> $arrn[price]</font>Ԫ</a></td>
		                               ";
                                     }
                             ?>
                             
                         </tr> 
                      </table> 
                    <!--   ��ʾ�����ݽ�����   -->
                   </td> 
                   <td   id=demo2> </td> 
                 </tr> 
               </table> 
               <script> 
                  var   speed=20 
                  demo2.innerHTML=demo1.innerHTML 
                  function   Marquee(){ 
                  if(demo2.offsetWidth-demo.scrollLeft <=0) 
                  demo.scrollLeft-=demo1.offsetWidth 
                  else{ 
                      demo.scrollLeft++ 
                     } 
                  } 
                  var   MyMar=setInterval(Marquee,speed) 
                 demo.onmouseover=function()   {clearInterval(MyMar)} 
                 demo.onmouseout=function()   {MyMar=setInterval(Marquee,speed)} 
              </script> 

              </div>
               
          </div>
          <div id="bottom1">
              <table width="930" height="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70" bgcolor="#FFF">
        <div id="smalltype1">
          <table width="70" height="299" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp1','','show')" onmouseout="MM_showHideLayers('stp1','','hide')"><span class="ys05"><a href="#">�� ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp2','','show')" onmouseout="MM_showHideLayers('stp2','','hide')"><span class="ys05"><a href="#">�� ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp3','','show')" onmouseout="MM_showHideLayers('stp3','','hide')"><span class="ys05"><a href="#">ͼ ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp4','','show')" onmouseout="MM_showHideLayers('stp4','','hide')"><span class="ys05"><a href="#">�� װ</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp5','','show')" onmouseout="MM_showHideLayers('stp5','','hide')"><span class="ys05"><a href="#">�� ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp6','','show')" onmouseout="MM_showHideLayers('stp6','','hide')"><span class="ys05"><a href="#">�� ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp7','','show')" onmouseout="MM_showHideLayers('stp7','','hide')"><span class="ys05"><a href="#">�� ��</a></span></td>
            </tr>
          </table>
           <div id="stp1" onmouseover="MM_showHideLayers('stp1','','show')" onmouseout="MM_showHideLayers('stp1','','hide')">
            <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type2='�����ֻ�'&&type1='��������' order by fabutime DESC limit 9 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='28'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=С��'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table>

           </div>
           <div id="stp2" onmouseover="MM_showHideLayers('stp2','','show')" onmouseout="MM_showHideLayers('stp2','','hide')">
           <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='����'&&type1='��������' order by fabutime limit 9 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='30'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=����'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table>
           </div>
           <div id="stp3" onmouseover="MM_showHideLayers('stp3','','show')" onmouseout="MM_showHideLayers('stp3','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type1='��������'&&type3='ͼ����ǲ'||type3='�̲�����'||type3='��ϰ����' order by fabutime limit 9 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='30'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=ͼ����ǲ'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp4" onmouseover="MM_showHideLayers('stp4','','show')" onmouseout="MM_showHideLayers('stp4','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type1='��������'&&type3='�·�'||type3='����'||type3='����ȹ' order by fabutime limit 7 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='30'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=�·�'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp5" onmouseover="MM_showHideLayers('stp5','','show')" onmouseout="MM_showHideLayers('stp5','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='����'&&type1='��������' order by fabutime limit 7 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='30'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=����'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp6" onmouseover="MM_showHideLayers('stp6','','show')" onmouseout="MM_showHideLayers('stp6','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type2='������Ʒ'&&type1='��������' order by fabutime DESC limit 9 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='28'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=����Ʒ'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp7" onmouseover="MM_showHideLayers('stp7','','show')" onmouseout="MM_showHideLayers('stp7','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='���'&&type1='��������' order by fabutime limit 7 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='30'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=���'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
        </div></td>
    <td width="390">
       <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type2='�����ֻ�'&&type1='��������' order by fabutime DESC limit 9 ";
               echo "<tr height='6'><td></td></tr>";
               $result=mysql_query($sql);
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>28){
	                     $s=substr($arrn[title],0,28)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='28'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=С��'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table>
    </td>
    <td width="70" bgcolor="#CCCCCC">
        <div id="smalltype2">
            <table width="70" height="300" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" valign="middle" class="ys05"  onmouseover="MM_showHideLayers('stp8','','show')" onmouseout="MM_showHideLayers('stp8','','hide')"><a href="#">�� ��</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05"  onmouseover="MM_showHideLayers('stp9','','show')" onmouseout="MM_showHideLayers('stp9','','hide')"><a href="#">�� ��</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05" onmouseover="MM_showHideLayers('stp10','','show')" onmouseout="MM_showHideLayers('stp10','','hide')"><a href="#">̨ ��</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05" onmouseover="MM_showHideLayers('stp11','','show')" onmouseout="MM_showHideLayers('stp11','','hide')"><a href="#">�� ��</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp12','','show')" onmouseout="MM_showHideLayers('stp12','','hide')"><a href="#">�� ��</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp13','','show')" onmouseout="MM_showHideLayers('stp13','','hide')"><a href="#">�� Ϸ</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp14','','show')" onmouseout="MM_showHideLayers('stp14','','hide')"><a href="#">U&nbsp; ��</a></span></td>
            </tr>
          </table>
          
           <div id="stp8" onmouseover="MM_showHideLayers('stp8','','show')" onmouseout="MM_showHideLayers('stp8','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='�������'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=�������'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp9" onmouseover="MM_showHideLayers('stp9','','show')" onmouseout="MM_showHideLayers('stp9','','hide')">
          <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='��������'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=��������'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp10" onmouseover="MM_showHideLayers('stp10','','show')" onmouseout="MM_showHideLayers('stp10','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='̨��'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=̨��'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp11" onmouseover="MM_showHideLayers('stp11','','show')" onmouseout="MM_showHideLayers('stp11','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='����Ʒ'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=����Ʒ'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp12" onmouseover="MM_showHideLayers('stp12','','show')" onmouseout="MM_showHideLayers('stp12','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='������Ʒ'||type3='��������'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=������Ʒ'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp13" onmouseover="MM_showHideLayers('stp13','','show')" onmouseout="MM_showHideLayers('stp13','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='��Ϸװ��'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=��3��><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=��Ϸװ��'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp14" onmouseover="MM_showHideLayers('stp14','','show')" onmouseout="MM_showHideLayers('stp14','','hide')">
          <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='U��'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='1'><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=U��'>More>></a></td>
               </tr>";
               ?>
               
           </table>
           </div>
          
        </div>
    </td>
    <td width="390">
        <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='U��'&&type1='��������' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='1'><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>��</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=U��'>More>></a></td>
               </tr>";
               ?>
               
           </table>
    </td>
  </tr>
  </table>

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

