<?php
@session_start();
include "Connection/connect.php";

 if (!$_SESSION['name'])
 {
echo "<script language=javascript>alert('���ȵ�¼');location.href='goods/login.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѷ���</title>
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
	font-family: "��Բ";
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
 <script language="JavaScript" type="text/javascript">
		   function checkinput(){
		                   
							 if(form1.title.value==""){
							  alert("�����뷢�����⣡");
							  form1.title.select();
							  return false;
							}
							if(form1.content1.value==""){
							  alert("�������ϸ������");
							  form1.content1.select();
							  return false;
							}
							if(form1.price.value==""){
							  alert("�����뽻�׼۸�");
							  form1.price.select();
							  return false;
							}
							if(form1.tel.value==""){
							  alert("��������ϵ�绰��");
							  form1.tel.select();
							  return false;
							}
							if(form1.name.value==""){
							  alert("��������ϵ�ˣ�");
							  form1.name.select();
							  return false;
							}
							return true;
					}
		 </script>
     <form action="goods/chuli/fabu.php" method="post"  enctype="multipart/form-data" name="form1" id="form1" onsubmit="return checkinput()" >
       <table width="1100" height="256" border="0" align="center" cellpadding="10" cellspacing="0">
         <tr>
           <th width="92" scope="col" class="zt1" align="center">��������</th>
           <td colspan="4" class="zt2" scope="col">
             <select  name="type1">
               <option value="" selected="selected">��ѡ��</option>
               <option value="��������">��������</option>
               <option value="������">������</option>
             </select>
              
             <select id="select2" name="type2">
               <option   value="" selected="selected">��ѡ��</option>
               <option id="1" value="ͼ�����">ͼ�����</option>
               <option id="2" value="��������">��������</option>
               <option id="3" value="�����Ʒ">�����Ʒ</option>
               <option id="4" value="������Ʒ">������Ʒ</option>
               <option id="5" value="��װ���">��װ���</option>
               <option id="6" value="�����ֻ�">�����ֻ�</option>
             </select>
             <span id='two' name="type3"></span>
            
           </td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">��������</th>
           <td colspan="4" class="zt2"><input type="text" name="title" size="60" id="title" /></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">��ϸ����</th>
           <td colspan="4" class="zt2"><textarea name="content1" id="content1"  cols="45" rows="5"></textarea></td>
         </tr>
         <tr>
           <th rowspan="3" class="zt1" scope="row" align="center">��ƷͼƬ</th>
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
           <th class="zt1" scope="row" align="center">���ڵص�</th>
           <td colspan="4" class="zt2"><select  name="place">
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
	       </select></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">�¾ɳ̶�</th>
           <td colspan="4" class="zt2">
             <p>
               <label>
                 <input type="radio" name="condition" value="ȫ��" id="RadioGroup1" />
                 ȫ��</label>
               <label>
                 <input type="radio" name="condition" value="�ų�������" id="RadioGroup2" checked />
                 �ų�������</label>
               
               <label>
                 <input type="radio" name="condition" value="�˳�������" id="RadioGroup3" />
                 �˳�������</label>
                <label>
                 <input type="radio" name="condition" value="�˳�������" id="RadioGroup4" />
                 �˳�������</label>
               
           </p></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">���׼۸�</th>
           <td colspan="4" class="zt2"><input type="text" name="price" id="price" />
             Ԫ</td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">���׷�ʽ</th>
           <td colspan="4" class="zt2"><select name="pattern">
             <option value="���Ͻ���">���Ͻ���</option>
             <option value="���潻��">���潻��</option>
             <option value="���ϼ������">���ϼ������</option>
           </select></td>
         </tr>
         <tr>
           <th class="zt1" scope="row" align="center">��ϵ��ʽ</th>
           <td colspan="4" class="zt2">�ֻ���
             <input type="text" name="tel" id="tel" />
             &nbsp;&nbsp;&nbsp;
             ����
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
            <input type="submit" name="submit"  value="������Ϣ"  />
                                      &nbsp;&nbsp;
              <input name="reset" type="reset"  value="������д" />
            </div></td>
                              
        </tr>
       </table>
    </form>

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
    <td align="center" valign="middle">Copyright &copy; J-steven | guoshijie_hi@yeah.net</td>
  </tr>
  </table>

  </footer>

</div>

</body>
</html>
