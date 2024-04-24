document.addEventListener('DOMContentLoaded', function() {
    const cart = document.getElementById('cart');
    const cartContainer = document.getElementById('cartContainer');

    let isCartContainerVisible = false;

    cart.addEventListener('click', function() {
        if (!isCartContainerVisible) {
            cartContainer.style.opacity = '1';
            cartContainer.style.display = 'block';
            isCartContainerVisible = true;
        } else {
            cartContainer.style.opacity = '0';
            setTimeout(() => {
                cartContainer.style.display = 'none';
            }, 300); // Delay the hiding of cartContainer after the animation completes
            isCartContainerVisible = false;
        }
    });
});


  const Profile = document.getElementById('profileContainer');
  const profileIcon = document.getElementById('profile');
  let isProfileVisible = false;

  profileIcon.addEventListener('click', function() {
        if (!isProfileVisible) {
            Profile.style.opacity = '1';
            Profile.style.display = 'block';
            isProfileVisible = true;
        } else {
            Profile.style.opacity = '0';
            setTimeout(() => {
                Profile.style.display = 'none';
            }, 300); // Delay the hiding of cartContainer after the animation completes
            isProfileVisible = false;
        }
    });


    // responsive 

    document.querySelectorAll('.navTrigger').forEach(function(navTrigger) {
    navTrigger.addEventListener('click', function() {
        this.classList.toggle('active');
        console.log("Clicked menu");
        var mainListDiv = document.getElementById('mainListDiv');
        mainListDiv.classList.toggle('show_list');
        //mainListDiv.style.display = 'block'; // Ensure the div is visible
    });
});



