<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
<?php include 'style.css'; ?>
</style>
<body>

<div class="fade">
<h2 style="text-align:center;margin-top:100px;color:white;position:absolute;margin-left:39%">Here are some of my latest works!</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 5 Learning Task 2</div>
    <a href="LT2/index.html" target="_blank">Click here to open<br>Learning Task 2</a>
    <img src="My Works/L2.jpg" style="width:50%;margin-left:25%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5 Learning Task 3</div>
    <a href="LT3/Top 10.html" target="_blank">Click here to open<br>Learning Task 3</a>
    <img src="My Works/L3.jpg" style="width:50%;margin-left:25%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5 Learning Task 4</div>
    <a href="LT4/index.html" target="_blank">Click here to open<br>Learning Task 4</a>
    <img src="My Works/L4.jpg" style="width:50%;margin-left:25%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 5 Learning Task 5</div>
    <a href="LT5/index.html" target="_blank">Click here to open<br>Learning Task 5</a>
    <img src="My Works/L5.jpg" style="width:50%;margin-left:25%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 5 Midterm Exam</div>
    <a href="CLE1MT/index.html" target="_blank">Click here to open<br>Midterm Exam</a>
    <img src="My Works/Midterm.jpg" style="width:50%;margin-left:25%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="My Works/L2.jpg" style="width:100%;margin-left:25%" onclick="currentSlide(1)" alt="Learning Task 2">
    </div>
    <div class="column">
      <img class="demo cursor" src="My Works/L3.jpg" style="width:100%;margin-left:25%" onclick="currentSlide(2)" alt="Learning Task 3">
    </div>
    <div class="column">
      <img class="demo cursor" src="My Works/L4.jpg" style="width:100%;margin-left:25%" onclick="currentSlide(3)" alt="Learning Task 4">
    </div>
    <div class="column">
      <img class="demo cursor" src="My Works/L5.jpg" style="width:100%;margin-left:25%" onclick="currentSlide(4)" alt="Learning Task 5">
    </div>
    <div class="column">
      <img class="demo cursor" src="My Works/Midterm.jpg" style="width:100%;margin-left:25%" onclick="currentSlide(5)" alt="Midterm Exam">
    </div>    
  </div>
</div>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>