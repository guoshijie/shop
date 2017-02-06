<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>无标题文档</title>
<script type="text/javascript" src="../../../files/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../../../files/js/tc.js"></script>
<script src="../../../files/js/jquery.min.js"></script>
<style type="text/css">
#table table tr td {
	font-family: "黑体";
	font-size: 20px;
	border: 1px solid #CCC;
}
#table table {
	border: 1px solid #CCC;
}
#apDiv1 {
	position:absolute;
	left:412px;
	top:149px;
	width:145px;
	height:105px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:154px;
	top:0px;
	width:145px;
	height:105px;
	z-index:2;
}
#apDiv3 {
	position:absolute;
	left:154px;
	top:0px;
	width:145px;
	height:105px;
	z-index:2;
}
</style>
</head>

<body>
<?php 
     date_default_timezone_set("prc");
     $id=$_GET["id"];

     include "../../../connection/connect.php";
     $sql="select * from goods where id='".$id."'";
     $result=mysql_query($sql);
	 $arrn=mysql_fetch_array($result);
?>
<div id="table">


<form id="form1" name="form1" method="post" action="del_pub.php" enctype="multipart/form-data" onSubmit="return checkinput(this)">
<table width="860" height="468" border="1" cellspacing="0" align="center">
  <tr>
    <td width="56" height="47" align="center" scope="col">发布类型</td>
    <td width="323" scope="col">&nbsp;
      <select  name="type1"id="type1" size="0.5">
               <option value="">请选择</option>
               <option value="发布出售">发布出售</option>
               <option value="发布求购">发布求购</option>
        </select>
  <SCRIPT LANGUAGE="JAVASCRIPT">
