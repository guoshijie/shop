<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ӭע��</title>
<link href="../files/css/shop1.css" rel="stylesheet" type="text/css" />
<link href="../files/images/favicon.ico" type="image/x-icon" rel="shortcut icon">
<script src="../files/js/jquery.min.js"></script>
<style type="text/css">
#ct{
	width: 1100px;
	height: 580px;
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

#yh {
	width: 150px;

}
#jym {
	width: 50px;
}
#question {
	width: 155px;
}

#ys01 {
	font-family: "��Բ";
	color:#000;
	font-size: 30px;
}
#zs {
	font-size: 14px;
}
#newsFocus_1{
	
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
          <td align="right" valign="top" height="30"><?php  if (!$_SESSION['name']) {echo "<a href='login.php'>��¼</a>&nbsp;<a href='register.php'>ע��</a>";} else echo $_SESSION['name']."�ѵ�¼" ?></td>
        </tr>
        <tr>
          <td align="right" height="30"><?php  if ($_SESSION['name']) echo "<a href='quit.php'>[�˳�]</a>" ?></td>
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
          <td align="center" valign="middle"><a href="../index.php">��վ��ҳ</a></td>
          <td align="center"><a href="../sale.php">������Ϣ</a></td>
          <td align="center"><a href="../buy.php">����Ϣ</a></td>
          <td align="center"><a href="../pubgoods.php">��ѷ���</a></td>
          <td align="center"><a href="../mypub.php">�ҵķ���</a></td>
          <td align="center"><a href="message.php">����ϵͳ</a></td>
        </tr>
    </table> 
  </nav>
  <div id="ct">
  <script language="JavaScript" type="text/javascript">
		   function checkinput(form){
		                    if(form.username.value==""){
							  alert("�������û�����");
							  form.username.select();
							  return(false);
							}
							 if(form.userpwd1.value==""){
							  alert("�������¼���룡");
							  form.userpwd1.select();
							  return(false);
							}
							 if(form.userpwd2.value==""){
							  alert("������ȷ�����룡");
							  form.userpwd2.select();
							  return(false);
							}
							 if(form.userpwd1.value!=form.userpwd2.value){
							  alert("��¼������ȷ�����벻ͬ��");
							  form.userpwd1.select();
							  return(false);
							}
							if(form.userpwd1.value.length<3){
							  alert("��¼����Ӧ����3λ��");
							  form.userpwd1.select();
							  return(false);
							}
			
			if(form.sex.value=="")
	          {
	             alert("�������Ա�!");
	             form.sex.select();
	             return(false);
	            }
		     if(form.email.value=="")
	          {
	             alert("������E-mail��ַ!");
	             form.email.select();
	             return(false);
	            }
	        var i=form.email.value.indexOf("@");
	        var j=form.email.value.indexOf(".");  //�ж������ʽ�Ƿ����"@"��"."
	       if((i<0)||(i-j>0)||(j<0))
	        {
              alert("��������ȷ��E-mail��ַ!");
	          form.email.select();
	          return(false);
	        }
		   
		    if(form.tel.value==""){
			   alert("����д��ϵ�绰��");
			   form.tel.select();
			   return(false);
			 }
		  
		   
		     
		   
		    if(form.question.value==""){
			
			   alert("��ѡ���һ��������⣡");
			   form.question.focus();
			   return(false);
			}
			if(form.answer.value==""){
			
			   alert("����д�һ�����𰸣�");
			   form.answer.select();
			   return(false);
			}
		    if(form.jym.value==""){
			   alert("����д��֤�룡");
			   form.jym.select();
			   return(false);
			
			}
		    
			
		    return(true);
		   }
		 
		 </script>
		 <script language="JavaScript" type="text/javascript">
                 function checkname(x)
                     {
                       window.open("chuli/chkname.php?username="+x,"newframe","top=250,left=450,width=180,height=120,menubar=no,toobar=no,location=no,scrollbars=no,resizeable=no");
                     }
         </script>
		
    <form action="chuli/zhuce.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return checkinput(this)">
      <table width="1100" height="550" border="0" align="center" cellpadding="0" cellspacing="0">
        
        <tr>
          <th colspan="3" scope="row" id="ys01" >��&nbsp;ӭ&nbsp;ע&nbsp;��</th>
          <td rowspan="12" width="0" align="center" valign="top">
                 <img src="../files/images/1.jpg"/>
          </td>
        </tr>
        <tr>
          <th width="127" scope="row">�û���</th>
          <td width="373" colspan="2" scope="row">
            <input type="text" name="username" id="yh" />
          <input name="button2" type="button" onclick="checkname(form1.username.value) " value="���" /></td>
        </tr>
        <tr>
          <th scope="row">��������</th>
          <td colspan="2"><input type="password" name="userpwd1" id="yh" /></td>
        </tr>
        <tr>
          <th scope="row">�ظ�����</th>
          <td colspan="2"><input type="password" name="userpwd2" id="yh" /></td>
        </tr>
        <tr>
          <th scope="row">�Ա�</th>
          <td colspan="2"><input type="radio" name="sex" value="��" id="RadioGroup1_0" checked/>
                ��
              
              
                <input type="radio" name="sex" value="Ů" id="RadioGroup1_1" />
                Ů
            
          </td>
        </tr>
        <tr>
          <th scope="row">����</th>
          <td colspan="2"><input type="text" name="email" id="yh" /></td>
        </tr>
        <tr>
          <th scope="row">�ֻ�</th>
          <td colspan="2"><input type="text" name="tel" id="yh" /></td>
        </tr>
        
		<tr>
          <th scope="row">ͷ��</th>
		  
          <td width="176">
		  <input type="file" name="photo" id="photo"  size="13"/></td>
          <td width="" height="120" align="center"><img src="" id="img0" width="160"height="120"></td>
		  <script>	
	
	$("#photo").change(function(){
		var objUrl = getObjectURL(this.files[0]) ;
		console.log("objUrl = "+objUrl) ;
		if (objUrl) {
			$("#img0").attr("src", objUrl) ;
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
        </tr>
        <tr>
          <th scope="row">���뱣��</th>
          <td colspan="2"><select name="question"  id="question">
                                          <option value="" selected="selected">��ѡ��һ������</option>
                                          <option value="�ҾͶ��ĵ�һ��ѧУ�����ƣ�">�ҾͶ��ĵ�һ��ѧУ�����ƣ�</option>
                                          <option  value="����ϲ���������˶���ʲô��">����ϲ���������˶���ʲô��</option>
                                          <option value="����ϲ�����˶�Ա��˭��">����ϲ�����˶�Ա��˭��</option>
                                          <option value="����ϲ������Ʒ�����ƣ�">����ϲ������Ʒ�����ƣ�</option>
                                          <option value="����ϲ���ĸ�����">����ϲ���ĸ�����</option>
                                          <option value="����ϲ����ʳ�">����ϲ����ʳ�</option>
                                          <option value="������˵����֣�">������˵����֣�</option>
                                          <option value="����ĵ�Ӱ��">����ĵ�Ӱ��</option>
                                          <option value="����������գ�">����������գ�</option>
                                          <option value="�ҵĳ������ڣ�">�ҵĳ������ڣ�</option>
                                      </select></td>
        </tr>
        <tr>
          <th scope="row">���Ĵ�</th>
          <td colspan="2"><input type="text" name="answer" id="yh" /></td>
        </tr>
        <tr>
          <th scope="row">У����</th>
          <td colspan="2"><input type="text" name="jym" id="jym" />
           <?php
							   $num=intval(mt_rand(1000,9999));
							   
							   for($i=0;$i<4;$i++)
							   {
							    echo "<img src=../files/images/code/".substr(strval($num),$i,1).".gif>";
							   }
					    ?></td>
        </tr>
        <tr>
          <td colspan="3" scope="row"><div align="center">
              <input type="hidden" value="<?php echo $num;?>" name="num" />
              
 
              <input type="submit" name="submit"  value="�ύע����Ϣ" />
                                      &nbsp;&nbsp;
              <input name="reset" type="reset"  value="������дע����Ϣ" />
            </div></td>
                              
        </tr>
      </table>
    </form>
    <form id="form2" name="form2" method="post" action="">
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
    <td align="center" valign="center">Copyright &copy; J-steven | guoshijie_hi@yeah.net</td>
  </tr>
  </table>

  </footer>

</div>

</body>
</html>
