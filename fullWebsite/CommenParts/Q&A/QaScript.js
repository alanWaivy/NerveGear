	document.getElementById('q01').addEventListener('click', function() {
		var div2 = document.getElementById('a01');
		var icon = document.getElementById('icon01');
		var q = document.getElementById('q1');
		if (div2.style.display == 'none') {
			div2.style.display = 'block';
			div2.style.animation = 'scale-up-ver-top 0.4s linear';
			icon.style.transform = 'rotate(45deg)';
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
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
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
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
			q.style.height = '245px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
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
			q.style.height = '194px';
		} else {
			q.style.height = '52px';
			div2.style.animation = 'scale-up-ver-top-reverse 0.4s linear';
			icon.style.transform = 'rotate(0deg)';
			setTimeout(() => {
				div2.style.display = 'none'
			}, 400); // Delay the hiding after animation
		}
	});
