<?php
@session_start();
include "Connection/connect.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>中北二手交易平台</title>
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
	font-family: "微软雅黑";
	font-weight: normal;
}
.ys03 {
	font-family: "微软雅黑";
	font-size: 18px;
}
.ys04 {
	font-family: "微软雅黑";
	font-size: 24px;
}
.ys05 {
	font-family: "微软雅黑";
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
          <td align="right" valign="top" height="25"><?php  if (!$_SESSION['name']) {echo "<a href='goods/login.php'>登录</a>&nbsp;<a href='goods/register.php'>注册</a>";} else echo $_SESSION['name']."已登录" ?></td>
        </tr>
        <tr>
          <td align="right" height="25" valign="top"><?php  if ($_SESSION['name']) echo "<a href='goods/quit.php'>[退出]</a>" ?></td>
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
          <td align="center" ><a href="index.php">网站首页</a></td>
          <td align="center"><a href="sale.php">出售信息</a></td>
          <td align="center"><a href="buy.php">求购信息</a></td>
          <td align="center"><a href="pubgoods.php">免费发布</a></td>
          <td align="center"><a href="mypub.php">我的发布</a></td>
          <td align="center"><a href="goods/message.php">留言系统</a></td>
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
                       <td height="30" align="left" valign="top" bgcolor="#E9E9E9">产品分类</td>
                     </tr>
                   </table>
                 </li>
                 <li><a href="#" class="ys03">图书软件</a>
                    <ul>
                       <li><a href='sale.php?type=图书消遣'>图书消遣</a></li>
                     <li><a href='sale.php?type=教材用书'>教材用书</a></li>
                       <li><a href='sale.php?type=复习资料'>复习资料</a></li>
                       <li><a href='sale.php?type=游戏装备'>游戏装备</a></li>
                       <li><a href='sale.php?type=其它1'>其他</a></li>
                   </ul>
                </li>
                 <li><a href="#" class="ys03">文体乐器</a>
                    <ul>
                     <li><a href='sale.php?type=学习用品'>学习用品</a></li>
                       <li><a href='sale.php?type=球类用品'>球类用品</a></li>
                       <li><a href='sale.php?type=运动装备'>运动装备</a></li>
                       <li><a href='sale.php?type=各种球拍'>各种球拍</a></li>
                       <li><a href='sale.php?type=健身器材'>健身器材</a></li>
                       <li><a href='sale.php?type=乐器'>乐器</a></li>
                       <li><a href='sale.php?type=其它2'>其他</a></li>
                    </ul>
                 </li>
                 <li><a href="#" class="ys03">数码产品</a>
                     <ul>
                         <li><a href='sale.php?type=电脑'>电脑</a></li>
                         <li><a href='sale.php?type=数码相机'>数码相机</a></li>
                         <li><a href='sale.php?type=U盘'>U盘</a></li>
                         <li><a href='sale.php?type=MP3 MP4'>MP3 MP4</a></li>
                         <li><a href='sale.php?type=移动硬盘'>移动硬盘</a></li>
                         <li><a href='sale.php?type=万能充'>万能充</a></li>
                         <li><a href='sale.php?type=读卡器'>读卡器</a></li>
                         <li><a href='sale.php?type=其它3'>其他</a></li>
                    </ul>
              </li>
                 <li><a href="#" class="ys03">生活用品</a>
                     <ul>
                         <li><a href='sale.php?type=电脑桌椅'>电脑桌椅</a></li>
                         <li><a href='sale.php?type=毛绒娃娃'>毛绒娃娃</a></li>
                         <li><a href='sale.php?type=玩具'>玩具</a></li>
                         <li><a href='sale.php?type=台灯'>台灯</a></li>
                         <li><a href='sale.php?type=日用品'>日用品</a></li>
                         <li><a href='sale.php?type=自行车'>自行车</a></li>
                         <li><a href='sale.php?type=其它4'>其他</a></li>
                    </ul>
              </li>
                 <li><a href="#" class="ys03">服装箱包</a>
                 <ul>
                         <li><a href='sale.php?type=箱包'>箱包</a></li>
                         <li><a href='sale.php?type=男鞋女鞋'>男鞋女鞋</a></li>
                         <li><a href='sale.php?type=裤子'>裤子</a></li>
                         <li><a href='sale.php?type=衣服'>衣服</a></li>
                         <li><a href='sale.php?type=连衣裙'>连衣裙</a></li>
                         <li><a href='sale.php?type=饰品'>饰品</a></li>
                         <li><a href='sale.php?type=化装品'>化妆品</a></li>
                         <li><a href='sale.php?type=其它5'>其他</a></li>
                   </ul>
              </li>
                 <li><a href="#" class="ys03">二手手机</a>
                    <ul>
                         <li><a href='sale.php?type=小米'>小米</a></li>
                         <li><a href='sale.php?type=苹果'>苹果</a></li>
                         <li><a href='sale.php?type=三星'>三星</a></li>
                         <li><a href='sale.php?type=HTC'>HTC</a></li>
                         <li><a href='sale.php?type=索尼'>索尼</a></li>
                         <li><a href='sale.php?type=其它6'>其他</a></li>
                    </ul>
              </li>
                  <li><table width="170" height="30" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                       <td height="30" align="right" valign="bottom" class="ys03" id="type"><a href="sale.php">全部分类&gt;&gt;</a></td>
                    </tr>
                </table></li>
              </ul>
       </div>
          <div id="bottom">
             <table width="100%" height="240" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td width="100" height="35" bgcolor="#E9E9E9" class="ys04">通知公告</td>
                    <td width="" height="35" align="right" valign="bottom" bgcolor="#E9E9E9"><a href="#">More>></a></td>
                </tr>
                <tr>
                    <td height="210" colspan="2">
                     <DIV id=rolllinkk style="OVERFLOW: hidden; WIDTH: 170px; HEIGHT: 205px"> 
                        <DIV id=rolllinkk1>

                         <!-- 下面是你要显示的内容 --> 
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">

                          <tr> <td align="left">&nbsp;&nbsp;查看太原二手交易信息按分类查看或查询。</td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;最全面的太原二手信息数据库，有效过滤广告欺诈信息。 </td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;注册，您就可以轻松快捷的发布太原二手转让信息。 </td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;登记闲置、发布物品积分制度</td> </tr>
                          <tr> <td align="left">&nbsp;&nbsp;秒杀抢注！商家免费开通会员！</td> </tr>
                         
                          
                        </table> 
                       <!-- 显示的内容结束！ -->
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
                      <!--   下面是你要显示的内容   --> 
                      <table   width=900 height=200 border=0> 
                          <tr> 
                              <?php
                                  
                                    $sql="select * from `goods` where type1='发布出售' order by fabutime DESC limit 6 ";
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
                                 <br><a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>价 格：<font color=red size=5 face=黑体> $arrn[price]</font>元</a></td>
		                               ";
                                     }
                             ?>
                             
                         </tr> 
                      </table> 
                    <!--   显示的内容结束！   -->
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
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp1','','show')" onmouseout="MM_showHideLayers('stp1','','hide')"><span class="ys05"><a href="#">手 机</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp2','','show')" onmouseout="MM_showHideLayers('stp2','','hide')"><span class="ys05"><a href="#">电 脑</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp3','','show')" onmouseout="MM_showHideLayers('stp3','','hide')"><span class="ys05"><a href="#">图 书</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp4','','show')" onmouseout="MM_showHideLayers('stp4','','hide')"><span class="ys05"><a href="#">服 装</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp5','','show')" onmouseout="MM_showHideLayers('stp5','','hide')"><span class="ys05"><a href="#">乐 器</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp6','','show')" onmouseout="MM_showHideLayers('stp6','','hide')"><span class="ys05"><a href="#">生 活</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle" onmouseover="MM_showHideLayers('stp7','','show')" onmouseout="MM_showHideLayers('stp7','','hide')"><span class="ys05"><a href="#">箱 包</a></span></td>
            </tr>
          </table>
           <div id="stp1" onmouseover="MM_showHideLayers('stp1','','show')" onmouseout="MM_showHideLayers('stp1','','hide')">
            <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type2='二手手机'&&type1='发布出售' order by fabutime DESC limit 9 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=小米'>More>></a></td>
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
               $sql="select * from `goods` where type3='电脑'&&type1='发布出售' order by fabutime limit 9 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=电脑'>More>></a></td>
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
               $sql="select * from `goods` where type1='发布出售'&&type3='图书消遣'||type3='教材用书'||type3='复习资料' order by fabutime limit 9 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=图书消遣'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp4" onmouseover="MM_showHideLayers('stp4','','show')" onmouseout="MM_showHideLayers('stp4','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type1='发布出售'&&type3='衣服'||type3='裤子'||type3='连衣裙' order by fabutime limit 7 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=衣服'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp5" onmouseover="MM_showHideLayers('stp5','','show')" onmouseout="MM_showHideLayers('stp5','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='乐器'&&type1='发布出售' order by fabutime limit 7 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=乐器'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp6" onmouseover="MM_showHideLayers('stp6','','show')" onmouseout="MM_showHideLayers('stp6','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type2='生活用品'&&type1='发布出售' order by fabutime DESC limit 9 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=日用品'>More>></a></td>
               </tr>";
               ?>
               
             
               
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp7" onmouseover="MM_showHideLayers('stp7','','show')" onmouseout="MM_showHideLayers('stp7','','hide')">
          <table width="395" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='箱包'&&type1='发布出售' order by fabutime limit 7 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=箱包'>More>></a></td>
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
               $sql="select * from `goods` where type2='二手手机'&&type1='发布出售' order by fabutime DESC limit 9 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=小米'>More>></a></td>
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
              <td align="center" valign="middle" class="ys05"  onmouseover="MM_showHideLayers('stp8','','show')" onmouseout="MM_showHideLayers('stp8','','hide')"><a href="#">相 机</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05"  onmouseover="MM_showHideLayers('stp9','','show')" onmouseout="MM_showHideLayers('stp9','','hide')"><a href="#">桌 椅</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05" onmouseover="MM_showHideLayers('stp10','','show')" onmouseout="MM_showHideLayers('stp10','','hide')"><a href="#">台 灯</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle" class="ys05" onmouseover="MM_showHideLayers('stp11','','show')" onmouseout="MM_showHideLayers('stp11','','hide')"><a href="#">日 用</a></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp12','','show')" onmouseout="MM_showHideLayers('stp12','','hide')"><a href="#">球 类</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp13','','show')" onmouseout="MM_showHideLayers('stp13','','hide')"><a href="#">游 戏</a></span></td>
            </tr>
            <tr>
              <td align="center" valign="middle"><span class="ys05" onmouseover="MM_showHideLayers('stp14','','show')" onmouseout="MM_showHideLayers('stp14','','hide')"><a href="#">U&nbsp; 盘</a></span></td>
            </tr>
          </table>
          
           <div id="stp8" onmouseover="MM_showHideLayers('stp8','','show')" onmouseout="MM_showHideLayers('stp8','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='数码相机'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=数码相机'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp9" onmouseover="MM_showHideLayers('stp9','','show')" onmouseout="MM_showHideLayers('stp9','','hide')">
          <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='电脑桌椅'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=电脑桌椅'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp10" onmouseover="MM_showHideLayers('stp10','','show')" onmouseout="MM_showHideLayers('stp10','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='台灯'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=台灯'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp11" onmouseover="MM_showHideLayers('stp11','','show')" onmouseout="MM_showHideLayers('stp11','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='日用品'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=日用品'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp12" onmouseover="MM_showHideLayers('stp12','','show')" onmouseout="MM_showHideLayers('stp12','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='球类用品'||type3='各种球拍'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=球类用品'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp13" onmouseover="MM_showHideLayers('stp13','','show')" onmouseout="MM_showHideLayers('stp13','','hide')">
           <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='游戏装备'&&type1='发布出售' order by fabutime limit 8 ";
               $result=mysql_query($sql);
               echo "<tr height='6' colspan=’3‘><td></td></tr>";
               while($arrn=mysql_fetch_array($result)){
               	if(strlen($arrn[title])>32){
	                     $s=substr($arrn[title],0,32)."...";
                 }else{
	                    $s=$arrn[title];
                }
               
                echo"<tr>
                  <td width='320' height='31' valign='middle'>&nbsp;<a href='goods/show.php?id=$arrn[id]' title='$arrn[title]'>$s</a></td>
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=游戏装备'>More>></a></td>
               </tr>";
               ?>
               <tr>
                    <td colspan="3" align="right"></td>
               </tr>
           </table></div>
           <div id="stp14" onmouseover="MM_showHideLayers('stp14','','show')" onmouseout="MM_showHideLayers('stp14','','hide')">
          <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='U盘'&&type1='发布出售' order by fabutime limit 8 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=U盘'>More>></a></td>
               </tr>";
               ?>
               
           </table>
           </div>
          
        </div>
    </td>
    <td width="390">
        <table width="390" height="300" border="0" cellspacing="0" cellpadding="0">
               <?php
               $sql="select * from `goods` where type3='U盘'&&type1='发布出售' order by fabutime limit 8 ";
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
                  <td align='right' valign='middle' width='20'>￥</td>
                  <td align='left' valign='middle' width='55'>$arrn[price]</td>
               </tr>";
               }
               echo "<tr>
                    <td colspan='3' align='right' height='30'><a href='sale.php?type=U盘'>More>></a></td>
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
         <td width="169" align="center">友情链接：</td>
         <td width="206" align="center"><a href="http://www.nuc.edu.cn/">中北大学</a></td>
         <td width="201" align="center"><a href="http://www.ncit.edu.cn/jwc/">中北大学教务处</a></td>
         <td width="212" align="center"><a href="http://202.207.177.15:7777/zhxt_bks/zhxt_bks.html">本科生查询</a></td>
         <td width="163" align="center"><a href="http://tieba.baidu.com/f?kw=%BA%AE%C8%AA&amp;fr=ala0&amp;pstbala=1">寒泉吧</a></td>
         <td width="135" align="center"><a href="http://www.baidu.com/">百度</a></td>
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

