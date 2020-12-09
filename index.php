<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>

<div class="w3-container">
  <h1>Pogami</h1>
    <input type="button" name="inscription" id="" class="buttons inscription" value="Inscription">
    <input type="button" name="connexion" id="" class="buttons connexion" value="Connexion">
</div>

<div class="w3-content w3-display-container" style="max-width:1000px">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<div>
  <div><p>So, ready to challenge yourself ?</p></div>
  <div class="content-first_section">
    <p>For those already in function, a way ... </p>
    <p>To preserve, to improve, to assimilate. 
    But also to share his knowledge,
    whatever its physical or theorical</p>
  </div>

  <div class="content-second_section">
    <p>For those who have the vocation to become, a way...</p>
    <p>To progress, to stay motivated, but also to meet and inherit
      knowledges from skilled policeman </p>
  </div>
  

</div>

<footer>
  <p>@copyright 2020</p>
</footer>



<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html> 
