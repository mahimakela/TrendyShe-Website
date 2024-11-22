document.addEventListener("DOMContentLoaded", function () {
    // Toggle the navbar menu visibility on mobile
    document.querySelector(".menu-btn").addEventListener("click", function () {
        document.querySelector(".navbar .menu").classList.toggle("active");
        document.querySelector(".menu-btn i").classList.toggle("active");
    });

    
});

