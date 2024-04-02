/*slide start*/
var currentSlide = 0;
var slides = document.querySelectorAll(".slide");

slides.forEach(function(elm,i){
  console.log(i);
  elm.style.transform = `translateX(${i * 100}%)`;
});

setInterval(function(){
  nextSlide();
}, 6000);

function nextSlide(){
  
  if(currentSlide > slides.length-2)
      currentSlide = 0;
  else
    currentSlide++;
  
 slides.forEach(function(elm,i){
   console.log(currentSlide, i);
  elm.style.transform = `translateX(${100 * (i-currentSlide)}%)`;
}); 
}
/*slide end*/

let slideIndex = 0;
        
          function showSlides() {
            const slides1 = document.querySelectorAll('.slide1');
            if (slideIndex >= slides1.length) {
              slideIndex = 0;
            } else if (slideIndex < 0) {
              slideIndex = slides.length - 1;
            }
            const offset = -slideIndex * 100;
            document.querySelector('.slide-container').style.transform = `translateX(${offset}%)`;
          }
        
          function moveSlide(n) {
            slideIndex += n;
            showSlides();
          }
        
          showSlides();


        /*QA */

        document.getElementById('q01').addEventListener('click', function() {
          var div2 = document.getElementById('a01');
          var icon = document.getElementById('icon01');
          var q = document.getElementById('q1');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        document.getElementById('q02').addEventListener('click', function() {
          var div2 = document.getElementById('a02');
          var icon = document.getElementById('icon02');
          var q = document.getElementById('q2');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        document.getElementById('q03').addEventListener('click', function() {
          var div2 = document.getElementById('a03');
          var icon = document.getElementById('icon03');
          var q = document.getElementById('q3');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        
        document.getElementById('q04').addEventListener('click', function() {
          var div2 = document.getElementById('a04');
          var icon = document.getElementById('icon04');
          var q = document.getElementById('q4');
          if (div2.style.display == 'none') {
            div2.style.display = 'block';
            div2.style.animation = 'scale-up-ver-top 0.4s linear';
            icon.style.transform = 'rotate(45deg)';
            q.style.height='194px';
          } else {
            q.style.height='52px';
            div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {div2.style.display = 'none'}, 400); // Delay the hiding after animation
          }
        });
        
        
        
        