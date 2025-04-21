document.addEventListener("DOMContentLoaded", function () {
    // Navbar Toggler (Hamburger Menu)
    const navbarToggler = document.getElementById("navbarToggler");
    const navbarMenu = document.getElementById("navbarMenu");

    navbarToggler.addEventListener("click", function () {
        navbarMenu.classList.toggle("hidden");
    });

    // Dropdown Menu
    const dropdownButton = document.getElementById("dropdownButton");
    const dropdownMenu = document.getElementById("dropdownMenu");

    dropdownButton.addEventListener("click", function (event) {
        dropdownMenu.classList.toggle("hidden");
        event.stopPropagation(); // Mencegah event bubbling ke document
    });

    // Tutup dropdown jika klik di luar area dropdown
    document.addEventListener("click", function (event) {
        if (
            !dropdownButton.contains(event.target) &&
            !dropdownMenu.contains(event.target)
        ) {
            dropdownMenu.classList.add("hidden");
        }
    });
});
