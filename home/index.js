/*slide start*/
var currentSlide = 0;
var slides = document.querySelectorAll(".slide");

slides.forEach(function(elm,i){
  console.log(i);
  elm.style.transform = `translateX(${i * 100}%)`;
});

setInterval(function(){
  nextSlide();
}, 4000);

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