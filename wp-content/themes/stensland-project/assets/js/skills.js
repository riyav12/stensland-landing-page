document.addEventListener("DOMContentLoaded", function() {
    const logos = document.querySelector('.skills-logos');
    if (!logos) return;

    
    logos.innerHTML += logos.innerHTML;

    const totalWidth = logos.scrollWidth / 2;
    const speed = 100;  
    const duration = totalWidth / speed;

    logos.style.animation = `scroll-logos ${duration}s linear infinite`;
});
