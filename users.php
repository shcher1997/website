<html>
<head>
<title>Users</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="news.css" media="all">
</head>

<BODY link="black" alink="black" vlink="black">
<div class="container">
  <?php include ("header.php");?>
  <?php include ("menumenu.php");?>

  <div id="content">
  <table>
      <tr>
        <th>id</th>
        <th>login</th>
        <th>password</th>
        <th>name</th>
      </tr>
      
      <?php 
$sdd_db_host='localhost'; 
$sdd_db_name='test'; 
@mysql_connect($sdd_db_host); 
@mysql_select_db($sdd_db_name); 
$result=mysql_query('SELECT * FROM user'); 
while ($row=mysql_fetch_array($result)) 
{ // выводим данные 
echo "<tr>\n\t<td align=center>".$row["id"]."</td>"."\n\t"."<td align=center>"."".$row["login"]."</td>"."\n\t"."<td align=center>"."".$row["password"]."</td>"."\n\t"."<td align=center>"."".$row["name"]."</td>"."\n"."</tr>"."\n"; 
} 
//mysql_close(); 
?> 

    </table>
   
    

  </div>

    
  

</div>
<?php include ("footer.php");?>

</BODY>

</html>