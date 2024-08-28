// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Hover Effect on Services
const services = document.querySelectorAll('.service');

services.forEach(service => {
    service.addEventListener('mouseenter', () => {
        service.style.transform = 'scale(1.05)';
        service.style.transition = 'transform 0.3s ease-in-out';
    });

    service.addEventListener('mouseleave', () => {
        service.style.transform = 'scale(1)';
    });
});
