<html>
<head>
<title>News</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="userpage.css" media="all">
</head>

<BODY link="black" alink="black" vlink="black">
<div class="container">
  <?php include ("header.php");?>
  <?php include ("menumenu.php");?>

  <div id="content">
  <div id="userblock">
    <div id="main">
       <div id="userimg"><img src="user.png" style="width: 100%; height: 100%;"></div>
    </div>
    <div id="userset">
      <fieldset>
      <h5>Name</h5>
        <input type="text" name="name" checked="checked"></input>
        <h5>Surname</h5>
        <input type="text" name="surname" checked="checked"></input>
        <h5>login</h5>
        <input type="text" name="login" checked="checked"></input>
        <h5>password</h5>
        <input type="text" name="password" checked="checked"></input>
      <p><button class="button">Save</button></p>
      </fieldset>
    </div>
    

  </div>
  </div>

    
  

</div>
<?php include ("footer.php");?>

</BODY>

</html>