<!--
function checkCountry()
{
	    if (document.form1.type2.value == "图书软件" )
		{
		document.form1.type31.hidden  = false;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
	    else if(document.form1.type2.value == "文体乐器")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = false;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
	    else if(document.form1.type2.value == "数码产品")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = false;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
		else if( document.form1.type2.value == "生活用品")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = false;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
		else if(document.form1.type2.value == "服装箱包")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = false;
		document.form1.type36.hidden  = true;
		}
		
		else if(document.form1.type2.value == "二手手机")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = false;
		}
		
}
-->
</SCRIPT>
			
		     <select NAME="type2" id="type2" size="0.5" onchange="checkCountry();">
					<option value='图书软件'>图书软件</option>
					<option value='文体乐器'>文体乐器</option>
					<option value='数码产品'>数码产品</option>
					<option value='生活用品'>生活用品</option>
					<option value='服装箱包'>服装箱包</option>
					<option value='二手手机'>二手手机</option>


				</select>
			<select NAME = "type31" id="type31" size="0.5"
			        <?php 
					  if($arrn["type2"]=="图书软件") echo "";
					  if($arrn["type2"]=="文体乐器") echo "hidden";
					  if($arrn["type2"]=="数码产品") echo "hidden";
					  if($arrn["type2"]=="生活用品") echo "hidden";
					  if($arrn["type2"]=="服装箱包") echo "hidden";
					  if($arrn["type2"]=="二手手机") echo "hidden";
					?>>
					<option value='图书消遣'>图书消遣</option>
					<option value='教材用书'>教材用书</option>
					<option value='复习资料'>复习资料</option>
					<option value='游戏装备'>游戏装备</option>
					<option value='其他'>其他</option>
				</select>
			<select NAME = "type32" id="type32" size="0.5"
			      <?php 
					  if($arrn["type2"]=="图书软件") echo "hidden";
					  if($arrn["type2"]=="文体乐器") echo "";
					  if($arrn["type2"]=="数码产品") echo "hidden";
					  if($arrn["type2"]=="生活用品") echo "hidden";
					  if($arrn["type2"]=="服装箱包") echo "hidden";
					  if($arrn["type2"]=="二手手机") echo "hidden";
					?>>
					<option value='学习用品'>学习用品</option>
					<option value='球类用品'>球类用品</option>
					<option value='运动装备'>运动装备</option>
					<option value='各种球拍'>各种球拍</option>
					<option value='健身器材'>健身器材</option>
					<option value='其他'>其他</option>
			</select>
			<select NAME = "type33" id="type33" size="0.5"
			       <?php 
					  if($arrn["type2"]=="图书软件") echo "hidden";
					  if($arrn["type2"]=="文体乐器") echo "hidden";
					  if($arrn["type2"]=="数码产品") echo "";
					  if($arrn["type2"]=="生活用品") echo "hidden";
					  if($arrn["type2"]=="服装箱包") echo "hidden";
					  if($arrn["type2"]=="二手手机") echo "hidden";
					?>>
					<option value='数码相机'>数码相机</option>
					<option value='U盘'>U盘</option>
					<option value='MP3 MP4'>MP3 MP4</option>
					<option value='移动硬盘'>移动硬盘</option>
					<option value='万能充'>万能充</option>
					<option value='读卡器'>读卡器</option>
					<option value='其他'>其他</option>
			</select>
			<select NAME = "type34" id="type34" size="0.5"
			      <?php 
					  if($arrn["type2"]=="图书软件") echo "hidden";
					  if($arrn["type2"]=="文体乐器") echo "hidden";
					  if($arrn["type2"]=="数码产品") echo "hidden";
					  if($arrn["type2"]=="生活用品") echo "";
					  if($arrn["type2"]=="服装箱包") echo "hidden";
					  if($arrn["type2"]=="二手手机") echo "hidden";
					?>>
					<option value='电脑桌椅'>电脑桌椅</option>
					<option value='毛绒娃娃'>毛绒娃娃</option>
					<option value='玩具'>玩具</option>
					<option value='台灯'>台灯</option>
					<option value='日用品'>日用品</option>
					<option value='其他'>其他</option>
			</select>
			<select NAME = "type35" id="type35" size="0.5"
			     <?php 
					  if($arrn["type2"]=="图书软件") echo "hidden";
					  if($arrn["type2"]=="文体乐器") echo "hidden";
					  if($arrn["type2"]=="数码产品") echo "hidden";
					  if($arrn["type2"]=="生活用品") echo "hidden";
					  if($arrn["type2"]=="服装箱包") echo "";
					  if($arrn["type2"]=="二手手机") echo "hidden";
					?>>
					<option value='箱包'>箱包</option>
					<option value='男鞋女鞋'>男鞋女鞋</option>
					<option value='裤子'>裤子</option>
					<option value='衣服'>衣服</option>
					<option value='连衣裙'>连衣裙</option>
					<option value='饰品'>饰品</option>
					<option value='化妆品'>化妆品</option>
					<option value='其他'>其他</option>
			</select>
			<select NAME = "type36" id="type36" size="0.5"
			     <?php 
					  if($arrn["type2"]=="图书软件") echo "hidden";
					  if($arrn["type2"]=="文体乐器") echo "hidden";
					  if($arrn["type2"]=="数码产品") echo "hidden";
					  if($arrn["type2"]=="生活用品") echo "hidden";
					  if($arrn["type2"]=="服装箱包") echo "hidden";
					  if($arrn["type2"]=="二手手机") echo "";
					?>>
					<option value='小米'>小米</option>
					<option value='苹果'>苹果</option>
					<option value='三星'>三星</option>
					<option value='HTC'>HTC</option>
					<option value='索尼'>索尼</option>
					<option value='其他'>其他</option>
			</select>
				
				
			
		
			 
			 <script type="text/javascript">
             window.onload=function(){
             document.getElementById("type1").value='<?php  echo $arrn["type1"]; ?>';
	         document.getElementById("type2").value='<?php  echo $arrn["type2"]; ?>';
			 document.getElementById("type31").value='<?php  echo $arrn["type3"]; ?>';
			 document.getElementById("type32").value='<?php  echo $arrn["type3"]; ?>';
			 document.getElementById("type33").value='<?php  echo $arrn["type3"]; ?>';
			 document.getElementById("type34").value='<?php  echo $arrn["type3"]; ?>';
			 document.getElementById("type35").value='<?php  echo $arrn["type3"]; ?>';
			 document.getElementById("type36").value='<?php  echo $arrn["type3"]; ?>';
			 
             }
        </script></td>
    <td width="56" rowspan="2" align="center" scope="col">详细描述</td>
    <td colspan="3" rowspan="2" scope="col">&nbsp;<textarea name="content1" id="content1"  cols="40" rows="2"></textarea>
	<script type="text/javascript">
			 document.getElementById("content1").value='<?php  echo $arrn["content"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td height="51" align="center" scope="row">发布标题</td>
    <td>&nbsp;      <input type="text" name="title" size="35" id="title" value="<?php  echo $arrn["title"]; ?>" /></td>
  </tr>
  <tr>
    <td rowspan="3" align="center" scope="row">物品图片</td>
    <td height="50">&nbsp;<input type="file" name="photo1" id="photo1" size="20" /></td>
    <td colspan="4" rowspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td height="50">&nbsp;<input type="file" name="photo2" id="photo2" size="20" /></td>
  </tr>
  <tr>
    <td height="50">&nbsp;<input type="file" name="photo3" id="photo3" size="20" /></td>
  </tr>
  <div id="apDiv1"><div id="apDiv2"><div id="apDiv3"><img id="img3" src="<?php echo '../../../'.$arrn[photo3];?>" width="145" height="105" /> </div>
