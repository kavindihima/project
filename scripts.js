// This function toggles the menu visibility on small screens
function toggleMenu() {
    const navLinks = document.querySelector('.nav-links');
    navLinks.classList.toggle('active');
}

// Instead of using the inline `onclick`, we add the event listener here
const burger = document.querySelector('.burger');
burger.addEventListener('click', toggleMenu);
