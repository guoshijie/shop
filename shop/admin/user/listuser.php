<?php
 include"../safe/safe.php"
?>
<html>
<body><center>
<h1>����Ա�б�</h1>
<table width="360" height="125" border="2" align="center">
  <tr align="center">
    <th width="120" scope="col">�û�</th>
    <th width="120" scope="col">����</th>
    
    <th width="60" scope="col">�޸�</th>
    <th width="60" scope="col">ɾ��</th>
  </tr>
  <?php
     include "../../config/db_mysql.php";
     $sql="select * from `user` where usertype=1";
     $result=mysql_query($sql);
    while($arrn=mysql_fetch_array($result))
     {
        echo "<tr  align='center'>
                <td>$arrn[username]</th>
                <td>******</td>
                
				<td><a href='upduser.php?id=$arrn[id]'>�޸�</a></td>
                <td><a href='deluser.php?id=$arrn[id]'>ɾ��</a></td>
              </tr>";  
     }
  ?>
</table>
<p>&nbsp;</p></center>
</body>
</html>