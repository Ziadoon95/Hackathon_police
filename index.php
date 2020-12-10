<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>
<body>

<div class="w3-container" id="w3-container">
  <div class="div-header">
     <div class="div-header-grid">
        <img src="./imgs/frame.png" alt="" class="logo"  style="display:inline-block;grid-area: logo;">
        <p class="principal-pogami">Pogami</p>
        <input type="button" name="connexion" id="login" class="buttons connexion" value="Log in">
        <input type="button" name="inscription" id="signup" class="buttons inscription" value="Sign up">
    </div>
  </div>
 
 
  
<div class="w3-content w3-display-container" style="max-width:1000px;margin: 0 auto;">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">
  <img class="mySlides" src="./imgs/img.png" style="width:100%">

  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%;">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<div>
  <div class="div-seprator"><p>What is <span class="pogami">POGAMI</span>? 
  <p><span class="pogami">POGAMI</span> is a way...</p>
</p></div>
    <div class="content-first_section">
      <div class="section-grid">
          <p class="section-title">For those already in function, a way ... </p>
          <p class="section-desc">To preserve, to improve, to assimilate. 
          But also to share his knowledge,
          whatever its physical or theorical</p>
          <div class="section-calltoaction">
            <span>I’ m ready !</span> <img src="./imgs/fleche.png" alt="">
          </div>
      </div>
    </div>
    <div class="div-seprator div-seprator-sec">
      <p>A continuous formation by the </p>
      <p>means of gamification </p> 
    </div>

    <div class="content-second_section">

      <div class="section-grid">
          <p class="section-title">For those already in function, a way ... </p>
          <p class="section-desc">To preserve, to improve, to assimilate. 
          But also to share his knowledge,
          whatever its physical or theorical</p>
        <div class="section-calltoaction">
        <span>I’ m ready !</span> <img src="./imgs/fleche.png" alt="">
      </div>
    </div>
    

    </div>
   <div class="div-seprator div-seprator-thrd">
     <div class="sep-third-grid">
         <div class="sep-third-titre">
           <p>So, ready to challenge yourself</p>
           <p>and your colleagues ?</p>
         </div>
       
      <input id="button-join-us" type="button" value="Join us">
     </div>
    
    </div>
  </div>
  
  

</div>

<footer>
  <p>@copyright 2020</p>
</footer>
</div>


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
