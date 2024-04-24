	let slideIndex = 0;

	function showSlides() {
		const slides1 = document.querySelectorAll('.slide1');
		if (slideIndex >= slides1.length) {
			slideIndex = 0;
		} else if (slideIndex < 0) {
			slideIndex = slides.length - 1;
		}
		const offset = -slideIndex * 105;
		document.querySelector('.slide-container').style.transform = `translateX(${offset}%)`;
	}

	function moveSlide(n) {
		slideIndex += n;
		showSlides();
	}

	showSlides();
