<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />

<title>�ޱ����ĵ�</title>
<script type="text/javascript" src="../../../files/js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="../../../files/js/tc.js"></script>
<script src="../../../files/js/jquery.min.js"></script>
<style type="text/css">
#table table tr td {
	font-family: "����";
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
    <td width="56" height="47" align="center" scope="col">��������</td>
    <td width="323" scope="col">&nbsp;
      <select  name="type1"id="type1" size="0.5">
               <option value="">��ѡ��</option>
               <option value="��������">��������</option>
               <option value="������">������</option>
        </select>
  <SCRIPT LANGUAGE="JAVASCRIPT">
<!--
function checkCountry()
{
	    if (document.form1.type2.value == "ͼ�����" )
		{
		document.form1.type31.hidden  = false;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
	    else if(document.form1.type2.value == "��������")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = false;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
	    else if(document.form1.type2.value == "�����Ʒ")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = false;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
		else if( document.form1.type2.value == "������Ʒ")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = false;
		document.form1.type35.hidden  = true;
		document.form1.type36.hidden  = true;
		}
		
		else if(document.form1.type2.value == "��װ���")
		{
		document.form1.type31.hidden  = true;
		document.form1.type32.hidden  = true;
		document.form1.type33.hidden  = true;
		document.form1.type34.hidden  = true;
		document.form1.type35.hidden  = false;
		document.form1.type36.hidden  = true;
		}
		
		else if(document.form1.type2.value == "�����ֻ�")
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
					<option value='ͼ�����'>ͼ�����</option>
					<option value='��������'>��������</option>
					<option value='�����Ʒ'>�����Ʒ</option>
					<option value='������Ʒ'>������Ʒ</option>
					<option value='��װ���'>��װ���</option>
					<option value='�����ֻ�'>�����ֻ�</option>


				</select>
			<select NAME = "type31" id="type31" size="0.5"
			        <?php 
					  if($arrn["type2"]=="ͼ�����") echo "";
					  if($arrn["type2"]=="��������") echo "hidden";
					  if($arrn["type2"]=="�����Ʒ") echo "hidden";
					  if($arrn["type2"]=="������Ʒ") echo "hidden";
					  if($arrn["type2"]=="��װ���") echo "hidden";
					  if($arrn["type2"]=="�����ֻ�") echo "hidden";
					?>>
					<option value='ͼ����ǲ'>ͼ����ǲ</option>
					<option value='�̲�����'>�̲�����</option>
					<option value='��ϰ����'>��ϰ����</option>
					<option value='��Ϸװ��'>��Ϸװ��</option>
					<option value='����'>����</option>
				</select>
			<select NAME = "type32" id="type32" size="0.5"
			      <?php 
					  if($arrn["type2"]=="ͼ�����") echo "hidden";
					  if($arrn["type2"]=="��������") echo "";
					  if($arrn["type2"]=="�����Ʒ") echo "hidden";
					  if($arrn["type2"]=="������Ʒ") echo "hidden";
					  if($arrn["type2"]=="��װ���") echo "hidden";
					  if($arrn["type2"]=="�����ֻ�") echo "hidden";
					?>>
					<option value='ѧϰ��Ʒ'>ѧϰ��Ʒ</option>
					<option value='������Ʒ'>������Ʒ</option>
					<option value='�˶�װ��'>�˶�װ��</option>
					<option value='��������'>��������</option>
					<option value='��������'>��������</option>
					<option value='����'>����</option>
			</select>
			<select NAME = "type33" id="type33" size="0.5"
			       <?php 
					  if($arrn["type2"]=="ͼ�����") echo "hidden";
					  if($arrn["type2"]=="��������") echo "hidden";
					  if($arrn["type2"]=="�����Ʒ") echo "";
					  if($arrn["type2"]=="������Ʒ") echo "hidden";
					  if($arrn["type2"]=="��װ���") echo "hidden";
					  if($arrn["type2"]=="�����ֻ�") echo "hidden";
					?>>
					<option value='�������'>�������</option>
					<option value='U��'>U��</option>
					<option value='MP3 MP4'>MP3 MP4</option>
					<option value='�ƶ�Ӳ��'>�ƶ�Ӳ��</option>
					<option value='���ܳ�'>���ܳ�</option>
					<option value='������'>������</option>
					<option value='����'>����</option>
			</select>
			<select NAME = "type34" id="type34" size="0.5"
			      <?php 
					  if($arrn["type2"]=="ͼ�����") echo "hidden";
					  if($arrn["type2"]=="��������") echo "hidden";
					  if($arrn["type2"]=="�����Ʒ") echo "hidden";
					  if($arrn["type2"]=="������Ʒ") echo "";
					  if($arrn["type2"]=="��װ���") echo "hidden";
					  if($arrn["type2"]=="�����ֻ�") echo "hidden";
					?>>
					<option value='��������'>��������</option>
					<option value='ë������'>ë������</option>
					<option value='���'>���</option>
					<option value='̨��'>̨��</option>
					<option value='����Ʒ'>����Ʒ</option>
					<option value='����'>����</option>
			</select>
			<select NAME = "type35" id="type35" size="0.5"
			     <?php 
					  if($arrn["type2"]=="ͼ�����") echo "hidden";
					  if($arrn["type2"]=="��������") echo "hidden";
					  if($arrn["type2"]=="�����Ʒ") echo "hidden";
					  if($arrn["type2"]=="������Ʒ") echo "hidden";
					  if($arrn["type2"]=="��װ���") echo "";
					  if($arrn["type2"]=="�����ֻ�") echo "hidden";
					?>>
					<option value='���'>���</option>
					<option value='��ЬŮЬ'>��ЬŮЬ</option>
					<option value='����'>����</option>
					<option value='�·�'>�·�</option>
					<option value='����ȹ'>����ȹ</option>
					<option value='��Ʒ'>��Ʒ</option>
					<option value='��ױƷ'>��ױƷ</option>
					<option value='����'>����</option>
			</select>
			<select NAME = "type36" id="type36" size="0.5"
			     <?php 
					  if($arrn["type2"]=="ͼ�����") echo "hidden";
					  if($arrn["type2"]=="��������") echo "hidden";
					  if($arrn["type2"]=="�����Ʒ") echo "hidden";
					  if($arrn["type2"]=="������Ʒ") echo "hidden";
					  if($arrn["type2"]=="��װ���") echo "hidden";
					  if($arrn["type2"]=="�����ֻ�") echo "";
					?>>
					<option value='С��'>С��</option>
					<option value='ƻ��'>ƻ��</option>
					<option value='����'>����</option>
					<option value='HTC'>HTC</option>
					<option value='����'>����</option>
					<option value='����'>����</option>
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
    <td width="56" rowspan="2" align="center" scope="col">��ϸ����</td>
    <td colspan="3" rowspan="2" scope="col">&nbsp;<textarea name="content1" id="content1"  cols="40" rows="2"></textarea>
	<script type="text/javascript">
			 document.getElementById("content1").value='<?php  echo $arrn["content"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td height="51" align="center" scope="row">��������</td>
    <td>&nbsp;      <input type="text" name="title" size="35" id="title" value="<?php  echo $arrn["title"]; ?>" /></td>
  </tr>
  <tr>
    <td rowspan="3" align="center" scope="row">��ƷͼƬ</td>
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
    <td align="center" scope="row">���ڵص�</td>
    <td>&nbsp;
      <select  name="place" id="place">
		      <option value="" selected="selected">��ѡ�����</option>
			   <option value="ӭ����">ӭ����</option>
			  <option value="�ӻ�����">�ӻ�����</option>
			  <option value="�������">�������</option>
			  <option value="���ƺ��">���ƺ��</option>
			  <option value="��Դ��">��Դ��</option>
			  <option value="С����">С����</option>
			  <option value="������">������</option>
			  <option value="������">������</option>
			  <option value="¦����">¦����</option>
			  <option value="�Ž���">�Ž���</option>
    </select><script type="text/javascript">
			 document.getElementById("place").value='<?php  echo $arrn["place"]; ?>';
        </script></td>
    <td align="center">�¾ɳ̶�</td>
<td colspan="3">&nbsp;
  <select  name="condition" id="condition">
		     
			   <option value="ȫ��">ȫ��</option>
			  <option value="�ų�������">�ų�������</option>
			  <option value="�˳�������">�˳�������</option>
			  <option value="�˳�������">�˳�������</option>	
        </select>
		<script type="text/javascript">
			 document.getElementById("condition").value='<?php  echo $arrn["condition"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td align="center" scope="row">���׼۸�</td>
    <td>&nbsp;
    <input type="text" name="price" id="price" value="<?php echo $arrn['price']?>"/>Ԫ</td>
    <td align="center">���׷�ʽ</td>
    <td colspan="3">&nbsp;
      <select name="pattern">
             <option value="���Ͻ���">���Ͻ���</option>
             <option value="���潻��">���潻��</option>
             <option value="���ϼ������">���ϼ������</option>
        </select><script type="text/javascript">
			 document.getElementById("pattern").value='<?php  echo $arrn["pattern"]; ?>';
        </script></td>
  </tr>
  <tr>
    <td align="center" scope="row">��ϵ��ʽ</td>
    <td colspan="5">&nbsp;�ֻ���
             <input type="text" name="tel" id="tel" value="<?php echo $arrn['tel'];?>"/>
             &nbsp;&nbsp;&nbsp;
             ����
             <input type="text" name="name" id="name" value="<?php echo $arrn['name'];?>"/></td>
  </tr>
  <tr>
    <td colspan="6" align="center" scope="row"><input name="id" type="hidden" id="id" value="<?php echo $arrn["id"];?>"/><input type="submit" name="submit"  value="������Ϣ"  />
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input name="reset" type="reset"  value="����" onclick="window.location.href='pub.php'" /></td>
    </tr>
</table>
</form>
</div>

</body>
</html>
