const backToTopBtn = document.getElementById('back-to-top');

window.onscroll = function() {
    if (window.pageYOffset >= 100) {
        backToTopBtn.style.display = 'block';
    } else {
        backToTopBtn.style.display = 'none';
    }
};

function backToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}