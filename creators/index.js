
document.getElementById('q01').addEventListener('click', function() {
	var div2 = document.getElementById('a01');
	var icon = document.getElementById('icon01');
	if (div2.style.display === 'none') {
		div2.style.display = 'block';
		div2.style.animation = 'scale-up-ver-top 0.4s ease-in-out both';
		icon.style.transform = 'rotate(45deg)';
	} else {
		div2.style.animation = 'scale-up-ver-top-reverse 0.4s ease-in-out both';
			icon.style.transform = 'rotate(0deg)';
		setTimeout(() => {
			div2.style.display = 'none';
		}, 200); // Delay the hiding after animation
  	}
});

document.getElementById('q02').addEventListener('click', function() {
  var div2 = document.getElementById('a02');
  var icon = document.getElementById('icon02');
  if (div2.style.display === 'none') {
    div2.style.display = 'block';
    div2.style.animation = 'scale-up-ver-top 0.4s ease-in-out both';
    icon.style.transform = 'rotate(45deg)';
    
    
  } else {
    div2.style.animation = 'scale-up-ver-top-reverse 0.4s ease-in-out both';
        icon.style.transform = 'rotate(0deg)';

    setTimeout(() => {
      div2.style.display = 'none';
    }, 200); // Delay the hiding after animation
  }
});

document.getElementById('q03').addEventListener('click', function() {
  var div2 = document.getElementById('a03');
  var icon = document.getElementById('icon03');
  if (div2.style.display === 'none') {
    div2.style.display = 'block';
    div2.style.animation = 'scale-up-ver-top 0.4s ease-in-out both';
    icon.style.transform = 'rotate(45deg)';
    
    
  } else {
    div2.style.animation = 'scale-up-ver-top-reverse 0.4s ease-in-out both';
        icon.style.transform = 'rotate(0deg)';

    setTimeout(() => {
      div2.style.display = 'none';
    }, 200); // Delay the hiding after animation
  }
});


document.getElementById('q04').addEventListener('click', function() {
  var div2 = document.getElementById('a04');
  var icon = document.getElementById('icon04');
  if (div2.style.display === 'none') {
    div2.style.display = 'block';
    div2.style.animation = 'scale-up-ver-top 0.4s ease-in-out both';
    icon.style.transform = 'rotate(45deg)';
    
    
  } else {
    div2.style.animation = 'scale-up-ver-top-reverse 0.4s ease-in-out both';
        icon.style.transform = 'rotate(0deg)';

    setTimeout(() => {
      div2.style.display = 'none';
    }, 200); // Delay the hiding after animation
  }
});



