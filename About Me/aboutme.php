<!DOCTYPE html>
        <style>
        <?php include 'About Me/style.css'; ?>
        </style>
        
<body>        
<div class="slideshow-container">
    

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img1.jpg" style="width:500px;border-radius:5%">
      <div class="text">Pictures of Me</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img2.jpg" style="width:500px;border-radius:5%">
      <div class="text">Pictures of Me</div>
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img3.jpg" style="width:500px;border-radius:5%">
      <div class="text">Pictures of Me</div>
    </div>
  
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>

    <div class="desc fade">Hello! I am Clarence Louise V. Portuguez. Born in San Carlos City, Negros Occidental on the 27th of May 2002. I am currently studying BS Information Technology in University of St. La Salle.
        As of now, I'm still honing my skills to become a pro web developer. I learn new things everyday and I use it in my work. 
        Currently simple HTML, JS, CSS and PHP is what I can do (see "My Works"). I created this portfolio website to show my progress of how I'm doing with my studies.
        I had fun doing this project and I hope I kept you interested. Thank you for your support!  

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
  let next = document.getElementsByClassName("next");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < next.length; i++) {
    next[i].className = next[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  next[slideIndex-1].className += " active";
}
      </script>
      
  </body>
</html>