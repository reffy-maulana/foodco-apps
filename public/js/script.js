document.addEventListener('DOMContentLoaded', function() {
    // Temukan tombol "Jump to Top"
    var btnScrollToTop = document.querySelector('#btnScrollToTop');

    // Tambahkan event listener untuk mengatur perilaku scroll
    btnScrollToTop.addEventListener('click', function() {
        // Gulir ke atas halaman dengan animasi
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});