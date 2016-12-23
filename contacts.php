<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Contacts</title>
<link rel="stylesheet" type="text/css" href="styleContacts.css" media="all">
</head>

<BODY link="white">
<div class="container">
  <?php include ("header.php");?>
  <?php include ("menumenu.php");?>

<div id="content">
  <div id="sidebar">
    <h3>We are on google maps</h3>
    <div id="map">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.5222906638!2d36.14574365104097!3d49.99450702760941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1478083267895" >  
     </iframe> 
     </div>
    </div>
  <div id="main">
    <div id="contact-box">
      <h3>Contact Us</h3>
      <h5>Phone</h5> 
      <p>+380953137113</p>
      <h5>Email</h5>
     <!-- <p><a href="mailto:annnuta_2011@ukr.net">annnuta_2011@ukr.net</a></p>-->
     <p>annnuta_2011@ukr.net</p>
     <h5>Address</h5>
     <p>Kharkiv, Darvina, 8</p>
    </div>
    
  </div>
  <div id="contactUs-block">
  <fieldset>
      <h5>Name</h5>
        <input type="text" name="name" checked="checked"></input>
        <h5>Email</h5>
        <input type="text" name="email" checked="checked"></input>
        <h5>Subject</h5>
        <input type="text" name="subject" checked="checked"></input>
        <h5>Message</h5>
      <textarea name="message" rows="7" cols="35"></textarea>
      <p><button class="button">Send</button></p>
      

   </fieldset>
    </div>
  </div>
</div>

<?php include ("footer.php");?>


</BODY>

</html>