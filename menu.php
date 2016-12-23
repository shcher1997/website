<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css" media="all">
</head>

<BODY link="red" alink="red" vlink="green">
<div class="container">
  <?php include ("header.php");?>
  <?php include ("menumenu.php");?>


   <div id="slideblock">

  <div class="slideshow-container">
  <div class="mySlides fade">
    <img src="munich1.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="venezia.jpg" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="usa.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
</script>

  
<div id="videoblock">
 <iframe width="480" height="310"
src="https://www.youtube.com/embed/yII05fNPKgs">
</iframe>
</div>

  <div id="categoryBlock">
    <div id="imgcategory"><img src="zav.png" style="width: 100%; height: 100%"></div>
Die Mitarbeiterinnen und Mitarbeiter der Zentralen Auslands- und Fachvermittlung (ZAV) sind Ihre Experten für den internationalen Arbeitsmarkt und die Vermittlung spezieller Berufsgruppen.

Als Einrichtung der Bundesagentur für Arbeit beraten wir sowohl Arbeitnehmer als auch Arbeitgeber unterschiedlichster Branchen zielgruppen- und erfolgsorientiert. Ob Internationaler Personalservice, Management- oder Künstlervermittlung: Wir helfen Ihnen weiter!
 

Die ZAV unterstützt bundesweit Arbeitgeber und Arbeitnehmer bei der Stellenbesetzung bzw. der Integration in den Arbeitsmarkt. Die Agenturen für Arbeit können von diesem Service in ihrer arbeitgeber- und arbeitnehmerseitigen Vermittlungsarbeit profitieren.

 </div>
 </div>

    <div id="newsblock"></div>
    

  
</div>
<?php include ("footer.php");?>


</BODY>

</html>




<?php include ("footer.php");?>

