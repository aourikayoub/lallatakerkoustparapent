
// Initialize Lucide Icons
lucide.createIcons();

// Search Bar Toggle Logic
const searchIcon = document.getElementById('search-icon');
const searchBar = document.getElementById('search-bar');

searchIcon.addEventListener('click', () => {
    searchBar.classList.toggle('active');
    if (searchBar.classList.contains('active')) {
        searchBar.focus();
    }
});

// Close search if clicking outside
window.addEventListener('click', (e) => {
    if (!e.target.closest('.search-container')) {
        searchBar.classList.remove('active');
    }
});

// Button Click feedback
const bookBtn = document.querySelector('.btn-orange');
bookBtn.addEventListener('click', () => {
    bookBtn.innerText = "Checking Slots...";
    setTimeout(() => {
        bookBtn.innerHTML = 'Book Now <i data-lucide="arrow-right"></i>';
        lucide.createIcons();
    }, 2000);
});
//menu bar
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");

menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
});
