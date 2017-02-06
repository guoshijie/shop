<?php
@session_start();
include "Connection/connect.php";

 if (!$_SESSION['name'])
 {
echo "<script language=javascript>alert('请先登录');location.href='goods/login.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>免费发布</title>
<link href="files/css/shop1.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="files/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="files/js/in.js"></script>
<script src="files/js/jquery.min.js"></script>
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
	text-align:left;
	font-size: 24px;
}

#main #ct  table tr td {
	border-bottom-width: thin;
	border-right-width: thin;
	border-bottom-style: solid;
	border-right-style: solid;
	border-bottom-color: #DDD;
	border-right-color: #DDD;
}

#main #ct  table tr th {
	border-bottom-width: thin;
	border-right-width: thin;
	border-bottom-style: solid;
	border-right-style: solid;
	border-bottom-color: #DDD;
	border-right-color: #DDD;
}


.zt1 {
	font-size: 18px;
	font-style: normal;
	color: #000;
	font-family: "幼圆";
}
.zt2 {
	font-size: 17px;
}
#textarea {
	height: 100px;
	width: 425px;
}
#textfield {
	width: 425px;
}
#textfield3 {
	width: 80px;
}
#textfield4 {
	width: 80px;
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
          <td>&nbsp;</td>
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
  <div id="ct">
 <script language="JavaScript" type="text/javascript">
		   function checkinput(){
		                   
							 if(form1.title.value==""){
							  alert("请输入发布标题！");
							  form1.title.select();
							  return false;
							}
							if(form1.content1.value==""){
							  alert("请进行详细描述！");
							  form1.content1.select();
							  return false;
							}
							if(form1.price.value==""){
							  alert("请输入交易价格！");
							  form1.price.select();
							  return false;
							}
							if(form1.tel.value==""){
							  alert("请输入联系电话！");
							  form1.tel.select();
							  return false;
							}
							if(form1.name.value==""){
							  alert("请输入联系人！");
							  form1.name.select();
							  return false;
							}
							return true;
					}
		 </script>
     <form action="goods/chuli/fabu.php" method="post"  enctype="multipart/form-data" name="form1" id="form1" onsubmit="return checkinput()" >
       <table width="1100" height="256" border="0" align="center" cellpadding="10" cellspacing="0">
         <tr>
           <th width="92" scope="col" class="zt1" align="center">发布类型</th>
           <td colspan="4" class="zt2" scope="col">
             <select  name="type1">
               <option value="" selected="selected">请选择</option>
               <option value="发布出售">发布出售</option>
               <option value="发布求购">发布求购</option>
             </select>
              
             <select id="select2" name="type2">
               <option   value="" selected="selected">请选择</option>
               <option id="1" value="图书软件">图书软件</option>
               <option id="2" value="文体乐器">文体乐器</option>
               <option id="3" value="数码产品">数码产品</option>
               <option id="4" value="生活用品">生活用品</option>
               <option id="5" value="服装箱包">服装箱包</option>
               <option id="6" value="二手手机">二手手机</option>
             </select>
             <span id='two' name="type3"></span>
            
           </td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">发布标题</th>
           <td colspan="4" class="zt2"><input type="text" name="title" size="60" id="title" /></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">详细描述</th>
           <td colspan="4" class="zt2"><textarea name="content1" id="content1"  cols="45" rows="5"></textarea></td>
         </tr>
         <tr>
           <th rowspan="3" class="zt1" scope="row" align="center">物品图片</th>
           <td width="247" class="zt2"><input type="file" name="photo1" id="photo1" size="25" />
           </td>
           <td width="120" rowspan="3" class="zt2"><img src="" id="img1" width="100%"height="100%"></td>
           <td width="120" rowspan="3" class="zt2"><img src="" id="img2" width="100%"height="100%"></td>
           <td width="120" rowspan="3" class="zt2"><img src="" id="img3" width="100%"height="100%"></td>
         </tr>
         <tr>
           <td class="zt2"><input type="file" name="photo2" id="photo2"  size="25"/>
           </td>
         </tr>
         <tr>
           <td class="zt2"><input type="file" name="photo3" id="photo3" size="25" />
           </td>
         </tr>
         <script>	
	
	$("#photo1").change(function(){
		var objUrl = getObjectURL(this.files[0]) ;
		console.log("objUrl = "+objUrl) ;
		if (objUrl) {
			$("#img1").attr("src", objUrl) ;
		}
	}) ;
	$("#photo2").change(function(){
		var objUrl = getObjectURL(this.files[0]) ;
		console.log("objUrl = "+objUrl) ;
		if (objUrl) {
			$("#img2").attr("src", objUrl) ;
		}
	}) ;
	$("#photo3").change(function(){
		var objUrl = getObjectURL(this.files[0]) ;
		console.log("objUrl = "+objUrl) ;
		if (objUrl) {
			$("#img3").attr("src", objUrl) ;
		}
	}) ;
	
	
	function getObjectURL(file) {
		var url = null ; 
		if (window.createObjectURL!=undefined) { // basic
			url = window.createObjectURL(file) ;
		} else if (window.URL!=undefined) { // mozilla(firefox)
			url = window.URL.createObjectURL(file) ;
		} else if (window.webkitURL!=undefined) { // webkit or chrome
			url = window.webkitURL.createObjectURL(file) ;
		}
		return url ;
	}
	</script> 
         <tr>
           <th class="zt1" scope="row" align="center">所在地点</th>
           <td colspan="4" class="zt2"><select  name="place">
		      <option value="" selected="selected">请选择地区</option>
			   <option value="迎泽区">迎泽区</option>
			  <option value="杏花岭区">杏花岭区</option>
			  <option value="万柏林区">万柏林区</option>
			  <option value="尖草坪区">尖草坪区</option>
			  <option value="晋源区">晋源区</option>
			  <option value="小店区">小店区</option>
			  <option value="清徐县">清徐县</option>
			  <option value="阳曲县">阳曲县</option>
			  <option value="娄烦县">娄烦县</option>
			  <option value="古交市">古交市</option>
	       </select></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">新旧程度</th>
           <td colspan="4" class="zt2">
             <p>
               <label>
                 <input type="radio" name="condition" value="全新" id="RadioGroup1" />
                 全新</label>
               <label>
                 <input type="radio" name="condition" value="九成新以上" id="RadioGroup2" checked />
                 九成新以上</label>
               
               <label>
                 <input type="radio" name="condition" value="八成新以上" id="RadioGroup3" />
                 八成新以上</label>
                <label>
                 <input type="radio" name="condition" value="八成新以下" id="RadioGroup4" />
                 八成新以下</label>
               
           </p></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">交易价格</th>
           <td colspan="4" class="zt2"><input type="text" name="price" id="price" />
             元</td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">交易方式</th>
           <td colspan="4" class="zt2"><select name="pattern">
             <option value="线上交易">线上交易</option>
             <option value="见面交易">见面交易</option>
             <option value="线上见面均可">线上见面均可</option>
           </select></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">联系方式</th>
           <td colspan="4" class="zt2">手机号
             <input type="text" name="tel" id="tel" />
             &nbsp;&nbsp;&nbsp;
             姓名
             <input type="text" name="name" id="name" /></td>
         </tr>
         <tr>
          <td colspan="5" scope="row"><div align="center">
          <?php 
                      $username=$_SESSION['name'];
                      $sqll="select * from user where username='".$username."'";
                      $resultt=mysql_query($sqll);
                      $arrnn=mysql_fetch_array($resultt);
             
             ?>
              <input name="photo" type="hidden"  id="photo" value="<?php echo $arrnn['photo']?>" />
              <input type="hidden" value="<?php echo $_SESSION['name'];?>" name="username" />
              <input name="email" type="hidden" id="email" value="<?php echo $arrnn['email']?>" />
              <input type="hidden" value="<?php date_default_timezone_set("PRC"); echo date("Y-m-d H:i:s");?>" name="fabutime" />
            <input type="submit" name="submit"  value="发布信息"  />
                                      &nbsp;&nbsp;
              <input name="reset" type="reset"  value="重新填写" />
            </div></td>
                              
        </tr>
       </table>
    </form>

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
    <td align="center" valign="middle">Copyright &copy; J-steven | guoshijie_hi@yeah.net</td>
  </tr>
  </table>

  </footer>

</div>

</body>
</html>
