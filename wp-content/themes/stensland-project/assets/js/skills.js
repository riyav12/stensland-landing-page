document.addEventListener("DOMContentLoaded", function() {
    const logos = document.querySelector('.skills-logos');
    if (!logos) return;

    // Duplicate logos for seamless infinite scroll
    logos.innerHTML += logos.innerHTML;

    const totalWidth = logos.scrollWidth / 2;
    const speed = 100; // pixels per second
    const duration = totalWidth / speed;

    logos.style.animation = `scroll-logos ${duration}s linear infinite`;
});