<img id="img2" src="<?php echo '../../../'.$arrn[photo2];?>" width="145" height="105" /> </div>
<img  id="img1" src="<?php echo '../../../'.$arrn[photo1];?>" width="145" height="105" /> </div>

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
    <td align="center" scope="row">所在地点</td>
    <td>&nbsp;
      <select  name="place" id="place">
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
    </select><script type="text/javascript">
			 document.getElementById("place").value='<?php  echo $arrn["place"]; ?>';
        </script></td>
    <td align="center">新旧程度</td>
<td colspan="3">&nbsp;
  <select  name="condition" id="condition">
		     
			   <option value="全新">全新</option>
			  <option value="九成新以上">九成新以上</option>
			  <option value="八成新以上">八成新以上</option>
			  <option value="八成新以下">八成新以下</option>	
        </select>
		<script type="text/javascript">
			 document.getElementById("condition").value='<?php  echo $arrn["condition"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td align="center" scope="row">交易价格</td>
    <td>&nbsp;
    <input type="text" name="price" id="price" value="<?php echo $arrn['price']?>"/>元</td>
    <td align="center">交易方式</td>
    <td colspan="3">&nbsp;
      <select name="pattern">
             <option value="线上交易">线上交易</option>
             <option value="见面交易">见面交易</option>
             <option value="线上见面均可">线上见面均可</option>
        </select><script type="text/javascript">
			 document.getElementById("pattern").value='<?php  echo $arrn["pattern"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td align="center" scope="row">联系方式</td>
    <td colspan="5">&nbsp;手机号
             <input type="text" name="tel" id="tel" value="<?php echo $arrn['tel'];?>"/>
             &nbsp;&nbsp;&nbsp;
             姓名
             <input type="text" name="name" id="name" value="<?php echo $arrn['name'];?>"/></td>
  </tr>
  <tr>
    <td colspan="6" align="center" scope="row"><input name="id" type="hidden" id="id" value="<?php echo $arrn["id"];?>"/><input type="submit" name="submit"  value="更改信息"  />
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="返回" onclick="window.location.href='pub.php'" /></td>
    </tr>
</table>
</form>
</div>

</body>
</html>
