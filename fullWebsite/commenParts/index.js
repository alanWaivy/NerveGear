document.querySelectorAll('.navTrigger').forEach(function(navTrigger) {
    navTrigger.addEventListener('click', function() {
        this.classList.toggle('active');
        console.log("Clicked menu");
        var mainListDiv = document.getElementById('mainListDiv');
        mainListDiv.classList.toggle('show_list');
        //mainListDiv.style.display = 'block'; // Ensure the div is visible
    });
});
