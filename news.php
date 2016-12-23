<html>
<head>
<title>News</title>
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
        <td class="columntitle">title</td>
        <th>category</th>
        <th>article</th>
      </tr>
      
      <?php 
$sdd_db_host='localhost'; 
$sdd_db_name='test'; 
@mysql_connect($sdd_db_host); 
@mysql_select_db($sdd_db_name); 
$result=mysql_query('SELECT * FROM news'); 
while ($row=mysql_fetch_array($result)) 
{ // выводим данные 
echo "<tr>\n\t<td align=center>".$row["id"]."</td>"."\n\t"."<td align=center>"."".$row["title"]."</td>"."\n\t"."<td align=center>"."".$row["category"]."</td>"."\n\t"."<td align=center>"."".$row["article"]."</td>"."\n"."</tr>"."\n"; 
} 
//mysql_close(); 
?> 

    </table>



   <!-- <div id="news1">
      <div id="img1"><img src="lviv.jpg" style="width: 100%; height: 100%"></div>
    </div>-->
  <!--  <table>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Category</th>
        
      </tr>
      <tr>
        <th>
        <div id="imgblock">
          <img src="zav.png" style="width: 50%; height: 100%">
        </div>
        </th>
        <th>Зміни в наборі документів</th>
        <th><a href="menu.html">ZAV</a></th>
      </tr>
      <tr>
        <th><img src="lviv.jpg" style="width: 100% height:100%"></th>
        <th>Як німець волонтерив у Львові</th>
        <th><a href="menu.html">EVS</a></th>
      </tr>

    </table>
    -->

  </div>

    
  

</div>
<?php include ("footer.php");?>

</BODY>

</html>